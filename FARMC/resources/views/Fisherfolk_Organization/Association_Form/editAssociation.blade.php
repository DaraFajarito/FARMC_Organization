<!DOCTYPE html>
<html lang="en">

<head>
    <title>ASSOCIATION EDIT FORM | Fisherfolk Organization | BFAR - FARMC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
                        <br>
                        {{-- <a href="{{ url('/FOMunicipal') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                            Back</a> --}}
                    </div>
                </div>
                @foreach ($basic_info1 as $item)
                    <form class="form-inline" method="POST" action="{{ url('/edit-association/' . $item->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <!-- <div class="card-header"> -->
                        <div class="card inline-form-style">
                            <br><br>
                            <div class="grid-material bg-general" style="text-align:center; font-size:20px">
                                <b>FISHERFOLK
                                    ASSOCIATION PROFILE</b>
                            </div>
                            <div class="captions" style="text-align:center; font-size:20px"> ( As of
                                <span style="display:inline-block;"><input id="" type="text"
                                        class="md-form-control" name="as_of" value="{{ old('as_of', $item->as_of) }}"
                                        style="width: 250px; text-align:center;"></span>)
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
                                            <div class="form-group m-r-15">
                                                <div class="grid-material bg-general"><b>1. Name of Organization</b>
                                                </div>
                                                <div class="col-md-12">
                                                    <br>
                                                    <input id="" name="name_of_org" type="text"
                                                        class="form-control"
                                                        value="{{ old('name_of_org', $item->name_of_org) }}"
                                                        style="width: 1070px;" placeholder="">
                                                    <br><br>

                                                    <div class="form-group m-r-15">
                                                        <label for=""
                                                            class="block form-control-label">Address</em></label>
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="add_barangay" type="text"
                                                                    class="form-control" style="width: 300px;"
                                                                    placeholder=""
                                                                    value="{{ old('add_barangay', $item->add_barangay) }}">
                                                                <label for=""><small> Barangay </small></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="add_city" type="text"
                                                                    class="form-control" style="width: 300px;"
                                                                    placeholder=""
                                                                    value = "{{ old('add_city', $item->add_city) }}">
                                                                <label for=""><small> City / Municipality
                                                                    </small></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="add_province" type="text"
                                                                    class="form-control" style="width: 300px;"
                                                                    placeholder=""
                                                                    value = "{{ old('add_province', $item->add_province) }}">
                                                                <label for=""><small> Province </small></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <!-- <div class="card-block"> -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general"><em>Sector Represented</em></div>
                                            <br>
                                            <div class="col-md-3">
                                                <label><input type="radio" name="sector_rep" value="Municipal"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Municipal' ? 'checked' : '' }}>
                                                    Municipal</label><br>
                                                <label><input type="radio" name="sector_rep" value="Fishworker"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Fishworker' ? 'checked' : '' }}>
                                                    Fishworker</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label><input type="radio" name="sector_rep" value="Commercial"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Commercial' ? 'checked' : '' }}>
                                                    Commercial</label><br>
                                                <label><input type="radio" name="sector_rep" value="Women"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Women' ? 'checked' : '' }}>
                                                    Women</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label><input type="radio" name="sector_rep" value="Youth"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Youth' ? 'checked' : '' }}>
                                                    Youth</label><br>
                                                <label><input type="radio" name="sector_rep" value="IPs"
                                                        {{ old('sector_rep', $item->sector_rep) == 'IPs' ? 'checked' : '' }}>
                                                    IPs</label>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Adjusted width and CSS white-space property -->
                                                <labelwhite-space: nowrap;><input type="radio" name="sector_rep"
                                                        value="Other"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Other' ? 'checked' : '' }}>
                                                    Other's
                                                    (Please Specify)
                                                    </label>
                                                    <br>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" placeholder=""
                                                            name="sector_reg_yes"
                                                            value="{{ old('sector_reg_yes', $item->sector_reg_yes) }}"
                                                            style="width: 200px;">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="grid-material bg-general"><b>2. Status of Registration</b>
                                            </div>
                                            <br>
                                            <div class="form-radio">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="status_of_reg" value="Yes"
                                                            {{ old('status_of_reg', $item->status_of_reg) == 'Yes' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Yes
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status_of_reg" value="No"
                                                            {{ old('status_of_reg', $item->status_of_reg) == 'No' ? 'checked' : '' }} /><i
                                                            class="helper"></i>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="schedule" class="col-md-4">
                                            <label for=""><small><em><b>Specify,if yes</b></em></small></label>
                                            <div class="form-radio">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="status_of_reg_yes" value="DOLE"
                                                            {{ old('status_of_reg_yes', $item->status_of_reg_yes) == 'DOLE' ? 'checked' : '' }} /><i
                                                            class="helper"></i>DOLE
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status_of_reg_yes" value="SEC"
                                                            {{ old('status_of_reg_yes', $item->status_of_reg_yes) == 'SEC' ? 'checked' : '' }} /><i
                                                            class="helper"></i>SEC
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status_of_reg_yes" value="CDA"
                                                            {{ old('status_of_reg_yes', $item->status_of_reg_yes) == 'CDA' ? 'checked' : '' }} /><i
                                                            class="helper"></i>CDA
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status_of_reg_yes" value="Others"
                                                            {{ old('status_of_reg_yes', $item->status_of_reg_yes) == 'Others' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Others
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                        </div>

                                        <div id="proof" class="col-md-4">
                                            <div class="form-group">
                                                <label for="reg_no">Registration No.</label>
                                                <input id="reg_no" type="text"
                                                    value="{{ old('reg_no', $item->reg_no) }}" class="form-control"
                                                    placeholder="" name="reg_no">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="date_reg">Date Registered</label>
                                                <input id="date_reg" type="text"
                                                    value="{{ old('date_reg', $item->date_reg) }}"
                                                    class="form-control" placeholder="" name="date_reg">
                                            </div>
                                            <br>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="grid-material bg-general"><b>3. Status of Accreditation</b>
                                            </div>
                                            <br>
                                            <div class="form-radio">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="status_of_accre" value="Yes"
                                                            {{ old('status_of_accre', $item->status_of_accre) == 'Yes' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Yes
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status_of_accre" value="No"
                                                            {{ old('status_of_accre', $item->status_of_accre) == 'No' ? 'checked' : '' }} /><i
                                                            class="helper"></i>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="accre" class="col-md-4">
                                            <label for=""><small><em><b>Specify,if yes</b></em></small></label>
                                            <div class="form-radio">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="status_of_accre_yes"
                                                            value="Municipal"
                                                            {{ old('status_of_accre_yes', $item->status_of_accre_yes) == 'Municipal' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Municipal
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status_of_accre_yes"
                                                            value="Provincial"
                                                            {{ old('status_of_accre_yes', $item->status_of_accre_yes) == 'Provincial' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Provincial
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status_of_accre_yes"
                                                            value="National"
                                                            {{ old('status_of_accre_yes', $item->status_of_accre_yes) == 'National' ? 'checked' : '' }} /><i
                                                            class="helper"></i>National
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status_of_accre_yes"
                                                            value="Others"
                                                            {{ old('status_of_accre_yes', $item->status_of_accre_yes) == 'Others' ? 'checked' : '' }} /><i
                                                            class="helper"></i>Others
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                        </div>

                                        <div id="accreno" class="col-md-4">
                                            <div class="form-group">
                                                <label for="reg_no">Accreditation No.</label>
                                                <input id="reg_no" type="text" class="form-control"
                                                    placeholder="" name="accre_no"
                                                    value="{{ old('accre_no', $item->accre_no) }}">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="date">Date Accredited</label>
                                                <input id="date" type="text" class="form-control"
                                                    placeholder="" name="date_accre"
                                                    value="{{ old('date_accre', $item->date_accre) }}">
                                            </div>
                                            <br>
                                        </div>

                                        <div class="col-md-12" style="margin-top: 20px">
                                            <label for="" class="block form-control-label">4. Officer and
                                                Management</label>
                                            <label>4.1 Executive Officers</label>
                                            <table class="table">
                                                <thead style="width: 200px; font-size:small">
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
                                                            <div style="font-size: small;">Chairperson </div>
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_Chair_name"
                                                                value="{{ old('OAM_EO_Chair_name', $item->OAM_EO_Chair_name) }}">
                                                        </td>
                                                        &nbsp;
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="chair_cs"
                                                                value="{{ old('chair_cs', $item->chair_cs) }}"></td>
                                                        &nbsp;
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="chair_gen"
                                                                value="{{ old('chair_gen', $item->chair_gen) }}"></td>
                                                        &nbsp;
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="chair_birth"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"
                                                                value="{{ old('chair_birth', $item->chair_birth) }}">
                                                        </td>
                                                        &nbsp;
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age"
                                                                value="{{ old('chair_age', $item->chair_age) }}"
                                                                name="chair_age" readonly>
                                                        </td>
                                                        &nbsp;
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                value="{{ old('chair_gen', $item->chair_gen) }}"
                                                                name="chair_fourps"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div style="font-size: small;">Vice
                                                                Chairperson </div>
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_Vicechair_name"
                                                                value="{{ old('OAM_EO_Vicechair_name', $item->OAM_EO_Vicechair_name) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="vicechair_cs"
                                                                value="{{ old('vicechair_cs', $item->vicechair_cs) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="vicechair_gen"
                                                                value="{{ old('vicechair_gen', $item->vicechair_gen) }}">
                                                        </td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="vicechair_birth"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)"
                                                                value="{{ old('vicechair_birth', $item->vicechair_birth) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age"
                                                                name="vicechair_age"
                                                                value="{{ old('vicechair_age', $item->vicechair_age) }}"
                                                                readonly>
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                name="vicechair_fourps"
                                                                value="{{ old('vicechair_fourps', $item->vicechair_fourps) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">Secretary
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_Sec_name"
                                                                value="{{ old('OAM_EO_Sec_name', $item->OAM_EO_Sec_name) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="sec_cs"
                                                                value="{{ old('sec_cs', $item->sec_cs) }}"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="sec_gen"
                                                                value="{{ old('sec_gen', $item->sec_gen) }}"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="sec_birth"
                                                                value="{{ old('sec_birth', $item->sec_birth) }}"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="sec_age"
                                                                value="{{ old('sec_age', $item->sec_age) }}" readonly>
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                name="sec_fourps"
                                                                value="{{ old('sec_fourps', $item->sec_fourps) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">Treasurer
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_Treas_name"
                                                                value="{{ old('OAM_EO_Treas_name', $item->OAM_EO_Treas_name) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="treas_cs"
                                                                value="{{ old('treas_cs', $item->treas_cs) }}"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="treas_gen"
                                                                value="{{ old('treas_gen', $item->treas_gen) }}"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="treas_birth"
                                                                value="{{ old('treas_birth', $item->treas_birth) }}"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age"
                                                                name="treas_age"
                                                                value="{{ old('treas_age', $item->treas_age) }}"
                                                                readonly></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                name="treas_fourps"
                                                                value="{{ old('treas_fourps', $item->treas_fourps) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">Auditor
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_Aud_name"
                                                                value="{{ old('OAM_EO_Aud_name', $item->OAM_EO_Aud_name) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="aud_cs"
                                                                value="{{ old('aud_cs', $item->aud_cs) }}"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="aud_gen"
                                                                value="{{ old('aud_gen', $item->aud_gen) }}"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="aud_birth"
                                                                value="{{ old('aud_birth', $item->aud_birth) }}"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="aud_age"
                                                                value="{{ old('aud_age', $item->aud_age) }}" readonly>
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                name="aud_fourps"
                                                                value="{{ old('aud_fourps', $item->aud_fourps) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">PRO</td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_PRO_name"
                                                                value="{{ old('OAM_EO_PRO_name', $item->OAM_EO_PRO_name) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="pro_cs"
                                                                value="{{ old('pro_cs', $item->pro_cs) }}"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="pro_gen"
                                                                value="{{ old('pro_gen', $item->pro_gen) }}"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="pro_birth"
                                                                value="{{ old('pro_birth', $item->pro_birth) }}"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="pro_age"
                                                                value="{{ old('pro_age', $item->pro_age) }}" readonly>
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                name="pro_fourps"
                                                                value="{{ old('pro_fourps', $item->pro_fourps) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">
                                                            Sgt-at-Arms</td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_Sgt_name"
                                                                value="{{ old('OAM_EO_Sgt_name', $item->OAM_EO_Sgt_name) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="sgt_cs"
                                                                value="{{ old('sgt_cs', $item->sgt_cs) }}"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="sgt_gen"
                                                                value="{{ old('sgt_gen', $item->sgt_gen) }}"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="sgt_birth"
                                                                value="{{ old('sgt_birth', $item->sgt_birth) }}"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age" name="sgt_age"
                                                                value="{{ old('sgt_age', $item->sgt_age) }}" readonly>
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                name="sgt_fourps"
                                                                value="{{ old('sgt_fourps', $item->sgt_fourps) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">Others
                                                        </td>
                                                        <td><input id="name" type="text" class="form-control"
                                                                style="width: 250px;" placeholder="Name"
                                                                name="OAM_EO_Other_name"
                                                                value="{{ old('OAM_EO_Other_name', $item->OAM_EO_Other_name) }}">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="Civil Status"
                                                                name="other_cs"
                                                                value="{{ old('other_cs', $item->other_cs) }}"></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 100px;" placeholder="Gender"
                                                                name="other_gen"
                                                                value="{{ old('other_gen', $item->other_gen) }}"></td>
                                                        <td><input type="date" class="form-control"
                                                                placeholder="Birthday" name="other_birth"
                                                                value="{{ old('other_birth', $item->other_birth) }}"
                                                                onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                        </td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 60px;" placeholder="Age"
                                                                name="other_age"
                                                                value="{{ old('other_age', $item->other_age) }}"
                                                                readonly></td>
                                                        <td><input type="text" class="form-control"
                                                                style="width: 150px;" placeholder="4ps/Ips/SC/PWD"
                                                                name="other_fourps"
                                                                value="{{ old('other_fourps', $item->other_fourps) }}">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br><br>
                                        @foreach ($boardDir1 as $item)
                                            <div class="col-md-12">
                                                <label>4.2 Board of Directors/Trustees</label>
                                                <table class="table" style="width: 80%">
                                                    <thead>
                                                        <tr style="font-size: small;">
                                                            <th>Name</th>
                                                            <th>Civil Status</th>
                                                            <th>Gender</th>
                                                            <th>Birthday</th>
                                                            <th style="width:1000px">Age</th>
                                                            <th>4ps/Ips/SC/PWD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size: small;">
                                                            <td><input id="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    name="boardofDir_name1"
                                                                    value="{{ old('boardofDir_name1', $item->boardofDir_name1) }}">
                                                            </td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" style="width:150px"
                                                                    name="boardofDir_cs1"
                                                                    value="{{ old('boardofDir_cs1', $item->boardofDir_cs1) }}">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" style="width:150px"
                                                                    name="boardofDir_gen1"
                                                                    value="{{ old('boardofDir_gen1', $item->boardofDir_gen1) }}">
                                                            </td>

                                                            <td>
                                                                <input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth1"
                                                                    onchange="calculateAge1(1)"
                                                                    value="{{ old('boardofDir_birth1', $item->boardofDir_birth1) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    style="width:100px" placeholder="Age"
                                                                    name="boardofDir_age1" id="age1"
                                                                    value="{{ old('boardofDir_age1', $item->boardofDir_age1) }}"
                                                                    readonly>
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps1"
                                                                    value="{{ old('boardofDir_fourps1', $item->boardofDir_fourps1) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    name="boardofDir_name2"
                                                                    value="{{ old('boardofDir_name2', $item->boardofDir_name2) }}">
                                                            </td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" style="width:150px"
                                                                    name="boardofDir_cs2"
                                                                    value="{{ old('boardofDir_cs2', $item->boardofDir_cs2) }}">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" style="width:150px"
                                                                    name="boardofDir_gen2"
                                                                    value="{{ old('boardofDir_gen2', $item->boardofDir_gen2) }}">
                                                            </td>

                                                            <td>
                                                                <input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth2"
                                                                    onchange="calculateAge1(2)"
                                                                    value="{{ old('boardofDir_birth2', $item->boardofDir_birth2) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    style="width:100px" placeholder="Age"
                                                                    name="boardofDir_age2" id="age1"
                                                                    value="{{ old('boardofDir_age2', $item->boardofDir_age2) }}"
                                                                    readonly>
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps2"
                                                                    value="{{ old('boardofDir_fourps2', $item->boardofDir_fourps2) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    name="boardofDir_name3"
                                                                    value="{{ old('boardofDir_name3', $item->boardofDir_name3) }}">
                                                            </td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" style="width:150px"
                                                                    name="boardofDir_cs3"
                                                                    value="{{ old('boardofDir_cs3', $item->boardofDir_cs3) }}">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" style="width:150px"
                                                                    name="boardofDir_gen3"
                                                                    value="{{ old('boardofDir_gen3', $item->boardofDir_gen3) }}">
                                                            </td>

                                                            <td>
                                                                <input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth3"
                                                                    onchange="calculateAge1(3)"
                                                                    value="{{ old('boardofDir_birth3', $item->boardofDir_birth3) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    style="width:100px" placeholder="Age"
                                                                    name="boardofDir_age3" id="age1"
                                                                    value="{{ old('boardofDir_age3', $item->boardofDir_age3) }}"
                                                                    readonly>
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps3"
                                                                    value="{{ old('boardofDir_fourps3', $item->boardofDir_fourps3) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    name="boardofDir_name4"
                                                                    value="{{ old('boardofDir_name4', $item->boardofDir_name4) }}">
                                                            </td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" style="width:150px"
                                                                    name="boardofDir_cs4"
                                                                    value="{{ old('boardofDir_cs4', $item->boardofDir_cs4) }}">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" style="width:150px"
                                                                    name="boardofDir_gen4"
                                                                    value="{{ old('boardofDir_gen4', $item->boardofDir_gen4) }}">
                                                            </td>

                                                            <td>
                                                                <input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth4"
                                                                    onchange="calculateAge1(4)"
                                                                    value="{{ old('boardofDir_birth4', $item->boardofDir_birth4) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    style="width:100px" placeholder="Age"
                                                                    name="boardofDir_age4" id="age1"
                                                                    value="{{ old('boardofDir_age4', $item->boardofDir_age4) }}"
                                                                    readonly>
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps4"
                                                                    value="{{ old('boardofDir_fourps4', $item->boardofDir_fourps4) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    name="boardofDir_name5"
                                                                    value="{{ old('boardofDir_name5', $item->boardofDir_name5) }}">
                                                            </td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" style="width:150px"
                                                                    name="boardofDir_cs5"
                                                                    value="{{ old('boardofDir_cs5', $item->boardofDir_cs5) }}">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" style="width:150px"
                                                                    name="boardofDir_gen5"
                                                                    value="{{ old('boardofDir_gen5', $item->boardofDir_gen5) }}">
                                                            </td>

                                                            <td>
                                                                <input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth5"
                                                                    onchange="calculateAge1(5)"
                                                                    value="{{ old('boardofDir_birth5', $item->boardofDir_birth5) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    style="width:100px" placeholder="Age"
                                                                    name="boardofDir_age5" id="age1"
                                                                    value="{{ old('boardofDir_age5', $item->boardofDir_age5) }}"
                                                                    readonly>
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps5"
                                                                    value="{{ old('boardofDir_fourps5', $item->boardofDir_fourps5) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    name="boardofDir_name6"
                                                                    value="{{ old('boardofDir_name6', $item->boardofDir_name6) }}">
                                                            </td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" style="width:150px"
                                                                    name="boardofDir_cs6"
                                                                    value="{{ old('boardofDir_cs6', $item->boardofDir_cs6) }}">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" style="width:150px"
                                                                    name="boardofDir_gen6"
                                                                    value="{{ old('boardofDir_gen6', $item->boardofDir_gen6) }}">
                                                            </td>

                                                            <td>
                                                                <input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth6"
                                                                    onchange="calculateAge1(6)"
                                                                    value="{{ old('boardofDir_birth6', $item->boardofDir_birth6) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    style="width:100px" placeholder="Age"
                                                                    name="boardofDir_age6" id="age1"
                                                                    value="{{ old('boardofDir_age6', $item->boardofDir_age6) }}"
                                                                    readonly>
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps6"
                                                                    value="{{ old('boardofDir_fourps6', $item->boardofDir_fourps6) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    name="boardofDir_name7"
                                                                    value="{{ old('boardofDir_name7', $item->boardofDir_name7) }}">
                                                            </td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" style="width:150px"
                                                                    name="boardofDir_cs7"
                                                                    value="{{ old('boardofDir_cs7', $item->boardofDir_cs7) }}">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" style="width:150px"
                                                                    name="boardofDir_gen7"
                                                                    value="{{ old('boardofDir_gen7', $item->boardofDir_gen7) }}">
                                                            </td>

                                                            <td>
                                                                <input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth7"
                                                                    onchange="calculateAge1(7)"
                                                                    value="{{ old('boardofDir_birth7', $item->boardofDir_birth7) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    style="width:100px" placeholder="Age"
                                                                    name="boardofDir_age7" id="age1"
                                                                    value="{{ old('boardofDir_age7', $item->boardofDir_age4) }}"
                                                                    readonly>
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps7"
                                                                    value="{{ old('boardofDir_fourps7', $item->boardofDir_fourps7) }}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input id="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    name="boardofDir_name8"
                                                                    value="{{ old('boardofDir_name8', $item->boardofDir_name8) }}">
                                                            </td>

                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Civil Status" style="width:150px"
                                                                    name="boardofDir_cs8"
                                                                    value="{{ old('boardofDir_cs8', $item->boardofDir_cs8) }}">
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Gender" style="width:150px"
                                                                    name="boardofDir_gen8"
                                                                    value="{{ old('boardofDir_gen8', $item->boardofDir_gen8) }}">
                                                            </td>

                                                            <td>
                                                                <input type="date" class="form-control"
                                                                    placeholder="Birthday" name="boardofDir_birth8"
                                                                    onchange="calculateAge1(8)"
                                                                    value="{{ old('boardofDir_birth8', $item->boardofDir_birth8) }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control"
                                                                    style="width:100px" placeholder="Age"
                                                                    name="boardofDir_age8" id="age1"
                                                                    value="{{ old('boardofDir_age8', $item->boardofDir_age8) }}"
                                                                    readonly>
                                                            </td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="4ps/Ips/SC/PWD"
                                                                    name="boardofDir_fourps8"
                                                                    value="{{ old('boardofDir_fourps8', $item->boardofDir_fourps8) }}">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        @endforeach


                                        <label for="" class="block form-control-label"></em></label>
                                        <label>4.3 Committees</label>
                                        <div><small> <span style="color: red"> This section <small><b>
                                                            "COMMITTEES"</b></small> cannot be edited. Please ensure
                                                    that all fields are filled out when adding committees.
                                                </span></small></div>
                                        <br>
                                    </div>

                                    <div class="col-md-12" style="margin-bottom:20px">
                                        <div class="form-group m-r-15">
                                            <label for="" class="block form-control-label">5. List of
                                                Members </em></label>
                                        </div>
                                        <div><small> <span style="color: red"> This section <small><b> "LIST OF
                                                            MEMBERS"</b></small> cannot be edited. Please ensure that
                                                    all fields are filled out when adding members. </span></small></div>

                                    </div>


                                    <div class="col-md-4">
                                        @foreach ($basic_info1 as $item)
                                            <label for="" class="block form-control-label">6.
                                                Capitalization</em></label>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>1. Membership Fee:</td>
                                                        <td><input id="mem_fee" type="text" class="form-control"
                                                                placeholder="" name="capmem_fee"
                                                                value="{{ old('capmem_fee', $item->capmem_fee) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2. Monthly Contribution:</td>
                                                        <td><input id="monthly_cont" type="text"
                                                                class="form-control" placeholder=""
                                                                name="capmonthly_cont"
                                                                value="{{ old('capmonthly_cont', $item->capmonthly_cont) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3. Donations:</td>
                                                        <td><input id="donation" type="text" class="form-control"
                                                                placeholder="" name="cap_donation"
                                                                value="{{ old('cap_donation', $item->cap_donation) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4. Others:</td>
                                                        <td><input id="others" type="text" class="form-control"
                                                                placeholder="" name="cap_others"
                                                                value="{{ old('cap_others', $item->cap_others) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Capital:</td>
                                                        <td><input id="total_cap" type="text" class="form-control"
                                                                placeholder="" name="captotal_cap"
                                                                value="{{ old('captotal_cap', $item->captotal_cap) }}"
                                                                readonly></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                    <div class="col-md-12">

                                        <label for="" class="block form-control-label">7. Contact
                                            Information</em></label>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="" class="col-md-12 captions">Contact
                                                    Person</label>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <input id="" type="text" class="form-control"
                                                            placeholder="" style="width: 280px"
                                                            name="CIcontact_person"
                                                            value="{{ old('CIcontact_person', $item->CIcontact_person) }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <label for="" class="col-md-12 captions">Landline</label>
                                                <br> <br>
                                                <label for="" class="col-md-12 captions">Mobile
                                                    Phone</label>
                                                <br> <br>
                                                <label for="" class="col-md-12 captions">Messenger</label>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" id="" class="form-control"
                                                    style="width:300px" placeholder="" name="CIlandline"
                                                    value="{{ old('CIlandline', $item->CIlandline) }}">
                                                <input type="text" id="" class="form-control"
                                                    style="width:300px" placeholder="" name="CIMobile"
                                                    value="{{ old('CIMobile', $item->CIMobile) }}">
                                                <input type="text" id="" class="form-control"
                                                    style="width:300px" placeholder="" name="CIMess"
                                                    value="{{ old('CIMess', $item->CIMess) }}">
                                            </div>
                                        </div>
                                    </div>
                @endforeach



                <div class="col-md-12 text-right" style="margin-top: 20px">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                        &nbsp; SAVE</button>
                </div>
            </div>

        </div>
    </div>
    </form>
    @endforeach




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
        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

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
    </script>

    <script>
        function toggleOtherTextbox() {
            var selectElement = document.getElementById("category");
            var otherTextElement = document.getElementById("otherText");
            if (selectElement.value === "Others: please specify") {
                otherTextElement.style.display = "block";
            } else {
                otherTextElement.style.display = "none";
            }
        }
    </script>

    <script>
        function toggleSchedule(elem) {
            var scheduleDiv = document.getElementById('schedule');
            var proofDiv = document.getElementById('proof');
            if (elem.value === 'Yes') {
                scheduleDiv.style.display = 'block';
                // Hide proof if schedule is hidden
                proofDiv.style.display = 'none';
            } else {
                scheduleDiv.style.display = 'none';
                // Hide proof if schedule is hidden
                proofDiv.style.display = 'none';
            }
        }

        function toggleProof(elem) {
            var proofDiv = document.getElementById('proof');
            if (elem.value === 'DOLE' || elem.value === 'SEC' || elem.value === 'CDA' || elem.value === 'Others') {
                proofDiv.style.display = 'block';
            } else {
                proofDiv.style.display = 'none';
            }
        }
    </script>

    <script>
        function toggleAccre(elem) {
            var accreDiv = document.getElementById('accre');
            var accrenoDiv = document.getElementById('accreno');
            if (elem.value === 'Yes' && elem.checked) {
                accreDiv.style.display = 'block';
                accrenoDiv.style.display = 'none';
            } else {
                accreDiv.style.display = 'none';
                accrenoDiv.style.display = 'none';
            }
        }

        function toggleAccreno(elem) {
            var accrenoDiv = document.getElementById('accreno');
            if (elem.checked && (elem.value === 'Municipal' || elem.value === 'Provincial' || elem.value === 'National' ||
                    elem.value === 'Others')) {
                accrenoDiv.style.display = 'block';
            } else {
                accrenoDiv.style.display = 'none';
            }
        }
    </script>

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

    <script>
        function calculateAge1(boardMemberNumber) {
            let dob = document.querySelector('input[name="boardofDir_birth' + boardMemberNumber + '"]').value;
            let today = new Date();
            let birthDate = new Date(dob);
            let age = today.getFullYear() - birthDate.getFullYear();
            let m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            document.querySelector('input[name="boardofDir_age' + boardMemberNumber + '"]').value = age;
        }
    </script>

    <script>
        const memFeeInput = document.getElementById('mem_fee');
        const monthlyContInput = document.getElementById('monthly_cont');
        const donationInput = document.getElementById('donation');
        const othersInput = document.getElementById('others');
        const totalCapInput = document.getElementById('total_cap');

        [memFeeInput, monthlyContInput, donationInput, othersInput].forEach(input => {
            input.addEventListener('input', calculateTotalCapital);
        });

        function calculateTotalCapital() {
            const memFee = parseFloat(memFeeInput.value) || 0;
            const monthlyCont = parseFloat(monthlyContInput.value) || 0;
            const donation = parseFloat(donationInput.value) || 0;
            const others = parseFloat(othersInput.value) || 0;

            const totalCapital = memFee + monthlyCont + donation + others;

            totalCapInput.value = isNaN(totalCapital) ? '' : '₱' + totalCapital.toFixed(2);
        }

        // Initial calculation
        calculateTotalCapital();
    </script>

</body>

</html>
