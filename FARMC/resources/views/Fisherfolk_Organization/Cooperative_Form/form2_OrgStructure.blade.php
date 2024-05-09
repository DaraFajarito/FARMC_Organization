<!DOCTYPE html>
<html lang="en">

<head>
    <title>General Information - Fisherfolk Organization | BFAR - FARMC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            /* White background */
        }

        table {
            border-collapse: collapse;
            width: calc(300% - 10px);
            /* Adjusted width */
            margin: 20px auto;
            /* Centered horizontally */
        }

        th,
        td {
            border: none;
            /* Remove borders */
            padding: 0;
        }

        th {
            background-color: #f0f0f0;
            /* Light gray background for headers */
            padding: 8px;
        }

        .form-group {
            margin-right: 10px;
        }

        input[type="text"] {
            width: calc(105% - 10px);
            /* Adjusted width for text inputs */
            box-sizing: border-box;
            padding: 6px;
            margin-bottom: 10px;
        }

        button {
            margin-top: -5px;
            font-size: smaller;
        }

        .smaller-font th,
        .smaller-font td,
        .smaller-font input {
            font-size: 15px;
            /* Adjust the font size as needed */
        }

        input.form-control {
            border: 1px solid #AAAAAA;
        }
    </style>


</head>

<body>

    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}"
                                style=" width: 60px;" alt="logo"></a>
                        <h4>M/C FARMC Municipal | <small>Fisherfolk Association Profile</small></h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Fisherfolk Organization | Municipal </a>
                            </li>
                        </ol>
                        <br>
                        {{-- <a href="{{ url('/FOform2Officers') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i> Back</a> --}}
                    </div>
                </div>

                @foreach ($orgstruct as $orgs)
                    <form class="form-inline" method="POST" action="{{ url('/Form2_add_OrgStruct/'. $orgs->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="grid-material bg-general"><b>VI. &nbsp; ORGANIZATIONAL
                                                    STRUCTURE</b></div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general">Organizational Structure:
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input id="" type="file" class="form-control"
                                                            style="width: 100%" placeholder="" name="orgstruct_file">

                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="grid-material bg-general"><b>VI. &nbsp; CONTACT DETAILS</b>
                                            </div>
                                            <br>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Name:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 100%;" placeholder="" name="CD_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Designation:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 100%;" placeholder="" name="CD_design">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Tell / Cell No.:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 100%;" placeholder="" name="CD_tell">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Email Address:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="email" class="form-control"
                                                            style="width: 100%;" placeholder="" name="CD_email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Facebook Account:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 100%;" placeholder="" name="CD_FBacc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                 <button class="btn btn-primary" type="submit">Next <i
                                                            class="icon-arrow-right"></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
    </div>

    <script>
        document.querySelectorAll('input[name="culturalCommunity"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('culturalCommunityDetails').style.display = 'block';
                } else {
                    document.getElementById('culturalCommunityDetails').style.display = 'none';
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('input[name="Disability"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('DisabilityDetails').style.display = 'block';
                } else {
                    document.getElementById('DisabilityDetails').style.display = 'none';
                }
            });
        });
    </script>

    <script>
        function submitFormAndAddAnother1() {
            // Submit the form
            document.getElementById("FormId").submit();
            // Clear the form fields
            document.getElementById("FormId").reset();
        }
    </script>

    <script>
        function toggleTextBox(radioId) {
            var textBoxGroup = document.getElementById('textBoxGroup');
            if (radioId === 'christianRadio') {
                textBoxGroup.style.display = 'block';
            } else {
                textBoxGroup.style.display = 'none';
            }
        }
    </script>

    <script>
        function showTertiaryTextbox() {
            document.getElementById('tertiaryTextboxGroup').style.display = 'block';
            document.getElementById('tesdaTextboxGroup').style.display = 'none';
        }

        function showTesdaTextbox() {
            document.getElementById('tesdaTextboxGroup').style.display = 'block';
            document.getElementById('tertiaryTextboxGroup').style.display = 'none';
        }
    </script>

    <script>
        function addRow(dytable) {
            var table = document.getElementById(dytable);
            var tableBody = table.querySelector('tbody');
            var firstRow = tableBody.firstElementChild.cloneNode(true);
            tableBody.appendChild(firstRow);
        }
    </script>

    <script>
        function addRow(dynamic) {
            var table = document.getElementById(dynamic);
            var tableBody = table.querySelector('tbody');
            var firstRow = tableBody.firstElementChild.cloneNode(true);
            tableBody.appendChild(firstRow);
        }
    </script>
</body>

</html>
