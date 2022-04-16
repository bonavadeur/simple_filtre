@extends('admin.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Nhập hàng</h1>
    <div class="row">
        <div class="col-0">
        </div>
        <div class="col-12">
            <div class="card shadow mb-4">

                <div class="card-body row">
                    <div class="col-6">
                        <h1 class="h5 mb-2 text-gray-800">Thông tin người nhập</h1>
                        <form>
                            <div class="form-group row">
                                <label for="import_admin" class="col-4 col-form-label">Người nhập</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="import_admin" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="import_date" class="col-4 col-form-label">Thời gian nhập</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="import_date" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="import_storage" class="col-auto col-form-label">Kho</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="import_storage" readonly>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-6">
                        <h1 class="h5 mb-2 text-gray-800">Thông tin bên giao</h1>
                        <form>
                            <div class="form-group row">
                                <label for="import_provider_name" class="col-auto col-form-label">Nhà cung cấp</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="import_provider_name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="import_provider_addr" class="col-auto col-form-label">Địa chỉ</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="import_provider_addr" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="import_provider_phone" class="col-auto col-form-label">Số điện thoại</label>
                                <div class="col">
                                    <input type="text" class="form-control" id="import_provider_phone" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <button class="btn btn-primary" id="add_row">Thêm dòng</button>
                    
                </div>

                <div class="card-body" style="overflow:visible">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                        cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                        style="width: 100%;">
                                        <thead id="add_table">
                                            <tr role="row">
                                                <th class="sorting" style="width:20px">STT</th>
                                                <th class="sorting" style="width:120px">Serial</th>
                                                <th class="sorting">Tên thiết bị</th>
                                                <th class="sorting" style="width:150px">Đơn giá</th>
                                                <th class="sorting" style="width:100px">Số lượng</th>
                                                <th class="sorting" style="width:150px">Thành tiền</th>
                                                <th class="sorting" style="width:40px">Xoá</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableContent">
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-body row justify-content-end">
                    <div class="col-6 row">
                        <div class="col-6"><h1 class="h5 mb-2 text-gray-800">Tổng hoá đơn nhập: </h1></div>
                        <div class="col-3" id="total"></div>
                        <div class="col-3"><button class="btn btn-primary" id="import" data-toggle="modal" data-target="#import-success">Nhập</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="import-success" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productDetailHeader">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1 class="h5 mb-2 text-gray-800">Thêm phiếu nhập thành công</h1>
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
    {{-- <script type="text/javascript" src="resources/js/mdb.min.js"></script> --}}
    <script type="text/javascript" src="resources/js/admin/import_products.js"></script>
    <script>
        var loadFile = function(event) {
            var image = $("#add_image").parent().parent().find("img");
            image.attr("src", URL.createObjectURL(event.target.files[0]));
        };
    </script>
@endsection