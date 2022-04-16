<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Range</title>
    <link rel="stylesheet" href="resources/views/test/bootstrap.css" />
    <link rel="stylesheet" href="resources/views/test/price-range.css">
    {{-- <link rel="stylesheet" href="resources/views/test/range/slider.css" /> --}}
    <link rel="stylesheet" href="resources/views/test/style.css" />
</head>
<body>
    <div class="price-range">
        <h2>Price Range</h2>
        <div class="well text-center">
             <input type="text" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
             <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div>

    <div id="result"></div>


<script src="resources/views/test/jquery-3.6.0.js"></script>
<script src="resources/views/test/bootstrap.bundle.js"></script>
<script src="resources/views/test/price-range.js"></script>
</body>
<script>
    $("#sl2").slider();
    val = $("#sl2").slider('getValue');
    console.log(val);
    $("#sl2").slider().on('slideStop', function(ev) {
        value = $("#sl2").slider('getValue');
        console.log(value.data('slider').getValue());
        $("#result").text(value);
    })
</script>
</html>