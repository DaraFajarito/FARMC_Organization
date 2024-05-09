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
                        <hr>
{{--
                        <a href="{{ url('/FOform1_OAM_Committees') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i>
                            Back</a> --}}

                        <div class="captions" style="font-size: smaller">➤ "<b>Please note:</b>  Only 'Female', 'Male', and 'Others' are accepted inputs in the <b>GENDER</b> field. Inputs that starts with lowercase letter such as <span style="color: red"><b> 'male', 'female', and 'others' </b> </span> will not be saved in the database."
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
                                                        <td><input type="date" class="form-control" placeholder="Birthday" name="mem_birth[]" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"></td>
                                                        <td><input type="text" class="form-control" placeholder="Age"
                                                                style="width: 100px" name="mem_age[]" readonly>
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

        function addRow(tableID) {
            var table = document.getElementById(tableID);
            var newRow = table.insertRow();
            var cells = [
                '<input type="text" class="form-control" style="width: 230px;" placeholder="Name" name="mem_name[]">',
                '<input type="text" class="form-control" placeholder="Civil Status" style="width:150px" name="mem_cs[]">',
                '<input type="text" class="form-control" placeholder="Gender" style="width:150px" name="mem_gen[]">',
                '<input type="date" class="form-control" placeholder="Birthday" name="mem_birth[]" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">',
                '<input type="text" class="form-control" placeholder="Age" style="width: 100px" name="mem_age[]">',
                '<input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD" style="width: 130px" name="mem_fourps[]">',
                '<button type="button" onclick="deleteRow(this)" class="btn btn-default"> <i class="icofont icofont-close"></i></button>'
            ];

            for (var i = 0; i < cells.length; i++) {
                var cell = newRow.insertCell(i);
                cell.innerHTML = cells[i];
            }
        }

        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

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
