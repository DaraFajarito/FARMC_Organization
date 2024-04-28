<DOCTYPE html>
    <html lang="en">

    <head>
        <title>Level 1 - Complete Table | BFAR - FARMC</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

        <!-- themify -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('assets/icon/themify-icons/themify-icons.css') }}">

        <!-- iconfont -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('assets/icon/icofont/css/icofont.css') }}">

        <!-- simple line icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

        <!-- Chartlist chart css -->
        <link rel="stylesheet" href="{{ asset ('assets/plugins/chartist/dist/chartist.css') }}" type="text/css" media="all">

        <!-- Weather css -->
        <link href="{{ asset ('assets/css/svg-weather.css') }}" rel="stylesheet">


        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main.css') }}">

        <!-- Responsive.css-->
        <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/responsive.css') }}">
    </head>


    <body>

        <!-- side_navbar -->
        @include ('side_navbar')
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main-header">
                            <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}" style=" width: 60px;" alt="logo"></a>
                            <h4>M/C FARMC Profile | <small>PROFILE FORM</small></h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC |
                                        Municipal / City FARMC • Level 1 | COMPLETED</a>
                                </li>
                            </ol>
                            <br>
                            <a href="{{ url('/FOMunicipal') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                                back</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-block accordion-block">
                                    <div class="grid-material bg-general" style="text-align: center;"><b>MIMAROPA</b></div>
                                    <br>
                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-panel">
                                            <div class="accordion-heading" role="tab" id="headingOne">
                                                <h5 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        Oriental Mindoro
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="accordion-content accordion-desc">
                                                <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#Ormin" role="tab">Baco</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin1" role="tab">Bansud</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin2" role="tab">Bongabong</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin3" role="tab">Bulalacao</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin4" role="tab">Calapan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin5" role="tab">Gloria</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin6" role="tab">Mansalay</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin7" role="tab">Naujan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin8" role="tab">Puerto Galera</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin9" role="tab">Pinamalayan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin10" role="tab">Pola</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin11" role="tab">Roxas</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin12" role="tab">San Teodoro</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#Ormin13" role="tab">Socorro</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#ormin14" role="tab">Victoria</a>
                                                    </li>
                                                </ul>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="accordion-panel">
                                            <div class="accordion-heading" role="tab" id="headingTwo">
                                                <h5 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Occidental Mindoro
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="accordion-content accordion-desc">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingThree">
                                                <h5 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Marinduque
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="accordion-content accordion-desc">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingThree">
                                                <h5 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Romblon
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="accordion-content accordion-desc">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab" id="headingThree">
                                                <h5 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Palawan
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="accordion-content accordion-desc">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="grid-material bg-general"><small>All Registered Municipal Fisherfolk</small>
                                </div>
                                <hr>
                                <table id="FARMC" class="table table-striped table-bordered">
                                    <thead style="font-size: small;">
                                        <tr>
                                            <th>Province</th>
                                            <th>Municipality</th>
                                            <th>Date of Organized</th>
                                            <th>Date of Re-organized</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b>REGISTERED</b></td>
                                            <td style=" display: flex; justify-content: space-between;">
                                                <a href="" class="btn btn-success"><i class="ti-eye"></i></a>
                                                <a href="" class="btn btn-warning"><i class="ti-pencil"></i></a>
                                                <a href="" class="btn btn-danger"><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

        <!-- JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

        <!-- custom js -->
        <script type="text/javascript" src="{{ asset ('assets/js/main.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('assets/pages/accordion.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('assets/pages/elements.js') }}"></script>
        <script src="{{ asset ('assets/js/menu.min.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#FARMC').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'excel', 'pdf', 'print'
                    ],
                    "pagingType": "full_numbers"
                });
            });
        </script>
    </body>

    </html>
