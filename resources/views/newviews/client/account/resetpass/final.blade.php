@extends('client.layout_payment')

@section('content')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4>Nốt bước này nữa thôi</h4>
                            <p>Nhớ kĩ mật khẩu nhé</p>
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
                        <form class="row login_form" action="{{ URL::to('/resetpost-final') }}" id="register_form"
                            method="post">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Mật khẩu"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="button button-register w-100">Đặt lại mật
                                    khẩu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
