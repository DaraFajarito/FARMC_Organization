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

                        <a href="{{ url('/FOform1_OAM_Committees') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i>
                            Back</a>
                    </div>
                </div>
                <form class="form-inline" method="POST" action="{{ url('/add_ListofMembers') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card inline-form-style">
                        <div class="card-header">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group m-r-15">
                                            <label for="" class="block form-control-label">5. List of
                                                Members</em></label>
                                            <table class="table" id="dynamic">
                                                <thead>
                                                    <tr style="width: 200px; font-size: small;">
                                                        <th>Name</th>
                                                        <th>Civil Status</th>
                                                        <th>Gender</th>
                                                        <th>Birthday</th>
                                                        <th>Age</th>
                                                        <th>4ps/Ips/SC/PWD</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody id="dytable-body">
                                                    <tr>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 230px;" placeholder="Name"
                                                                name="mem_name[]"></td>

                                                        <td><input type="text" class="form-control"
                                                                placeholder="Civil Status" style="width:150px"
                                                                name="mem_cs[]"></td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Gender" style="width:150px"
                                                                name="mem_gen[]">
                                                        </td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="mem_birth[]"></td>
                                                        <td><input type="text" class="form-control" placeholder="Age"
                                                                style="width: 100px" name="mem_age[]">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="4ps/Ips/SC/PWD"  style="width: 130px" name="mem_fourps[]"></td>

                                                        <td><button type="button" onclick="deleteRow(this)"
                                                                class="btn btn-default"> <i class="icofont icofont-close"></i></button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-center">
                                                <button onclick="addRow('dynamic')" type="button"
                                                    class="btn btn-primary">Add
                                                    Row</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">NEXT <i
                                            class="icon-arrow-right"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function addRow(dytable) {
            var table = document.getElementById(dytable);
            var tableBody = table.querySelector('tbody');
            var newRow = tableBody.firstElementChild.cloneNode(true);

            // Reset input values in the cloned row
            newRow.querySelectorAll('input').forEach(function(input) {
                input.value = '';
            });

            // Reset input values in the cloned row
            newRow.querySelectorAll('input').forEach(function(input) {
                input.value = '';
            });


            tableBody.appendChild(newRow);
        }

        function deleteRow(button) {
            var row = button.closest('tr');
            row.remove();
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
