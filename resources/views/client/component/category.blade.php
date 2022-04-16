<div class="left-sidebar">
    <h2>Danh mục sản phẩm</h2>
    <div class="panel-group category-products" id="accordian">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="{{ URL::to('/') }}">
                        Tất cả sản phẩm
                    </a>
                </h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="{{ URL::to('show?category=body') }}">
                        Body máy ảnh
                    </a>
                    <a data-toggle="collapse" href="#body">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    </a>
                </h4>
            </div>
            <div id="body" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        @foreach ($count['body'] as $key => $val)
                            <li style="margin-bottom:10px"><a
                                    href="{{ URL::to('show?category=body&brand[]=' . $key) }}"
                                    style="font-size:14px;"><span
                                        class="pull-right">({{ $val }})</span>{{ $key }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="{{ URL::to('show?category=lens') }}">
                        Ống kính
                    </a>
                    <a data-toggle="collapse" href="#lens">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    </a>
                </h4>
            </div>
            <div id="lens" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        @foreach ($count['lens'] as $key => $val)
                            <li style="margin-bottom:10px"><a
                                    href="{{ URL::to('show?category=lens&brand[]=' . $key) }}"
                                    style="font-size:14px;"><span
                                        class="pull-right">({{ $val }})</span>{{ $key }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="{{ URL::to('show?category=flash') }}">
                        Đèn Flash
                    </a>
                    <a data-toggle="collapse" href="#flash">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    </a>
                </h4>
            </div>
            <div id="flash" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        @foreach ($count['flash'] as $key => $val)
                            <li style="margin-bottom:10px"><a
                                    href="{{ URL::to('show?category=body&brand[]=' . $key) }}"
                                    style="font-size:14px;"><span
                                        class="pull-right">({{ $val }})</span>{{ $key }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/category-products-->

	{{-- <div class="filtre">
        <!--brands_products-->
        <h2>Bộ lọc sản phẩm</h2>
		<h4>Thương hiệu</h4>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault">
			  Default checkbox
			</label>
		</div>
    </div> --}}

    <div class="brands_products">
        <!--brands_products-->
        <h2>Thương hiệu</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                @foreach ($count['brand'] as $key => $val)
                    <li style="margin-bottom:10px"><a href="{{ URL::to('show?brand[]=' . $key) }}"
                            style="font-size:14px;"><span
                                class="pull-right">({{ $val }})</span>{{ $key }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <!--/brands_products-->

    {{-- <div class="price-range">
        <!--price-range-->
        <h2>Price Range</h2>
        <div class="well text-center">
            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div> --}}

</div>
