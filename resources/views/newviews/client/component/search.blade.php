<header id="header">
    <!--header-->
    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <ul class="nav nav-pills">
                        <li><a href="/" class="active">Home</a></li>
                    </ul>
                </div>
                <div class="col-3">
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