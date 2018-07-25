@extends('admin.layouts.default')
@section("title","首页")
@section("content")

    <h1 style="color: red" class="text-center">商家管理</h1>
    <table class="table table-bordered">
    <tr><th>id</th><th>商家昵称</th><th>商家邮箱</th><th>操作</th></tr>

@foreach($users as $user)
            <tr><td>{{$user->id}}</td><td>{{$user->name}}</td><td>{{$user->email}}</td><td>
            <a  class="btn btn-warning"href="{{route('user.edit',$user)}}">编辑</a>
            <a  class="btn btn-danger"href="{{route('user.del',$user)}}">删除</a>
                    <a  class="btn btn-danger"href="{{route('user.reset',$user)}}">重置</a>

                </td></tr>
@endforeach
</table>
    {{$users->links()}}
@stop

