<!DOCTYPE html>
<html lang="en">

<head>
    <title>Level 2 - VIEW FORM | Basic Function | FARMC - BFAR</title>
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
                            <a href="{{ url ('/level2') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                            <div class="actions text-center" style="flex: 1;"> <!-- Added text-center class and flex: 1 -->
                                <button class="btn btn-success" onclick="window.print()">Print</button>
                                <button class="btn btn-danger" onclick="downloadPdf()">Download as PDF</button>
                            </div>
                            <div class="actions" style="margin-left: auto;">
                                @foreach($basics as $item)
                                @if($item->status == "COMPLETED" && $item->status != "ARCHIVED")
                                <a href="{{ url ('/fullyoperational/'. $item->id) }}"><button class="btn btn-primary">Proceed to Lvl 3</button></a>
                                @endif
                            </div>
                            @endforeach
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

                        <hr>
                        <div class="text-center">
                            LEVEL TWO: FARMC Organization Details Overview
                            <br>
                            <span class="label label-default"> Basic Function of FARMC</span>
                        </div>
                        <hr>

                        <div class="card-header">
                            <div style="background-color: #545454">
                                <div class="grid-material bg-general" style="color: white;padding:10px"> &nbsp&nbsp&nbsp<b>BASIC FUNCTION</b></div>
                            </div>
                            <hr>
                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                <div class="grid-material bg-general"></div>
                            </div>

                            <form class="form-inline" method="" action="" enctype="multipart/form-data">

                                @foreach($basics as $item)
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality" class="col-md-12 col-form-label form-control-label">Municipality / City: {{$item->profileForm->municipality}}</label>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="province" class="col-md-12 col-form-label form-control-label">Province: {{$item->profileForm->province}}</label>
                                            </div>
                                            <hr>
                                            <br>
                                            <div class="form-group m-r-15">
                                                <label for="date" class="block form-control-label">1. With Municipal Fisheries Development Plan (MFDP) <td></td></label>
                                            </div>
                                            <br><br>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="font-size: 13px;">
                                                            <th colspan="1"></th>
                                                            <th colspan="2" class="text-center">Proof</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size: 12px;">
                                                            @if ($item->mfdp === null)
                                                            <td><span style="color: red;"> &nbsp; no data</span></td>
                                                            @else
                                                            <td> {{ $item->mfdp }}</td>
                                                            @endif

                                                            @if ($item->copy1_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->copy1_file}} </td>
                                                            @endif

                                                            @if ($item->mindoc1_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->mindoc1_file}} </td>
                                                            @endif
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <div class="form-group m-r-15">
                                                <label for="date" class="block form-control-label">2. With Municipal Fishery Ordinance (MFO)<td></td></label>
                                            </div>
                                            <br><br>

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="font-size: 13px;">
                                                            <th colspan="1"></th>
                                                            <th colspan="2" class="text-center">Proof</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size: 12px;">
                                                            @if ($item->mfo === null)
                                                            <td><span style="color: red;"> &nbsp; no data</span></td>
                                                            @else
                                                            <td> {{ $item->mfo }}</td>
                                                            @endif

                                                            @if ($item->copy2_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->copy2_file}} </td>
                                                            @endif

                                                            @if ($item->mindoc2_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->mindoc2_file}} </td>
                                                            @endif

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>

                                            <div class="form-group m-r-15">
                                                <label for="date" class="block form-control-label">3. Actively Assisting The Law Enforcement Activity<td></td></label>
                                                <!-- <input id="date" type="date" name="date_organized" class="form-control" style="width: 400px;" placeholder=""> -->
                                            </div>
                                            <br><br>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            @if ($item->bantaydt_file === null)
                                                            <td><i class="ti-close" style="color: red; font-size: 1.5em;"></i></td>
                                                            @else
                                                            <td> <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i></td>
                                                            @endif
                                                            <td>With Bantay Dagat Taskforce</td>
                                                            @if ($item->bantaydt_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->bantaydt_file}} </td>
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if ($item->actfarmcbt_file === null)
                                                            <td><i class="ti-close" style="color: red; font-size: 1.5em;"></i></td>
                                                            @else
                                                            <td> <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i></td>
                                                            @endif
                                                            <td>With list of activity undertaken by the FARMC-Bantay Dagat</td>

                                                            @if ($item->actfarmcbt_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->actfarmcbt_file}} </td>
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if ($item->appfarmcbt_file === null)
                                                            <td><i class="ti-close" style="color: red; font-size: 1.5em;"></i></td>
                                                            @else
                                                            <td> <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i></td>
                                                            @endif
                                                            <td>With list of apprehention conducted by the FARMC-Bantay Dagat</td>
                                                            @if ($item->appfarmcbt_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->appfarmcbt_file}} </td>
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if ($item->caseestablished_file === null)
                                                            <td><i class="ti-close" style="color: red; font-size: 1.5em;"></i></td>
                                                            @else
                                                            <td> <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i></td>
                                                            @endif
                                                            <td>With list of cases established and functional</td>
                                                            @if ($item->caseestablished_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->caseestablished_file}} </td>
                                                            @endif
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>

                                            <div class="form-group m-r-15">
                                                <label for="date" class="block form-control-label">4. With MFARMC Office Established And Functional <td></td></label>
                                            </div>
                                            <br><br>

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr style="font-size: 12px;">
                                                            @if ($item->mfarmcoffice === null || $item->mfarmcoffice === 'None')
                                                            <td><span style="color: red;"> &nbsp; None</span></td>
                                                            @else
                                                            <td> {{$item->mfarmcoffice}}</td>
                                                            @endif
                                                            @if ($item->copy3_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->copy3_file}} </td>
                                                            @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>

                                            <div class="form-group m-r-15">
                                                <label for="date" class="block form-control-label">5. Actively Assisting The Law Enforcement Activity <td></td></label>
                                            </div>
                                            <br><br>

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="font-size: 13px;">
                                                            <th colspan="1"></th>
                                                            <th colspan="1" class="text-center">If Yes, Schedule Of Regular Meeting</th>
                                                            <th colspan="2" class="text-center">Attached Proof Of Meeting</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size: 12px;">
                                                            @if ($item->regmeet === null)
                                                            <td> <span style="color: red;">NO</span></td>
                                                            @else
                                                            <td> <i class="ti-check-box" style="color: green; font-size: 1.5em;"></i></td>
                                                            @endif
                                                            <td class="text-center">{{$item->regmeet}}</td>

                                                            @if ($item->minatt_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->minatt_file}} </td>
                                                            @endif

                                                            @if ($item->photodoc_file === null)
                                                            <td><span style="color: red;"> &nbsp; no attached file</span></td>
                                                            @else
                                                            <td> {{$item->photodoc_file}} </td>
                                                            @endif
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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
                    orientation: 'portrait'
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