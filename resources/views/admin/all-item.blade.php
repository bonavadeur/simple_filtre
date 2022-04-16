@extends('admin.main')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tất cả sản phẩm</h1>
        <div class="row">
            <div class="col-3">

                <div class="card shadow mb-4 category">
                    <a href="#category" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="category">
                        <h6 class="m-0 font-weight-bold text-primary">Danh Mục Sản Phẩm</h6>
                    </a>
                    <div class="collapse show" id="category">
                        <div class="card-body category">
                            <div class="form-check">
                                <input class="form-check-input category" type="radio" name="category" value="">
                                <label class="form-check-label">Tất cả</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4 range">
                    <a href="#range" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="range">
                        <h6 class="m-0 font-weight-bold text-primary">Khoảng giá</h6>
                    </a>
                    <div class="collapse show" id="range">
                        <div class="card-body">
                            <div class="price-range">
                                <div class="well text-center">
                                    <input type="text" class="span2" value="" data-slider-min="0"
                                        data-slider-max="1600000" data-slider-step="5" data-slider-value="[0,3000000]"
                                        id="rangePrice">
                                    <div id="range-price-result">
                                        <span><b id="min-range">0</b> - <b id="max-range">1.600.000</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-9">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <label style="width:40%" for="select">Sắp xếp theo:
                                            <select id="select"
                                                    name="dataTable_length" aria-controls="dataTable"
                                                    class="d-inline-block custom-select custom-select-sm form-control form-control-sm">
                                                <option value="default">Mặc định</option>
                                                <option value="increase">Giá tăng dần</option>
                                                <option value="decrease">Giá giảm dần</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="dataTable_filter" class="dataTables_filter">
                                            <label style="width:100%">Tìm kiếm:
                                                <input type="search" class="form-control form-control-sm">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                            cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                            style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" style="width:20px">id</th>
                                                    <th class="sorting">Tên thiết bị</th>
                                                    <th class="sorting" style="width:150px">Hình Ảnh</th>
                                                    <th class="sorting" style="width:100px">Số lượng</th>
                                                    <th class="sorting" style="width:100px">Đã bán</th>
                                                    <th class="sorting" style="width:100px">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableContent">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-7">
                                        <ul class="pagination" id="paginate">
                                            <li class="page-item" id="page-previous" style="cursor: pointer"><span class="page-link"><</span></li>
                                            <span style="display:inline-flex;" id="page-number">
                                                <li class="page-item" style="cursor: pointer"><span class="page-link"></span></li>
                                                <li class="page-item" style="cursor: pointer"><span class="page-link"></span></li>
                                                <li class="page-item" style="cursor: pointer"><span class="page-link"></span></li>
                                                <li class="page-item" style="cursor: pointer"><span class="page-link"></span></li>
                                                <li class="page-item" style="cursor: pointer"><span class="page-link"></span></li>
                                                <li class="page-item" style="cursor: pointer"><span class="page-link"></span></li>
                                                <li class="page-item" style="cursor: pointer"><span class="page-link"></span></li>
                                            </span>
                                            <li class="page-item" id="page-next" style="cursor: pointer"><span class="page-link">></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                            Showing 1
                                            to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="dataTable_previous"><a href="#" aria-controls="dataTable"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="dataTable" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                        data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                        data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                        data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="dataTable_next"><a href="#"
                                                        aria-controls="dataTable" data-dt-idx="7" tabindex="0"
                                                        class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="modal fade" id="productDetail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailHeader"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="col-3">
                        <div><img width="180px"></div>
                        <br>
                        <div class="input-group">
                            <input type="file" name="update_image" id="update_image" onchange="loadFile(event)">
                        </div>
                    </div>
                    <div class="col-9">
                        <form>
                            <div class="form-group row">
                                <label for="id" class="col-auto col-form-label">ID</label>
                                <div class="col-1">
                                    <input type="text" readonly class="form-control-plaintext" id="id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="update_name" class="col-auto col-form-label">Tên sản phẩm</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="update_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col row">
                                    <label for="update_price_1" class="col-auto col-form-label">Giá gốc</label>
                                    <span class="col">
                                        <input type="number" class="form-control" id="update_price_1">
                                    </span>
                                </div>
                                <div class="col row">
                                    <label for="update_price_2" class="col-auto col-form-label">Giá khuyến mãi</label>
                                    <span class="col">
                                        <input type="number" class="form-control" id="update_price_2">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="update_description" class="col-auto col-form-label">Mô tả</label>
                                <div class="col">
                                    <textarea type="text" class="form-control" id="update_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col row">
                                    <label for="update_quantity" class="col-auto col-form-label">Số lượng</label>
                                    <span class="col">
                                        <input type="text" class="form-control" id="update_quantity">
                                    </span>
                                </div>
                                <div class="col row">
                                    <label for="update_sold" class="col-auto col-form-label">Đã bán</label>
                                    <span class="col">
                                        <input type="text" class="form-control" id="update_sold">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col row">
                                    <label for="update_category" class="col-auto col-form-label">Phân loại</label>
                                    <span class="col">
                                        <input type="text" class="form-control" id="update_category">
                                    </span>
                                </div>
                                <div class="col row">
                                    <label for="update_brand" class="col-auto col-form-label">Thương hiệu</label>
                                    <span class="col">
                                        <input type="text" class="form-control" id="update_brand">
                                    </span>
                                </div>
                            </div>
                            <label class="col-auto col-form-label">THÔNG SỐ PHÂN LOẠI</label>
                            <div class="form-group" id="update_filtre"></div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ bỏ</button>
                    <button type="button" class="btn btn-primary" id="update_btn_save">Lưu</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customcss')
    <link rel="stylesheet" href="resources/css/price-range.css">
@endsection

@section('customjs')
    <script type="text/javascript" src="resources/js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="resources/js/admin/price-range.js"></script>
    <script type="text/javascript" src="resources/js/admin/all_item.js"></script>
    <script>
        var loadFile = function(event) {
            var image = $("#productDetail").find(".modal-body").find("img");
            image.attr("src", URL.createObjectURL(event.target.files[0]));
        };
    </script>
@endsection
