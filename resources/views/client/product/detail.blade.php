@extends('client.layout_home')

@section('product')
    <section>
        <div class="product-details">
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{ '../upload/product/' . $product->image }}" alt="" />
                </div>
                {{-- <div id="similar-product" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left item-control" href="#similar-product" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right item-control" href="#similar-product" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div> --}}

            </div>
            <div class="col-sm-7">
                <div class="product-information">
                    <!--/product-information-->
                    {{-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> --}}
                    <span style="font-size:25px;font-weight:bold;">{{ $product->name }}</span>
                    <div style="color:red;font-weight:bold;font-size:30px">
                        {{ number_format($product->price_1) }},000đ</div><br>
                    <form action="{{ URL::to('add_to_cart/' . $product->product_id) }}" method="post">
                        @csrf
                        {{-- <span class="form-group">
                        Số lượng: <input type="number" class="form-control" name="price_1" id="bodyPrice1" placeholder="Standard Price">
                    </span> --}}
                        Số lượng: <input type="number" value="1" id="quantity" name="quantity"
                            max="{{ $product->quantity }}" min="1"><br><br>
                        <p><b>Thương hiệu: </b>{{ $product->brand }}</p>
                        <p><b>Tình trạng: </b>
                            <?php if ($product->quantity != 0) {
                            echo "<span style='color:green'>Còn hàng</span>
                        <p>";
                            echo '
                        <p><b>Số lượng còn trong kho: ' . $product->quantity . '</b></p>';
                        } else {
                        echo "<span style='color:red'>Hết hàng</p>";
                            } ?>
                            <button type="submit" style="margin:10px;top:10px;" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Thêm vào giỏ hàng
                            </button>
                    </form>
                    {{-- <a href=""><img src="images/product-details/share.png" class="share img-responsive"
                        alt="" /></a> --}}
                </div>
                <!--/product-information-->
            </div>
        </div>
    </section>
@endsection
