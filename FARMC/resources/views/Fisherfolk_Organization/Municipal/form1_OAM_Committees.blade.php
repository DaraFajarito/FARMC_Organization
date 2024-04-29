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
                        <a href="{{ url('/FOform1_OAM_BoardofDir') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i>
                            Back</a>
                    </div>
                </div>

                @foreach ($committees as $comm)
                    <form class="form-inline" method="POST" action="{{ url('/add_Committees') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group m-r-15">
                                                <label for="" class="block form-control-label"></em></label>
                                                <label>4.3 Committees</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="d-flex align-items-center" style="width: 300px">
                                                            <select name="category" id="category"
                                                                class="js-example-basic-single form-control">
                                                                <optgroup label="Committee">
                                                                    <option value="Membership Committee">Membership
                                                                        Committee
                                                                    </option>
                                                                    <option value="Committee on Education and Research">
                                                                        Committee on Education and Research</option>
                                                                    <option value="Election Committee">Election
                                                                        Committee
                                                                    </option>
                                                                    <option value="Audit Committee">Audit Committee
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
                                                            <td><input id="name" type="text"
                                                                    class="form-control" style="width: 250px;"
                                                                    placeholder="Name" name="name"></td>
                                                            &nbsp;
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 150px;" placeholder="Civil Status"
                                                                    name="civil_status">
                                                            </td>
                                                            &nbsp;
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 100px;" placeholder="Gender"
                                                                    name="gender"></td>
                                                            &nbsp;
                                                            <td><input type="date" class="form-control"
                                                                    placeholder="Birthday" name="birthday"></td>
                                                            &nbsp;
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 60px;" placeholder="Age"
                                                                    name="age"></td>
                                                            &nbsp;
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                    name="fourps">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div style="font-size: small;">Secretary
                                                                </div>
                                                            </td>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" style="width: 250px;"
                                                                    placeholder="Name" name="name1"></td>
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 150px;" placeholder="Civil Status"
                                                                    name="civil_status1">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 100px;" placeholder="Gender"
                                                                    name="gender1"></td>
                                                            <td><input type="date" class="form-control"
                                                                    placeholder="Birthday" name="birthday1"></td>
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 60px;" placeholder="Age"
                                                                    name="age1"></td>
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                    name="fourps1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: small;">Member</td>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" style="width: 250px;"
                                                                    placeholder="Name" name="name2"></td>
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 150px;" placeholder="Civil Status"
                                                                    name="civil_status2">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 100px;" placeholder="Gender"
                                                                    name="gender2"></td>
                                                            <td><input type="date" class="form-control"
                                                                    placeholder="Birthday" name="birthday2"></td>
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 60px;" placeholder="Age"
                                                                    name="age2"></td>
                                                            <td><input type="text" class="form-control"
                                                                    style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                     name="fourps2"></td>
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
                                            <a href="{{ '/FOform1_ListofMem' }}" <button type="button"
                                                class="btn btn-primary">NEXT <i
                                                    class="icon-arrow-right"></i></button></a>
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
