@extends('admin.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Danh sách đơn hàng đã nhập</h1>
    <div class="row">
        <div class="col-0">
        </div>
        <div class="col-12">
            <div class="card shadow mb-4">
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
    <script type="text/javascript" src="resources/js/admin/list_imported.js"></script>
    <script>
        var loadFile = function(event) {
            var image = $("#add_image").parent().parent().find("img");
            image.attr("src", URL.createObjectURL(event.target.files[0]));
        };
    </script>
@endsection