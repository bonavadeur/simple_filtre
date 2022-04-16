$(document).ready(function() {
    initialRequest();

    // window.addEventListener('popstate', function(popstateEvent) {
    //     initialRequest();
    // });

    checkableSpec = ["category", "brand", "type", "sensor", "body", "purpose"];
    processCheckbox(filtre);

    count = 0;
    filtre.page = 1;
    // hideAll();
    // $("#paginate").hide();

    $("input[name='category']").change(function() {
        category = $(this).val();
        $("#paginate").show();
        if(category != "all") showSpec(category);
        else {
            hideAll();
            $('input[name="brand"]').prop('checked', false);
            filtre.brand = '';
        }
        filtre.page = 1;
        createBodyRequest(category, filtre.brand, filtre.range, filtre.orderby, filtre.page);
        sendRequest();
    });

    $("input[name='brand']").change(function() {
        filtre.brand = $(this).val();
        sendRequest();
    });

    $("#rangeslide").slider();
    $("#rangeslide").slider().on('slideStop', function(ev) {
        filtre.range = $("#rangeslide").slider('getValue').data('slider').getValue();
        $("#min-value").text(formatNumber(filtre.range[0]));
        $("#max-value").text(formatNumber(filtre.range[1]));
        sendRequest();
    });

    $("input[name='bodytype']").change(function() {
        getValueCheckbox("input[name='bodyType']", "type");
        sendRequest();
    });
    $("input[name='bodysensor']").change(function() {
        getValueCheckbox("input[name='bodySensor']", "sensor");
        sendRequest();
    });

    $("input[name='lensbody']").change(function() {
        getValueCheckbox("input[name='lensBody']", "body");
        sendRequest();
    });
    $("input[name='lenssensor']").change(function() {
        getValueCheckbox("input[name='lensSensor']", "sensor");
        sendRequest();
    });
    $("input[name='lenspurpose']").change(function() {
        getValueCheckbox("input[name='lensPurpose']", "purpose");
        sendRequest();
    });

    $("input[name='flashbody']").change(function() {
        getValueCheckbox("input[name='flashBody']", "body");
        sendRequest();
    });

    $(".page-link").click(function() {
        if($(this).text() == "<") filtre.page = Math.max(1, filtre.page - 1);
        else if($(this).text() == ">") filtre.page = Math.min(count, filtre.page + 1);
        else filtre.page = $(this).text();
        // $("#result").text($(this));
        setPaginate();
        sendRequest();
    });

    $("#sortby").next().children().click(function() {
        value = $(this).text();
        $("#sortby").text(value);
        if (value == "Mặc định") filtre.orderby = "default";
        if (value == "Giá tăng dần") filtre.orderby = "increase";
        if (value == "Giá giảm dần") filtre.orderby = "decrease";
        // $("#result").text(filtre.orderby);
        sendRequest();
    });

    function initialRequest() {
        filtre = {};
        require = parseURLParams(window.location.href);
        for(key in require) if(require[key].length == 1 && key != "purpose") require[key] = require[key][0];
        if(require) {
            filtre = require;
        } else {
            filtre.category = "all";
            filtre.brand = "";
            filtre.orderby = "default";
            filtre.range = [0, 1600000];
            filtre.page = 1;
        }
        console.log(require);
        console.log(filtre);
        sendRequest();
    }

    function processCheckbox(filtre) {
        for(key in filtre) {
            if(checkableSpec.includes(key)) {
                if(key == "category") {
                    inputElements = $("input[name='category']");
                } else if(key == "brand") {
                    inputElements = $("input[name='brand']");
                } else if(filtre[category] != "all") {
                    inputElements = $("input[name=" + filtre[category] + key);
                }
                for(i = 0; i < inputElements.length; i++){
                    if(inputElements.eq(i).val() == filtre[key]) inputElements.eq(i).prop("checked", true);
                    else inputElements.eq(i).prop("checked", false);
                }
            }
        }
    }

    function setPaginate(count) {
        if(filtre.page == 1) $("#page-previous").addClass("hidden");
        else $("#page-previous").removeClass("hidden");

        if(filtre.page == count) $("#page-next").addClass("hidden");
        else $("#page-next").removeClass("hidden");

        if(count >= 7) {
            if(filtre.page > count - 3) {
                max = count;
                min = count - 6;
            } else {
                min = Math.max(filtre.page - 3, 1);
                max = Math.min(min + 6, count);
            }
        } else {
            min = 1;
            max = count;
            for(i = count + 1; i <= 7; i++) $(".page-item").eq(i).addClass("hidden");
        }
        for(i = min; i <= max; i++) {
            $(".page-link").eq(i - min + 1).text(i);
            $(".page-item").eq(i - min + 1).removeClass("hidden");
            if(i == filtre.page) $(".page-item").eq(i - min + 1).addClass("active");
            else $(".page-item").eq(i - min + 1).removeClass("active");
        }
    }

    function getValueCheckbox(selector, spec) {
        const listChecked = $(selector + ":checked");
        eval("filtre." + spec + " = []");
        for (let i = 0; i < listChecked.length; i++) {
            eval("filtre." + spec + "[i] = listChecked.eq(i).val()");
        }
    }

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }

    function createBodyRequest(category, brand, range, orderby, page) {
        filtre = {}
        filtre.category = category;
        filtre.brand = brand;
        filtre.orderby = orderby;
        filtre.page = page;
        filtre.range = range;
        if (category == "body") {
            filtre.type = [];
            filtre.sensor = [];
        }
        if (category == "lens") {
            filtre.body = [];
            filtre.sensor = [];
            filtre.purpose = [];
        }
        if (category == "flash") {
            filtre.body = [];
        }
    }

    function hideAll() {
        $(".bodySpec").hide();
        $(".lensSpec").hide();
        $(".flashSpec").hide();
        $('input[name="bodyType"]').prop('checked', false);
        $('input[name="bodySensor"]').prop('checked', false);
        $('input[name="lensBody"]').prop('checked', false);
        $('input[name="lensSensor"]').prop('checked', false);
        $('input[name="lensPurpose"]').prop('checked', false);
        $('input[name="flashBody"]').prop('checked', false);
    }

    function showSpec(category) {
        hideAll();
        $("." + category + "Spec").show();
    }

    function printJson(json) {
        document.getElementById("temp").textContent = JSON.stringify(json, null, 2);
    }

    function sendRequest() {
        // console.log(JSON.stringify(filtre));
        changeURL(filtre);
        // checkingCheckbox(filtre);
        fetch('/api/filtre', {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(filtre)
        }).then(response => {
            return response.json()
        }).then(result => {
            console.log(result);
            count = Math.ceil(result.length / 20);
            result = result.data;
            setPaginate(count);
            // $("#result").text(count);
            tableContent = '';
            result.forEach(element => {
                tableContent +=
                    `<tr><th scope="row">${element.id}</th><td>${element.name}</td><td><img src="public/product_thumbnail/${JSON.parse(element.info).image}.jpg"></td><td>${formatNumber(element.price_1)}</td><td>${element.info}</td></tr>`;
            });
            document.getElementById("tableContent").innerHTML = tableContent;
        });
    }

    function changeURL(filtre) {
        queryString = '';
        for(key in filtre) {
            if(filtre[key]){
                if(Array.isArray(filtre[key])) for(index in filtre[key]) {
                    queryString += key + "=" + filtre[key][index] + "&";
                } else {
                    queryString += key + "=" + filtre[key] + "&";
                }
            } else continue;
        }
        queryString = queryString.slice(0, -1);
        console.log(queryString);
        history.replaceState({}, '', "/filtre?" + queryString);
        // history.back();
    }

    function parseURLParams(url) {
        var queryStart = url.indexOf("?") + 1,
            queryEnd   = url.indexOf("#") + 1 || url.length + 1,
            query = url.slice(queryStart, queryEnd - 1),
            pairs = query.replace(/\+/g, " ").split("&"),
            parms = {}, i, n, v, nv;
    
        if (query === url || query === "") return;
    
        for (i = 0; i < pairs.length; i++) {
            nv = pairs[i].split("=", 2);
            n = decodeURIComponent(nv[0]);
            v = decodeURIComponent(nv[1]);
    
            if (!parms.hasOwnProperty(n)) parms[n] = [];
            parms[n].push(nv.length === 2 ? v : null);
        }
        return parms;
    }
});