
@extends('layouts.main')
@php ob_start() @endphp
@section('title' , 'Product')
@section('name' , 'Danh sách sản phẩm')
@section('main-content')
<table class="table table-hover">
    <thead>
    <tr>
<th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Tên danh mục</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
            <td>{{$offset + $loop->iteration}}</td>
          <td>{{$product->name}}</td>
          <td><img src="{{ BASE_ULR .$product->image}}" alt="" width="150px; hieght= auto ; "> </td>
          <td>{{ number_format($product->price) . " ".  "$"}}</td>
          <td>{{$product->category->cate_name}}</td>
          <td>
              <a href="{{BASE_ULR}}admin/product/edit-product/{{$product->id}}"><i style="font-size: 25px; color: red ;  " class="fas fa-edit"></i></a>
              <a href="{{BASE_ULR}}admin/product/remove-product/{{$product->id}}" onclick="return confirm('Are you sure you want to delete this item?')"><i style="font-size: 25px ;margin-left: 10px; color: yellowgreen; "  class="far fa-trash-alt"></i></a>
          </td>
      </tr>
    @endforeach
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">

        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        @for($i = 1 ; $i <= $totalPage ; $i++)
        <li class="page-item"><a class="page-link" href="{{BASE_ULR . "admin/product?keyword=$keyword&page=$i" }}">{{$i}}</a></li>
        @endfor
        <li class="page-item"><a class="page-link" href="#">Next</a></li>

    </ul>
</nav>
@endsection

