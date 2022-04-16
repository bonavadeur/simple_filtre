@extends('admin.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800" id="admin-name-header"></h1>
    <div class="card shadow mb-4">
        <div class="card-body row">
            <div class="col-2">
                <div><img width="140px" id="info_avt"></div>
                <br>
                <div class="input-group">
                    <input type="file" name="add_image" id="add_image" onchange="loadFile(event)" required>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group row">
                    <label for="info_id" class="col-5 col-form-label">ID</label>
                    <div class="col-2">
                        <input type="text" class="form-control" id="info_id" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="info_name" class="col col-form-label">Tên</label>
                    <div class="col-7">
                        <input type="text" class="form-control" id="info_name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="info_email" class="col col-form-label">Email</label>
                    <div class="col-7">
                        <input type="text" class="form-control" id="info_email" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="info_password" class="col col-form-label">Mật khẩu</label>
                    <div class="col-7">
                        <input type="password" class="form-control" id="info_password" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="info_password_retype" class="col col-form-label">Nhập lại mật khẩu</label>
                    <div class="col-7">
                        <input type="password" class="form-control" id="info_password_retype" required>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group row">
                    <label for="info_storage" class="col col-form-label">Mã kho</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="info_storage" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="info_storage_name" class="col col-form-label">Tên kho</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="info_storage_name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="info_storage_addr" class="col col-form-label">Địa chỉ kho</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="info_storage_addr" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body row justify-content-end">
            <button class="btn btn-primary" id="info_save">Lưu</button>
        </div>
    </div>
</div>
@endsection

@section('customcss')
@endsection

@section('customjs')
    <script type="text/javascript" src="resources/js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="resources/js/admin/price-range.js"></script>
    <script type="text/javascript" src="resources/js/admin/admin_info.js"></script>
    <script>
        var loadFile = function(event) {
            var image = $("#add_image").parent().parent().find("img");
            image.attr("src", URL.createObjectURL(event.target.files[0]));
        };
    </script>
@endsection