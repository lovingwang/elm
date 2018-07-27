    @extends('admin.layouts.default')
    @section("title","商家分类管理首页")
    @section('content')

<h1 style="color: red" class="text-center">商家分类管理</h1>
<a href="{{route('shop_category.add')}}" class=" btn btn-warning">添加</a>
   <table class="table table-bordered"  >
     <tr  style="color: deeppink;background:gainsboro">
         <th style="width: 200px">id</th>
         <th>分类名称</th>
         <th>分类图片</th>
         <th>是否上线</th>
         <th>操作</th>
     </tr>
      @foreach($shops as $shop)
       <tr  >
           <td >{{$shop->id}}</td>
           <td>{{$shop->name}}</td>
           <td> @if($shop->logo)  <img src="{{$shop->logo}}" style="width: 100px;height: 70px ">@endif</td>
           <td>{{$shop->status?'是':'否'}}</td>
           <td>
            <a class="btn btn-info" href="{{route('shop_category.edit',['id'=>$shop->id])}}">编辑</a>
               <a class="btn btn-danger" href="{{route('shop_category.del',['id'=>$shop->id])}}">删除</a>
           </td>
       </tr>
          @endforeach
   </table>
        {{$shops->links()}}

    @endsection
