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
                        <a href="{{ url('/FOform2MembershipAsset') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>

                @foreach ($officers_commit as $offi)
                    <form class="form-inline" method="POST" action="{{ url ('/Form2_add_Officers1') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="d-flex align-items-center" style="width: 300px">
                                                                <select name="category" id="category"
                                                                    class="js-example-basic-single form-control">
                                                                    <optgroup label="Committee">
                                                                        <option value="Audit & Inventory Committee">
                                                                            Audit &
                                                                            Inventory Committee
                                                                        </option>
                                                                        <option value="Election Committee">
                                                                            Election Committee</option>
                                                                        </option>
                                                                        <option
                                                                            value="Mediation & Concilliation Committee">
                                                                            Mediation & Concilliation Committee
                                                                        </option>
                                                                        <option value="Ethics Committee">Ethics
                                                                            Committee
                                                                        </option>
                                                                        <option value="Audit Committee">Audit
                                                                            Committee
                                                                        </option>
                                                                        <option value="Education Committee">Education
                                                                            Committee
                                                                        </option>
                                                                        <option value="Membership Committee">Membership
                                                                            Committee
                                                                        </option>
                                                                        <option value="Marketing Committee">Marketing
                                                                            Committee
                                                                        </option>
                                                                        <option value="GAD Committee">GAD Committee
                                                                        </option>
                                                                        <option onchange="toggleOtherTextbox()"
                                                                            value="Others: please specify">Others:
                                                                            please
                                                                            specify</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            <br>
                                                            <input type="text" id="otherText" style="width:300px"
                                                                name="other_cat" style="display: none;"
                                                                placeholder="Please specify" class="form-control">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-12" style="margin-bottom: 20px;">
                                                        <table class="table table-bordered smaller-font">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="text-align: center;">
                                                                        Position</th>
                                                                    <th scope="col" style="text-align: center;">Name
                                                                    </th>
                                                                    <th scope="col" style="text-align: center;">Civil
                                                                        Status
                                                                    </th>
                                                                    <th scope="col" style="text-align: center;">
                                                                        Gender</th>
                                                                    <th scope="col" style="text-align: center;">
                                                                        Birthday</th>
                                                                    <th scope="col" style="text-align: center;">Age
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Chairman</td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="chairman_name"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="chair_cs"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="chair_gen"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="date"
                                                                            class="form-control"
                                                                            style="width: 120px; margin: auto;" name="chair_birth" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 80px; margin: auto;" name="chair_age" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Secretary</td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="sec_name"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="sec_cs"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="sec_gen"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="date"
                                                                            class="form-control"
                                                                            style="width: 120px; margin: auto;" name="sec_birth" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 80px; margin: auto;" name="sec_age" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Member</td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="mem_name"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="mem_cs"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 150px; margin: auto;" name="mem_gen"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="date"
                                                                            class="form-control"
                                                                            style="width: 120px; margin: auto;" name="mem_birth" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                                    <td style="text-align: center;"><input
                                                                            id="" type="text"
                                                                            class="form-control"
                                                                            style="width: 80px; margin: auto;" name="mem_age" readonly></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 text-center">
                                                    <button class="btn btn-primary" type="submit">Add
                                                        another</button>
                                                </div>
                                                <div class="col-md-12 text-right">
                                                    @foreach ($officers_commit as $offi)
                                                    <a href="{{ url('/FOform2_OrgStruct/' .$offi->id) }}"> <button
                                                        class="btn btn-primary" type="button">Next <i
                                                                class="icon-arrow-right"></i></button></a>
                                                    @endforeach
                                                </div>
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
        function toggleOtherTextbox() {
            var category = document.getElementById("category");
            var otherText = document.getElementById("otherText");
            if (category.value === "Others: please specify") {
                otherText.style.display = "block";
            } else {
                otherText.style.display = "none";
            }
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
