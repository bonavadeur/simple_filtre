@extends('admin.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Thêm sản phẩm mới</h1>
    <div class="">
        <div class="card shadow mb-4">
            <div class="card-body row">
                <div class="col-3">
                    <div><img width="180px"></div>
                    <br>
                    <div class="input-group">
                        <input type="file" name="add_image" id="add_image" onchange="loadFile(event)" required>
                    </div>
                </div>
                <div class="col-9">
                    {{-- <form> --}}
                        {{-- <div class="form-group row">
                            <label for="id" class="col-auto col-form-label">ID</label>
                            <div class="col-1">
                                <input type="text" readonly class="form-control-plaintext" id="id">
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="add_name" class="col-auto col-form-label">Tên sản phẩm</label>
                            <div class="col">
                                <input type="text" class="form-control" id="add_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col row">
                                <label for="add_price_1" class="col-auto col-form-label">Giá gốc</label>
                                <span class="col">
                                    <input type="number" class="form-control" id="add_price_1" required>
                                </span>
                            </div>
                            <div class="col row">
                                <label for="add_price_2" class="col-auto col-form-label">Giá khuyến mãi</label>
                                <span class="col">
                                    <input type="number" class="form-control" id="add_price_2">
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="add_description" class="col-auto col-form-label">Mô tả</label>
                            <div class="col">
                                <textarea type="text" class="form-control" id="add_description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="add_category" class="col-auto col-form-label">Phân loại</label>
                            <span class="col-4">
                                <select type="select" class="form-control" id="add_category" required>
                                    <option selected disabled hidden>--- Chọn loại sản phẩm ---</option>
                                </select>
                            </span>
                        </div>
                        {{-- <div class="form-group row">
                            <div class="col row">
                                <label for="update_brand" class="col-auto col-form-label">Thương hiệu</label>
                                <span class="col">
                                    <input type="text" class="form-control" id="update_brand">
                                </span>
                            </div>
                        </div> --}}
                        <label class="col-auto col-form-label">THÔNG SỐ PHÂN LOẠI</label>
                        <div class="form-group" id="add_specs">
                            {{-- <div class="col row">
                                <label for="add_brand" class="col-auto col-form-label">Thuong hieu</label>
                                <div class="col">
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="add_brand" value="Canon">
                                        <label class="form-check-label">Canon</label>
                                    </div>
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="add_brand" value="Canon">
                                        <label class="form-check-label">Nikon</label>
                                    </div>
                                    <div class="col form-check">
                                        <input class="form-check-input" type="radio" name="add_brand" value="Canon">
                                        <label class="form-check-label">Sony</label>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <button class="btn btn-primary" id="add_item_btn" data-toggle="modal" data-target="#add-success">Thêm sản phẩm</button>

                        <div class="modal fade" id="add-success" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productDetailHeader">Thông báo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h1 class="h5 mb-2 text-gray-800">Thêm mặt hàng thành công</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
                            <div id="liveToast" class="toast" role="alert" style="width:300px;">
                                <div class="toast-header">
                                    <img src="/resources/admin/redstar.png" class="rounded mr-2" width="20px">
                                    <strong class="mr-auto">Magasin de Toulons</strong>
                                    <small>1 giây trước</small>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body">
                                    Thêm sản phẩm thành công
                                </div>
                            </div>
                        </div> --}}
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

@section('customcss')
@endsection

@section('customjs')
    <script type="text/javascript" src="resources/js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="resources/js/admin/price-range.js"></script>
    <script type="text/javascript" src="resources/js/admin/add_item.js"></script>
    <script>
        var loadFile = function(event) {
            var image = $("#add_image").parent().parent().find("img");
            image.attr("src", URL.createObjectURL(event.target.files[0]));
        };
        // $('.toast').toast('dispose');
        // $("#add_item_btn").click(function() {
        //     console.log(111);
            
        // })
    </script>
@endsection