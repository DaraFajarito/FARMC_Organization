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
                        <a href="{{ url('/FOform1_OAM_BoardofDir') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                            Back</a>
                    </div>
                </div>
                <div class="card inline-form-style">
                    <div class="card-header">
                        <div class="card-block">

                            <div class="row">
                                <!-- <div class="col-md-12"> -->
                                <div class="col-md-4">
                                    <div class="form-group m-r-15">

                                        <label for="" class="block form-control-label"></em></label>
                                        <label>4.3 Committees</label>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="d-flex align-items-center" style="width: 300px">
                                                    <!-- Wrap the elements in a div -->
                                                    <select name="category" id="category"
                                                        class="js-example-basic-single form-control">
                                                        <optgroup label="Committee">
                                                            <option value="Membership Committee">Membership Committee
                                                            </option>
                                                            <option value="Committee on Education and Research">
                                                                Committee on Education and Research</option>
                                                            <option value="Election Committee">Election Committee
                                                            </option>
                                                            <option value="Audit Committee">Audit Committee</option>
                                                            <option value="Others: please specify">Others: please
                                                                specify</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <br>
                                                <input type="text" id="otherText" style="display: none;"
                                                    placeholder="Please specify" class="form-control">
                                            </div>
                                        </div>

                                        <table class="table">
                                            <thead>
                                                <tr>
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
                                                        <div style="font-size: small;">Chairperson</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control"
                                                            style="width: 250px;" placeholder="Name"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;"
                                                            placeholder="Civil Status"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 100px;"
                                                            placeholder="Gender"></td>
                                                    &nbsp;
                                                    <td><input type="date" class="form-control"
                                                            placeholder="Birthday"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 60px;"
                                                            placeholder="Age"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;"
                                                            placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div style="font-size: small;">Secretary
                                                        </div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control"
                                                            style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;"
                                                            placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;"
                                                            placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control"
                                                            placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control"
                                                            style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control"
                                                            style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: small;">Member</td>
                                                    <td><input id="name" type="text" class="form-control"
                                                            style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control"
                                                            style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control"
                                                            style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control"
                                                            placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control"
                                                            style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control"
                                                            style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                            <br>
                            <div class="row">
                                <div class="col-md-10 text-center">
                                    <button class="btn btn-primary" type="submit">Add another</button>
                                </div>
                                <div class="col-md-12 text-right">
                                    <a href="{{ '/FOform1_ListofMem' }}" <button type="button" class="btn btn-primary">NEXT <i
                                            class="icon-arrow-right"></i></button></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
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
