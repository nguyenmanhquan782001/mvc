@extends('layouts.main')
@section('title' , 'Danh mục')
@section('name' , 'Tạo mới danh mục')
@section('main-content')

    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input value="{{@$_POST['cate_name']}}" name="cate_name" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục">
            <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['cate_name']}}</p>
            </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mô tả danh mục</label>

            <textarea name="desc" style="width: 200%" class="form-control" id="exampleFormControlTextarea1" rows="3">{{@$_POST['desc']}}</textarea>
            <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['desc']}}</p>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Hình ảnh </label>
            <input name="image" style="width: 100%" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục">
        </div>
        <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['image']}}</p>

        <div class="form-check">
            <input name="show_menu" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label  class="form-check-label" for="exampleCheck1">Hiển thị ở menu</label>
        </div>

        <button name="sub" style="margin-top: 20px" type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
@section('appendjs')
    <script>
        CKEDITOR.replace('exampleFormControlTextarea1');
    </script>
@endsection

