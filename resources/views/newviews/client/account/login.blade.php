@extends('client.layout_payment')

@section('content')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4>Tạo tài khoản Toulons Compte</h4>
                            <p>Chỉ với một tài khoản duy nhất để bạn khám phá thêm những sản phẩm tiếp theo của Toulons
                                République</p>
                            <a class="button button-account" href="{{ URL::to('register') }}">Gia nhập Toulons
                                République</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Đăng nhập</h3>
                        <?php
                        $message = session()->get('message');
                        if ($message) {
                        echo '<div style="color:red;text-align:center;font-weight:bold;">' . $message . '</div>';
                        session()->put('message', null);
                        }
                        ?>
                        <form class="row login_form" action="{{ URL::to('signin') }}" method="post" id="contactForm">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="user_email"
                                    placeholder="Địa chỉ Gmail" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'gmail'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="name" name="user_password"
                                    placeholder="Mật khẩu" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Mật khẩu'">
                            </div>
                            {{-- <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Keep me logged in</label>
                            </div>
                        </div> --}}
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-login w-100">Đăng nhập</button>
                                <a href="{{ URL::to('forgot-password') }}">Quên mật khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
