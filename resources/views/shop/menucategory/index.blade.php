@extends('shop.layouts.default')
@section("title","首页")
@section("content")
    <a  class="btn btn-warning"href="{{route('menu_categories.add')}}">添加</a>
<table class="table table-hover">

    <tr>
        <th>id</th>
        <th>菜品名字</th>
        <th>菜品编号</th>
        <th>所属商家</th>
        <th>描述</th>
        <th>是否默认类</th>
        <th>操作</th>
    </tr>

        @foreach($menucategorys as $menucategory)
        <tr>
        <td>{{$menucategory->id}}</td>
        <td>{{$menucategory->name}}</td>
        <td>{{$menucategory->type_accumulation}}</td>
        <td>{{$menucategory->shop->shop_name}}</td>
        <td>{{$menucategory->description}}</td>
        <td>{{$menucategory->is_selected}}</td>
           <td> <a  class="btn btn-warning"href="{{route('menu_categories.edit',$menucategory)}}">编辑</a>
            <a  class="btn btn-danger"href="{{route('menu_categories.del',$menucategory)}}">删除</a></td>

    </tr>

    @endforeach
</table>

@stop

