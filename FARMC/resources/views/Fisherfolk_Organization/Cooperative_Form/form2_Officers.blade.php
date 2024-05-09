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
                        {{-- <a href="{{ url('/FOform2MembershipAsset') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i> Back</a> --}}
                    </div>
                </div>

                @foreach ($fo_officers as $officer)
                    <form class="form-inline" method="POST" action="{{ url('/Form2_add_Officers/' . $officer->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general"><b>IV. &nbsp; OFFICERS:</b></div>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table">
                                                    <thead style="font-size: 13px">
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position</th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil Status
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday</th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Board of Directors:</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BoardofDir_name1"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;" name="cs1">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;" name="gen1">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;" name="birth1" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age1" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Chairperson</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="Chairperson_name2"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;" name="cs2">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;" name="gen2">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth2" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age2" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Vice-chairperson</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="Vchair_name3"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs3"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen3"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth3" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age3" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name4"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs4"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen4"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth4" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age4" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name5"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs5"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen5"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth5" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age5" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name6"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs6"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen6"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth6" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age6" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name7"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs7"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen7"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth7" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age7" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name8"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs8"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen8"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth8" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age8" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name9"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs9"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen9"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth9" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age9" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name10"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs10"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen10"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth10" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age10" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>General Manager</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="GenMan_name11"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs11"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen11"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth11" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age11" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="Sec_name12"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs12"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen12"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth12" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age12" readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Treasurer</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="Treas_name13"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs13"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen13"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth13" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 80px; margin: auto;" name="age13" readonly>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
        function calculateAge(birthDateInput, ageInput) {
            var birthDate = new Date(birthDateInput.value);
            var today = new Date();
            var age = today.getFullYear() - birthDate.getFullYear();
            var monthDiff = today.getMonth() - birthDate.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            ageInput.value = age;
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
