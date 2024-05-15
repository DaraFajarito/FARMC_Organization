<!DOCTYPE html>
<html lang="en">

<head>
    <title>FARMC Membership - VIEW FORM | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap1.min.css') }}">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/chartist/dist/chartist.css') }}" type="text/css"
        media="all">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Weather css -->
    <link href="{{ asset('assets/css/svg-weather.css') }}" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main1.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        @media print {
            table {
                width: 100%;
                border-collapse: collapse;
                font-size: 12px;
            }

            .no-print {
                display: none !important;
                text-align: center;


            }

            table td,
            table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            table th {
                background-color: #f2f2f2;
            }

            .rkmd-checkbox {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row no-print">
                    <div class="main-header">
                        <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_Final.png') }}"
                                style=" width: 50px;" alt="logo"></a>
                        <h4>M/C FARMC Profile | <small>VIEW DETAILS</small></h4>
                        <br>
                        <br>
                        <div style="display: flex;">
                            @foreach ($gen_info as $item)
                            <a href="{{
                                $item->sector_rep === 'Municipal' ? url('/FOMunicipal') :
                                ($item->sector_rep === 'Fishworker' ? url('/FOFishworker') :
                                ($item->sector_rep === 'Commercial' ? url('/FOCommercial') :
                                ($item->sector_rep === 'Women' ? url('/FOWomenF') :
                                ($item->sector_rep === 'Youth' ? url('/FOYouth') :
                                ($item->sector_rep === 'IPs' ? url('/FOIPs') : '#')))))
                            }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                                <div class="actions text-right" style="flex: 1;">
                                    <!-- Added text-center class and flex: 1 -->
                                    <button class="btn btn-success" onclick="window.print()">Print</button>
                                    <button class="btn btn-danger" onclick="downloadPdf()">Download as PDF</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="content">
                        <div class="card-header" style="display: flex; justify-content: space-between;">
                            <div style="display: flex; align-items: center;">
                                <a class="logo"><img src="{{ asset('assets/images/bagongpilipinas.png') }}"
                                        style="width: 160px; height:160px" alt="logo"></a>
                                <a class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}"
                                        style="width: 170px; height:130px" alt="logo"></a>
                                <div style="line-height: 1;">
                                    <small><b>Republic of the Philippines</b></small>
                                    <br>
                                    <span><small>Department of Agriculture</small></span>
                                    <br>
                                    <span><small>BUREAU OF FISHERIES AND AQUATIC RESOURCES</small></span>
                                    <br>
                                    <span><small><b>Regional Field Office - MIMAROPA</b></small></span>
                                    <br>
                                    <span><small><b>Le Grace Bldg. Guinobatan, Calapan City, Oriental
                                                Mindoro</b></small></span>
                                    <br>
                                    <span><small><b>Tel. No. (043) 288-63050 | Mobile No.
                                                0917-107-2189</b></small></span>
                                    <br>
                                    <span><small>ord.mimaropa@bfar.da.gov.ph</small></span>
                                    <br>
                                    <span><small>records.mimaropa@bfar.da.gov.ph</small></span>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; position: relative;  margin-left: auto;">
                                <a class="logo"><img src="{{ asset('assets/images/Logo_Final.png') }}"
                                        style="width: 140px; height:140px" alt="logo"></a>
                            </div>
                        </div>

                        <hr>
                        <br>
                        @foreach ($gen_info as $item)
                            <div class="text-center vertical-center">
                                <div class="grid-material bg-general" style="text-align:center; font-size:20px">
                                    <b>FISHERFOLK
                                        ASSOCIATION PROFILE</b>
                                </div>
                                <div class="captions" style="text-align:center; font-size:20px"> ( As of
                                    <span style="display:inline-block;">{{ $item->as_of }}</span> )
                                </div>
                            </div>
                            <!-- <div class="card-block"> -->

                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group m-r-15">
                                                <div class="col-md-12 grid-material bg-general"><b>Name of
                                                        Organization:</b>
                                                    <span><label class="captions">&nbsp;
                                                            @if ($item->name_of_coop === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->name_of_coop }}
                                                            @endif
                                                        </label></span>
                                                </div>

                                                <div class="col-md-12 grid-material bg-general"><b>Address:</b>
                                                    <span><label class="captions">&nbsp; {{ $item->add_barangay }} ,
                                                            {{ $item->add_city }} ,
                                                            {{ $item->add_province }}</label></span>
                                                </div>

                                                <div class="col-md-12 grid-material bg-general"><b>Sector
                                                        Represented:</b>
                                                    <span><label class="captions">&nbsp; {{ $item->sector_rep }} -
                                                            {{ $item->sector_rep_yes }}</label></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group m-r-15">
                                                <div class="col-md-12 grid-material bg-general"><b>Cooperative
                                                        Identification Number (CIN):</b>
                                                    <span><label class="captions">
                                                            &nbsp; @if ($item->CIN === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->CIN }}
                                                            @endif
                                                        </label>
                                                    </span>
                                                </div>
                                                <div class="col-md-12 grid-material bg-general"><b>Date
                                                        of Latest Amendment:</b>
                                                    <span><label class="captions">&nbsp;
                                                            @if ($item->date_of_amend === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->date_of_amend }}
                                                            @endif
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-12 form-group m-r-15">
                                                    <div class="grid-material bg-general"></div>
                                                    <br>
                                                    <div class="col-md-12 grid-material bg-general"><b>Short
                                                            History of Cooperative:</b>
                                                        <label class="col-md-12 captions"> &nbsp; &nbsp; &nbsp;
                                                            @if ($item->short_history === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->short_history }}
                                                            @endif
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-block">
                                            <hr>
                                            <div style="background-color: #706d69">
                                                <div class="grid-material bg-general"
                                                    style="color: white;padding:10px">
                                                    &nbsp; &nbsp;&nbsp; <b>I. GENERAL INFORMATION</b></div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12"><b>REGISTRATION DETAILS</b></div>
                                                </div>
                                            </div>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th class="text-center" colspan="3">Original Date of
                                                        Registration</th>
                                                </thead>
                                                <thead style="font-size: smaller">
                                                    <th class="text-center">Number</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Attached file</th>
                                                </thead>
                                                <tbody>
                                                    <tr style="font-size: 12px;">
                                                        <td class="text-center">
                                                            @if ($item->RD_ODR_regnum === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->RD_ODR_regnum }}
                                                            @endif
                                                            </span>
                                                        </td>
                                                        <td class="text-center"><span>
                                                                @if ($item->RD_ODR_regdate === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    {{ $item->RD_ODR_regdate }}
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td class="text-center"></span>
                                                            @if ($item->RD_ODR_regfile === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->RD_ODR_regfile }}
                                                            @endif
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th class="text-center" colspan="3">RA 9520 Registration</th>
                                                </thead>
                                                <thead style="font-size: smaller">
                                                    <th class="text-center">Number</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Attached file</th>
                                                </thead>
                                                <tbody>
                                                    <tr style="font-size: 12px;">
                                                        <td class="text-center">
                                                            @if ($item->RD_RA_regnum === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->RD_RA_regnum }}
                                                            @endif
                                                            </span>
                                                        </td>
                                                        <td class="text-center"><span>
                                                                @if ($item->RD_RA_regdate === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    {{ $item->RD_RA_regdate }}
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td class="text-center"><span>
                                                                @if ($item->RD_RA_regfile === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    {{ $item->RD_RA_regfile }}
                                                                @endif
                                                            </span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <div class="col-md-6">
                                                <div class="form-group m-r-15">
                                                    <div class="grid-material bg-general"><b>Membership
                                                            Operation</b><small> &nbsp;(Area of Membership)</small>
                                                        :<span><label class="captions">&nbsp; @if ($item->RD_memOp === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    {{ $item->RD_memOp }}
                                                                @endif
                                                            </label></span>
                                                    </div>

                                                    <div class="grid-material bg-general"><b>Business
                                                            Operation</b><small> &nbsp;(Area of Business)</small>
                                                        :<span><label class="captions">&nbsp; @if ($item->RD_bussOp === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    {{ $item->RD_bussOp }}
                                                                @endif
                                                            </label></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group m-r-15">
                                                    <div class="grid-material bg-general"><b>Category of
                                                            Cooperative:</b>
                                                        <span><label class="captions">&nbsp;
                                                                @if ($item->RD_categofCoop === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    {{ $item->RD_categofCoop }}
                                                                @endif
                                                            </label>
                                                        </span>
                                                    </div>

                                                    <div class="grid-material bg-general"><b>Type of
                                                            Cooperative</b><small> &nbsp;(As to nature of
                                                            business)</small>
                                                        :<span><label class="captions">&nbsp;
                                                                @if ($item->RD_typeofCoop === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    {{ $item->RD_typeofCoop }}
                                                                @endif
                                                            </label></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="form-group m-r-15">
                                                            <div class="grid-material bg-general"></div>

                                                            <div class="grid-material bg-general"><b>General
                                                                    Objectives</b><small> &nbsp;(included in your
                                                                    cooperative's Articles of Cooperation and
                                                                    By-Laws)</small>:
                                                                <label class="col-md-12 captions"> &nbsp; &nbsp;
                                                                    &nbsp;
                                                                    @if ($item->RD_genObj === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        {{ $item->RD_genObj }}
                                                                    @endif
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group m-r-15">
                                                            <div class="grid-material bg-general"></div>
                                                            <div class="grid-material bg-general"><b>Program Products
                                                                    and Services</b><small> &nbsp;(programs, products
                                                                    and services in your cooperative' strategic
                                                                    planning)</small>:
                                                                <label class="col-md-12 captions"> &nbsp; &nbsp; &nbsp;
                                                                    @if ($item->RD_progpas === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        {{ $item->RD_progpas }}
                                                                    @endif
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12"><b>STATUS OF ACCREDITATION</b></div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <div class="form-group m-r-15">
                                                            <div class="grid-material bg-general"><b>Date</b>
                                                                :<span><label class="captions">&nbsp;
                                                                        @if ($item->RD_SOA_date === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->RD_SOA_date }}
                                                                        @endif
                                                                    </label></span>
                                                            </div>
                                                            <div class="grid-material bg-general"><b>Number</b>
                                                                :<span><label class="captions">&nbsp;
                                                                        @if ($item->RD_SOA_num === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->RD_SOA_num }}
                                                                        @endif
                                                                    </label></span>
                                                            </div>
                                                            <div class="grid-material bg-general"><b>Category of
                                                                    Accreditation</b>
                                                                :<span><label class="captions">&nbsp;
                                                                        @if ($item->RD_categofAccre === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->RD_categofAccre }}
                                                                        @endif
                                                                    </label></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div style="background-color: #706d69">
                                                <div class="grid-material bg-general"
                                                    style="color: white;padding:10px">
                                                    &nbsp; &nbsp;&nbsp; <b>II. MEMBERSHIP</b></div>
                                            </div>
                                            <hr>
                                            @foreach ($members as $item)
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-12 grid-material bg-general"><b>a. Common
                                                                Bond:</b>
                                                            <span><label class="captions">&nbsp;
                                                                    @if ($item->common_bond === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        {{ $item->common_bond }}
                                                                    @endif
                                                                </label></span>
                                                        </div>
                                                        <br><br>
                                                        <div class="col-md-12 grid-material bg-general"><b>b.
                                                                Composition of Membership</b>
                                                            <br><br>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <th scope="col" class="text-center"
                                                                        colspan="1">Particulars
                                                                    </th>
                                                                    <th scope="col" class="text-center"
                                                                        colspan="4">Primary</th>
                                                                </thead>
                                                                <tbody style="font-size: 12px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col" colspan="1"> </td>
                                                                        <td scope="col"
                                                                            style="text-align: center;">Male
                                                                        </td>
                                                                        <td scope="col"
                                                                            style="text-align: center;">Female</td>
                                                                        <td scope="col"
                                                                            style="text-align: center;">Total
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody style="font-size: 15px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col">Number of Regular members
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->CoM_NRMem_male === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->CoM_NRMem_male }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->NRMem_female === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->NRMem_female }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->NRMem_total === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <b> {{ $item->NRMem_total }} </b>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody style="font-size: 15px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col">Number of Association
                                                                            members</td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->CoM_NAMem_male === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->CoM_NAMem_male }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->NAMem_female === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->NAMem_female }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->NAMem_total === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <b> {{ $item->NAMem_total }} </b>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody style="font-size: 15px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col">Total of Association members
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->CoM_TotalMem_male === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span style="color: rgb(8, 171, 8);">
                                                                                    <b> {{ $item->CoM_TotalMem_male }}
                                                                                    </b> </span>
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->TMem_female === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span style="color: rgb(8, 171, 8);">
                                                                                    <b> {{ $item->TMem_female }} </b>
                                                                                </span>
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->TMem_total === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span style="color: rgb(8, 171, 8);">
                                                                                    <b> {{ $item->TMem_total }} </b>
                                                                                </span>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody>
                                                                    <tr>
                                                                        <td scope="col" colspan="4">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody style="font-size: 15px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col">Target Potential Membership
                                                                            (current year)
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->CoM_TargetMem_male === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->CoM_TargetMem_male }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->TarMem_female === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->TarMem_female }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->TarMem_total === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->TarMem_total }}
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody style="font-size: 15px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col" class="text-center">Total
                                                                            Membership
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->CoM_Total_male === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span
                                                                                    style="color: rgb(157, 146, 28);">
                                                                                    <b> {{ $item->CoM_Total_male }}
                                                                                    </b> </span>
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->Total_female === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span
                                                                                    style="color: rgb(157, 146, 28);">
                                                                                    <b> {{ $item->Total_female }} </b>
                                                                                </span>
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->Total_total === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span
                                                                                    style="color: rgb(157, 146, 28);">
                                                                                    <b> {{ $item->Total_total }} </b>
                                                                                </span>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="col-md-12 grid-material bg-general"
                                                            style="margin-top: 20px"><b>c.
                                                                Number of Employees</b>
                                                            <br><br>
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <th scope="col" class="text-center"
                                                                        colspan="1">Number of
                                                                        Employees</th>
                                                                    <th scope="col" class="text-center"
                                                                        colspan="4">Current Year
                                                                    </th>
                                                                </thead>
                                                                <tbody style="font-size: 12px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col" colspan="1"> </td>
                                                                        <td scope="col"
                                                                            style="text-align: center;">Male
                                                                        </td>
                                                                        <td scope="col"
                                                                            style="text-align: center;">Female</td>
                                                                        <td scope="col"
                                                                            style="text-align: center;">Total
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody style="font-size: 15px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col">Full - Time
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->NoE_Fulltime_male === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->NoE_Fulltime_male }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->Fulltime_female === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->Fulltime_female }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->Fulltime_total === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <b> {{ $item->Fulltime_total }} </b>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody style="font-size: 15px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col">Part - Time</td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->NoE_Parttime_male === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->NoE_Parttime_male }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->Parttime_female === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                {{ $item->Parttime_female }}
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->Parttime_total === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <b> {{ $item->Parttime_total }} </b>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>

                                                                <tbody style="font-size: 15px">
                                                                    <tr style="font-weight: 500">
                                                                        <td scope="col" class="text-center">Total
                                                                            Employees
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->NoE_Total_male === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span
                                                                                    style="color: rgb(157, 146, 28);">
                                                                                    <b> {{ $item->NoE_Total_male }}
                                                                                    </b> </span>
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->TotalEmp_female === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span
                                                                                    style="color: rgb(157, 146, 28);">
                                                                                    <b> {{ $item->TotalEmp_female }}
                                                                                    </b> </span>
                                                                            @endif
                                                                        </td>
                                                                        <td scope="col" class="text-center">
                                                                            @if ($item->TotalEmp_total === null)
                                                                                <span style="color: red;">no
                                                                                    data</span>
                                                                            @else
                                                                                <span
                                                                                    style="color: rgb(157, 146, 28);">
                                                                                    <b> {{ $item->TotalEmp_total }}
                                                                                    </b> </span>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <hr>
                                                <div style="background-color: #706d69">
                                                    <div class="grid-material bg-general"
                                                        style="color: white;padding:10px">
                                                        &nbsp; &nbsp;&nbsp; <b>III. ASSETS</b></div>
                                                </div>
                                                <hr>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-12 grid-material bg-general"><b>Total
                                                                Assets:</b>
                                                            <span><label class="captions">&nbsp;
                                                                    @if ($item->total_assets === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->total_assets }} </span>
                                                                    @endif
                                                                </label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <hr>
                                            <div style="background-color: #706d69">
                                                <div class="grid-material bg-general"
                                                    style="color: white;padding:10px">
                                                    &nbsp; &nbsp;&nbsp; <b>IV. OFFICERS</b></div>
                                            </div>
                                            <hr>
                                            <br>
                                            @foreach ($offic as $item)
                                                <table class="table table-bordered">
                                                    <thead>
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
                                                            <td style="text-align: center;">
                                                                @if ($item->BoardofDir_name1 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->BoardofDir_name1 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs1 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs1 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen1 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen1 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth1 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth1 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age1 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age1 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Chairperson</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->Chairperson_name2 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->Chairperson_name2 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs2 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs2 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen2 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen2 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth2 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth2 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age2 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age2 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Vice-chairperson</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->Vchair_name3 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->Vchair_name3 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs3 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs3 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen3 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen3 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth3 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth3 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age3 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age3 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->BM_name4 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->BM_name4 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs4 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs4 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen4 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen4 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth4 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth4 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age4 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age4 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->BM_name5 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->BM_name5 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs5 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs5 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen5 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen5 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth5 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth5 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age5 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age5 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->BM_name6 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->BM_name6 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs6 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs6 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen6 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen6 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth6 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth6 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age6 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age6 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->BM_name7 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->BM_name7 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs7 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs7 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen7 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen7 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth7 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth7 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age7 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age7 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->BM_name8 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->BM_name8 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs8 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs8 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen8 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen8 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth8 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth8 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age8 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age8 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->BM_name9 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->BM_name9 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs9 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs9 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen9 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen9 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth9 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth9 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age9 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age9 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp; Board Member</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->BM_name10 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->BM_name10 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs10 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs10 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen10 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen10 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth10 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth10 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age10 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age10 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>General Manager</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->Gen_Man_name11 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->Gen_Man_name11 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs11 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs11 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen11 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen11 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth11 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth11 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age11 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age11 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Secretary</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->Sec_name12 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->Sec_name12 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs12 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs12 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen12 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen12 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth12 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth12 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age12 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age12 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Treasurer</td>
                                                            <td style="text-align: center;">
                                                                @if ($item->Treas_name13 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->Treas_name13 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->cs13 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->cs13 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->gen13 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->gen13 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->birth13 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->birth13 }} </span>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: center;">
                                                                @if ($item->age13 === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    <span> {{ $item->age13 }} </span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            @endforeach
                                            <br>
                                            <label for="inline3mail" class="block form-control-label">Audit &
                                                Inventory
                                                Committee</label>
                                            @foreach ($offic1 as $item)

                                                @if ($item->category == 'Audit & Inventory Committee')
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'Election Committee')
                                                    <div class="col-md-12">
                                                        <label for="inline3mail"
                                                            class="block form-control-label">Election
                                                            Committee</label>
                                                    </div>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'Mediation & Concilliation Committee')
                                                    <label for="inline3mail"
                                                        class="block form-control-label">Mediation & Concilliation
                                                        Committee</label>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'Ethics Committee')
                                                    <label for="inline3mail" class="block form-control-label">Ethics
                                                        Committee</label>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'Audit Committee')
                                                    <label for="inline3mail" class="block form-control-label">Audit
                                                        Committee</label>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'Education Committee')
                                                    <label for="inline3mail"
                                                        class="block form-control-label">Education Committee</label>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'Membership Committee')
                                                    <label for="inline3mail"
                                                        class="block form-control-label">Membership Committee</label>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'Marketing Committee')
                                                    <label for="inline3mail"
                                                        class="block form-control-label">Marketing Committee</label>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'GAD Committee')
                                                    <label for="inline3mail" class="block form-control-label">GAD
                                                        Committee</label>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                @elseif ($item->category == 'Others: please specify')
                                                    <label for="inline3mail" class="block form-control-label">Others:
                                                        please
                                                        specify:   @if ($item->other_cat === null)
                                                        <span style="color: red;">no data</span>
                                                    @else
                                                        <span> {{ $item->other_cat }} </span>
                                                    @endif</label>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" style="text-align: center;">
                                                                    Position
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Name
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Civil
                                                                    Status
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Gender
                                                                </th>
                                                                <th scope="col" style="text-align: center;">
                                                                    Birthday
                                                                </th>
                                                                <th scope="col" style="text-align: center;">Age
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Chairman</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chairman_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chairman_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->chair_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->chair_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Secretary</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; Member</td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_name }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_cs === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_cs }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_gen === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_gen }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->mem_birth === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->mem_birth }} </span>
                                                                    @endif
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    @if ($item->sec_age === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        <span> {{ $item->sec_age }} </span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                @endif
                                            @endforeach
                                            <hr>
                                            <div style="background-color: #706d69">
                                                <div class="grid-material bg-general"
                                                    style="color: white;padding:10px">
                                                    &nbsp; &nbsp;&nbsp; <b>V. ORGANIZATIONAL STRUCTURE</b></div>
                                            </div>
                                            <hr>
                                            @foreach ($orgst as $item)
                                                <div class="row">
                                                    <div class="col-md-12" style="margin-bottom: 10px;">
                                                        <div class="col-md-3">
                                                            <div class="grid-material bg-general">Organizational
                                                                Structure:
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            @if ($item->orgstruct_file === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->orgstruct_file }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div style="background-color: #706d69">
                                                    <div class="grid-material bg-general"
                                                        style="color: white;padding:10px">
                                                        &nbsp; &nbsp;&nbsp; <b>VI. CONTACT DETAILS</b></div>
                                                </div>
                                                <hr>

                                                <div class="col-md-12">
                                                    <div class="form-group m-r-15">
                                                        <div class="grid-material bg-general"><b>Name:</b>
                                                            <span><label class="captions">
                                                                    &nbsp; @if ($item->CD_name === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        {{ $item->CD_name }}
                                                                    @endif
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <div class="grid-material bg-general"><b>Designation:</b>
                                                            <span><label class="captions">&nbsp;
                                                                    @if ($item->CD_design === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        {{ $item->CD_design }}
                                                                    @endif
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <div class="grid-material bg-general"><b>Tell / Cell
                                                                Number:</b>
                                                            <span><label class="captions">&nbsp;
                                                                    @if ($item->CD_tell === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        {{ $item->CD_tell }}
                                                                    @endif
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <div class="grid-material bg-general"><b>Email Address:</b>
                                                            <span><label class="captions">&nbsp;
                                                                    @if ($item->CD_email === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        {{ $item->CD_email }}
                                                                    @endif
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <div class="grid-material bg-general"><b>Facebook Account:</b>
                                                            <span><label class="captions">&nbsp;
                                                                    @if ($item->CD_FBacc === null)
                                                                        <span style="color: red;">no data</span>
                                                                    @else
                                                                        {{ $item->CD_FBacc }}
                                                                    @endif
                                                                </label></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="col-md-12">
                                                <hr>
                                                <div style="background-color: #706d69">
                                                    <div class="grid-material bg-general"
                                                        style="color: white;padding:10px">
                                                        &nbsp; &nbsp;&nbsp; <b>VII. LIST OF MEMBERS</b></div>
                                                </div>
                                                <hr>
                                                <div class="form-group m-r-15">
                                                    <table class="table text-center" id="dynamic">
                                                        <thead>
                                                            <tr style="width: 200px; font-size: small;">
                                                                <th class="text-center">Name</th>
                                                                <th class="text-center">Civil Status</th>
                                                                <th class="text-center">Gender</th>
                                                                <th class="text-center">Birthday</th>
                                                                <th class="text-center">Age</th>
                                                                <th class="text-center">4ps/Ips/SC/PWD</th>
                                                                <th class="text-center"></th>

                                                            </tr>
                                                        </thead>
                                                        @foreach ($listmem as $item)
                                                            <tbody id="dytable-body">
                                                                <tr>
                                                                    <td>
                                                                        @if ($item->listmem_name === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->listmem_name }}
                                                                        @endif
                                                                    </td>

                                                                    <td>
                                                                        @if ($item->listmem_cs === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->listmem_cs }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if ($item->listmem_gen === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->listmem_gen }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if ($item->listmem_birth === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->listmem_birth }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if ($item->listmem_age === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->listmem_age }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if ($item->listmem_fourps === null)
                                                                            <span style="color: red;">no data</span>
                                                                        @else
                                                                            {{ $item->listmem_fourps }}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        @endforeach

                                                    </table>
                                                </div>
                                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Required Jqurey -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>


    <script src="{{ asset('assets/plugins/Jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tether/dist/js/tether.min.js') }}"></script>

    <!-- Required Fremwork -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Scrollbar JS-->
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>

    <!--classic JS-->
    <script src="{{ asset('assets/plugins/classie/classie.js') }}"></script>

    <!-- notification -->
    <script src="{{ asset('assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>

    <!-- Counter js  -->
    <script src="{{ asset('assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/countdown/js/jquery.counterup.js') }}"></script>

    <!-- Echart js -->
    <script src="{{ asset('assets/plugins/charts/echarts/js/echarts-all.js') }}"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('assets/js/main.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/elements.js') }}"></script>
    <script src="{{ asset('assets/js/menu.min.js') }}"></script>


    <script type="text/javascript">
        SyntaxHighlighter.all();
    </script>

    <script>
        document.querySelectorAll('input[name="optionsRadios"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'IPoption') {
                    document.getElementById('textBoxContainer').style.display = 'block';
                } else {
                    document.getElementById('textBoxContainer').style.display = 'none';
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#internalP_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox').prop('checked', true);
                } else {
                    $('#checkbox').prop('checked', false);
                }
            });
            $('#fisherfolkR_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-1').prop('checked', true);
                } else {
                    $('#checkbox-1').prop('checked', false);
                }
            });
            $('#fisheriesP_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-2').prop('checked', true);
                } else {
                    $('#checkbox-2').prop('checked', false);
                }
            });
            $('#formulationR_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-3').prop('checked', true);
                } else {
                    $('#checkbox-3').prop('checked', false);
                }
            });

            // Add similar change event listeners for other file inputs
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function setupCheckbox(checkboxId, hiddenInputId) {
                const checkbox = document.getElementById(checkboxId);
                const hiddenInput = document.getElementById(hiddenInputId);

                checkbox.addEventListener('change', function() {
                    hiddenInput.value = this.checked ? '1' : null;
                });
            }

            setupCheckbox('checkbox', 'internalP_file');
            setupCheckbox('checkbox-1', 'fisherfolkR_file');
            setupCheckbox('checkbox-2', 'fisheriesP_file');
            setupCheckbox('checkbox-3', 'formulationR_file');
        });
    </script>

    <script>
        function downloadPdf() {
            const element = document.getElementById('content');
            html2pdf(element, {
                margin: [0.50, 0, 1, 0],
                filename: 'FARMC.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 1
                },
                jsPDF: {
                    unit: 'in',
                    format: 'legal',
                    orientation: 'portrait'
                },
                // Add autoPaging option
                // This will automatically add new pages as needed to fit the content
                // Note: This may affect the performance for large documents
                autoPaging: true
            });
        }
    </script>

    <script>
        const photoInput = document.getElementById('photo1x1');
        const photoLabel = document.getElementById('label1x1');
        const photoPreview = document.getElementById('preview1x1');

        // Function to handle file input change
        function handleFileInputChange() {
            const file = photoInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    photoPreview.src = e.target.result;
                    photoPreview.style.display = 'block';
                    photoLabel.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        }

        // Trigger file input click when the image is clicked
        photoPreview.addEventListener('click', function() {
            photoInput.click();
        });

        // Listen for file input change
        photoInput.addEventListener('change', handleFileInputChange);
    </script>

</body>

</html>
