@extends('client.layout_payment')

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="review-payment">
                <h2>Thông tin đơn hàng</h2>
            </div>
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
                                    <h5 style="color:rgb(163, 22, 22);">{{ number_format($value->total) }},000đ</h5>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete"
                                        href="{{ URL::to('delete_from_cart/' . $value->bill_id) }}"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        <?php
                        $final = 0;
                        foreach ($product as $key => $value) {
                        $final += $value->total;
                        }
                        ?>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                            <td colspan="2">
                                <table class="table table-condensed total-result">
                                    <tr>
                                        <td>Tổng tiền</td>
                                        <td><?php echo number_format($final) . ',000đ'; ?>
                                        </td>
                                    </tr>
                                    <tr class="shipping-cost">
                                        <td>Phí vận chuyển</td>
                                        <td style="color:green">Free</td>
                                    </tr>
                                    <tr>
                                        <td>Số tiền cần thanh toán</td>
                                        <td style="color:red;"><span><?php echo number_format($final) .
                                                ',000đ'; ?></span></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-8 clearfix">
                        <p>Thông tin người nhận</p>
                        <div class="form-one">
                            <form>
                                <input type="text" placeholder="Tên người nhận" required>
                                <input type="text" placeholder="Địa chỉ Email*" required>
                                <input type="text" placeholder="Địa chỉ nhận hàng" required>
                                <input type="text" placeholder="Số điện thoại" required>
                            </form>
                        </div>
                    </div>
                    <div style="position:relative;"><a style="position:absolute;right:20px;"
                            class="btn btn-default check_out col-sm-3"
                            href="{{ URL::to('send_bill/' . $product[0]->order_id) }}">Xác nhận đơn hàng</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
