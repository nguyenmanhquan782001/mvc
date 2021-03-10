@extends("layouts.main")
@section('title' , 'Đơn hàng')
@section('name' , 'Danh sách đơn hàng')
@section('main-content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center">STT</th>
            <th class="text-center">Tên khách hàng</th>
{{--            <th class="text-center">Số điện thoại</th>--}}
{{--            <th class="text-center">Email</th>--}}
            <th class="text-center">Địa chỉ</th>
            <th class="text-center">Thanh toán</th>
            <th class="text-center">Trạng thái giao hàng</th>
            <th class="text-center">Hành động</th>
        </tr>
        </thead>
        <tbody>
           @foreach($orders as $order)
          <tr>
              <td class="text-center">{{$loop->index + 1}}</td>
              <td>{{$order->customer_name}}</td>
{{--              <td>{{$order->customer_phone_number}}</td>--}}
{{--              <td>{{$order->customer_email}}</td>--}}
              <td class="text-center">{{$order->customer_address}}</td>
              <td class="text-center text-muted">
                  @if($order->payment_method==1)
                      {{'Tiền mặt'}}
                  @else
                      {{'Chuyển khoản'}}
                  @endif
              </td>
              <td class="text-center">
                @php
                        if($order->status ==0) {
    echo "Đang vận chuyển" ;
}elseif ($order->status == 1) {
    echo  "Đang đợi shipper"  ;

}
elseif ($order->status == 2) {
    echo  "Đã hủy đơn ";

}else {
    echo  "Đã giao hàng" ;
}
                        @endphp
              </td>

              <td class="text-center">
                  <a href="{{BASE_ULR . 'admin/invoices/orders-detail/' . $order->id}}">Chi tiết</a>
                  <a href="{{BASE_ULR . 'admin/invoices/delete/' . $order->id}}">Xóa</a>
                  <a href="{{BASE_ULR . 'admin/invoices/update/'.$order->id}}">Cập nhật </a>
              </td>
          </tr>
           @endforeach

        </tbody>


    </table>

@endsection
