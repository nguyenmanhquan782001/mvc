@extends('layouts.main')
@section('title' , 'Cập nhật trạng thái')
@section("name" , "Chỉnh sửa nhân sự")
@section('main-content')
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Họ và tên</label>
            <input value="{{$edit->name}}" name="name" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input value="{{$edit->email}}" name="email" style="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục" disabled>
        </div>
        <label for="exampleFormControlTextarea1">Phân quyền người sử dụng :</label>
        <div class="radio">

            <label><input value="1" type="radio" name="role" @php if(@$edit->role == 1) {echo "checked" ; }    @endphp   >Khách hàng</label>
        </div>
        <div class="radio">
            <label><input value="200" type="radio" name="role"  @php if(@$edit->role == 200) {echo "checked" ; }    @endphp >Quản trị viên</label>
        </div>


        <button name="edit-acc" style="margin-top: 20px" type="submit" class="btn btn-primary">Chỉnh sửa</button>

    </form>

@endsection
