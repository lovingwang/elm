@extends('admin.layouts.default')
@section('title','订单列表首页')
@section('content')
    <h1 style="color: red" class="text-center">订单</h1>
    <div style="float: right">
                        <form action="" class="form-inline" >
<select class="form-control" style="background: #5bc4bf" name="id">
    <option value=""> 请选择</option>
   @foreach($shops as $shop)
    <option value="{{$shop->id}}" @if ($shop->id==$id) selected @endif> {{$shop->shop_name}} </option>
       @endforeach
</select>
                            <input type="date" name="start" class="form-control" size="2" placeholder="开始日期"
                                   value="{{request()->input('start')}}"> -
                            <input type="date" name="end" class="form-control" size="2" placeholder="结束日期"
                                   value="{{request()->input('end')}}">
                            <input type="submit" value="搜索" class="btn btn-success">
                        </form>

    </div>


                <!-- /.box-header -->
                <div  class="test-actual">

                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>日期</th>
                            <th>销售数量</th>
                            <th>总收入</th>
                        </tr>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->day}}</td>
                                <td>{{$order->count}}</td>
                                <td>{{$order->money}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>








@stop
