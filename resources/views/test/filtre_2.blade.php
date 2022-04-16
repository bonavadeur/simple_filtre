<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filtre</title>
    <link rel="stylesheet" href="resources/views/test/bootstrap.css" />
    <link rel="stylesheet" href="resources/views/test/price-range.css">
    {{-- <link rel="stylesheet" href="resources/views/test/range/slider.css" /> --}}
    <link rel="stylesheet" href="resources/views/test/style.css" />
</head>

<body>
    <div class="container" id="main-container">
        <div class="row">
            <div class="col-3">
                <div class="accordion" id="main-accordion">

                    <div class="accordion-items mb-1">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed category" data-bs-toggle="collapse"
                                data-bs-target="#category">
                                Danh Mục Sản Phẩm
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="category">
                            <div class="accordion-body category">
                                <div class="form-check">
                                    <input class="form-check-input category" type="radio" name="category" value="">
                                    <label class="form-check-label">Tất cả</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 range">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#range">
                                Khoảng giá
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="range">
                            <div class="accordion-body row row-cols-2">
                                <div class="price-range">
                                    <div class="well text-center">
                                        <input type="text" class="span2" value="" data-slider-min="0"
                                            data-slider-max="1600000" data-slider-step="5"
                                            data-slider-value="[0,3000000]" id="rangePrice">
                                        <div id="range-price-result">
                                            <span><b id="min-range">0</b> - <b id="max-range">1.600.000</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-9">
                <div>
                    <nav aria-label="...">
                        <ul class="pagination" id="paginate">
                            <li class="page-item" id="page-previous"><span class="page-link"><</span></li>
                            <span style="display:inline-flex;" id="page-number">
                                <li class="page-item"><span class="page-link"></span></li>
                                <li class="page-item"><span class="page-link"></span></li>
                                <li class="page-item"><span class="page-link"></span></li>
                                <li class="page-item"><span class="page-link"></span></li>
                                <li class="page-item"><span class="page-link"></span></li>
                                <li class="page-item"><span class="page-link"></span></li>
                                <li class="page-item"><span class="page-link"></span></li>
                            </span>
                            
                            <li class="page-item" id="page-next"><span class="page-link">></span></li>
                        </ul>
                    </nav>
                    <div id="result">result here</div>
                    Sắp xếp theo:
                    <span class="dropdown">
                        <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="sortby"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Mặc định
                        </a>
                        <ul class="dropdown-menu">
                            <li><span class="dropdown-item">Mặc định</span></li>
                            <li><span class="dropdown-item">Giá tăng dần</span></li>
                            <li><span class="dropdown-item">Giá giảm dần</span></li>
                        </ul>
                    </span>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">category</th>
                            <th scope="col">price</th>
                            <th scope="col">info</th>
                        </tr>
                    </thead>
                    <tbody id="tableContent">
                    </tbody>
                </table>
                <pre id="temp"></pre>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="resources/views/test/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="resources/views/test/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="resources/views/test/price-range.js"></script>
    {{-- <script type="text/javascript" src="resources/views/test/main.js"></script> --}}
    {{-- <script type="text/javascript" src="resources/views/test/range/bootstrap-slider.js"></script> --}}

</body>
<script type="text/javascript" src="resources/views/test/filtre_2.js">
</script>

</html>
