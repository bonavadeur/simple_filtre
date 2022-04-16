@extends('client.layout_payment')

@section('content')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4>Quên mật khẩu?</h4>
                            <p>Đừng lo! Để tôi giúp bạn đặt mật khẩu mới nhé!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Đặt lại mật khẩu</h3>
                        <?php
                        $message = session()->get('message');
                        if ($message) {
                        echo '<div style="color:red;text-align:center;font-weight:bold;">' . $message . '</div>';
                        session()->put('message', null);
                        }
                        ?>
                        <form class="row login_form" action="{{ URL::to('resetpost-email') }}" method="post"
                            id="contactForm">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="email" placeholder="Địa chỉ Gmail"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-login w-100">Tiếp theo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
