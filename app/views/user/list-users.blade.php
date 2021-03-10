 @extends("layouts.main")
 @section('title' , "Account")
 @section('name' , 'Danh sách thành viên')
 @section('main-content')
    <table class="table table-hover">
        <thead>
          <tr>
              <th>STT</th>
              <th>Tên tài khoản</th>
              <th>Role</th>
              <th>Email</th>
              <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
            @foreach(@$users as $user)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role == 1 ? "Khách hàng" : "Quản trị viên"}}</td>
                    <td>{{$user->email}}</td>
                    <td>

                        <a href="{{BASE_ULR}}admin/account/edit-acc/{{$user->id}}"><i style="font-size: 25px; color: red ;  " class="fas fa-edit"></i></a>
                    </td>
                </tr>

            @endforeach
        </tbody>

    </table>
 @endsection