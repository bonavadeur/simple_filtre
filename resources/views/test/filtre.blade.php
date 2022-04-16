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
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#category">
                                Category
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="category">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input category" type="radio" name="category" id="allcategory" value="all">
                                    <label class="form-check-label" for="allcategory">All</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input category" type="radio" name="category" id="body" value="body">
                                    <label class="form-check-label" for="body">Body</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input category" type="radio" name="category" id="lens" value="lens">
                                    <label class="form-check-label" for="lens">Lens</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input category" type="radio" name="category" id="flash" value="flash">
                                    <label class="form-check-label" for="flash">Flash</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 brand">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#brand">
                                Brand
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="brand">
                            <div class="accordion-body row row-cols-2">
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Canon" value="Canon">
                                    <label class="form-check-label" for="Canon">Canon</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Nikon" value="Nikon">
                                    <label class="form-check-label" for="Nikon">Nikon</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Sony" value="Sony">
                                    <label class="form-check-label" for="Sony">Sony</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Fujifilm" value="Fujifilm">
                                    <label class="form-check-label" for="Fujifilm">Fujifilm</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Hasselblad" value="Hasselblad">
                                    <label class="form-check-label" for="Hasselblad">Hasselblad</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Olympus" value="Olympus">
                                    <label class="form-check-label" for="Olympus">Olympus</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Leica" value="Leica">
                                    <label class="form-check-label" for="Leica">Leica</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Sigma" value="Sigma">
                                    <label class="form-check-label" for="Sigma">Sigma</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Tamron" value="Tamron">
                                    <label class="form-check-label" for="Tamron">Tamron</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brand" type="radio" name="brand" id="Godox" value="Godox">
                                    <label class="form-check-label" for="Godox">Godox</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 range">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#rangePrice">
                                Range of price
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="rangePrice">
                            <div class="accordion-body row row-cols-2">
                                <div class="price-range">
                                    <div class="well text-center">
                                        <input type="text" class="span2" value="" data-slider-min="0"
                                            data-slider-max="1600000" data-slider-step="5"
                                            data-slider-value="[0,3000000]" id="rangeslide">
                                        <div id="range-price-result">
                                            <span><b id="min-value">0</b> - <b id="max-value">1.600.000</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 bodySpec">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#bodytype">
                                Body - Type
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="bodytype">
                            <div class="accordion-body row row-cols-2">
                                <div class="form-check">
                                    <input class="form-check-input bodytype" name="bodytype" type="checkbox" value="dslr">
                                    <label class="form-check-label">DSLR</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input bodytype" name="bodytype" type="checkbox" value="mrl">
                                    <label class="form-check-label">Mirrorless</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input bodytype" name="bodytype" type="checkbox" value="cine">
                                    <label class="form-check-label">Cine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 bodySpec">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#bodysensor">
                                Body - Sensor
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="bodysensor">
                            <div class="accordion-body row row-cols-2">
                                <div class="form-check">
                                    <input class="form-check-input bodysensor" name="bodysensor" type="checkbox" value="med">
                                    <label class="form-check-label">Medium</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input bodysensor" name="bodysensor" type="checkbox" value="ff">
                                    <label class="form-check-label">Fullframe</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input bodysensor" name="bodysensor" type="checkbox" value="apsc">
                                    <label class="form-check-label">APS-C</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input bodysensor" name="bodysensor" type="checkbox" value="cine">
                                    <label class="form-check-label">Cine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 lensSpec">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#lensbody">
                                Lens - Body
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="lensbody">
                            <div class="accordion-body row row-cols-2">
                                <div class="form-check">
                                    <input class="form-check-input lensbody" name="lensbody" type="checkbox" value="dslr">
                                    <label class="form-check-label">DSLR</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lensbody" name="lensbody" type="checkbox" value="mrl">
                                    <label class="form-check-label">Mirrorless</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lensbody" name="lensbody" type="checkbox" value="cine">
                                    <label class="form-check-label">Cine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 lensSpec">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#lenssensor">
                                Lens - Sensor
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="lenssensor">
                            <div class="accordion-body row row-cols-2">
                                <div class="form-check">
                                    <input class="form-check-input lenssensor" name="lenssensor" type="checkbox" value="med">
                                    <label class="form-check-label">Medium</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenssensor" name="lenssensor" type="checkbox" value="ff">
                                    <label class="form-check-label">Fullframe</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenssensor" name="lenssensor" type="checkbox" value="apsc">
                                    <label class="form-check-label">APSC</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenssensor" name="lenssensor" type="checkbox" value="cine">
                                    <label class="form-check-label">Cine</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 lensSpec">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#lenspurpose">
                                Lens - Purpose
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="lenspurpose">
                            <div class="accordion-body row row-cols-2">
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox" value="fix">
                                    <label class="form-check-label">fix</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox" value="tele">
                                    <label class="form-check-label">tele</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox" value="general">
                                    <label class="form-check-label">general</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox" value="wide">
                                    <label class="form-check-label">wide</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox" value="macro">
                                    <label class="form-check-label">macro</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox"
                                        value="portrait">
                                    <label class="form-check-label">portrait</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox" value="fisheye">
                                    <label class="form-check-label">fisheye</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox" value="cine">
                                    <label class="form-check-label">cine</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox" value="tshift">
                                    <label class="form-check-label">tshift</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input lenspurpose" name="lenspurpose" type="checkbox"
                                        value="extender">
                                    <label class="form-check-label">extender</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-items mb-1 flashSpec">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flashbody">
                                Flash - Body
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="flashbody">
                            <div class="accordion-body row row-cols-2">
                                <div class="form-check">
                                    <input class="form-check-input flashbody" name="flashbody" type="checkbox" value="Canon">
                                    <label class="form-check-label">Canon</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input flashbody" name="flashbody" type="checkbox" value="Nikon">
                                    <label class="form-check-label">Nikon</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input flashbody" name="flashbody" type="checkbox" value="Sony">
                                    <label class="form-check-label">Sony</label>
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
<script type="text/javascript" src="resources/views/test/filtre.js">
    // $(document).ready(function() {
    //     filtre = {};
    //     filtre.range = [0, 1600000];
    //     count = 0;
    //     filtre.page = 1;
    //     hideAll();
    //     $("#paginate").hide();

    //     $("input[name='category']").change(function() {
    //         category = $(this).val();
    //         $("#paginate").show();
    //         if(category != "all") showSpec(category);
    //         else {
    //             hideAll();
    //             $('input[name="brand"]').prop('checked', false);
    //             filtre.brand = '';
    //         }
    //         filtre.page = 1;
    //         createBodyRequest(category, filtre.brand, filtre.range, filtre.orderby, filtre.page);
    //         sendRequest();
    //     });

    //     $(".page-link").click(function() {
    //         if($(this).text() == "<") filtre.page = Math.max(1, filtre.page - 1);
    //         else if($(this).text() == ">") filtre.page = Math.min(count, filtre.page + 1);
    //         else filtre.page = $(this).text();
    //         $("#result").text($(this));
    //         setPaginate();
    //         sendRequest();
    //     });

    //     $("#sortby").next().children().click(function() {
    //         value = $(this).text();
    //         $("#sortby").text(value);
    //         if (value == "Mặc định") filtre.orderby = "default";
    //         if (value == "Giá tăng dần") filtre.orderby = "increase";
    //         if (value == "Giá giảm dần") filtre.orderby = "decrease";
    //         $("#result").text(filtre.orderby);
    //         sendRequest();
    //     });

    //     $("input[name='brand']").change(function() {
    //         filtre.brand = $(this).val();
    //         sendRequest();
    //     });

    //     $("#rangeslide").slider();
    //     $("#rangeslide").slider().on('slideStop', function(ev) {
    //         filtre.range = $("#rangeslide").slider('getValue').data('slider').getValue();
    //         $("#min-value").text(formatNumber(filtre.range[0]));
    //         $("#max-value").text(formatNumber(filtre.range[1]));
    //         sendRequest();
    //     });

    //     // body checkboxes
    //     $("input[name='bodyType']").change(function() {
    //         processCheckbox("input[name='bodyType']", "type");
    //         sendRequest();
    //     });
    //     $("input[name='bodySensor']").change(function() {
    //         processCheckbox("input[name='bodySensor']", "sensor");
    //         sendRequest();
    //     });

    //     // lens checkboxes
    //     $("input[name='lensBody']").change(function() {
    //         processCheckbox("input[name='lensBody']", "body");
    //         sendRequest();
    //     });
    //     $("input[name='lensSensor']").change(function() {
    //         processCheckbox("input[name='lensSensor']", "sensor");
    //         sendRequest();
    //     });
    //     $("input[name='lensPurpose']").change(function() {
    //         processCheckbox("input[name='lensPurpose']", "purpose");
    //         sendRequest();
    //     });

    //     // flash checkboxes
    //     $("input[name='flashBody']").change(function() {
    //         processCheckbox("input[name='flashBody']", "body");
    //         sendRequest();
    //     });

    //     function setPaginate(count) {
    //         if(filtre.page == 1) $("#page-previous").addClass("hidden");
    //         else $("#page-previous").removeClass("hidden");

    //         if(filtre.page == count) $("#page-next").addClass("hidden");
    //         else $("#page-next").removeClass("hidden");

    //         if(count >= 7) {
    //             if(filtre.page > count - 3) {
    //                 max = count;
    //                 min = count - 6;
    //             } else {
    //                 min = Math.max(filtre.page - 3, 1);
    //                 max = Math.min(min + 6, count);
    //             }
    //         } else {
    //             min = 1;
    //             max = count;
    //             for(i = count + 1; i <= 7; i++) $(".page-item").eq(i).addClass("hidden");
    //         }
    //         for(i = min; i <= max; i++) {
    //             $(".page-link").eq(i - min + 1).text(i);
    //             $(".page-item").eq(i - min + 1).removeClass("hidden");
    //             if(i == filtre.page) $(".page-item").eq(i - min + 1).addClass("active");
    //             else $(".page-item").eq(i - min + 1).removeClass("active");
    //         }
    //     }

    //     function processCheckbox(selector, spec) {
    //         const listChecked = $(selector + ":checked");
    //         eval("filtre." + spec + " = []");
    //         for (let i = 0; i < listChecked.length; i++) {
    //             eval("filtre." + spec + "[i] = listChecked.eq(i).val()");
    //         }
    //     }

    //     function formatNumber(num) {
    //         return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    //     }

    //     function createBodyRequest(category, brand, range, orderby, page) {
    //         filtre = {}
    //         if(category == "all") filtre = {
    //             category: "all",
    //             brand: brand,
    //             orderby: orderby,
    //             page: page,
    //             range: range,
    //         }
    //         if (category == "body") filtre = {
    //             category: "body",
    //             brand: brand,
    //             orderby: orderby,
    //             page: page,
    //             range: range,
    //             type: [],
    //             sensor: []
    //         }
    //         if (category == "lens") filtre = {
    //             category: "lens",
    //             brand: brand,
    //             orderby: orderby,
    //             page: page,
    //             range: range,
    //             body: [],
    //             sensor: [],
    //             purpose: []
    //         }
    //         if (category == "flash") filtre = {
    //             category: "flash",
    //             brand: brand,
    //             orderby: orderby,
    //             page: page,
    //             range: range,
    //             body: []
    //         }
    //     }

    //     function hideAll() {
    //         $(".bodySpec").hide();
    //         $(".lensSpec").hide();
    //         $(".flashSpec").hide();
    //         $('input[name="bodyType"]').prop('checked', false);
    //         $('input[name="bodySensor"]').prop('checked', false);
    //         $('input[name="lensBody"]').prop('checked', false);
    //         $('input[name="lensSensor"]').prop('checked', false);
    //         $('input[name="lensPurpose"]').prop('checked', false);
    //         $('input[name="flashBody"]').prop('checked', false);
    //     }

    //     function showSpec(category) {
    //         hideAll();
    //         $("." + category + "Spec").show();
    //     }

    //     function printJson(json) {
    //         document.getElementById("temp").textContent = JSON.stringify(json, null, 2);
    //     }

    //     function sendRequest() {
    //         console.log(JSON.stringify(filtre));
    //         fetch('/api/filtre', {
    //             method: "POST",
    //             headers: {
    //                 'Content-Type': 'application/json'
    //             },
    //             body: JSON.stringify(filtre)
    //         }).then(response => {
    //             return response.json()
    //         }).then(result => {
    //             console.log(result);
    //             count = Math.ceil(result.length / 20);
    //             result = result.data;
    //             setPaginate(count);
    //             $("#result").text(count);
    //             tableContent = '';
    //             result.forEach(element => {
    //                 tableContent +=
    //                     `<tr><th scope="row">${element.id}</th><td>${element.name}</td><td><img src="{{asset('public/product_thumbnail/${JSON.parse(element.info).image}.jpg')}}"></td><td>${formatNumber(element.price_1)}</td><td>${element.info}</td></tr>`;
    //             });
    //             document.getElementById("tableContent").innerHTML = tableContent;
    //         });
    //     }
    // });
</script>

</html>
