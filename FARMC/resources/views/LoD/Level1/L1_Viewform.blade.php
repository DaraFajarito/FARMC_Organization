<!DOCTYPE html>
<html lang="en">

<head>
    <title>VIEW FORM | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset ('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset ('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/icon/themify-icons/themify-icons.css') }}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/icon/icofont/css/icofont.css') }}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/bootstrap/css/bootstrap1.min.css') }}">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{ asset ('assets/plugins/chartist/dist/chartist.css') }}" type="text/css" media="all">

    <!-- Weather css -->
    <link href="{{ asset ('assets/css/svg-weather.css') }}" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main1.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/responsive.css') }}">

    <style>
        table.table td {
            height: 20px;
            /* Set the desired height for the table cells */
            padding: 5px;
            /* Add some padding to make the content look better */
        }

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
                        <a href="index.html" class="logo"><img src="{{ asset ('assets/images/Logo_Final.png') }}" style=" width: 50px;" alt="logo"></a>
                        <h4>M/C FARMC Profile | <small>VIEW DETAILS</small></h4>
                        <br>
                        <br>
                        <div style="display: flex;">
                            <a href="{{ url ('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                            <div class="actions text-center" style="flex: 1;"> <!-- Added text-center class and flex: 1 -->
                                <button class="btn btn-success" onclick="window.print()">Print</button>
                                <button class="btn btn-danger" onclick="downloadPdf()">Download as PDF</button>
                            </div>
                            <div class="actions" style="margin-left: auto;">
                                <a href="{{ url ('/basicFunction') }}"><button class="btn btn-primary">Proceed to Lvl 2</button></a>
                            </div>
                        </div>


                    </div>
                </div>

                @foreach($data as $item)
                <div class="card">
                    <div id="content">
                        <div class="card-header" style="display: flex; justify-content: space-between;">
                            <div style="display: flex; align-items: center;">
                                <a class="logo"><img src="{{ asset ('assets/images/bagongpilipinas.png') }}" style="width: 160px; height:160px" alt="logo"></a>
                                <a class="logo"><img src="{{ asset ('assets/images/Logo_BFAR.png') }}" style="width: 170px; height:130px" alt="logo"></a>
                                <div style="line-height: 1;">
                                    <small><b>Republic of the Philippines</b></small>
                                    <br>
                                    <span><small>Department of Agriculture</small></span>
                                    <br>
                                    <span><small>BUREAU OF FISHERIES AND AQUATIC RESOURCES</small></span>
                                    <br>
                                    <span><small><b>Regional Field Office - MIMAROPA</b></small></span>
                                    <br>
                                    <span><small><b>Le Grace Bldg. Guinobatan, Calapan City, Oriental Mindoro</b></small></span>
                                    <br>
                                    <span><small><b>Tel. No. (043) 288-63050 | Mobile No. 0917-107-2189</b></small></span>
                                    <br>
                                    <span><small>ord.mimaropa@bfar.da.gov.ph</small></span>
                                    <br>
                                    <span><small>records.mimaropa@bfar.da.gov.ph</small></span>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; position: relative;  margin-left: auto;">
                                <a class="logo"><img src="{{ asset ('assets/images/Logo_Final.png') }}" style="width: 140px; height:140px" alt="logo"></a>
                            </div>
                        </div>



                        <!-- <div class="card-header"> -->
                        <hr>
                        <div class="text-center">
                            LEVEL ONE: FARMC Organization Details Overview
                            <br>
                            <span class="label label-default"> Basic Structure of the Council</span>
                        </div>
                        <hr>
                        <br>
                        <div class="card-header">
                            <div style="background-color: #415dfe;">
                                <div class="grid-material bg-general" style="color: white;padding:10px"> &nbsp&nbsp&nbsp<b>BASIC STRUCTURE</b></div>
                            </div>
                            <hr>
                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                <div class="grid-material bg-general"></div>
                            </div>
                            <form class="form-inline" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>
                                @endif

                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 col-form-label form-control-label">Municipality / City: {{$item->municipality}}</label>
                                                <!-- <div class="col-md-2">
                                                        <input type="text" id="municipality" name="municipality" class="form-control" style="width:900px;" placeholder="">
                                                    </div> -->
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="province" class="col-md-12 col-form-label form-control-label">Province: {{$item->province}}</label>
                                                <!-- <div class="col-md-2">
                                                        <input type="text" id="province" name="province" class="form-control" style="width:900px" placeholder="">
                                                    </div> -->
                                            </div>
                                            <br>
                                            <div class="form-group m-r-15">
                                                <label for="date" class="block form-control-label">Date organized: <td>{{ \Carbon\Carbon::parse($item->date_organized)->format('Y/m/d') }}</td></label>
                                                <!-- <input id="date" type="date" name="date_organized" class="form-control" style="width: 400px;" placeholder=""> -->
                                            </div>
                                            <br><br>
                                            <label class="captions"><small>Proof:</small></label>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="font-size: 12px;">
                                                            <th>Minutes</th>
                                                            <th>Photos</th>
                                                            <th>Attendance</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size: 12px;">
                                                            <td>{{ $item->minutes1 }}</td>
                                                            <td>{{ $item->photos1 }}</td>
                                                            <td>{{ $item->attendance1 }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Date of Reorganized: <td>{{ \Carbon\Carbon::parse($item->date_reorganized)->format('Y/m/d') }}</label>
                                            </div>
                                            <br><br>
                                            <label class="captions"><small>Proof:</small></label>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="font-size: 12px;">
                                                            <th>Minutes</th>
                                                            <th>Photos</th>
                                                            <th>Attendance</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size: 12px;">
                                                            <td>{{ $item->minutes2 }}</td>
                                                            <td>{{ $item->photos2 }}</td>
                                                            <td>{{ $item->attendance2 }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                            <div class="col-md-12">
                                                <br>
                                                <table class="table" border="1">
                                                    <tbody>
                                                        <tr>
                                                            <td>Internal Policy</td>
                                                            <!-- @if ($item->chairperson === null)
                                                                <td> <span style="color: red;"> no data</span></td>
                                                                @else
                                                                <td>{{ $item->chairperson }}</td>
                                                                @endif -->

                                                        </tr>
                                                        <tr>
                                                            <td>Fisherfolk Registry</td>
                                                            <!-- @if ($item->vice_chairperson === null)
                                                                <td> <span style="color: red;"> no data</span></td>
                                                                @else
                                                                <td>{{$item->vice_chairperson}}</td>
                                                                @endif -->
                                                        </tr>
                                                        <tr>
                                                            <td>Fisheries Profile</td>
                                                            <!-- @if ($item->secretary === null)
                                                                <td> <span style="color: red;"> no data</span></td>
                                                                @else
                                                                <td>{{$item->secretary}}</td>
                                                                @endif -->
                                                        </tr>
                                                        <tr>
                                                            <td>Formulation of Resolution and propose ordinance initiated</td>
                                                            <!-- @if ($item->asst_secretary === null)
                                                                <td> <span style="color: red;"> no data</span></td>
                                                                @else
                                                                <td>{{$item->asst_secretary}}</td>
                                                                @endif -->
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <hr>
                            <div style="background-color: #415dfe;">
                                <div class="grid-material bg-general" style="color: white;padding:10px"><b>FARMC OFFICERS</b></div>
                            </div>
                            <hr>
                            <div class="card-block">
                                <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                                <div class="grid-material bg-general"></div>
                                <!-- <div class="card-block"> -->
                                <div class="row">
                                    <div class="col-sm-12 table-responsive">
                                        <form method="POST" enctype="multipart/form-data">
                                            <table class="table" border="1">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Position</th>
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Chairperson</td>
                                                        @if ($item->chairperson === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{ $item->chairperson }}</td>
                                                        @endif

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Vice-Chairperson</td>
                                                        @if ($item->vice_chairperson === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->vice_chairperson}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Secretary</td>
                                                        @if ($item->secretary === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->secretary}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Secretary</td>
                                                        @if ($item->asst_sec === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->asst_sec}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Treasurer</td>
                                                        @if ($item->treasurer === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->treasurer}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Treasurer</td>
                                                        @if ($item->asst_treas === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->asst_treas}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Auditor</td>
                                                        @if ($item->auditor === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->auditor}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Auditor</td>
                                                        @if ($item->asst_aud === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->asst_aud}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Press Relation Officer 1</td>
                                                        @if ($item->pro1 === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->pro1}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Press Relation Officer 2</td>
                                                        @if ($item->pro2 === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->pro2}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Sgt-at-Arms 1</td>
                                                        @if ($item->sgt_arms1 === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->sgt_arms1}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Sgt-at-Arms 2</td>
                                                        @if ($item->sgt_arms2 === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->sgt_arms2}}</td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Sgt-at-Arms 3</td>
                                                        @if ($item->sgt_arms3 === null)
                                                        <td> <span style="color: red;"> no data</span></td>
                                                        @else
                                                        <td>{{$item->sgt_arms3}}</td>
                                                        @endif
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>

                                    </div>
                                </div>
                            </div>



                            <hr>
                            <div style="background-color: #415dfe;">
                                <div class="grid-material bg-general" style="color: white;padding:10px"><b>A. COMPOSITION OF MEMBERSHIP</b></div>
                            </div>
                            <hr>
                            <div class="card-block">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="card-header">
                                        <label for="inline3mail" class="block form-control-label"><strong>1. Mandated member</strong></label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="font-size: 12px;">
                                                        <th>1.1 Chairperson SB/SP Committee of Agriculture and Fisheries</th>
                                                        <th>1.2 Municipal Planning and Development Council</th>
                                                        <th>1.3 Representative from Municipal Development Council</th>
                                                        <th>1.4 Representative from Department of Agriculture/MAO</th>
                                                        <th>1.5 Representative from Non-Governmental Organization</th>
                                                        <th>1.6 Representative from Private Sector</th>
                                                        <th>1.7 Other: Please specify</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="font-size: 12px;">
                                                        <td>{{ $item->chairpersonSB }}</td>
                                                        <td>{{ $item->mpdo }}</td>
                                                        <td>{{ $item->repmdc }}</td>
                                                        <td>{{ $item->repda }}</td>
                                                        <td>{{ $item->repngo }}</td>
                                                        <td>{{ $item->repps }}</td>
                                                        <td>{{ $item->others }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </form>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif


                                <form method="post" action="" enctype="multipart/form-data" id="yourFormId">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label for="inline3mail" class="block form-control-label"><strong>2. Fisherfolk Representative</strong></label>
                                            </div>
                                        </div>
                                        <br>
                                        <label for="inline3mail" class="block form-control-label">Municipal Fisherfolk</label>
                                        @foreach($fisherfolk as $item)
                                        @if($item->category == "Municipal Fisherfolk")
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead style="font-size: 12px;">
                                                    <tr>
                                                        <th colspan="8" class="text-center">Barangay Certification</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr style="font-size: 12px;">
                                                        <th>Name of Representative</th>
                                                        <th>Endorsement of Fisherfolk Organization</th>
                                                        <th>At least 1 year residency</th>
                                                        <th>Source of income</th>
                                                        <th>Good Moral Character</th>
                                                        <th>Name of Organization</th>
                                                        <th>Date of Registration</th>
                                                        <th>Date of Accreditation</th>
                                                    </tr>

                                                    <tr style="font-size: 12px;">
                                                        <td>{{ $item->name }}</td>
                                                        <td> @if($item->endorsement_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>

                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->atleast_one_year == 1)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->soi_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->good_moral == NULL)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->org_name }}</td>
                                                        <td>{{ $item->date_of_reg }}</td>
                                                        <td>{{ $item->date_of_accreditation }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>


                                        @elseif($item->category == "Fisherworker")
                                        <label for="inline3mail" class="block form-control-label">Fisherworker</label>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead style="font-size: 12px;">
                                                    <tr>
                                                        <th colspan="8" class="text-center">Barangay Certification</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr style="font-size: 12px;">
                                                        <th>Name of Representative</th>
                                                        <th>Endorsement of Fisherfolk Organization</th>
                                                        <th>At least 1 year residency</th>
                                                        <th>Source of income</th>
                                                        <th>Good Moral Character</th>
                                                        <th>Name of Organization</th>
                                                        <th>Date of Registration</th>
                                                        <th>Date of Accreditation</th>
                                                    </tr>

                                                    <tr style="font-size: 12px;">
                                                        <td>{{ $item->name }}</td>
                                                        <td> @if($item->endorsement_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>

                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->atleast_one_year == 1)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->soi_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->good_moral == NULL)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->org_name }}</td>
                                                        <td>{{ $item->date_of_reg }}</td>
                                                        <td>{{ $item->date_of_accreditation }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>


                                        @elseif($item->category == "Commercial Fishing Operator")
                                        <label for="inline3mail" class="block form-control-label">Commercial Fishing Operator</label>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead style="font-size: 12px;">
                                                    <tr>
                                                        <th colspan="8" class="text-center">Barangay Certification</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr style="font-size: 12px;">
                                                        <th>Name of Representative</th>
                                                        <th>Endorsement of Fisherfolk Organization</th>
                                                        <th>At least 1 year residency</th>
                                                        <th>Source of income</th>
                                                        <th>Good Moral Character</th>
                                                        <th>Name of Organization</th>
                                                        <th>Date of Registration</th>
                                                        <th>Date of Accreditation</th>
                                                    </tr>

                                                    <tr style="font-size: 12px;">
                                                        <td>{{ $item->name }}</td>
                                                        <td> @if($item->endorsement_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>

                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->atleast_one_year == 1)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->soi_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->good_moral == NULL)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->org_name }}</td>
                                                        <td>{{ $item->date_of_reg }}</td>
                                                        <td>{{ $item->date_of_accreditation }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>

                                        @elseif($item->category == "Women Fisherfolk Sector Representative")
                                        <label for="inline3mail" class="block form-control-label">Women Fisherfolk Sector Representative</label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead style="font-size: 12px;">
                                                    <tr>
                                                        <th colspan="8" class="text-center">Barangay Certification</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr style="font-size: 12px;">
                                                        <th>Name of Representative</th>
                                                        <th>Endorsement of Fisherfolk Organization</th>
                                                        <th>At least 1 year residency</th>
                                                        <th>Source of income</th>
                                                        <th>Good Moral Character</th>
                                                        <th>Name of Organization</th>
                                                        <th>Date of Registration</th>
                                                        <th>Date of Accreditation</th>
                                                    </tr>

                                                    <tr style="font-size: 12px;">
                                                        <td>{{ $item->name }}</td>
                                                        <td> @if($item->endorsement_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->atleast_one_year == 1)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->soi_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->good_moral == NULL)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->org_name }}</td>
                                                        <td>{{ $item->date_of_reg }}</td>
                                                        <td>{{ $item->date_of_accreditation }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>

                                        @elseif($item->category == "Indigenous Peoples(IP's) if any")
                                        <label for="inline3mail" class="block form-control-label">Indigenous Peoples(IP's)</label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead style="font-size: 12px;">
                                                    <tr>
                                                        <th colspan="8" class="text-center">Barangay Certification</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr style="font-size: 12px;">
                                                        <th>Name of Representative</th>
                                                        <th>Endorsement of Fisherfolk Organization</th>
                                                        <th>At least 1 year residency</th>
                                                        <th>Source of income</th>
                                                        <th>Good Moral Character</th>
                                                        <th>Name of Organization</th>
                                                        <th>Date of Registration</th>
                                                        <th>Date of Accreditation</th>
                                                    </tr>

                                                    <tr style="font-size: 12px;">
                                                        <td>{{ $item->name }}</td>
                                                        <td> @if($item->endorsement_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>

                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->atleast_one_year == 1)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->soi_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->good_moral == NULL)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->org_name }}</td>
                                                        <td>{{ $item->date_of_reg }}</td>
                                                        <td>{{ $item->date_of_accreditation }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        @elseif($item->category == "Youth Fisherfolk Sector Representative")
                                        <label for="inline3mail" class="block form-control-label">Youth Fisherfolk Sector Representative</label>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead style="font-size: 12px;">
                                                    <tr>
                                                        <th colspan="8" class="text-center">Barangay Certification</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr style="font-size: 12px;">
                                                        <th>Name of Representative</th>
                                                        <th>Endorsement of Fisherfolk Organization</th>
                                                        <th>At least 1 year residency</th>
                                                        <th>Source of income</th>
                                                        <th>Good Moral Character</th>
                                                        <th>Name of Organization</th>
                                                        <th>Date of Registration</th>
                                                        <th>Date of Accreditation</th>
                                                    </tr>

                                                    <tr style="font-size: 12px;">
                                                        <td>{{ $item->name }}</td>
                                                        <td> @if($item->endorsement_fisherfolk == 1)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->atleast_one_year == 1)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->soi_attachment == NULL)
                                                            <span style="color: red;">None</span>
                                                            @else
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($item->good_moral == NULL)
                                                            <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i>
                                                            @else
                                                            <span style="color: red;">None</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->org_name }}</td>
                                                        <td>{{ $item->date_of_reg }}</td>
                                                        <td>{{ $item->date_of_accreditation }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        @endif
                                        @endforeach
                                    </div>
                                </form>
                            </div>



                            <hr>
                            <div style="background-color: #415dfe;">
                                <div class="grid-material bg-general" style="color: white;padding:10px"><b>B. MFARMC COMMITTEE</b></div>
                            </div>
                            <hr>


                            <form method="post" action="" enctype="multipart/form-data" id="yourFormId">
                                <div class="card-header">
                                    <div class="row">
                                        <!-- <div class="col-md-9">
                                                <label for="inline3mail" class="block form-control-label">Law Enforcement & Prosecution</label>
                                            </div> -->

                                    </div>
                                    <br>
                                    @foreach($committee as $item)
                                    @if($item->category == "Law Enforcement & Prosecution")
                                    <label for="inline3mail" class="block form-control-label">Law Enforcement & Prosecution</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif

                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>




                                    @elseif($item->category == "Rehabilitation and Conservation")
                                    <label for="inline3mail" class="block form-control-label">Rehabilitation and Conservation</label>

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif
                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>


                                    @elseif($item->category == "Livelihood")
                                    <label for="inline3mail" class="block form-control-label">Livelihood</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif
                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    @elseif($item->category == "Research Education and Training")
                                    <label for="inline3mail" class="block form-control-label">Research Education and Training</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif
                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    @elseif($item->category == "Legislation")
                                    <label for="inline3mail" class="block form-control-label">Legislation</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif
                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>


                                    @elseif($item->category == "Polution Control")
                                    <label for="inline3mail" class="block form-control-label">Polution Control</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif
                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    @elseif($item->category == "Land and Water Use")
                                    <label for="inline3mail" class="block form-control-label">Land and Water Use</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif
                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    @elseif($item->category == "Fisherfol Resettlement")
                                    <label for="inline3mail" class="block form-control-label">Fisherfolk Resettlement</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif
                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    @else
                                    <label for="inline3mail" class="block form-control-label">Other, if any</label>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="font-size: 12px;">
                                                    <th>Position</th>
                                                    <th>Name</th>
                                                    <th>Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chairperson</td>
                                                    @if ( $item->chairperson_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_name }}</td>
                                                    @endif

                                                    @if ( $item->chairperson_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->chairperson_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Secretary</td>
                                                    @if ( $item->sec_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_name }}</td>
                                                    @endif
                                                    @if ( $item->sec_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->sec_org }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Member</td>
                                                    @if ( $item->member_name === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_name }}</td>
                                                    @endif
                                                    @if ( $item->member_org === null)
                                                    <td> <span style="color: red;"> no data</span></td>
                                                    @else
                                                    <td>{{ $item->member_org }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>


                                    @endif
                                    @endforeach
                                </div>
                            </form>


                            <hr>
                            <div style="background-color: #415dfe;">
                                <div class="grid-material bg-general" style="color: white;padding:10px"><b>C. SECRETARIAT</b></div>
                            </div>
                            <hr>
                            @foreach($data as $item)
                            <form method="POST" enctype="multipart/form-data" id="yourFormId">

                                <div class="card-header">
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th class="text-center">Name</th>
                                                <th class="text-center">Office / Organization</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                @if ($item->name_sec === null)
                                                <td class="{{ $item->name_sec === null ? 'text-danger' : '' }}">
                                                    {{ $item->office_org2 ?? 'no data' }}
                                                </td>

                                                @else
                                                <td>{{$item->name_sec}}</td>
                                                @endif

                                                @if ($item->office_org === null)
                                                <td class="{{ $item->office_org === null ? 'text-danger' : '' }}">
                                                    {{ $item->office_org2 ?? 'no data' }}
                                                </td>

                                                @else
                                                <td>{{$item->office_org}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if ($item->name_sec1 === null)
                                                <td class="{{ $item->name_sec1 === null ? 'text-danger' : '' }}">
                                                    {{ $item->office_org2 ?? 'no data' }}
                                                </td>

                                                @else
                                                <td>{{$item->name_sec1}}</td>
                                                @endif

                                                @if ($item->office_org1 === null)
                                                <td class="{{ $item->office_org1 === null ? 'text-danger' : '' }}">
                                                    {{ $item->office_org2 ?? 'no data' }}
                                                </td>

                                                @else
                                                <td>{{$item->office_org1}}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                @if ($item->name_sec2 === null)
                                                <td class="{{ $item->name2 === null ? 'text-danger' : '' }}">
                                                    {{ $item->office_org2 ?? 'no data' }}
                                                </td>

                                                @else
                                                <td>{{$item->name_sec2}}</td>
                                                @endif

                                                @if ($item->office_org2 === null)
                                                <td class="{{ $item->office_org2 === null ? 'text-danger' : '' }}">
                                                    {{ $item->office_org2 ?? 'no data' }}
                                                </td>
                                                @else
                                                <td>{{$item->office_org2}}</td>
                                                @endif
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            @endforeach
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>




    <!-- Required Jqurey -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>


    <script src="{{ asset ('assets/plugins/Jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset ('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset ('assets/plugins/tether/dist/js/tether.min.js') }}"></script>

    <!-- Required Fremwork -->
    <script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Scrollbar JS-->
    <script src="{{ asset ('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset ('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>

    <!--classic JS-->
    <script src="{{ asset ('assets/plugins/classie/classie.js') }}"></script>

    <!-- notification -->
    <script src="{{ asset ('assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset ('assets/plugins/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>

    <!-- Counter js  -->
    <script src="{{ asset ('assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset ('assets/plugins/countdown/js/jquery.counterup.js') }}"></script>

    <!-- Echart js -->
    <script src="{{ asset ('assets/plugins/charts/echarts/js/echarts-all.js') }}"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="{{ asset ('assets/js/main.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('assets/pages/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('assets/pages/elements.js') }}"></script>
    <script src="{{ asset ('assets/js/menu.min.js') }}"></script>


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
                    format: 'letter',
                    orientation: 'landscape'
                },
                // Add autoPaging option
                // This will automatically add new pages as needed to fit the content
                // Note: This may affect the performance for large documents
                autoPaging: true
            });
        }
    </script>


</body>

</html>