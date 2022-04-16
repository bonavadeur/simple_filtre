@extends('client.layout_payment')

@section('content')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4>Nốt bước này nữa thôi</h4>
                            <p>Hãy kiểm tra tin nhắn được gửi về hòm thư của bạn, nếu chưa thấy, hãy lặp lại quá trình đăng
                                kí và đảm bảo rằng bạn đã nhập email hợp lệ</p>
                            <p>Vui lòng không đóng trình duyệt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Nhập mã xác thực</h3>
                        <h6>Mã xác thực là 1 số có 6 chữ số được gửi vào hòm thư của bạn</h6>
                        <?php
                        $message = session()->get('message');
                        if ($message) {
                        echo '<div style="color:red;text-align:center;font-weight:bold;">' . $message . '</div>';
                        session()->put('message', null);
                        }
                        ?>
                        <form class="row login_form" action="{{ URL::to('/registerpost-final') }}" id="register_form"
                            method="post">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="token" placeholder="Mã xác thực"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mã xác thực'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-register w-100">Gia nhập Toulons
                                    République</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
