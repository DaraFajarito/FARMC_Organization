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
                            <a href="{{ url('/farmc_membership') }}" class="btn btn-secondary"> <i
                                    class="icon-arrow-left"></i> Back</a>
                            <div class="actions text-right" style="flex: 1;">
                                <!-- Added text-center class and flex: 1 -->
                                <button class="btn btn-success" onclick="window.print()">Print</button>
                                <button class="btn btn-danger" onclick="downloadPdf()">Download as PDF</button>
                            </div>
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
                        @foreach ($basic_info as $item)
                            <div class="text-center vertical-center">
                                <div class="grid-material bg-general" style="text-align:center; font-size:20px">
                                    <b>FISHERFOLK
                                        ASSOCIATION PROFILE</b>
                                </div>
                                <div class="captions" style="text-align:center; font-size:20px"> ( As of
                                    <span style="display:inline-block;">
                                        @if ($item->as_of === null)
                                            <span style="color: red;">no data</span>
                                        @else
                                            {{ $item->as_of }}
                                        @endif
                                    </span> )
                                </div>
                            </div>
                            <!-- <div class="card-block"> -->

                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group m-r-15">
                                                <div class="grid-material bg-general"><b>1. Name of Organization:
                                                        @if ($item->name_of_org === null)
                                                            <span style="color: red;">no data</span>
                                                        @else
                                                            {{ $item->name_of_org }}
                                                        @endif
                                                    </b>
                                                </div>

                                                <label
                                                    for=""class="col-md-12 col-form-label form-control-label">Address:
                                                    {{ $item->add_barangay }} , {{ $item->add_city }} ,
                                                    {{ $item->add_province }}
                                                    &nbsp;</label>
                                                <label
                                                    for=""class="col-md-12 col-form-label form-control-label">Sector
                                                    Represented: {{ $item->sector_rep }} - {{ $item->sector_rep_yes }}
                                                    &nbsp;</label>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="grid-material bg-general"><b>2. Status of Registration</b>
                                            </div>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead style="font-size: smaller">
                                                    <th colspan="1"></th>
                                                    <th class="text-center">Status of Registration</th>
                                                    <th class="text-center">Registration Number:</th>
                                                    <th class="text-center">Date of Registration:</th>
                                                </thead>
                                                <tbody>
                                                    <tr style="font-size: 12px;">
                                                        <td class="text-center"> &nbsp;
                                                            @if ($item->status_of_reg === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->status_of_reg }}
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            @if ($item->status_of_reg_yes === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->status_of_reg_yes }}
                                                            @endif
                                                            </span>
                                                        </td>
                                                        <td class="text-center"><span style="color: green;">
                                                                @if ($item->reg_no === null)
                                                                    <span style="color: red;">no data</span>
                                                                @else
                                                                    {{ $item->reg_no }}
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            @if ($item->date_reg === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->date_reg }}
                                                            @endif
                                                            </span>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="grid-material bg-general"><b>3. Status of Accreditation</b>
                                            </div>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead style="font-size: smaller">
                                                    <th colspan="1"></th>
                                                    <th class="text-center">Status of Accreditation</th>
                                                    <th class="text-center">Accreditation Number:</th>
                                                    <th class="text-center">Date of Accreditation:</th>
                                                </thead>
                                                <tbody>
                                                    <tr style="font-size: 12px;">
                                                        <td class="text-center"> &nbsp;@if ($item->status_of_accre === null)
                                                            <span style="color: red;">no data</span>
                                                        @else
                                                            {{ $item->status_of_accre }}
                                                        @endif
                                                        </td>
                                                        <td class="text-center">@if ($item->status_of_accre_yes === null)
                                                            <span style="color: red;">no data</span>
                                                        @else
                                                            {{ $item->status_of_accre_yes }}
                                                        @endif
                                                        </td>
                                                        <td class="text-center">@if ($item->accre_no === null)
                                                            <span style="color: red;">no data</span>
                                                        @else
                                                            {{ $item->accre_no }}
                                                        @endif</td>
                                                        <td class="text-center">@if ($item->date_accre === null)
                                                            <span style="color: red;">no data</span>
                                                        @else
                                                            {{ $item->date_accre }}
                                                        @endif</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="" class="block form-control-label">4. Officer and
                                                Management</label>
                                            <label class="captions">4.1 Executive Officers</label>
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
                                                        <td>
                                                            @if ($item->OAM_EO_Chair_name === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->OAM_EO_Chair_name }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->chair_cs === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->chair_cs }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->chair_gen === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->chair_gen }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->chair_birth === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->chair_birth }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->chair_age === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->chair_age }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->chair_fourps === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->chair_fourps }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div style="font-size: small;">Vice
                                                                Chairperson </div>
                                                        </td>
                                                        <td>
                                                            @if ($item->OAM_EO_Vicechair_name === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->OAM_EO_Vicechair_name }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->vicechair_cs === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->vicechair_cs }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->vicechair_gen === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->vicechair_gen }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->vicechair_birth === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->vicechair_birth }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->vicechair_age === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->vicechair_age }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->vicechair_fourps === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->vicechair_fourps }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">Secretary
                                                        </td>
                                                        <td>
                                                            @if ($item->OAM_EO_Sec_name === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->OAM_EO_Sec_name }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sec_cs === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sec_cs }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sec_gen === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sec_gen }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sec_birth === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sec_birth }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sec_age === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sec_age }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sec_fourps === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sec_fourps }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">Treasurer
                                                        </td>
                                                        <td>
                                                            @if ($item->OAM_EO_Treas_name === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->OAM_EO_Treas_name }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->treas_cs === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->treas_cs }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->treas_gen === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->treas_gen }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->treas_birth === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->treas_birth }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->treas_age === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->treas_age }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->treas_fourps === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->treas_fourps }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">Auditor
                                                        </td>
                                                        <td>
                                                            @if ($item->OAM_EO_Aud_name === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->OAM_EO_Aud_name }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->aud_cs === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->aud_cs }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->aud_gen === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->aud_gen }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->aud_birth === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->aud_birth }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->aud_age === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->aud_age }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->aud_fourps === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->aud_fourps }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">PRO</td>
                                                        <td>
                                                            @if ($item->OAM_EO_PRO_name === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->OAM_EO_PRO_name }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->pro_cs === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->pro_cs }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->pro_gen === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->pro_gen }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->pro_birth === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->pro_birth }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->pro_age === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->pro_age }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->pro_fourps === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->pro_fourps }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">
                                                            Sgt-at-Arms</td>
                                                        <td>
                                                            @if ($item->OAM_EO_Sgt_name === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->OAM_EO_Sgt_name }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sgt_cs === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sgt_cs }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sgt_gen === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sgt_gen }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sgt_birth === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sgt_birth }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sgt_age === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sgt_age }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->sgt_fourps === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->sgt_fourps }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;">Others
                                                        </td>
                                                        <td>
                                                            @if ($item->OAM_EO_Other_name === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->OAM_EO_Other_name }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->other_cs === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->other_cs }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->other_gen === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->other_gen }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->other_birth === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->other_birth }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->other_age === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->other_age }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->other_fourps === null)
                                                                <span style="color: red;">no data</span>
                                                            @else
                                                                {{ $item->other_fourps }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                        </div>
                        @endforeach

                        @foreach ($boardDir as $item)
                            <div class="col-md-12">
                                <label class="captions">4.2 Board of Directors/Trustees</label>
                                <table class="table" style="width: 100%">
                                    <thead>
                                        <tr style="font-size: small;">
                                            <th>No.</th>
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
                                            <td>1.)</td>
                                            <td>
                                                @if ($item->boardofDir_name1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_name1 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_cs1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_cs1 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_gen1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_gen1 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_birth1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_birth1 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_age1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_age1 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_fourps1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_fourps1 }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2)</td>
                                            <td>
                                                @if ($item->boardofDir_name2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_name2 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_cs2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_cs2 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_gen2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_gen2 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_birth2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_birth2 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_age2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_age2 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_fourps2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_fourps2 }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3)</td>
                                            <td>
                                                @if ($item->boardofDir_name3 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_name3 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_cs3 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_cs3 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_gen3 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_gen3 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_birth3 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_birth3 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_age3 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_age3 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_fourps3 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_fourps3 }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4)</td>
                                            <td>
                                                @if ($item->boardofDir_name4 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_name4 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_cs4 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_cs4 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_gen4 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_gen4 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_birth4 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_birth4 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_age4 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_age4 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_fourps4 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_fourps4 }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5)</td>
                                            <td>
                                                @if ($item->boardofDir_name5 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_name5 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_cs5 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_cs5 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_gen5 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_gen5 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_birth5 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_birth5 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_age5 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_age5 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_fourps5 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_fourps5 }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6)</td>
                                            <td>
                                                @if ($item->boardofDir_name6 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_name6 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_cs6 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_cs6 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_gen6 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_gen6 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_birth6 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_birth6 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_age6 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_age6 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_fourps6 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_fourps6 }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7)</td>
                                            <td>
                                                @if ($item->boardofDir_name7 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_name7 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_cs7 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_cs7 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_gen7 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_gen7 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_birth7 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_birth7 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_age7 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_age7 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_fourps7 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_fourps7 }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8)</td>
                                            <td>
                                                @if ($item->boardofDir_name8 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_name8 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_cs8 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_cs8 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_gen8 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_gen8 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_birth8 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_birth8 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_age8 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_age8 }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->boardofDir_fourps8 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->boardofDir_fourps8 }}
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <br>
                            </div>
                        @endforeach
                        <div class="col-md-12">
                            <label class="captions">4.3 Committees</label>
                        </div>
                        @foreach ($committee as $item)
                            @if ($item->category == 'Membership Committee')
                                <div class="col-md-12">
                                    <label for="inline3mail" class="block form-control-label">Membership
                                        Committee</label>
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
                                                <td>
                                                    @if ($item->name === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps }}
                                                @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="font-size: small;">Secretary
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item->name1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps1 }}
                                                @endif
                                                </td>
                                            <tr>
                                                <td style="font-size: small;">Member</td>
                                                <td>
                                                    @if ($item->name2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps2 }}
                                                @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                            @elseif($item->category == 'Committee on Education and Research')
                                <div class="col-md-12">
                                    <label for="inline3mail" class="block form-control-label">Committee on
                                        Education and Research</label>
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
                                                <td>
                                                    @if ($item->name === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps }}
                                                @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="font-size: small;">Secretary
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item->name1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps1 }}
                                                @endif
                                                </td>
                                            <tr>
                                                <td style="font-size: small;">Member</td>
                                                <td>
                                                    @if ($item->name2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps2 }}
                                                @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                            @elseif($item->category == 'Election Committee')
                                <div class="col-md-12">
                                    <label for="inline3mail" class="block form-control-label">Election
                                        Committee</label>
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
                                                <td>
                                                    @if ($item->name === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps }}
                                                @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="font-size: small;">Secretary
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item->name1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps1 }}
                                                @endif
                                                </td>
                                            <tr>
                                                <td style="font-size: small;">Member</td>
                                                <td>
                                                    @if ($item->name2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps2 }}
                                                @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                            @elseif($item->category == 'Audit Committee')
                                <div class="col-md-12">
                                    <label for="inline3mail" class="block form-control-label">Audit
                                        Committee</label>

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
                                                <td>
                                                    @if ($item->name === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps }}
                                                @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="font-size: small;">Secretary
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item->name1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps1 }}
                                                @endif
                                                </td>
                                            <tr>
                                                <td style="font-size: small;">Member</td>
                                                <td>
                                                    @if ($item->name2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps2 }}
                                                @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                            @elseif($item->category == 'Others: please specify')
                                <div class="col-md-12">
                                    <label for="inline3mail"
                                        class="block form-control-label">{{ $item->other_cat }}</label>
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
                                                <td>
                                                    @if ($item->name === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps }}
                                                @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="font-size: small;">Secretary
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item->name1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday1 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age1 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps1 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps1 }}
                                                @endif
                                                </td>
                                            <tr>
                                                <td style="font-size: small;">Member</td>
                                                <td>
                                                    @if ($item->name2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->name2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>
                                                    @if ($item->civil_status2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->civil_status2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->gender2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->gender2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->birthday2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->birthday2 }}
                                                @endif
                                                </td>
                                                &nbsp;
                                                <td>@if ($item->age2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->age2 }}
                                                @endif</td>
                                                &nbsp;
                                                <td>@if ($item->fourps2 === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->fourps2 }}
                                                @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        @endforeach
                        <br><br>

                        <div class="col-md-12">
                            <hr>
                            <br>
                            <label for="" class="block form-control-label">5. List of
                                Members</em></label>
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
                                                <td>@if ($item->mem_name === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->mem_name }}
                                                @endif
                                                </td>

                                                <td>@if ($item->mem_cs === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->mem_cs }}
                                                @endif
                                               </td>
                                                <td>@if ($item->mem_gen === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->mem_gen }}
                                                @endif
                                                </td>
                                                <td>@if ($item->mem_birth === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->mem_birth }}
                                                @endif</td>
                                                <td>>@if ($item->mem_age === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->mem_age }}
                                                @endif
                                                </td>
                                                <td>>@if ($item->mem_fourps === null)
                                                    <span style="color: red;">no data</span>
                                                @else
                                                    {{ $item->mem_fourps }}
                                                @endif</td>
                                            </tr>
                                        </tbody>
                                    @endforeach

                                </table>
                            </div>
                            <hr>
                        </div>
                    </div>
                    @foreach ($basic_info as $item)
                        <div class="row">
                            <br>
                            <div class="col-md-4">
                                <label for="" class="block form-control-label">6.
                                    Capitalization</em></label>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>1. Membership Fee:
                                                @if ($item->capmem_fee === null)
                                                    <span style="color: red;">&nbsp; no data</span>
                                                @else
                                                    &nbsp; {{ $item->capmem_fee }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2. Monthly Contribution:
                                                @if ($item->capmonthly_cont === null)
                                                    <span style="color: red;">&nbsp; no data</span>
                                                @else
                                                    &nbsp; {{ $item->capmonthly_cont }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3. Donations:
                                                @if ($item->cap_donation === null)
                                                    <span style="color: red;">&nbsp; no data</span>
                                                @else
                                                    &nbsp; {{ $item->cap_donation }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4. Others:
                                                @if ($item->cap_others === null)
                                                    <span style="color: red;">&nbsp; no data</span>
                                                @else
                                                    &nbsp; {{ $item->cap_others }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Total Capital:
                                                @if ($item->captotal_cap === null)
                                                    <span style="color: red;">&nbsp; no data</span>
                                                @else
                                                    &nbsp; {{ $item->captotal_cap }}
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <label for="" class="block form-control-label">7. Contact
                                    Information</em></label>
                                <div class="form-group row">
                                    <label for="" class="col-md-12 captions">Contact
                                        Person:</label>
                                    <div class="col-md-12">
                                        @if ($item->CIcontact_person === null)
                                            <span style="color: red;">&nbsp; no data</span>
                                        @else
                                            &nbsp; {{ $item->CIcontact_person }}
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="col-md-12 captions">Landline:
                                    @if ($item->CIlandline === null)
                                        <span style="color: red;">&nbsp; no data</span>
                                    @else
                                        {{ $item->CIlandline }}
                                    @endif
                                </label>
                                <br> <br>
                                <label for="" class="col-md-12 captions">Mobile Phone:
                                    @if ($item->CIMobile === null)
                                        <span style="color: red;">&nbsp; no data</span>
                                    @else
                                        {{ $item->CIMobile }}
                                    @endif
                                </label>
                                <br> <br>
                                <label for="" class="col-md-12 captions">Messenger:
                                    @if ($item->CIMess === null)
                                        <span style="color: red;">&nbsp; no data</span>
                                    @else
                                        {{ $item->CIMess }}
                                    @endif
                                </label>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
        <hr>
    </div>
    </div>
    </form>
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
