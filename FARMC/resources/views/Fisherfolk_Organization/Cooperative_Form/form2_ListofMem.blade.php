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
                        {{-- <a href="{{ url('/FOform2Officers_1') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i> Back</a> --}}

                                <div><small> <b>Reminder:</b> </small></div>
                                <div class="captions" style="font-size: smaller">➤ Only <span style="color: green"><b>
                                            'Female', 'Male', and 'Others' </b></span> are accepted inputs in the <b>GENDER</b>
                                    field. Inputs that starts with lowercase letter such as <span style="color: red"><b> 'male',
                                            'female', and 'others' </b> </span> will not be saved in the database.
                                    <div class="captions" style="font-size: ">➤ Ensure that all members of the association are
                                        correctly filled out. Editing is not available in this section. Adding or deleting
                                        members is not permitted.</div>
                                </div>
                    </div>
                </div>
                @foreach ($listofMem as $list)
                    <form class="form-inline" method="POST" action="{{ url('/Form2_add_ListofMem/' . $list->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general"><b>VI. &nbsp; LIST OF MEMBERSHIP </b>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group m-r-15">
                                                        <table class="table" id="dynamic">
                                                            <thead>
                                                                <tr style="width: 200px; font-size: small;">
                                                                    <th>Name</th>
                                                                    <th>Type of Membership</th>
                                                                    <th>Civil Status</th>
                                                                    <th>Gender</th>
                                                                    <th>Birthday</th>
                                                                    <th>Age</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="dytable-body">
                                                                <tr>
                                                                    <td><input id="name" type="text"
                                                                            class="form-control" style="width: 230px;"
                                                                            placeholder="Name" name="listmem_name[]">
                                                                    </td>
                                                                    <td><input type="text" class="form-control"
                                                                            placeholder="Type of Membership"
                                                                            style="width:150px" name="listmem_type[]">
                                                                    </td>
                                                                    <td><input type="text" class="form-control"
                                                                            placeholder="Civil Status"
                                                                            style="width:150px" name="listmem_cs[]">
                                                                    </td>
                                                                    <td><input type="text" class="form-control"
                                                                            placeholder="Gender" style="width:100px"
                                                                            name="listmem_gen[]"></td>
                                                                    <td><input type="date" class="form-control"
                                                                            placeholder="Birthday"
                                                                            name="listmem_birth[]"
                                                                            onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                                    </td>
                                                                    <td><input type="text" class="form-control"
                                                                            placeholder="Age" name="listmem_age[]"
                                                                            readonly></td>
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

                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <button class="btn btn-primary" type="submit">Next <i
                                                    class="icon-arrow-right"></i></button>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#8cc63f',
                iconColor: '#ffffff',
                customClass: {
                    title: 'text-white',
                    content: 'text-white'
                }
            });
        </script>
    @endif

    @if (session('failed'))
        <script>
            Swal.fire({
                icon: 'failed',
                title: 'failed!',
                text: '{{ session('failed') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#dc3545',
                iconColor: '#ffffff',
                customClass: {
                    title: 'text-white',
                    content: 'text-white'
                }
            });
        </script>
    @endif

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
                '<input type="text" class="form-control" style="width: 230px;" placeholder="Name" name="listmem_name[]">',
                '<input type="text" class="form-control" placeholder="Type of Membership" style="width:150px" name="listmem_type[]">',
                '<input type="text" class="form-control" placeholder="Civil Status" style="width:150px" name="listmem_cs[]">',
                '<input type="text" class="form-control" placeholder="Gender" style="width:100px" name="listmem_gen[]">',
                '<input type="date" class="form-control" placeholder="Birthday" name="listmem_birth[]" onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">',
                '<input type="text" class="form-control" placeholder="Age" name="listmem_age[]">'
            ];

            for (var i = 0; i < cells.length; i++) {
                var cell = newRow.insertCell(i);
                cell.innerHTML = cells[i];
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
