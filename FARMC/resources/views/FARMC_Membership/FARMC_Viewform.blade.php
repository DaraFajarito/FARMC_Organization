<!DOCTYPE html>
<html lang="en">

<head>
    <title>Level 4 - VIEW FORM | Sustainability Mechanism | FARMC - BFAR</title>
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
                @foreach ($farmc_mem as $item)
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
                                <div
                                    style="display: flex; align-items: center; position: relative;  margin-left: auto;">
                                    <a class="logo"><img src="{{ asset('assets/images/Logo_Final.png') }}"
                                            style="width: 140px; height:140px" alt="logo"></a>
                                </div>
                            </div>

                            <hr>
                            <div class="text-center vertical-center">
                                M/C FARMC Member's Profile Overview
                                <br>
                                <span class="label label-warning"> Overview</span>
                            </div>
                            <div class="card-header">
                                <form class="form-inline" method="POST" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-block">
                                        <hr>
                                        <div style="background-color: #706d69">
                                            <div class="grid-material bg-general" style="color: white;padding:10px">
                                                &nbsp&nbsp&nbsp<b>1. Personal Information</b></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-7">
                                                    <div style="margin-top: 20px"></div>
                                                    <div class="form-group" style="margin-bottom: 30px">
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Name
                                                            <em><small>(Family, given, middle & ext.)</small></em> :
                                                            &nbsp; {{ $item->name }}</label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Address
                                                            <em><small>(Barangay, City/Municipality, Province &
                                                                    Region)</small></em> : &nbsp;
                                                            {{ $item->address }}</label>
                                                    </div>
                                                    <br><br>

                                                </div>
                                                <div class="col-md-5">
                                                    <div for=""><b>CONTACT INFORMATION</b></div>
                                                    <div class="form-group" style="line-height: 10px">
                                                        <label for="municipality"
                                                            class="col-md-12 col-form-label form-control-label">Landline
                                                            Number: &nbsp; {{ $item->landline_no }}</label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Mobile
                                                            Number: &nbsp; {{ $item->mobile_no }}</label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Email
                                                            Address: &nbsp; {{ $item->email }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <diV></div>
                                                    <div class="form-group" style="margin-bottom: 30px">
                                                        <br>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Civil
                                                            Status: &nbsp; {{ $item->civil_status }}</label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Gender:
                                                            &nbsp; {{ $item->gender }}</label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Birthdate:
                                                            &nbsp; {{ $item->birthdate }}</label>

                                                    </div>
                                                    <br><br>

                                                </div>
                                                <div class="col-md-4">
                                                    <div style="margin-top: 20px"></div>
                                                    <div class="form-group">
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Birthplace:
                                                            &nbsp; {{ $item->birthplace_municipality }} ,
                                                            {{ $item->birthplace_province }} </label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Age:
                                                            &nbsp; {{ $item->age }}</label>
                                                        <label for="municipality"
                                                            class="col-md-12 col-form-label form-control-label">4P's
                                                            Member: &nbsp; {{ $item->fourps }}
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="margin-top: 18px"></div>
                                                    <div class="form-group">
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Person w/
                                                            Disability (PWD): &nbsp; {{ $item->pwd }}  {{ $item->pwd_yes }} </label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Cultural
                                                            Community (IP's): &nbsp; {{ $item->IP }}  {{ $item->IP_yes }}
                                                        </label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Religion
                                                            Affliation: &nbsp; {{ $item->religion }}  {{ $item->religion_christ }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <div style="margin-top: 7px"></div>
                                                    <div class="form-group" style="line-height: 10px"
                                                        style="margin-bottom: 30px">
                                                        <br>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Name
                                                            Spouse
                                                            <small><em>(Family, Given, Middle)</em></small> : &nbsp;
                                                            {{ $item->name_spouse }}</label>
                                                    </div>
                                                    <br><br>

                                                </div>
                                                <div class="col-md-6">
                                                    <div style="margin-top: 20px"></div>
                                                    <div class="form-group" style="line-height: 10px">
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Occupation:
                                                            &nbsp; {{ $item->occupation }}</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                    <div style="margin-top: 7px"><b>No. of Dependent/s:</b></div>
                                                    <div class="form-group" style="line-height: 10px"
                                                        style="margin-bottom: 30px">
                                                        <br>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label"><i
                                                                class="fas fa-male"></i> &nbsp;Male: &nbsp;
                                                            {{ $item->dependent_male }}</label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label"><i
                                                                class="fas fa-female"></i> &nbsp;Female: &nbsp;
                                                            {{ $item->dependent_female }}</label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label"><i
                                                                class="fas fa-genderless"></i> &nbsp;Others: &nbsp;
                                                            {{ $item->dependent_others }}</label>
                                                    </div>
                                                    <br><br>

                                                </div>
                                                <div class="col-md-9">
                                                    <div style="margin-top: 40px"></b></div>
                                                    <div class="form-group" style="line-height: 10px">
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Educational
                                                            Attainment/Level: &nbsp;
                                                            {{ $item->educational_attainment }}  {{ $item->tertiary}}  {{ $item->tesda }}</label>
                                                        <label for=""
                                                            class="col-md-12 col-form-label form-control-label">Other
                                                            Source of livelihood: &nbsp;
                                                            {{ $item->other_source }}  {{ $item->other_source_other }} </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div style="background-color: #706d69">
                                            <div class="grid-material bg-general" style="color: white;padding:10px">
                                                &nbsp&nbsp&nbsp<b>2. FARMC Membership</b></div>
                                        </div>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div style="margin-top: 20px"></div>
                                                <div class="form-group" style="line-height: 10px"
                                                    style="margin-bottom: 30px">
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">Name of
                                                        FARMC: &nbsp; {{ $item->farmc_name }}</label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">Address of
                                                        FARMC: &nbsp; {{ $item->farmc_add }}</label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">Officer of
                                                        FARMC: &nbsp; {{ $item->mfarmc_off }}  {{ $item->mfarmc_off_yes }} </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div for=""><b>Inclusive Date/s of Membership</b></div>
                                                <div class="form-group" style="line-height: 10px">
                                                    <label for="municipality"
                                                        class="col-md-12 col-form-label form-control-label">As Officer:
                                                        &nbsp; {{ $item->inc_officer1 }} - {{ $item->inc_officer2 }}
                                                    </label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">As Member:
                                                        &nbsp; {{ $item->inc_member1 }} - {{ $item->inc_member2 }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <div style="margin-top: 7px"></div>
                                                <div class="form-group" style="margin-bottom: 30px">
                                                    <br>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">FARMC
                                                        Representation: &nbsp; {{ $item->farmc_rep }}</label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label"
                                                        style="line-height: 10px">Sector
                                                        Represented: &nbsp; {{ $item->sect }}  {{ $item->sect_other }} </label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">LGU
                                                        Representative: &nbsp; {{ $item->LGU_rep }}  {{ $item->LGU_rep_other }} </label>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        <hr>
                                        <div style="background-color: #706d69">
                                            <div class="grid-material bg-general" style="color: white;padding:10px">
                                                &nbsp&nbsp&nbsp<b>3. Organizational Membership</b></div>
                                        </div>
                                        <hr>
                                        <div class="col-md-12">
                                            <div class="col-md-7">
                                                <div style="margin-top: 20px"></div>
                                                <div class="form-group" style="line-height: 10px"
                                                    style="margin-bottom: 30px">
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">Name of
                                                        Association/Organization/Cooperatiove: &nbsp;
                                                        {{ $item->org_mem_name }}</label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">Address of
                                                        Association/Organization/Cooperatiove: &nbsp;
                                                        {{ $item->add_acc }}</label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">Composition
                                                        of Membership: &nbsp; {{ $item->comp_mem }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div style="margin-top: 20px"></div>
                                                <div class="form-group" style="line-height: 10px">
                                                    <label for="municipality"
                                                        class="col-md-12 col-form-label form-control-label">Registration
                                                        of Association: &nbsp; {{ $item->reg_ass }}  {{ $item->reg_ass_yes }}
                                                    </label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">LGU
                                                        Accreditation: &nbsp; {{ $item->lgu_accre }}
                                                    </label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">Officer of
                                                        Association: &nbsp; {{ $item->officer_ass }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div style="margin-top: 20px; margin-bottom:10px"><b>Involvement in
                                                        Mangingisdang Director Program</b></div>
                                                <div class="form-group" style="line-height: 10px">
                                                    <label for="municipality"
                                                        class="col-md-12 col-form-label form-control-label">Position:
                                                        &nbsp; {{ $item->involvement_mdo }}
                                                    </label>
                                                    <label for=""
                                                        class="col-md-12 col-form-label form-control-label">Year
                                                        Elected: &nbsp; {{ $item->year1 }}  {{ $item->year2 }}  {{ $item->year3 }}</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top: 280px">
                                            <div class="col-md-4">
                                                <div style="display: flex; justify-content: center;">
                                                    <div style="width: 300px; text-align: center;"
                                                        class="signature-container">
                                                        <p style="margin: 0;">I hereby certify that the above
                                                            information is true and correct to the best of my knowledge
                                                            and belief.</p>
                                                        <br><br>
                                                        <div
                                                            style="border-bottom: 1px solid black; margin-bottom: 10px;">
                                                        </div>
                                                        <label for="signatureFile" class="signature-line"
                                                            style="text-align: center;">Member's Signature</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div style="flex: 1; display: flex; padding-left:60px;">
                                                    <div
                                                        style="width: 120px; height: 110px; border: 1px solid black; margin-right: 20px;">
                                                    </div> <!-- First Thumbmarks box -->
                                                    <div style="width: 120px; height: 110px; border: 1px solid black;">
                                                    </div> <!-- Second Thumbmarks box -->
                                                </div>
                                                <div style="flex: 1; display: flex; align-items: center;">
                                                    <div style="width: 20px;"></div>
                                                    <!-- Add space between thumbmarks and photo box -->
                                                </div>
                                                <div style="text-align: center;">
                                                    <p>Thumbmarks</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div
                                                    style="margin-left: 100px; width: 130px; height: 120px; border: 1px solid black; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                                    <input type="file" id="photo1x1" accept="image/*"
                                                        name="photo" style="display: none;" >
                                                    <label for="photo1x1" id="label1x1" style="cursor: pointer;"> <img src="{{ $item->photo }}" alt="Item Photo"></label> <!-- 1x1 photo box -->
                                                    <img id="preview1x1" src="#" alt="Preview"
                                                        style="display: none; max-width: 100%; max-height: 100%; cursor: pointer;">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
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
