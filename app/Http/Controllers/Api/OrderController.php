<?php

namespace App\Http\Controllers\Api;

use App\Models\Address;
use App\Models\Cate;
use App\Models\Member;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderGoods;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function adds(Request $request)
    {
//       找到地址是不是正确
        $address = Address::find($request->input('address_id'));

//得到rder数据表中需要的
        $data['user_id'] = $request->input('user_id');
//继续到shop_id
        $cates = Cate::where('user_id', $request->input('user_id'))->get();
// 随便得到在此的goods_id
        $goods_id = $cates[0]->goods_id;
//然后通过menu中的id找到shop——id
        $shop_id = Menu::where('id', $goods_id)->first()->shop_id;
        $data['shop_id'] = $shop_id;
//     得到订单号
        $data['sn'] = date("ymdHis") . rand(1000, 9999);
//       然后的到数据表中的省。市。县等信息
        $data['province'] = $address->provence;
        $data['city'] = $address->city;
        $data['county'] = $address->area;
        $data['address'] = $address->detail_address;
        $data['tel'] = $address->tel;
        $data['name'] = $address->name;
//       得到goods_price
        $data['total'] = 0;
        foreach ($cates as $key => $value) {
//           循环menu中的价格
            $price = Menu::where('id', $value->goods_id)->first()->goods_price;
            $amount = $value->amount;
            $data['total'] = $price * $amount + $data['total'];
        }
        $data['status'] = 0;
//   dd($data);
//       写入数据库
        $order = Order::create($data);

//       循环订单中的信息

        foreach ($cates as $k => $v) {
//           由于没有那个数量，就不用去减去
            $menu1 = Menu::where('id', $v->goods_id)->first();
            //      直接构造数据,
            $dataGoods['order_id'] = $order->id;
            $dataGoods['goods_id'] = $v->goods_id;
            $dataGoods['amount'] = $v->amount;
            $dataGoods['goods_name'] = $menu1->goods_name;
            $dataGoods['goods_img'] = $menu1->goods_img;
            $dataGoods['goods_price'] = $menu1->goods_price;
            OrderGoods::create($dataGoods);
        }

//返回
        return [
            'status' => 'true',
            'message' => '生成订单成功',
            'order_id' => $order->id,
        ];

    }

    public function info(Request $request)
    {
//     dd( $request->all()) ;

        $data['id'] = $request->post('id');
//dd($data['id']);
//得到id对应的时刻
        $order = Order::find($request->input('id'));
        $data['order_code'] = $order->sn;
        $data['order_birth_time'] = (string)$order->created_at;
//dd($order->created_at);
        $data['order_status'] = "代付款";
        $data['shop_id'] = $order->shop_id;
//    通过shop_id找到shop——name。img
        $id = $order->shop_id;

        $shop = Shop::find($id);
        $data['shop_name'] = $shop->shop_name;
//dd($data['shop_name']);
        $data['shop_img'] = $shop->shop_img;
//定义一个空数组用来存goods-list
//    $goodsList=[];
        $ordergoods = OrderGoods::where('order_id', $request->input('id'))->get();
//        foreach ($ordergoods as $ordergood) {
//
//            $goodslist['goods_id'] = $ordergood->goods_id;
//            $goodslist['goods_name'] = $ordergood->goods_name;
//            $goodslist['goods_img'] = $ordergood->goods_img;
//            $goodslist['amount'] = $ordergood->amount;
//            $goodslist['goods_price'] = $ordergood->goods_price;
//            $goodsList[] = $goodslist;
//        }

//        $data['goods_list'] = $goodsList;
        $data['goods_list']=$ordergoods ;
//        dd($data['goods_list']);
        $data['order_price'] = $order->total;
        $data['order_address'] = $order->province . $order->city . $order->county . $order->address;

        return
            $data;

    }

    public function pay(Request $request)
    {
//得到此订单的所有金钱
        $order = Order::find($request->input('id'));
        $money = $order->total;
        $user_id = $order->user_id;
//  dd($money);
        $member = Member::find($user_id);

        if ($member->money < $money) {
            return [
                'status' => 'false',
                "message" => "余额不足"];

        } else {
            $member->money = $member->money - $money;
            if ($member->save()) {
                //      并改变里面的状态
                $order->status = 1;
                $order->save();
                return [
                    'status' => 'true',
                    "message" => "支付成功"
                ];
            };
        }

    }
public  function  odlist(Request $request){
//        得到当前账号下所有的订单
$orders=Order::where('user_id',$request->input('user_id'))->get();
foreach ($orders as $order){
//创造接口需要的数据
    $order['id']=(string)$order->id;
    $order['order_code']=$order->sn;
    $order['order_birth_time']=(string)$order->created_at;
    $order['order_status']='已完成';
    $order['shop_id']=(string)$order->shop_id;
    $shop=Shop::find($order->shop_id);
    $order['shop_name']=$shop->shop_name;
    $order['shop_img']=$shop->shop_img;

//$=[];
    $ordergoods = OrderGoods::where('order_id', $order->id)->get();
    $order['goods_list']=$ordergoods;
//    foreach ($ordergoods as $ordergood) {
//
//        $goodslist['goods_id'] = $ordergood->goods_id;
//        $goodslist['goods_name'] = $ordergood->goods_name;
//        $goodslist['goods_img'] = $ordergood->goods_img;
//        $goodslist['amount'] = $ordergood->amount;
//        $goodslist['goods_price'] = $ordergood->goods_price;
//        $goodsList[] = $goodslist;
//
//    }
    $order['order_price']=$order->total;
    $order['order_address'] = $order->province . $order->city . $order->county . $order->address;


//    dd($data);

}
    return $orders;

}

}
