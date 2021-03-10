@extends("layouts.main")
@section('title' , 'Chi tiết')
@section('name' , 'Chi tiết đơn hàng')
@section('main-content')
    <table class=" table table-hover">
        <thead>
        <tr>
            <th class="text-center">STT</th>
            <th class="text-center">Tên sản phẩm</th> 
            <th class = "text-center">Hình ảnh</th>
            <th class="text-center">Số lượng</th>
            <th class="text-center">Thành tiền sản phẩm</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $order)
            <tr>
                <td class="text-center text-muted">{{$loop->index + 1}}</td>
                <td class="text-center text-muted">{{$order->products['name']}}</td> 
                <td class="text-center text-muted"><img src="{{BASE_ULR . $order->products->image}}" alt=""width="150px"></td>
                <td class="text-center text-muted">{{$order->quantity}}</td>
                <td class="text-center text-muted">{{number_format($order->quantity * $order->products->price) . " " . "$"  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <span id="total-price">Tổng tiền:{{ number_format($price->total_price) ." " . "$" }}</span>
@endsection
