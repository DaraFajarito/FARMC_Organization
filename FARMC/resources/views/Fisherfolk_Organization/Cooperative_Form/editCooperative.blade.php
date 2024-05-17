<!DOCTYPE html>
<html lang="en">

<head>
    <title>COOPERATIVE EDIT FORM | Fisherfolk Organization | BFAR - FARMC</title>
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
                @foreach ($gen_info1 as $item)
                    <form class="form-inline" method="POST" action="{{ url('/edit-cooperative/' . $item->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <br><br>
                            <div class="grid-material bg-general" style="text-align:center; font-size:20px">
                                <b>COOPERATIVE
                                    PROFILE</b></div>
                            <div class="captions" style="text-align:center; font-size:20px"> ( As of
                                <span style="display:inline-block;"><input id="" type="text" name="as_of"
                                        value="{{ old('as_of', $item->as_of) }}" class="md-form-control"
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
                                            {{-- <form class="form-inline"> --}}
                                            <div class="form-group m-r-15">
                                                <div class="grid-material bg-general">Name of Cooperative</div>
                                                <div class="col-md-12">
                                                    <input id="" type="text" class="form-control"
                                                        value="{{ old('name_of_coop', $item->name_of_coop) }}"
                                                        style="width: 1070px;" name="name_of_coop" placeholder="">
                                                </div>
                                                <br><br>
                                                <div class="form-group m-r-15">

                                                    <div class="grid-material bg-general">Address</div>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" type="text" class="form-control"
                                                                value="{{ old('add_barangay', $item->add_barangay) }}"
                                                                style="width: 300px;" name="add_barangay"
                                                                placeholder="">
                                                            <label for=""><small> Barangay </small></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" type="text" class="form-control"
                                                                value="{{ old('add_city', $item->add_city) }}"
                                                                style="width: 300px;" name="add_city" placeholder="">
                                                            <label for=""><small> City / Municipality
                                                                </small></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <input id="" type="text" class="form-control"
                                                                value="{{ old('add_province', $item->add_province) }}"
                                                                style="width: 300px;" name="add_province"
                                                                placeholder="">
                                                            <label for=""><small> Province </small></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general"><em>Sector Represented</em></div>
                                            <br>
                                            <div class="col-md-3">
                                                <label><input type="radio" name="sector_rep" value="Municipal"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Municipal' ? 'checked' : '' }}
                                                        required>
                                                    Municipal</label><br>
                                                <label><input type="radio" name="sector_rep" value="Fishworker"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Fishworker' ? 'checked' : '' }}
                                                        required>
                                                    Fishworker</label>
                                            </div>
                                            <div class="col-md-3">
                                                <label><input type="radio" name="sector_rep" value="Commercial"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Commercial' ? 'checked' : '' }}
                                                        required>
                                                    Commercial</label><br>
                                                <label><input type="radio" name="sector_rep" value="Women"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Women' ? 'checked' : '' }}
                                                        required>
                                                    Women</label>
                                            </div>
                                            <div class="col-md-2">
                                                <label><input type="radio" name="sector_rep" value="Youth"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Youth' ? 'checked' : '' }}
                                                        required>
                                                    Youth</label><br>
                                                <label><input type="radio" name="sector_rep" value="IPs"
                                                        {{ old('sector_rep', $item->sector_rep) == 'IPs' ? 'checked' : '' }}
                                                        required>
                                                    IPs</label>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Adjusted width and CSS white-space property -->
                                                <labelwhite-space: nowrap;><input type="radio" name="sector_rep"
                                                        value="Others"
                                                        {{ old('sector_rep', $item->sector_rep) == 'Others' ? 'checked' : '' }}
                                                        required>
                                                    Other's
                                                    (Please Specify)</label>
                                                    <br>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" placeholder=""
                                                            name="sector_rep_yes" style="width: 200px;"
                                                            value="{{ old('sector_rep_yes', $item->sector_rep_yes) }}">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr> <br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="grid-material bg-general">Cooperative Identification Number
                                                (CIN)
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <input id="" type="text" class="form-control"
                                                value = "{{ old('CIN', $item->CIN) }}" style="width: 90%;"
                                                name="CIN" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="grid-material bg-general">Date of Latest Amendment:</div>
                                        </div>
                                        <div class="col-md-8">
                                            <input id="" type="date" class="form-control"
                                                value="{{ old('date_of_amend', $item->date_of_amend) }}"
                                                style="width: 90%;" name="date_of_amend" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general">Short History of Cooperative:</div>
                                        </div>
                                        <br><br>
                                        <div class="col-md-12">
                                            <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;"
                                                name="short_history" placeholder="" value="{{ old('short_history', $item->short_history) }}"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general"><b>I. &nbsp; GENERAL INFORMATION</b>
                                            </div>
                                            <br>
                                            <div class="grid-material bg-general">Registration Details:</div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general">Original Date of
                                                        Registration:
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center">
                                                        <input id="" type="text" class="form-control"
                                                            value="{{ old('RD_ODR_regnum', $item->RD_ODR_regnum) }}"
                                                            style="width: 250px;" name="RD_ODR_regnum"
                                                            placeholder="">
                                                        <label for=""><small> Number </small></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center">
                                                        <input id="" type="date" class="form-control"
                                                            value="{{ old('RD_ODR_regdate', $item->RD_ODR_regdate) }}"
                                                            style="width: 250px;" name="RD_ODR_regdate"
                                                            placeholder="">
                                                        <label for=""><small> Date </small></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center">
                                                        <input id="" type="file" class="form-control"
                                                            style="width: 250px;" name="RD_ODR_regfile"
                                                            placeholder="">
                                                        @if ($item['RD_ODR_regfile'])
                                                            <a href="{{ asset($item['RD_ODR_regfile']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general">RA 9520 Registration:</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center">
                                                        <input id="" type="text" class="form-control"
                                                            value="{{ old('RD_RA_regnum', $item->RD_RA_regnum) }}"
                                                            style="width: 250px;" name="RD_RA_regnum" placeholder="">
                                                        <label for=""><small> Number </small></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center">
                                                        <input id="" type="date" class="form-control"
                                                            value="{{ old('RD_RA_regdate', $item->RD_RA_regdate) }}"
                                                            style="width: 250px;" name="RD_RA_regdate"
                                                            placeholder="">
                                                        <label for=""><small> Date </small></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="text-center">
                                                        <input id="" type="file" class="form-control"
                                                            style="width: 250px;" name="RD_RA_regfile"
                                                            placeholder="">
                                                        @if ($item['RD_RA_regfile'])
                                                            <a href="{{ asset($item['RD_RA_regfile']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <div class="grid-material bg-general">Membership Operation: (Area
                                                        of
                                                        Membership)</div>
                                                </div>
                                            </div>
                                            <br><br><br><br><br><br>
                                            <div class="col-md-12">
                                                <br>
                                                <div class="form-radio">
                                                    <div class="radio">
                                                        <div class="col-md-3">
                                                            <label>
                                                                <input type="radio" name="RD_memOp"
                                                                    value="Municipal"
                                                                    {{ old('RD_memOp', $item->RD_memOp) == 'Municipal' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Municipal
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>
                                                                <input type="radio" name="RD_memOp"
                                                                    value="Provincial"
                                                                    {{ old('RD_memOp', $item->RD_memOp) == 'Provincial' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Provincial
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>
                                                                <input type="radio" name="RD_memOp"
                                                                    value="Regional"
                                                                    {{ old('RD_memOp', $item->RD_memOp) == 'Regional' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Regional
                                                            </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>
                                                                <input type="radio" name="RD_memOp"
                                                                    value="National"
                                                                    {{ old('RD_memOp', $item->RD_memOp) == 'National' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>National
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br><br><br><br>
                                            <div class="col-md-12" style="margin-bottom:20px">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4">
                                                            <div class="grid-material bg-general">Business Operation:
                                                                (area
                                                                of
                                                                business)</div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input id="" type="text" class="form-control"
                                                                value="{{ old('RD_bussOp', $item->RD_bussOp) }}"
                                                                style="width: 90%;" name="RD_bussOp" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="grid-material bg-general">Category of
                                                                Cooperative:
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="form-radio">
                                                            <div class="radio">
                                                                <div class="col-md-4">
                                                                    <label>
                                                                        <input type="radio" name="RD_categofCoop"
                                                                            value="Primary"
                                                                            {{ old('RD_categofCoop', $item->RD_categofCoop) == 'Primary' ? 'checked' : '' }} /><i
                                                                            class="helper"></i>Primary
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>
                                                                        <input type="radio" name="RD_categofCoop"
                                                                            value="Secondary"
                                                                            {{ old('RD_categofCoop', $item->RD_categofCoop) == 'Secondary' ? 'checked' : '' }} /><i
                                                                            class="helper"></i>Secondary
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>
                                                                        <input type="radio" name="RD_categofCoop"
                                                                            value="Tertiary"
                                                                            {{ old('RD_categofCoop', $item->RD_categofCoop) == 'Tertiary' ? 'checked' : '' }} /><i
                                                                            class="helper"></i>Tertiary
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br> <br> <br>
                                                <div class="row">
                                                    <div class="col-md-12" style="margin-bottom: 25px;">
                                                        <div class="col-md-4">
                                                            <div class="grid-material bg-general">Type of Cooperative
                                                                (as
                                                                to
                                                                nature of business)</div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input id="" type="text" class="form-control"
                                                                value="{{ old('RD_typeofCoop', $item->RD_typeofCoop) }}"
                                                                style="width: 90%;" name="RD_typeofCoop"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 20px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="grid-material bg-general">General Objectives
                                                                <small><em>(Included in your cooperative's Articles of
                                                                        Cooperation and By-laws)</em></small>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="col-md-12">
                                                            <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;" name="RD_genObj"
                                                                placeholder="">{{ old('RD_genObj', $item->RD_genObj) }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 20px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="grid-material bg-general">Program Products and
                                                                Services
                                                                <small><em>(Please write the programs, products and
                                                                        services
                                                                        included in your cooperative' strategic
                                                                        planning)</em></small>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="col-md-12">
                                                            <textarea rows="6" id="" type="text" class="form-control" style="width: 95%;" name="RD_progpas"
                                                                placeholder=""> {{ old('RD_progpas', $item->RD_progpas) }}</textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="grid-material bg-general">Status of
                                                                Accreditation
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 10px;">
                                                                <div class="col-md-3">
                                                                    <div class="grid-material bg-general">Date</div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="text-center">
                                                                        <input id="" type="date"
                                                                            value="{{ old('RD_SOA_date', $item->RD_SOA_date) }}"
                                                                            class="form-control" style="width: 250px;"
                                                                            name="RD_SOA_date" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 10px;">
                                                                <div class="col-md-6">
                                                                    <div class="grid-material bg-general">Category of
                                                                        accreditation:</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="col-md-6" style="margin-top: 5px;">
                                                                <div class="col-md-3">
                                                                    <div class="grid-material bg-general">Number</div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="text-center">
                                                                        <input id="" type="text"
                                                                            value="{{ old('RD_SOA_num', $item->RD_SOA_num) }}"
                                                                            class="form-control" style="width: 250px;"
                                                                            name="RD_SOA_num" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 5px;">
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <div class="col-md-3">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="RD_categofAccre"
                                                                                    value="Municipal"
                                                                                    {{ old('RD_categofAccre', $item->RD_categofAccre) == 'Municipal' ? 'checked' : '' }} /><i
                                                                                    class="helper"></i>Municipal
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="RD_categofAccre"
                                                                                    value="Provincial"
                                                                                    {{ old('RD_categofAccre', $item->RD_categofAccre) == 'Provincial' ? 'checked' : '' }} /><i
                                                                                    class="helper"></i>Provincial
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="RD_categofAccre"
                                                                                    value="National"
                                                                                    {{ old('RD_categofAccre', $item->RD_categofAccre) == 'National' ? 'checked' : '' }} /><i
                                                                                    class="helper"></i>National
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br><br><br>
                                            @foreach ($mem as $item)
                                                <div class="grid-material bg-general"><b>II. &nbsp; MEMBERSHIP</b>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="grid-material bg-general">a. &nbsp; Common Bond:</div>
                                                </div>
                                                <br>
                                                <div class="col-md-12" style="margin-bottom: 20px;">
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio">
                                                            <div class="col-md-3">
                                                                <label>
                                                                    <input type="radio" name="common_bond"
                                                                        value="Institutional"
                                                                        {{ old('common_bond', $item->common_bond) == 'Institutional' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Institutional
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>
                                                                    <input type="radio" name="common_bond"
                                                                        value="Occupational"
                                                                        {{ old('common_bond', $item->common_bond) == 'Occupational' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Occupational
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>
                                                                    <input type="radio" name="common_bond"
                                                                        value="Residential"
                                                                        {{ old('common_bond', $item->common_bond) == 'Residential' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Residential
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>
                                                                    <input type="radio" name="common_bond"
                                                                        value="Associational"
                                                                        {{ old('common_bond', $item->common_bond) == 'Associational' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Associational
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="grid-material bg-general">b. &nbsp; Composition of
                                                        Membership:</div>
                                                </div>

                                                <div class="col-md-12" style="margin-bottom: 20px;">
                                                    <table class="table table-bordered smaller-font">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;"
                                                                    colspan="1"></th>
                                                                <th scope="col" style="text-align: center;"
                                                                    colspan="3">For Primary</th>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Particulars
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Male
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Female
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Total
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> Number of Regular members</td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="CoM_NRMem_male" value="{{ old ('CoM_NRMem_male', $item->CoM_NRMem_male)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="NRMem_female" value="{{ old ('NRMem_female', $item->NRMem_female)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="NRMem_total" readonly value="{{ old ('NRMem_total', $item->NRMem_total)}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Number of Association members</td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="CoM_NAMem_male" value="{{ old ('CoM_NAMem_male', $item->CoM_NAMem_male)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="NAMem_female" value="{{ old ('NAMem_female', $item->NAMem_female)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="NAMem_total" readonly value="{{ old ('NAMem_total', $item->NAMem_total)}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total number of members</td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="CoM_TotalMem_male" readonly value="{{ old ('CoM_TotalMem_male', $item->CoM_TotalMem_male)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="TMem_female" readonly value="{{ old ('TMem_female', $item->TMem_female)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="TMem_total" readonly value="{{ old ('TMem_total', $item->TMem_total)}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Target / Potential Membership (current year)</td>
                                                                <td style="text-align: center;"><input
                                                                        id="CoM_TargetMem_male" type="text"
                                                                        class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="CoM_TargetMem_male" value="{{ old ('CoM_TargetMem_male', $item->CoM_TargetMem_male)}}"></td>
                                                                <td style="text-align: center;"><input
                                                                        id="TarMem_female" type="text"
                                                                        class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="TarMem_female" value="{{ old ('TarMem_female', $item->TarMem_female)}}"></td>
                                                                <td style="text-align: center;"><input
                                                                        id="TarMem_total" type="text"
                                                                        class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="TarMem_total" value="{{ old ('TarMem_total', $item->TarMem_total)}}"></td>
                                                            </tr>
                                                            <tr>
                                                            <tr>
                                                                <td>Total Membership</td>
                                                                <td style="text-align: center;"><input id="Total_male"
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="CoM_Total_male" readonly value="{{ old ('CoM_Total_male', $item->CoM_Total_male)}}"></td>
                                                                <td style="text-align: center;"><input
                                                                        id="Total_female" type="text"
                                                                        class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="Total_female" readonly value="{{ old ('Total_female', $item->Total_female)}}"></td>
                                                                <td style="text-align: center;"><input
                                                                        id="Total_total" type="text"
                                                                        class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="Total_total" readonly value="{{ old ('Total_total', $item->Total_total)}}"></td>
                                                            </tr>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="grid-material bg-general">c. &nbsp; Number of
                                                        Employees:
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <table class="table table-bordered smaller-font">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;"
                                                                    colspan="1"></th>
                                                                <th scope="col" style="text-align: center;"
                                                                    colspan="3">Current Year</th>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">Number
                                                                    of
                                                                    Employees</th>
                                                                <th scope="col" style="text-align: center;">Male
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Female
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Total
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> Full-time</td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="NoE_Fulltime_male" value="{{ old ('NoE_Fulltime_male', $item->NoE_Fulltime_male)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="Fulltime_female" value="{{ old ('Fulltime_female', $item->Fulltime_female)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="Fulltime_total" readonly value="{{ old ('Fulltime_total', $item->Fulltime_total)}}"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Part-time</td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="NoE_Parttime_male" value="{{ old ('NoE_Parttime_male', $item->NoE_Parttime_male)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="Parttime_female" value="{{ old ('Parttime_female', $item->Parttime_female)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="Parttime_total" readonly value="{{ old ('Parttime_total', $item->Parttime_total)}}"></td>
                                                            </tr>


                                                            <tr>
                                                                <td style="text-align: center;">Total Employee</td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="NoE_Total_male" readonly value="{{ old ('NoE_Total_male', $item->NoE_Total_male)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="TotalEmp_female" readonly value="{{ old ('TotalEmp_female', $item->TotalEmp_female)}}"></td>
                                                                <td style="text-align: center;"><input id=""
                                                                        type="text" class="form-control"
                                                                        style="width: 100px; margin: auto;"
                                                                        name="TotalEmp_total" readonly value="{{ old ('TotalEmp_total', $item->TotalEmp_total)}}"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="grid-material bg-general"><b>III. &nbsp; ASSETS:</b></div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12" style="margin-bottom: 25px;">
                                                        <div class="col-md-2">
                                                            <div class="grid-material bg-general">Total Assets</div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input id="" type="text" class="form-control"
                                                                style="width: 100%;" placeholder=""
                                                                name="total_assets" value="{{ old ('total_assets', $item->total_assets)}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @foreach ($officer as $item)
                                            <div class="grid-material bg-general"><b>IV. &nbsp; OFFICERS:</b></div>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <table class="table">
                                                    <thead style="font-size: 13px">
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Position
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Name</th>
                                                            <th scope="col" style="text-align: center;">Civil
                                                                Status
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Gender</th>
                                                            <th scope="col" style="text-align: center;">Birthday
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Board of Directors:</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BoardofDir_name1" value="{{ old ('BoardofDir_name1', $item->BoardofDir_name1)}}"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs1" value="{{ old ('cs1', $item->cs1)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen1" value="{{ old ('gen1', $item->gen1)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;" name="birth1" value="{{ old ('birth1', $item->birth1)}}"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age1', $item->age1)}}"
                                                                    style="width: 80px; margin: auto;" name="age1"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Chairperson</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="Chairperson_name2" value="{{ old ('Chairperson_name2', $item->Chairperson_name2)}}"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs2" value="{{ old ('cs2', $item->cs2)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen2" value="{{ old ('gen2', $item->gen2)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;" name="birth2" value="{{ old ('birth2', $item->birth2)}}"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age2', $item->age2)}}"
                                                                    style="width: 80px; margin: auto;" name="age2"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Vice-chairperson</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="Vchair_name3" value="{{ old ('Vchair_name3', $item->Vchair_name3)}}"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs3" value="{{ old ('cs3', $item->cs3)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen3" value="{{ old ('gen3', $item->gen3)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;" name="birth3" value="{{ old ('birth3', $item->birth3)}}"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age3', $item->age3)}}"
                                                                    style="width: 80px; margin: auto;" name="age3"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name4" value="{{ old ('BM_name4', $item->BM_name4)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs4" value="{{ old ('cs4', $item->cs4)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen4" value="{{ old ('gen4', $item->gen4)}}">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;" name="birth4" value="{{ old ('birth4', $item->birth4)}}"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age4', $item->age4)}}"
                                                                    style="width: 80px; margin: auto;" name="age4"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;" value="{{ old ('BM_name5', $item->BM_name5)}}"
                                                                    name="BM_name5">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;" value="{{ old ('cs5', $item->cs5)}}"
                                                                    name="cs5">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control"
                                                                    style="width: 150px; margin: auto;" value="{{ old ('gen5', $item->gen5)}}"
                                                                    name="gen5">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control"
                                                                    style="width: 120px; margin: auto;" name="birth5" value="{{ old ('birth5', $item->birth5)}}"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age5', $item->age5)}}"
                                                                    style="width: 80px; margin: auto;" name="age5"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('BM_name6', $item->BM_name6)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name6">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('cs6', $item->cs6)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs6">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('gen6', $item->gen6)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen6">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control" value="{{ old ('birth6', $item->birth6)}}"
                                                                    style="width: 120px; margin: auto;" name="birth6"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age6', $item->age6)}}"
                                                                    style="width: 80px; margin: auto;" name="age6"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('BM_name7', $item->BM_name7)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name7">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('cs7', $item->cs7)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs7">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('gen7', $item->gen7)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen7">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control" value="{{ old ('birth7', $item->birth7)}}"
                                                                    style="width: 120px; margin: auto;" name="birth7"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age7', $item->age7)}}"
                                                                    style="width: 80px; margin: auto;" name="age7"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('BM_name8', $item->BM_name8)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name8">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('cs8', $item->cs8)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs8">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('gen8', $item->gen8)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen8">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control" value="{{ old ('birth8', $item->birth8)}}"
                                                                    style="width: 120px; margin: auto;" name="birth8"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age8', $item->age8)}}"
                                                                    style="width: 80px; margin: auto;" name="age8"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('BM_name9', $item->BM_name9)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name9">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('cs9', $item->cs9)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs9">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('gen9', $item->gen9)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen9">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control" value="{{ old ('birth9', $item->birth9)}}"
                                                                    style="width: 120px; margin: auto;" name="birth9"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age9', $item->age9)}}"
                                                                    style="width: 80px; margin: auto;" name="age9"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('BM_name10', $item->BM_name10)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="BM_name10">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('cs10', $item->cs10)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs10">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('gen10', $item->gen10)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen10">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control" value="{{ old ('birth10', $item->birth10)}}"
                                                                    style="width: 120px; margin: auto;" name="birth10"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age10', $item->age10)}}"
                                                                    style="width: 80px; margin: auto;" name="age10"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>General Manager</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('GenMan_name11', $item->GenMan_name11)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="GenMan_name11"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('cs11', $item->cs11)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs11">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('gen11', $item->gen11)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen11">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control" value="{{ old ('birth11', $item->birth11)}}"
                                                                    style="width: 120px; margin: auto;" name="birth11"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age11', $item->age11)}}"
                                                                    style="width: 80px; margin: auto;" name="age11"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('Sec_name12', $item->Sec_name12)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="Sec_name12">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('cs12', $item->cs12)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs12">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('gen12', $item->gen12)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen12">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control" value="{{ old ('birth12', $item->birth12)}}"
                                                                    style="width: 120px; margin: auto;" name="birth12"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age12', $item->age12)}}"
                                                                    style="width: 80px; margin: auto;" name="age12"
                                                                    readonly>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Treasurer</td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('Treas_name13', $item->Treas_name13)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="Treas_name13"></td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('cs13', $item->cs13)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="cs13">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('gen13', $item->gen13)}}"
                                                                    style="width: 150px; margin: auto;"
                                                                    name="gen13">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="date" class="form-control" value="{{ old ('birth13', $item->birth13)}}"
                                                                    style="width: 120px; margin: auto;"
                                                                    name="birth13"
                                                                    onchange="calculateAge(this, this.parentNode.nextElementSibling.firstChild)">
                                                            </td>
                                                            <td style="text-align: center;"><input id=""
                                                                    type="text" class="form-control" value="{{ old ('age13', $item->age13)}}"
                                                                    style="width: 80px; margin: auto;"
                                                                    name="age13" readonly>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            @endforeach
                                            <div class="grid-material bg-general"><b>COMMITTEE OFFICERS
                                                </b></div>
                                            <div><small> <span style="color: red"> This section <small><b>
                                                                "COMMITTEES"</b></small> cannot be edited. Please ensure
                                                        that all fields are filled out when adding committees.
                                                    </span></small></div>
                                            <br>
                                        </div>

                                        <div class="col-md-12" style="margin-bottom:20px">
                                            <div class="grid-material bg-general"><b>VI. &nbsp; LIST OF MEMBERS
                                                </b></div>
                                            <div><small> <span style="color: red"> This section <small><b> "LIST OF
                                                                MEMBERS"</b></small> cannot be edited. Please ensure
                                                        that
                                                        all fields are filled out when adding members. </span></small>
                                            </div>
                                            <br><br>
                                            @foreach ($org as $item)
                                            <div class="grid-material bg-general"><b>VII. &nbsp; ORGANIZATIONAL
                                                    STRUCTURE</b></div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general">Organizational
                                                            Structure:
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input id="" type="file" class="form-control"
                                                            style="width: 100%" placeholder=""
                                                            name="orgstruct_file">
                                                            @if ($item['orgstruct_file'])
                                                            <a href="{{ asset($item['orgstruct_file']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                             @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="grid-material bg-general"><b>VIII. &nbsp; CONTACT DETAILS</b>
                                            </div>
                                            <br>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Name:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control" value="{{ old ('CD_name', $item->CD_name)}}"
                                                            style="width: 100%;" placeholder="" name="CD_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Designation:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control" value="{{ old ('CD_design', $item->CD_design)}}"
                                                            style="width: 100%;" placeholder="" name="CD_design">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Tell / Cell No.:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control" value="{{ old ('CD_tell', $item->CD_tell)}}"
                                                            style="width: 100%;" placeholder="" name="CD_tell">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general">Email Address:</div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input id="" type="text" class="form-control" value="{{ old ('CD_email', $item->CD_email)}}"
                                                            style="width: 100%;" placeholder="" name="CD_email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="margin-bottom: 10px;">
                                                    <div class="col-md-2">
                                                        <div class="grid-material bg-general"
                                                            style="margin-top: 15px">Facebook Account:</div>
                                                    </div>
                                                    <div class="col-md-10" style="margin-top: 10px;">
                                                        <input id="" type="text" class="form-control" value="{{ old ('CD_FBacc', $item->CD_FBacc)}}"
                                                            style="width: 100%;" placeholder="" name="CD_FBacc">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="col-md-12 text-right">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fas fa-save"></i>
                                                    &nbsp; SAVE</button>
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
        document.addEventListener('DOMContentLoaded', function() {
            const nrMaleInput = document.querySelector('input[name="CoM_NRMem_male"]');
            const nrFemaleInput = document.querySelector('input[name="NRMem_female"]');
            const nrTotalInput = document.querySelector('input[name="NRMem_total"]');

            const naMaleInput = document.querySelector('input[name="CoM_NAMem_male"]');
            const naFemaleInput = document.querySelector('input[name="NAMem_female"]');
            const naTotalInput = document.querySelector('input[name="NAMem_total"]');

            const totalMaleInput = document.querySelector('input[name="CoM_TotalMem_male"]');
            const totalFemaleInput = document.querySelector('input[name="TMem_female"]');
            const totalTotalInput = document.querySelector('input[name="TMem_total"]');

            const targetMaleInput = document.querySelector('input[name="CoM_TargetMem_male"]');
            const targetFemaleInput = document.querySelector('input[name="TarMem_female"]');
            const targetTotalInput = document.querySelector('input[name="TarMem_total"]');

            const totalMale = document.querySelector('input[name="CoM_Total_male"]');
            const totalFemale = document.querySelector('input[name="Total_female"]');
            const totalTotal = document.querySelector('input[name="Total_total"]');

            function calculateAndSetTotal(maleInput, femaleInput, totalInput) {
                const maleCount = parseInt(maleInput.value) || 0;
                const femaleCount = parseInt(femaleInput.value) || 0;
                totalInput.value = maleCount + femaleCount;
            }

            function calculateTotalMembers() {
                const totalMaleCount = (parseInt(nrMaleInput.value) || 0) + (parseInt(naMaleInput.value) || 0);
                const totalFemaleCount = (parseInt(nrFemaleInput.value) || 0) + (parseInt(naFemaleInput.value) ||
                    0);
                totalMaleInput.value = totalMaleCount;
                totalFemaleInput.value = totalFemaleCount;
                totalTotalInput.value = totalMaleCount + totalFemaleCount;

                const targetMaleCount = parseInt(targetMaleInput.value) || 0;
                const targetFemaleCount = parseInt(targetFemaleInput.value) || 0;
                targetTotalInput.value = targetMaleCount + targetFemaleCount;

                totalMale.value = totalMaleCount + targetMaleCount;
                totalFemale.value = totalFemaleCount + targetFemaleCount;
                totalTotal.value = (totalMaleCount + targetMaleCount) + (totalFemaleCount + targetFemaleCount);

                // Ensure there's only one zero in the totalTotal field
                if (totalTotal.value === '0') {
                    totalTotal.value = '0';
                }
            }

            nrMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
                calculateTotalMembers();
            });

            nrFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
                calculateTotalMembers();
            });

            naMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
                calculateTotalMembers();
            });

            naFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
                calculateTotalMembers();
            });

            targetMaleInput.addEventListener('input', function() {
                calculateTotalMembers();
            });

            targetFemaleInput.addEventListener('input', function() {
                calculateTotalMembers();
            });

            // Initial calculation
            calculateAndSetTotal(nrMaleInput, nrFemaleInput, nrTotalInput);
            calculateAndSetTotal(naMaleInput, naFemaleInput, naTotalInput);
            calculateTotalMembers();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ftMaleInput = document.querySelector('input[name="NoE_Fulltime_male"]');
            const ftFemaleInput = document.querySelector('input[name="Fulltime_female"]');
            const ftTotalInput = document.querySelector('input[name="Fulltime_total"]');

            const ptMaleInput = document.querySelector('input[name="NoE_Parttime_male"]');
            const ptFemaleInput = document.querySelector('input[name="Parttime_female"]');
            const ptTotalInput = document.querySelector('input[name="Parttime_total"]');

            const totalMaleInput = document.querySelector('input[name="NoE_Total_male"]');
            const totalFemaleInput = document.querySelector('input[name="TotalEmp_female"]');
            const totalTotalInput = document.querySelector('input[name="TotalEmp_total"]');

            function calculateAndSetTotal(maleInput, femaleInput, totalInput) {
                const maleCount = parseInt(maleInput.value) || 0;
                const femaleCount = parseInt(femaleInput.value) || 0;
                totalInput.value = maleCount + femaleCount;
            }

            function calculateTotalEmployees() {
                const totalMaleCount = (parseInt(ftMaleInput.value) || 0) + (parseInt(ptMaleInput.value) || 0);
                const totalFemaleCount = (parseInt(ftFemaleInput.value) || 0) + (parseInt(ptFemaleInput.value) ||
                    0);
                totalMaleInput.value = totalMaleCount;
                totalFemaleInput.value = totalFemaleCount;
                totalTotalInput.value = totalMaleCount + totalFemaleCount;
            }

            ftMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
                calculateTotalEmployees();
            });

            ftFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
                calculateTotalEmployees();
            });

            ptMaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
                calculateTotalEmployees();
            });

            ptFemaleInput.addEventListener('input', function() {
                calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
                calculateTotalEmployees();
            });

            // Initial calculation
            calculateAndSetTotal(ftMaleInput, ftFemaleInput, ftTotalInput);
            calculateAndSetTotal(ptMaleInput, ptFemaleInput, ptTotalInput);
            calculateTotalEmployees();
        });
    </script>
</body>

</html>
