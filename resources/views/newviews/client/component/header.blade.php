<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-auto ms-3 mt-1">
                    <div class="contactinfo">
                        <ul class="nav navbar-pills">
                            <li class="me-3"><a><i class="fa fa-phone"></i> 0858596196</a></li>
                            <li><a><i class="fa fa-envelope"></i> daodaihiep22ussr@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-pills">
                            <?php if (session()->get('user_id')) {
                            echo '<li style="margin-top:9px;">Xin chào ' . session()->get('user_name') . ' </li>';
                            } ?>
                            <li><a href="https://www.facebook.com/daohiep.cccp"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/daohiep_22/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.flickr.com/photos/186493712@N05/"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCRH8iP9oeB8fSc4-SdB4IyA"><i class="fa fa-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row pt-0 pb-0">
                <div class="col-12 col-md-4 row justify-content-center">
                    <div class="col-auto logo">
                        <a href="/"><img src="image/toulonslogo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-12 col-md-8 row justify-content-end">
                    <div class="col-auto shop-menu pull-right row align-items-center">
                        <ul class="col-auto nav navbar-pills">
                            {{-- <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li> --}}
                            <li><a <?php if ($_SERVER['REQUEST_URI']=='/bill' ) { echo 'class="active"' ;
                                    } ?> href="{{ URL::to('bill') }}"><i class="fa fa-crosshairs"></i>
                                    Đơn hàng</a></li>
                            <li><a <?php if ($_SERVER['REQUEST_URI']=='/cart' ) { echo 'class="active"' ;
                                    } ?> href="{{ URL::to('cart') }}"><i
                                        class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <?php if (session()->get('user_id')) {
                            echo '<li><a href=' . URL::to(' userlogout')
                                    . '><i class="fa fa-sign-out"></i> Đăng xuất</a></li>' ; } else {
                                    echo '<li><a href=' . URL::to('login')
                                    . '><i class="fa fa-sign-in"></i> Đăng nhập</a></li>' ; } ?> <li><a
                                        <?php if ($_SERVER['REQUEST_URI']=='/register' ) {
                                        echo 'class="active"' ; } ?> href="{{ URL::to('register') }}"><i
                                            class="fa fa-lock"></i> Đăng kí</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->
</header>
