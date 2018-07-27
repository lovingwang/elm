<?php

namespace App\Http\Controllers\Api;

use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mrgoon\AliSms\AliSms;

class ShopController extends Controller
{
    public  function list(Request $request){
        if($request->input('keyword')==null){
            $shops=Shop::where('status',1)->get();
        }else{
            $key=$request->input('keyword');
            $shops=Shop::where('status',1)->where('shop_name','like',"%$key%")->get();
        }

//        dd($shops);
      foreach ($shops as $shop){
          $shop->distance= rand(1000,2000);
          $shop->estimate_time=$shop->distance / 100;
      }

        return $shops;
    }
    public  function  index(Request $request){

//        $config = [
//            'access_key' => 'LTAIRa6RADNzNbVI',
//            'access_secret' => 'XoF7WTW48TO8kWgAHl4tCiGjEYy1iD',
//            'sign_name' => '王波',
//        ];
//
//        $aliSms = new AliSms();
//        $response = $aliSms->sendSms('15320239465', 'SMS_140625143', ['code'=> '123'], $config);

//    dd(11);
//        得到id
      $id=$request->input('id');
//      得到该条id信息
        $shop=Shop::findOrFail($id);
        $shop->distance= rand(1000,2000);
        $shop->estimate_time=$shop->distance / 100;
//        追加评论进去
   $shop->evaluate=[
        ["user_id"=>12344,
                "username"=>"w******k",
                "user_img"=>"http://www.homework.com/images/slider-pic4.jpeg",
                "time"=>"2017-2-22",
                "evaluate_code"=>1,
                "send_time"=>30,
                "evaluate_details"=>"不怎么好吃"],

            ["user_id"=> 12344,
                "username"=> "w******k",
                "user_img"=> "http=>//www.homework.com/images/slider-pic4.jpeg",
                "time"=> "2017-2-22",
                "evaluate_code"=> 4.5,
                "send_time"=> 30,
                "evaluate_details"=> "很好吃" ]
   ];
//得到分类

        $menu_categorys=MenuCategory::where('shop_id',$id)->get();
        foreach ($menu_categorys as $menu_category){

            $menu_category->goods_list=Menu::where('category_id',$menu_category->id)->get();
        }
//        再把这个追加到shop
        $shop->commodity=$menu_categorys;
return $shop;
    }
}
