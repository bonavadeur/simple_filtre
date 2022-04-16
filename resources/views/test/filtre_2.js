$(document).ready(function() {
    $("#rangePrice").slider();
    $("#rangePrice").slider().on('slideStop', function(ev) {
        filtre.range = $("#rangePrice").slider('getValue').data('slider').getValue();
        $("#min-range").text(formatNumber(filtre.range[0]));
        $("#max-range").text(formatNumber(filtre.range[1]));
        sendRequest();
    });

    var list_1 = ["category", "orderby", "page"];
    var list_2 = ["category", "orderby", "page", "range"];
    filtre_initial = {
        category: "",
        range: [0, 1800000],
        orderby: "default",
        page: 1
    };

    var specList = {};
    fetch('/api/getspec').then(response => {return response.json();}).then(result => {
        str = ``;
        specList = result;
        for(i in result) {
            $(".accordion-body.category").append(`
                <div class="form-check">
                    <input class="form-check-input category" type="radio" name="category" value="${result[i].category}">
                    <label class="form-check-label" for="${result[i].category}">${result[i].name}</label>
                </div>
            `);
            for(key in result[i].spec) {
                let spec;
                eval("spec = result[i].spec." + key);
                str += `
                    <div class="accordion-items mb-1 ${key}${result[i].category}">
                        <h2 class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#${key}">
                                ${spec.name}
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" id="${key}">
                            <div class="accordion-body row">
                `;
                for(value in spec.value) {
                    let name;
                    eval("name = spec.value." + value);
                    str += `
                                <div class="form-check">
                                    <input class="form-check-input ${key}${result[i].category}" type="${spec.filtre}" name="${key}${result[i].category}" value="${value}">
                                    <label class="form-check-label">${name}</label>
                                </div>
                    `;
                }
                str += `
                            </div>
                        </div>
                    </div>
                `;
            }
        }
        $(".accordion-items.mb-1.range").after(str);
        // console.log(specList);
        displayFiltreSpec(0);
        initialRequest();
        $("#min-range").text(formatNumber(filtre.range[0]));
        $("#max-range").text(formatNumber(filtre.range[1]));
    });

    setTimeout(() => {
        $("input[name='category']").change(function() {
            category = $(this).val();
            category ? displayFiltreSpec(category) : displayFiltreSpec(0);
            filtre = {};
            filtre.range = [0, 1800000];
            filtre.orderby = "default";
            filtre.page = 1;
            filtre.category = category;
            $("#min-range").text(formatNumber(filtre.range[0]));
            $("#max-range").text(formatNumber(filtre.range[1]));
            // setRange();
            sendRequest();
        });
        for(categoryVal of specList) {
            for([specName, specDetail] of Object.entries(categoryVal.spec)) {
                if(specDetail.filtre == "radio") {
                    $(`input[name='${specName}${categoryVal.category}']`).change(function() {
                        filtre.brand = $(this).val();
                        sendRequest();
                    });
                }
                if(specDetail.filtre == "checkbox") {
                    $(`input[name='${specName}${categoryVal.category}']`).change(generate_handler(specName,categoryVal.category));
                }
            }
        }
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
    }, 1000);


    function displayFiltreSpec(option) {
        if(option != 0) displayFiltreSpec(0);
        for(categoryVal of specList) {
            let specs = [];
            if(option == categoryVal.category || option == 0) {
                for(specIdx in categoryVal.spec) eval(`specs.push('${specIdx}')`);
                for(i in specs) {
                    if(option == categoryVal.category)
                        $(`.accordion-items.${specs[i]}${categoryVal.category}`).show();
                    if(option == 0) {
                        $(`.accordion-items.${specs[i]}${categoryVal.category}`).hide();
                        $(`input[name='${specs[i]}${categoryVal.category}']`).prop("checked", false);
                    }
                }
            }
        }
    }

    function initialRequest() {
        filtre = {};
        require = parseURLParams(window.location.href);
        // if(require["fbclid"]) delete require["fbclid"];
        for(key in require)
            if(list_1.includes(key)) require[key] = require[key][0];
        console.log(require);
        if(require && !require["fbclid"]) {
            filtre = require;
            console.log(1);
        } else {
            filtre.category = "";
            filtre.orderby = "default";
            filtre.range = [0, 1600000];
            filtre.page = 1;
        }
        if(filtre.category) {
            displayFiltreSpec(filtre.category);
            $(`input[value='${filtre.category}'].form-check-input.category`).prop("checked", true);
            processCheckbox();
        } else {
            $(`input[value=''].form-check-input.category`).prop("checked", true);
        }
        console.log(filtre);
        sendRequest();
    }

    function processCheckbox() {
        for(key in filtre) if(list_2.indexOf(key) == -1) {
            // console.log(key);
            let _key;
            eval(`_key = filtre.${key}`)
            if(Array.isArray(_key)) {
                for(val of _key) {
                    $(`input[value='${val}'].form-check-input.${key}${filtre.category}`).prop("checked", true);
                }
            } else {
                $(`input[value='${_key}'].form-check-input.${key}${filtre.category}`).prop("checked", true);
            }
        }
    }

    function setRange() {
        $("#rangePrice").slider('getValue').data('slider').setValue([filtre.range[0], filtre.range[1]]);
    }
    function setOrderby() {
        if(filtre.orderby == "default") $("#sortby").text("Mặc định");
        if(filtre.orderby == "increase") $("#sortby").text("Giá tăng dần");
        if(filtre.orderby == "decrease") $("#sortby").text("Giá giảm dần");
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

    function sendRequest() {
        // console.log(filtre);
        setRange();
        setOrderby();
        changeURL(filtre);
        // checkingCheckbox(filtre);
        fetch('/api/filtre', {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(filtre)
        }).then(response => {
            return response.json();
        }).then(result => {
            // console.log(result);
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
        // console.log(queryString);
        history.replaceState({}, '', "/filtre?" + queryString);
        // history.back();
    }

    function generate_handler(specName, category) {
        return function() {
            getValueCheckbox(`input[name='${specName}${category}']`, specName);
            sendRequest();
        }
    }

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
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