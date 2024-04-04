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
                        <a href="index.html" class="logo"><img src="{{ asset ('assets/images/Logo_BFAR.png') }}" style=" width: 60px;" alt="logo"></a>
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
                        <a href="{{ url ('/FOform2MembershipAsset1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>

                <!-- <div class="card-header"> -->
                <div class="card inline-form-style">
                    <div class="card-header">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid-material bg-general"><b>IV. &nbsp; OFFICERS:</b></div>
                                    <div class="col-md-12" style="margin-bottom: 20px;">
                                        <table class="table table-bordered smaller-font">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="text-align: center;">Position</th>
                                                    <th scope="col" style="text-align: center;">Name</th>
                                                    <th scope="col" style="text-align: center;">Civil Status</th>
                                                    <th scope="col" style="text-align: center;">Gender</th>
                                                    <th scope="col" style="text-align: center;">Birthday</th>
                                                    <th scope="col" style="text-align: center;">Age</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Board of Directors:</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Chairperson</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Vice-chairperson</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Board Member</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Board Member</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Board Member</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Board Member</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Board Member</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Board Member</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp; Board Member</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>General Manager</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                                <tr>
                                                    <td>Treasurer</td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                    <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                </tr>
                                            </tbody>
                                        </table>



                                    </div>
                                    <div class="col-md-12" style="margin-bottom: 20px;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">Audit and Inventory Committee:</em></small></div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position</th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil Status</th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday</th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Chairman</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Member</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">Election Committee:</em></small></div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position</th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil Status</th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday</th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Chairman</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Member</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">Mediation & Concilliation Committee:</em></small></div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position</th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil Status</th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday</th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Chairman</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Member</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">Education Committee:</em></small></div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position</th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil Status</th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday</th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Chairman</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Member</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">Membership Committee:</em></small></div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position</th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil Status</th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday</th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Chairman</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Member</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">Marketing Committee:</em></small></div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position</th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil Status</th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday</th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Chairman</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Member</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="grid-material bg-general">GAD Committee:</em></small></div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table table-bordered smaller-font">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position</th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil Status</th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday</th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Chairman</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Member</td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto; "></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 150px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="date" class="form-control" style="width: 120px; margin: auto;"></td>
                                                            <td style="text-align: center;"><input id="" type="text" class="form-control" style="width: 80px; margin: auto;"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ url (('FOform2OrgStructure1')) }}"> <button class="btn btn-primary">Next <i class="icon-arrow-right"></i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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