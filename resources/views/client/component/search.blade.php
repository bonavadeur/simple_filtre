<header id="header">
    <!--header-->
    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active">Home</a></li>
                            {{-- <li class="dropdown"><a href="#">Danh mục sản phẩm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Body máy ảnh</a></li>
                                    <li><a href="product-details.html">Ống kính</a></li>
                                    <li><a href="checkout.html">Flash</a></li>
                                    <li><a href="cart.html">Tripod-Gimbal</a></li>
                                    <li><a href="login.html">Kính lọc</a></li>
                                    <li><a href="login.html">Tủ chống ẩm</a></li>
                                    <li><a href="login.html">Kính lọc</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="contact-us.html">Contact</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="wrap">
                        <form action="{{ URL::to('search') }}" autocomplete="on" method="get">
                            @csrf
                            <input id="search" name="search" type="text" placeholder="Bạn cần tìm gì?">
                            <input id="search_submit" value="Rechercher" type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header-bottom-->
</header>