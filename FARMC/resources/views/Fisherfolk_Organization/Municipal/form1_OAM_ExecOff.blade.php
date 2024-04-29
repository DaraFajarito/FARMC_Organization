<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form 1 - Fisherfolk Organization | BFAR - FARMC</title>
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
                        <a href="{{ url('/FOform1_BasicInfo') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i>
                            Back</a>
                    </div>
                </div>
                @foreach ($exec_off as $exec)
                    <form class="form-inline" method="POST" action="{{ url('/add_ExecOff/' . $exec->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="block form-control-label">4. Officer and
                                                Management</em></label>
                                            <label>4.1 Executive Officers</label>

                                            <table id="dynamic-table">
                                                <thead>
                                                    <tr style="width: 200px; font-size: small;">
                                                        <th>Position</th>
                                                        <th>Name</th>
                                                        <th>Civil Status</th>
                                                        <th>Gender</th>
                                                        <th>Birthday</th>
                                                        <th>Age</th>
                                                        <th>4ps/Ips/SC/PWD</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div style="width: 200px; font-size: small;">Chairperson
                                                            </div>
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_Chair_name"></td>
                                                        &nbsp;
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="chair_cs"></td>
                                                        &nbsp;
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="chair_gen"></td>
                                                        &nbsp;
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="chair_birth">
                                                        </td>
                                                        &nbsp;
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="chair_age">
                                                        </td>
                                                        &nbsp;
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                name="chair_fourps"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div style="font-size: small;" style="width: 200px;">Vice
                                                                Chairperson </div>
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name" name="OAM_EO_Vicechair_name"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status" name="vicechair_cs"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender" name="vicechair_gen"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="vicechair_birth">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="vicechair_age"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD" name="vicechair_fourps"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" style="width: 200px;">Secretary
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name" name="OAM_EO_Sec_name"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status" name="sec_cs"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender" name="sec_gen"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="sec_birth"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="sec_age"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD" name="sec_fourps">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" style="width: 200px;">Treasurer
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name" name="OAM_EO_Treas_name"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status" name="treas_cs"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender" name="treas_gen"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="treas_birth"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="treas_age"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD" name="treas_fourps">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" style="width: 200px;">Auditor
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name" name="OAM_EO_Aud_name"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status" name="aud_cs"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender" name="aud_gen"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="aud_birth"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="aud_age"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD" name="aud_fourps">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" style="width: 200px;">PRO</td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name" name="OAM_EO_PRO_name"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status" name="pro_cs"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender" name="pro_gen"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="pro_birth"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="pro_age"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD" name="pro_fourps">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" style="width: 200px;">
                                                            Sgt-at-Arms</td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name" name="OAM_EO_Sgt_name"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status" name="sgt_cs"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender" name="sgt_gen"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="sgt_birth"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="sgt_age"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD" name="sgt_fourps">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" style="width: 200px;">Others
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name" name="OAM_EO_Other_name"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status" name="other_cs"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender" name="other_gen"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="other_birth"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="other_age"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD" name="other_fourps">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="col-md-12 text-right">
                                        <button type="submit"
                                            class="btn btn-primary">NEXT <i class="icon-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
    </div>

    {{-- <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to submit now?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a href="" class="btn btn-primary">Yes</a>
                </div>
            </div>
        </div>
    </div> --}}
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
