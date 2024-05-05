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
                        <a href="{{ url('/Form2_add_Membership') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>
                @foreach ($members as $memb)
                    <form class="form-inline" method="POST" action="{{ url('/Form2_add_Membership/' . $memb->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general"><b>II. &nbsp; MEMBERSHIP</b></div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">a. &nbsp; Common Bond:</div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <br>
                                                <div class="form-radio">
                                                    <div class="radio">
                                                        <div class="col-md-3">
                                                            <label>
                                                                <input type="radio" name="common_bond"
                                                                    value="Institutional" /><i
                                                                    class="helper"></i>Institutional
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>
                                                                <input type="radio" name="common_bond"
                                                                    value="Occupational" /><i
                                                                    class="helper"></i>Occupational
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>
                                                                <input type="radio" name="common_bond"
                                                                    value="Residential" /><i
                                                                    class="helper"></i>Residential
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>
                                                                <input type="radio" name="common_bond"
                                                                    value="Associational" /><i
                                                                    class="helper"></i>Associational
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">b. &nbsp; Composition of
                                                    Membership:</div>
                                            </div>

                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;"
                                                                colspan="1"></th>
                                                            <th scope="col" style="text-align: center;"
                                                                colspan="3">For Primary</th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Particulars
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Male</th>
                                                            <th scope="col" style="text-align: center;">Female</th>
                                                            <th scope="col" style="text-align: center;">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> Number of Regular members</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="CoM_NRMem_male"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="NRMem_female"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="NRMem_total" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number of Association members</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="CoM_NAMem_male"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="NAMem_female"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="NAMem_total" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total number of members</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="CoM_TotalMem_male" readonly></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="TMem_female" readonly></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="TMem_total" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Target / Potential Membership (current year)</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="CoM_TargetMem_male"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="TarMem_female"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="TarMem_total"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">Total Membership</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="CoM_Total_male"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="Total_female"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="Total_total"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">c. &nbsp; Number of Employees:
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;"
                                                                colspan="1"></th>
                                                            <th scope="col" style="text-align: center;"
                                                                colspan="3">Current Year</th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Number of
                                                                Employees</th>
                                                            <th scope="col" style="text-align: center;">Male</th>
                                                            <th scope="col" style="text-align: center;">Female</th>
                                                            <th scope="col" style="text-align: center;">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> Full-time</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="NoE_Fulltime_male"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="Fulltime_female"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="Fulltime_total" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Part-time</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="NoE_Parttime_male"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="Parttime_female"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="Parttime_total" readonly></td>
                                                        </tr>


                                                        <tr>
                                                            <td style="text-align: center;">Total Employee</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="NoE_Total_male" readonly></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="TotalEmp_female" readonly></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 100px; margin: auto;"
                                                                    name="TotalEmp_total" readonly></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="grid-material bg-general"><b>III. &nbsp; ASSETS:</b></div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12" style="margin-bottom: 25px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Total Assets</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control"
                                                            style="width: 100%;" placeholder="" name="total_assets">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <button class="btn btn-primary" type="submit"> Next <i
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
        document.addEventListener('DOMContentLoaded', function() {
            const nrMaleInput = document.querySelector('input[name="CoM_NRMem_male"]');
            const nrFemaleInput = document.querySelector('input[name="NRMem_female"]');
            const nrTotalInput = document.querySelector('input[name="NRMem_total"]');

            const naMaleInput = document.querySelector('input[name="CoM_NAMem_male"]');
            const naFemaleInput = document.querySelector('input[name="NAMem_female"]');
            const naTotalInput = document.querySelector('input[name="NAMem_total"]');

            const totalMaleInput = document.querySelector('input[name="CoM_TotalMem_male"]');
            const totalFemaleInput = document.querySelector('input[name="TMem_female"]');
            const totalTotalInput = document.querySelector('input[name="TMem_total"]');

            function calculateAndSetTotal(maleInput, femaleInput, totalInput) {
                const maleCount = parseInt(maleInput.value) || 0;
                const femaleCount = parseInt(femaleInput.value) || 0;
                totalInput.value = maleCount + femaleCount;
            }

            function calculateTotalMembers() {
                const totalMaleCount = (parseInt(nrMaleInput.value) || 0) + (parseInt(naMaleInput.value) || 0);
                const totalFemaleCount = (parseInt(nrFemaleInput.value) || 0) + (parseInt(naFemaleInput.value) ||
                0);
                totalMaleInput.value = totalMaleCount;
                totalFemaleInput.value = totalFemaleCount;
                totalTotalInput.value = totalMaleCount + totalFemaleCount;
            }

            nrMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
                calculateTotalMembers();
            });

            nrFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
                calculateTotalMembers();
            });

            naMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
                calculateTotalMembers();
            });

            naFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
                calculateTotalMembers();
            });

            // Initial calculation
            calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
            calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
            calculateTotalMembers();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ftMaleInput = document.querySelector('input[name="NoE_Fulltime_male"]');
            const ftFemaleInput = document.querySelector('input[name="Fulltime_female"]');
            const ftTotalInput = document.querySelector('input[name="Fulltime_total"]');

            const ptMaleInput = document.querySelector('input[name="NoE_Parttime_male"]');
            const ptFemaleInput = document.querySelector('input[name="Parttime_female"]');
            const ptTotalInput = document.querySelector('input[name="Parttime_total"]');

            const totalMaleInput = document.querySelector('input[name="NoE_Total_male"]');
            const totalFemaleInput = document.querySelector('input[name="TotalEmp_female"]');
            const totalTotalInput = document.querySelector('input[name="TotalEmp_total"]');

            function calculateAndSetTotal(maleInput, femaleInput, totalInput) {
                const maleCount = parseInt(maleInput.value) || 0;
                const femaleCount = parseInt(femaleInput.value) || 0;
                totalInput.value = maleCount + femaleCount;
            }

            function calculateTotalEmployees() {
                const totalMaleCount = (parseInt(ftMaleInput.value) || 0) + (parseInt(ptMaleInput.value) || 0);
                const totalFemaleCount = (parseInt(ftFemaleInput.value) || 0) + (parseInt(ptFemaleInput.value) ||
                0);
                totalMaleInput.value = totalMaleCount;
                totalFemaleInput.value = totalFemaleCount;
                totalTotalInput.value = totalMaleCount + totalFemaleCount;
            }

            ftMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
                calculateTotalEmployees();
            });

            ftFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
                calculateTotalEmployees();
            });

            ptMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
                calculateTotalEmployees();
            });

            ptFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
                calculateTotalEmployees();
            });

            // Initial calculation
            calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
            calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
            calculateTotalEmployees();
        });
    </script>


</body>

</html>
