<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{{ asset('resources/views/test') }}/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container" id="main-container">

        <div class="accordion" id="main-accordion">
            <div class="accordion-items mb-1">
                <h2 class="accordion-header">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#formText">
                        Form text
                    </button>
                </h2>
                <div class="accordion-collapse collapse show" id="formText">
                    <div class="accordion-body">
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="name">name</span>
                            <input type="text" class="form-control" name="name" placeholder="your name">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="math">math</span>
                            <input type="number" class="form-control" name="math" placeholder="your math">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="elistening">e-listening</span>
                            <input type="number" class="form-control" name="elistening" placeholder="your elistening">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="ereading">e-reading</span>
                            <input type="number" class="form-control" name="ereading" placeholder="your ereading">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="flistening">f-listening</span>
                            <input type="number" class="form-control" name="flistening" placeholder="your flistening">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="freading">f-reading</span>
                            <input type="number" class="form-control" name="freading" placeholder="your freading">
                        </div>
                        <button type="button" class="btn btn-danger" id="formTextSubmit">submit</button>
                    </div>
                </div>
            </div>

            <div class="accordion-items mb-1">
                <h2 class="accordion-header">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#select-wrappper">
                        Select
                    </button>
                </h2>
                <div class="accordion-collapse collapse show" id="select-wrappper">
                    <div class="accordion-body">
                        <div>
                            <select class="form-select" id="select">
                                <option value="" selected>--choose your city--</option>
                                <option value="hanoi">hanoi</option>
                                <option value="paris">paris</option>
                                <option value="london">london</option>
                                <option value="tokyo">tokyo</option>
                                <option value="berlin">berlin</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-items mb-1">
                <h2 class="accordion-header">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#checkboxOne">
                        favor
                    </button>
                </h2>
                <div class="accordion-collapse collapse show" id="checkboxOne">
                    <div class="accordion-body row row-cols-4">
                        <div class="form-check col">
                            <input class="form-check-input" name="favor" type="checkbox" value="tennis">
                            <label class="form-check-label">tennis</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" name="favor" type="checkbox" value="football">
                            <label class="form-check-label">football</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" name="favor" type="checkbox" value="karate">
                            <label class="form-check-label">karate</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" name="favor" type="checkbox" value="ballet">
                            <label class="form-check-label">ballet</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" name="favor" type="checkbox" value="basketball">
                            <label class="form-check-label">basketball</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" name="favor" type="checkbox" value="violin">
                            <label class="form-check-label">violin</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-items mb-1">
                <h2 class="accordion-header">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#radio">
                        gender
                    </button>
                </h2>
                <div class="accordion-collapse collapse show" id="radio">
                    <div class="accordion-body row row-cols-3">
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="0">
                            <label class="form-check-label" for="male">male</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">female</label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="gender" id="orther" value="orther">
                            <label class="form-check-label" for="orther">orther</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-items mb-1">
                <h2 class="accordion-header">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#range">
                        Range
                    </button>
                </h2>
                <div class="accordion-collapse collapse show" id="range">
                    <div class="accordion-body">
                        <div class="row mb-3">
                            <div class="col-3">
                                <label for="range-1" class="form-label">Range 1:</label><br>
                                Value is: <span id="result-range-1"></span>
                            </div>
                            <div class="col">
                                <input type="range" class="form-range" id="range-1" min="0" max="100">
                            </div>
                            <button type="button" class="btn btn-danger" id="ageSubmit">submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3" id="result-client"></div>
        <div class="row mb-3" id="result-status"></div>
        <div class="row mb-3" id="result-php-wrapper">
            <div class="col-12">Return from server</div>
            <div class="col" id="result-server"></div>
        </div>
        <div class="row mb-3" id="result-session-wrapper">
            <div class="col-12">Return session</div>
            <div class="col" id="result-session"></div>
        </div>
        
    </div>

<script type="text/javascript" src="jquery-3.6.0.js"></script>
<script type="text/javascript" src="bootstrap.bundle.js"></script>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        // fetch('/api/get1').then(response => {return response.json()}).then(result => {
        //     console.log(result);
        // });

        myObj = {
            name: "Linda",
            age: 19,
            city: "london",
            gender: "female",
            mark: {
                math: 7,
                english: {
                    listening: 6,
                    reading: 9
                },
                french: [2, 9]
            },
            favor: ["karate", "violin"]
        };

        data = {
            "name": "",
            "age": 0,
            "city": "",
            "gender": "",
            "mark": {
                "math": 0,
                "english": {
                    "listening": 0,
                    "reading": 0
                },
                "french": [0, 0]
            },
            "favor": []
        };

        function sendRequest() {
            fetch('/api/post1', {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data) 
            }).then(response => {return response.json()}).then(result => {
                console.log(result);
                text = JSON.stringify(result);
                $("#result-server").text(text);
            });
        }

        function assignValue(selector, defaultValue) {
            let data;
            if(defaultValue == 0) data = ($(selector).val() != 0) ? $(selector).val() : 0;
            if(defaultValue == "") data = ($(selector).val() != null) ? $(selector).val() : "";
            return data;
        }

        $("#formTextSubmit").click(function() {
            data.name = assignValue("input[name='name']", "");
            data.mark.math = assignValue("input[name='math']", 0);
            data.mark.english.listening = assignValue("input[name='elistening']", 0);
            data.mark.english.reading = assignValue("input[name='ereading']", 0);
            data.mark.french[0] = assignValue("input[name='flistening']", 0);
            data.mark.french[1] = assignValue("input[name='freading']", 0);
            sendRequest();
        });

        $("#select").change(function() {
            data.city = $("#select").val();
            sendRequest();
        });

        $("input[name='favor']").change(function() {
            const listChecked = $("input[name='favor']:checked");
            data.favor = [];
            for(let i = 0; i< listChecked.length; i++) {
                data.favor[i] = listChecked.eq(i).val();
            }
            sendRequest();
        });
        
        $("input[name='gender']").change(function() {
            data.gender = $(this).val();
            sendRequest();
        });

        $("#range-1").mousemove(function() {
            $("#result-range-1").text($("#range-1").val());
        });

        $("#ageSubmit").click(function() {
            data.age = $("#range-1").val();
            sendRequest();
        });

        // fetch('/api/post1', {
        //     method: "POST",
        //     headers: {
        //         'Content-Type': 'application/json'
        //     },
        //     body: JSON.stringify(myObj) 
        // }).then(response => {return response.json()}).then(result => {
        //     console.log(result);
        // });

        // var data = {
        //     name: "",
        //     school: "",
        //     phone: "",
        //     email: "",
        //     description: "",
        //     nationality: "",
        //     programlang: [],
        //     framework: [],
        //     studentYear: "",
        //     range: []
        // };
        // $("#formTextSubmit").click(function() {
        //     data.name = $("input[name='name']").val();
        //     data.school = $("input[name='school']").val();
        //     data.phone = $("input[name='name']").val();
        //     data.email = $("input[name='email']").val();
        //     data.description = $("textarea[name='description']").val();
        //     sendRequest();
        // });
        // $("#select").change(function() {
        //     data.nationality = $("#select").val();
        //     sendRequest();
        // })
        // $("input[name='programlang']").change(function() {
        //     const listChecked = $("input[name='programlang']:checked");
        //     data.programlang = [];
        //     for(let i = 0; i< listChecked.length; i++) {
        //         data.programlang[i] = listChecked.eq(i).val();
        //     }
        //     sendRequest();
        // });
        // $("input[name='framework']").change(function() {
        //     const listChecked = $("input[name='framework']:checked");
        //     data.framework = [];
        //     for(let i = 0; i< listChecked.length; i++) {
        //         data.framework[i] = listChecked.eq(i).val();
        //     }
        //     sendRequest();
        // });
        // $("input[name='studentYear']").change(function() {
        //     data.studentYear = $(this).val();
        //     sendRequest();
        // });
        // $(".form-range").mousemove(function() {
        //     const formRange = $(".form-range");
        //     const length = formRange.length;
        //     for(let i = 0; i < length; i++) {
        //         data.range[i] = formRange.eq(i).val();
        //         $("#result-range-" + (i+1)).text(formRange.eq(i).val());
        //     }
        //     sendRequest();
        // });
        // function sendRequest() {
        //     let request = JSON.stringify(data);
        //     $("#result-client").text(request);
        //     $.ajax({
        //         url: 'test.php',
        //         method: 'get',
        //         data: {
        //             request: request,
        //         },
        //         success: function(data) {
        //             $("#result-status").html('<div class="col-2" style="background-color: rgb(131, 255, 152);">SUCCESS</div>');
        //             let result = JSON.parse(data);
        //             console.log(result);
        //             $("#result-php").text(data);
        //         },
        //         error: function() {
        //             $("#result-status").html('<div class="col-2" style="background-color: rgb(255, 131, 131);">ERROR</div>');
        //         }
        //     });
        // }
    });
</script>
</html>