@extends("layouts.main")
@section('title' , 'Edit Product')
@section('name' , 'Chỉnh sửa sản phẩm')
@section('main-content')
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input value="@php if(isset($edit->name)) {
    echo  $edit->name ;
} else {
     echo  $_POST['name'] ;
}
            @endphp" name="name" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên sản phẩm ">
            <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['name']}}</p>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mô tả sản phẩm ( chi tiết )</label>
            <textarea name="detail" style="width: 200%" class="form-control" id="exampleFormControlTextarea1" rows="3">@php if(isset($edit->detail)) {
    echo  $edit->detail ;
} else {
     echo  $_POST['detail'] ;
}
                @endphp</textarea>
            <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['detail']}}</p>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputPassword1">Ảnh danh mục</label>
                <input name="image" type="file" class="form-control" id="exampleInputPassword1">
            </div>
            <br>
            @php
                if (strlen(@$edit->image) > 0) {
                    echo "<img style='width:200px' src='" . BASE_ULR .$edit->image . "' />";
                }

            @endphp
            <input type="hidden" name="image" value="{{@$edit->image}}" />
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Giá sản phẩm</label>
            <input value="@php if(isset($edit->price)) {
    echo  $edit->price ;
} else {
     echo  $_POST['price'] ;
}
            @endphp" min="0" name="price" style="" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Giá sản phẩm">
            <p style="margin-left: 10px ; margin-top: 10px ; color: red">{{@$error['price']}}</p>
        </div>


        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1" name="cate_id">

                @foreach($categories as $category)
                    @php $select = ($edit->cate_id == $category->id) ? "selected" : "" ;
                            @endphp
                    <option value="{{$category->id}}" {{@$select}}>{{$category->cate_name}}</option>
                @endforeach

            </select>
        </div>

        <button name="sub" style="margin-top: 20px" type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
@endsection
@section('appendjs')
    <script>
        CKEDITOR.replace('exampleFormControlTextarea1');
    </script>
@endsection
