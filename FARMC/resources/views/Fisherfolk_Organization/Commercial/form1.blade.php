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
                        <a href="{{ url ('/FOCommercial') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>

                <!-- <div class="card-header"> -->
                    <div class="card inline-form-style">
                        <br><br>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>FISHERFOLK ASSOCIATION PROFILE</b></div>
                        <div class="captions" style="text-align:center; font-size:20px"> ( As of
                            <span style="display:inline-block;"><input id="" type="email" class="md-form-control" style="width: 250px; text-align:center;"></span>)
                        </div>
                        <br>
                        <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                        </div>

                        <!-- <div class="card-block"> -->

                        <div class="card-header">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-8">
                                        <form class="form-inline">
                                            <div class="form-group m-r-15">
                                                <div class="grid-material bg-general"><b>1. Name of Organization</b></div>
                                                <div class="col-md-12">
                                                    <input id="" type="text" class="form-control" style="width: 930px;" placeholder="">
                                                <br><br>

                                                <div class="form-group m-r-15">
                                                        <label for="" class="block form-control-label">Address</em></label>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" type="text" class="form-control" style="width: 300px;" placeholder="">
                                                            <label for=""><small> Barangay </small></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" type="text" class="form-control" style="width: 300px;" placeholder="">
                                                            <label for=""><small> City / Municipality </small></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" type="text" class="form-control" style="width: 300px;" placeholder="">
                                                            <label for=""><small> Province </small></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>

                            </div>
                            <hr>
                            <!-- <div class="card-block"> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="grid-material bg-general"><em>Sector Represented</em></div>
                                    <form>
                                        <br>
                                        <div class="col-md-3">
                                            <label><input type="radio" name="group1"> Municipal</label><br>
                                            <label><input type="radio" name="group1"> Fishworker</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label><input type="radio" name="group1"> Commercial</label><br>
                                            <label><input type="radio" name="group1"> Women</label>
                                        </div>
                                        <div class="col-md-2">
                                            <label><input type="radio" name="group1"> Youth</label><br>
                                            <label><input type="radio" name="group1"> IP's</label>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Adjusted width and CSS white-space property -->
                                            <labelwhite-space: nowrap;><input type="radio" name="group1"> Other's (Please Specify)</label>
                                                <br>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" placeholder="" style="width: 200px;">
                                                </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </form>
                        <hr>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="grid-material bg-general"><b>2. Status of Registration</b></div>
                                    <br>
                                    <form>
                                        <div class="form-radio">
                                            <div class="radio radio-inline">

                                                <label>
                                                    <input type="radio" name="radio" c /><i class="helper"></i>Yes
                                                </label>
                                                <label>
                                                    <input type="radio" name="radio" /><i class="helper"></i>No
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                        <div class="grid-material bg-general"><small><em>Specify,if yes</em></small></div>
                                        <br>
                                        <form>
                                            <div class="form-radio">
                                                <div class="radio radio-inline">

                                                    <label>
                                                        <input type="radio" name="radio" /><i class="helper"></i>DOLE
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radio" /><i class="helper"></i>SEC
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radio" /><i class="helper"></i>CDA
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radio" /><i class="helper"></i>Others
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                        <div class="grid-material bg-general"><em></em></div>

                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="reg_no">Registration No.</label>
                                                <input id="reg_no" type="text" class="form-control" placeholder="Registration No.">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="date">Date Registered</label><br>
                                                <input id="date" type="date" class="form-control" placeholder="Date Registered">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="grid-material bg-general"><b>3. Status of Accreditation</b></div>
                                    <br>
                                    <form>
                                        <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="radio" c /><i class="helper"></i>Yes
                                                </label>
                                                <label>
                                                    <input type="radio" name="radio" /><i class="helper"></i>No
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                        <div class="grid-material bg-general"><small><em>Specify, if yes</em></small></div>
                                        <br>
                                        <form>
                                            <div class="form-radio">
                                                <div class="radio radio-inline">

                                                    <label>
                                                        <input type="radio" name="radio" c /><i class="helper"></i>Municipal
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radio" /><i class="helper"></i>Provincial
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radio" /><i class="helper"></i>National
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="radio" /><i class="helper"></i>Others
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                        <div class="grid-material bg-general"><em></em></div>
                                        <br>
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="reg_no">Accredition No.</label>
                                                <input id="reg_no" type="text" class="form-control" placeholder="Accredition No.">
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label for="date">Date Accredited</label>
                                                <input id="date" type="text" class="form-control" placeholder="Date Accredited">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <hr>

                            <div class="row">
                                <div class="col-md-4">
                                    <!-- <div class="form-group m-r-15"> -->
                                    <!-- <hr> -->
                                    <label for="" class="block form-control-label">4. Officer and Management</em></label>
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
                                                    <div style="width: 200px; font-size: small;">Chairperson</div>
                                                </td>
                                                <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                &nbsp;
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                &nbsp;
                                                <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                &nbsp;
                                                <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                &nbsp;
                                                <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                &nbsp;
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="font-size: small;" style="width: 200px;">Vice Chairperson </div>
                                                </td>
                                                <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: small;" style="width: 200px;">Secretary</td>
                                                <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: small;" style="width: 200px;">Treasurer</td>
                                                <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: small;" style="width: 200px;">Auditor</td>
                                                <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: small;" style="width: 200px;">PRO</td>
                                                <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: small;" style="width: 200px;">Sgt-at-Arms</td>
                                                <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: small;" style="width: 200px;">Others</td>
                                                <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- </div> -->
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group m-r-15">
                                        <label for="" class="block form-control-label"></label>
                                        <label>4.2 Board of Directors/Trustees</label>
                                        <table id="dytable" style="width: 1060px;">
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
                                            <tbody id="dytable-body">
                                                <tr>
                                                    <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>

                                                    <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            <button onclick="addRow('dytable')" class="btn btn-primary">Add Row</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <!-- <div class="col-md-12"> -->
                                <div class="col-md-4">
                                    <div class="form-group m-r-15">

                                        <label for="" class="block form-control-label"></em></label>
                                        <label>4.3 Committees</label>
                                        <!-- <div class="col-md-12"> -->
                                        <div> <!-- Added a margin top to create space -->
                                            <label style="font-size: smaller;"><b>4.3.1 Membership Committee </b></label>
                                        </div>

                                        <table id="dynamic-table">
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
                                                        <div style="width: 200px; font-size: small;">Chairperson</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    &nbsp;
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div style="font-size: small;" style="width: 200px;">Secretary</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: small;" style="width: 200px;">Member</td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div> <!-- Added a margin top to create space -->
                                            <label style="font-size: smaller;"><b>4.3.2 Committee on Education and Research </b></label>
                                        </div>

                                        <table id="dynamic-table">
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
                                                        <div style="width: 200px; font-size: small;">Chairperson</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    &nbsp;
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div style="font-size: small;" style="width: 200px;">Secretary</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: small;" style="width: 200px;">Member</td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div>
                                            <label style="font-size: smaller;"><b>4.3.3 Election Committee</b></label>
                                        </div>

                                        <table id="dynamic-table">
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
                                                        <div style="width: 200px; font-size: small;">Chairperson</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    &nbsp;
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div style="font-size: small;" style="width: 200px;">Secretary</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: small;" style="width: 200px;">Member</td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div> <!-- Added a margin top to create space -->
                                            <label style="font-size: smaller;"><b>4.3.4 Audit Committee</b></label>
                                        </div>

                                        <table id="dynamic-table">
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
                                                        <div style="width: 200px; font-size: small;">Chairperson</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    &nbsp;
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div style="font-size: small;" style="width: 200px;">Secretary</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: small;" style="width: 200px;">Member</td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div> <!-- Added a margin top to create space -->
                                            <label style="font-size: smaller;"><b>4.3.5 Others: please specify</b></label>
                                        </div>

                                        <table id="dynamic-table">
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
                                                        <div style="width: 200px; font-size: small;">Chairperson</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    &nbsp;
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    &nbsp;
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div style="font-size: small;" style="width: 200px;">Secretary</div>
                                                    </td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: small;" style="width: 200px;">Member</td>
                                                    <td><input id="name" type="text" class="form-control" style="width: 250px;" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" style="width: 100px;" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" style="width: 60px;" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" style="width: 150px;" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group m-r-15">
                                        <hr>
                                        <label for="" class="block form-control-label">5. List of Members</em></label>
                                        <table id="dynamic" style="width: 1060px;">
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
                                            <tbody id="dytable-body">
                                                <tr>
                                                    <td><input id="name" type="text" class="form-control" style="width: 200px;" placeholder="Name"></td>

                                                    <td><input type="text" class="form-control" placeholder="Civil Status"></td>
                                                    <td><input type="text" class="form-control" placeholder="Gender"></td>
                                                    <td><input type="date" class="form-control" placeholder="Birthday"></td>
                                                    <td><input type="text" class="form-control" placeholder="Age"></td>
                                                    <td><input type="text" class="form-control" placeholder="4ps/Ips/SC/PWD"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            <button onclick="addRow('dynamic')" class="btn btn-primary">Add Row</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="block form-control-label">6. Capitalization</em></label>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>1. Membership Fee:</td>
                                                <td><input id="" type="text" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>2. Monthly Contribution:</td>
                                                <td><input id="" type="text" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>3. Donations:</td>
                                                <td><input id="" type="text" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>4. Others:</td>
                                                <td><input id="" type="text" class="form-control" placeholder=""></td>
                                            </tr>

                                            <tr>
                                                <td>Total Capital:</td>
                                                <td><input id="" type="text" class="form-control" placeholder=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="block form-control-label">7. Contact Information</em></label>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="" class="col-md-12 captions">Contact Person</label>
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <textarea type="text" rows="4" id="" name="" class="form-control" style="width:300px" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <label for="" class="col-md-12 captions">Landline</label>
                                            <br> <br>
                                            <label for="" class="col-md-12 captions">Mobile Phone</label>
                                            <br> <br>
                                            <label for="" class="col-md-12 captions">Messenger</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" id="" name="" class="form-control" style="width:300px" placeholder="">
                                            <input type="text" id="" name="" class="form-control" style="width:300px" placeholder="">
                                            <input type="text" id="" name="" class="form-control" style="width:300px" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="display: flex; justify-content: center;">
                                        <div style="width: 300px;" class="signature-container">
                                            <p style="margin: 0;">Prepared by:</p>
                                            <br>
                                            <input type="file" id="signatureFile" accept="image/*" style="margin-top: 10px; position: relative;">
                                            <label for="signatureFile" class="" style="text-align: center;"><small>(Signature over printed name of Secretary)</small></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="display: flex;">
                                        <div style="width: 300px;" class="signature-container">
                                            <p style="margin: 0;">Noted by:</p>
                                            <br>
                                            <input type="file" id="signatureFile" accept="image/*" style="margin-top: 10px; position: relative;">
                                            <label for="signatureFile" class="" style="text-align: center;"><small>(Signature over printed name of Chairperson)</small></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">SUBMIT <i class="icon-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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