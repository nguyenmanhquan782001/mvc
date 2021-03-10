<?php
 // echo trong laravel {!! $test !!}
 // {{ $test  }}
?>
@extends('layouts.main')
@section('title' , 'Danh mục')
@section('name' , 'Danh sách danh mục')
@section('main-content')
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Trạng thái</th>
        <th>Hình ảnh</th>
        <th>Số lượng sản phẩm</th>
        <th>Hành động</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($cates as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->cate_name}}</td>
            <td>{{$c->show_menu == 1 ? "Hiện" : "Ẩn"}}</td>
            <td>
                <img src="{{ BASE_ULR .$c->image}}" alt="" width="200px; ">
            </td>

            <td>{{count($c->products)}}</td>
            <td>
                <a href="{{BASE_ULR}}admin/category/edit-cate/{{$c->id}}"><i style="font-size: 25px; color: red ;  " class="fas fa-edit"></i></a>
                <a href="{{BASE_ULR}}admin/category/remove/{{$c->id}}" onclick="return confirm('Are you sure you want to delete this item?')"><i style="font-size: 25px ;margin-left: 10px; color: yellowgreen; "  class="far fa-trash-alt"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection 


   




