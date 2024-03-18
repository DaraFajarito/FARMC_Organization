<!DOCTYPE html>
<html lang="en">

<head>
    <title>Committee | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!--Date Picker Material Icon Css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset ('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/select2/dist/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/select2/css/s2-docs.css') }}">

    <!-- Multi Select css -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/bootstrap-multiselect/dist/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset ('assets/plugins/multiselect/css/multi-select.css') }}" />

    <!-- Tags css -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" />

    <!-- bash syntaxhighlighter css -->
    <link type="text/css" rel="stylesheet" href="{{ asset ('assets/plugins/syntaxhighlighter/styles/shCoreDjango.css') }}   " />

</head>

<body>
    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

    <div class="wrapper">
        <!-- Navbar-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <a href="index.html" class="logo"><img src="{{ asset ('assets/images/Logo_BFAR.png') }}" style=" width: 60px;" alt="logo"></a>
                        <h4>M/C FARMC Profile | <small>PROFILE FORM</small></h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 2</a>
                            </li>
                        </ol>
                        <br>

                        <a href="{{ url ('/fisherfolkrep') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-block">
                                    <hr>
                                    <div class="grid-material bg-general"><b>B. MFARMC Committee</b>
                                    </div>
                                    <hr>

                                    <form method="post" action="{{url('/add-committee')}}" enctype="multipart/form-data" id="yourFormId">
                                        @csrf
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <select name="category" class="js-example-basic-single form-control">
                                                        <optgroup label="Committee  ">
                                                            <option value="Law Enforcement & Prosecution">Law Enforcement & Prosecution </option>
                                                            <option value="Rehabilitation and Conservation">Rehabilitation and Conservation</option>
                                                            <option value="Livelihood">Livelihood</option>
                                                            <option value="Research Education and Training">Research Education and Training</option>
                                                            <option value="Legislation">Legislation</option>
                                                            <option value="Land and Water Use">Land and Water Use</option>
                                                            <option value="Fisherfol Resettlement">Fisherfol Resettlement</option>
                                                            <option value="Other, if any">Other, if any</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col-md-9"></div>
                                            </div>
                                            <br><br>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Position</th>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Office / Organization</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Chairperson</td>
                                                        <td><input type="text" name="chairperson_name" id="h-email" class="form-control" placeholder=""></td>
                                                        <td><input type="text" name="chairperson_org" id="h-email" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Secretary</td>
                                                        <td><input type="text" name="sec_name" id="h-email" class="form-control" placeholder=""></td>
                                                        <td><input type="text" name="sec_org" id="h-email" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Member</td>
                                                        <td><input type="text" name="member_name" id="h-email" class="form-control" placeholder=""></td>
                                                        <td><input type="text" name="member_org" id="h-email" class="form-control" placeholder=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 text-center">
                                                <button class="btn btn-primary" type="submit">Add another</button>
                                            </div>
                                            <div class="col-md-2 text-right">
                                                <a href="{{ url ('/secretariat-form') }}" class="btn btn-primary">Next<i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- </div> -->

    <!-- Select 2 js -->
    <script src="{{ asset ('assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- Max-Length js -->
    <script src="{{ asset ('assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js') }}"></script>

    <!-- Multi Select js -->
    <script src="{{ asset ('assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset ('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('assets/plugins/multi-select/js/jquery.quicksearch.js') }}"></script>

    <!-- bootstrap range picker -->
    <script type="text/javascript" src="{{ asset ('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- custom js -->
    <script type="text/javascript" src="{{ asset ('assets/pages/advance-form.js') }}"></script>

    <script>
        function submitFormAndAddAnother1() {
            // Submit the form
            document.getElementById("FormId").submit();
            // Clear the form fields
            document.getElementById("FormId").reset();
        }
    </script>

    <script>
        document.querySelectorAll('input[name="optionsRadios"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'IPoption') {
                    document.getElementById('textBoxContainer').style.display = 'block';
                } else {
                    document.getElementById('textBoxContainer').style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>