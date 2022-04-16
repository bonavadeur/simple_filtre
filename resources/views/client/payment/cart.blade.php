@extends('client.layout_payment')

@section('content')
    <section id="cart_items">
        <div class="container" style="position:relative;">
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image"></td>
                            <td class="description">Tên mặt hàng</td>
                            <td class="price">Đơn giá</td>
                            <td class="quantity">Số lượng</td>
                            <td class="total">Thành tiền</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $key => $value)
                            <tr>
                                <td class="cart_product" style="width:150px;">
                                    <img width="100px" src="{{ '../upload/product/' . $value->image }}" alt="">
                                </td>
                                <td class="cart_description">
                                    <h5>{{ $value->name }}</h5>
                                </td>
                                <td class="cart_price">
                                    <h5>{{ number_format($value->price) }},000đ</h5>
                                </td>
                                <td class="cart_quantity">
                                    <p>{{ $value->quantity }}</p>
                                </td>
                                <td class="cart_total">
                                    <h4 class="cart_total_price">{{ number_format($value->total) }},000đ</h4>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete"
                                        href="{{ URL::to('delete_from_cart/' . $value->bill_id) }}"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="color:rgb(192, 7, 7);font-weight:bold;font-size:25px;right:0px;position:absolute;right:10px;">Tổng
                thanh toán:
                <?php
                $final = 0;
                foreach ($product as $key => $value) {
                $final += $value->total;
                }
                echo number_format($final) . ',000đ';
                ?>
            </div><br><br>
            <div style="position:relative;"><a style="position:absolute;right:20px;" class="btn btn-default check_out"
                    href="{{ URL::to('checkout') }}">Tiếp tục thanh toán</a></div>
        </div>
    </section>
    <br><br>
@endsection
