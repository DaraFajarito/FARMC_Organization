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
                        <a href="{{ url('/FOform1_ExecOff') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i>
                            Back</a>
                    </div>
                </div>
                @foreach ($boardofDir as $board)
                    <form class="form-inline" method="POST" action="{{ url('/add_BoardofDir/' . $board->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group m-r-15">
                                                <label for="" class="block form-control-label"></label>
                                                <label>4.2 Board of Directors/Trustees</label>
                                                <table style="width: 1060px;">
                                                    <thead>
                                                        <tr style="width: 200px; font-size: small;">
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
                                                            <td><input id="name" type="text"
                                                                    class="form-control" style="width: 200px;"
                                                                    placeholder="Name" name="boardofDir_name1"></td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" name="boardofDir_cs1">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" name="boardofDir_gen1">
                                                            </td>
                                                            <td><input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth1"></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Age" name="boardofDir_age1">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" style="width: 200px;"
                                                                    placeholder="Name" name="boardofDir_name2"></td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" name="boardofDir_cs2">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" name="boardofDir_gen2">
                                                            </td>
                                                            <td><input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth2"></td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Age" name="boardofDir_age2">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                class="form-control" style="width: 200px;"
                                                                placeholder="Name" name="boardofDir_name3"></td>

                                                        <td><input type="text" class="form-control"
                                                                placeholder="Civil Status" name="boardofDir_cs3">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Gender" name="boardofDir_gen3">
                                                        </td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="boardofDir_birth3"></td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Age" name="boardofDir_age3">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="4ps/Ips/SC/PWD"
                                                                name="boardofDir_fourps3"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                class="form-control" style="width: 200px;"
                                                                placeholder="Name" name="boardofDir_name4"></td>

                                                        <td><input type="text" class="form-control"
                                                                placeholder="Civil Status" name="boardofDir_cs4">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Gender" name="boardofDir_gen4">
                                                        </td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="boardofDir_birth4"></td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Age" name="boardofDir_age4">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="4ps/Ips/SC/PWD"
                                                                name="boardofDir_fourps4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                class="form-control" style="width: 200px;"
                                                                placeholder="Name" name="boardofDir_name5"></td>

                                                        <td><input type="text" class="form-control"
                                                                placeholder="Civil Status" name="boardofDir_cs5">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Gender" name="boardofDir_gen5">
                                                        </td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="boardofDir_birth5"></td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Age" name="boardofDir_age5">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="4ps/Ips/SC/PWD"
                                                                name="boardofDir_fourps5"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                class="form-control" style="width: 200px;"
                                                                placeholder="Name" name="boardofDir_name6"></td>

                                                        <td><input type="text" class="form-control"
                                                                placeholder="Civil Status" name="boardofDir_cs6">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Gender" name="boardofDir_gen6">
                                                        </td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="boardofDir_birth6"></td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Age" name="boardofDir_age6">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="4ps/Ips/SC/PWD"
                                                                name="boardofDir_fourps6"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                class="form-control" style="width: 200px;"
                                                                placeholder="Name" name="boardofDir_name7"></td>

                                                        <td><input type="text" class="form-control"
                                                                placeholder="Civil Status" name="boardofDir_cs7">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Gender" name="boardofDir_gen7">
                                                        </td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="boardofDir_birth7"></td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Age" name="boardofDir_age7">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="4ps/Ips/SC/PWD"
                                                                name="boardofDir_fourps7"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                class="form-control" style="width: 200px;"
                                                                placeholder="Name" name="boardofDir_name8"></td>

                                                        <td><input type="text" class="form-control"
                                                                placeholder="Civil Status" name="boardofDir_cs8">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Gender" name="boardofDir_gen8">
                                                        </td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="boardofDir_birth8"></td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="Age" name="boardofDir_age8">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                placeholder="4ps/Ips/SC/PWD"
                                                                name="boardofDir_fourps8"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="col-md-12 text-right">
                                       <button type="submit"
                                            class="btn btn-primary">NEXT <i class="icon-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
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

    {{-- <script>
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
    </script> --}}
</body>

</html>