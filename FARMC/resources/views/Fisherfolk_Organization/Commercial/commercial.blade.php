<!DOCTYPE html>
<html lang="en">

<head>
    <title> Municipal - Fisherfolk Organization | BFAR - FARMC</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">


</head>

<body>

    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <a href="index.html" class="logo" style="display: inline-block; vertical-align: middle;">
                        <img src="{{ asset ('assets/images/newlogo.png') }}" style="width: 40px;" alt="logo">
                    </a>
                    <span style="display: inline-block; vertical-align: middle; margin-top:10px">
                        <div>
                            <h4 style="margin: 0;">Commercial</h4>
                        </div>
                    </span>

                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Fisherfolk Organization</a>
                        </li>
                        <li class="breadcrumb-item"><a href="tabs.html"> Commercial</a>
                        </li>

                        <div class="text-right">
                            <span><a href="{{ url ('/FOcform1') }}"><button type="button" class="btn btn-primary">+ Association Form</button></a></span>
                            <span><a href="{{ url ('/FOform2GenInfo2') }}"><button type="button" class="btn btn-primary">+ Cooperative Form</button></a></span>
                        </div>
                    </ol>

                </div>
            </div>

            <!-- Tab panes -->
            <div class="tab-content tabs">
                <div class="tab-pane active" id="farmc" role="tabpanel">
                    <div class="card-block">
                        <label for="">COUNT OVERVIEW</label>
                    </div>
                    <div class="row dashboard-header">
                        <div class="col-lg-12 col-md-12">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>Commercial Members</span>
                                <h2 class="dashboard-total-products">0</h2>
                                <div class="side-box ">
                                    <i class="ti-id-badge text-success-color"></i>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>Organization</span>
                                <h2 class="dashboard-total-products">0</h2>
                                <div class="side-box ">
                                    <i class="ti-layout-tab-v text-success-color"></i>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <hr>
                </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="row">
                    <div class="card">
                        <!-- <div class="card-body"> -->


                        <div class="card-block">
                            <div class="col-lg-6">
                                <h6 class="card-title">Member's Age</h6>
                                <canvas id="salesDifference"></canvas>
                            </div>

                           
                            <div class="col-lg-6">
                                <div class="row">

                                    <div class="align-items-center justify-content-between">
                                        <h6 class="card-title">Member's Gender</h6>
                                    </div>
                                    <!-- <div id="support-tracker-legend" class="support-tracker-legend"></div> -->
                                    <canvas id="supportTracker"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <ul class="nav nav-tabs  tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#members" role="tab">FARMC Members</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#organization" role="tab">FARMC Organizations</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div class="tab-pane active" id="members" role="tabpanel">
                                    <br>
                                    <!-- <a href="#!"><button type="button" class="btn btn-primary">View details</button> -->
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>FARMC Organization</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                                <!-- <th>Amount</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ms. Darlene Angel G. Fajarito</td>
                                                <td>Alphabet puzzle</td>
                                                <td>2014/11/21</td>
                                                <td data-order="1000">€1.000,00</td>
                                                <td> <a href="#!"><button type="button" class="btn btn-warning">View details</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>Mr. Antonio Montallana</td>
                                                <td>Layout for poster</td>
                                                <td>2016/01/31</td>
                                                <td data-order="1834">€1.834,00</td>
                                                <td> <a href="#!"><button type="button" class="btn btn-warning">View details</button></a></td>
                                            </tr>
                                            <tr>
                                                <td>Mr. Philip Arguelles</td>
                                                <td>Image creation</td>
                                                <td>2016/01/23</td>
                                                <td data-order="1500">€1.500,00</td>
                                                <td> <a href="#!"><button type="button" class="btn btn-warning">View details</button></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- </div> -->

                                <!-- <div class="tab-content tabs"> -->
                                <div class="tab-pane" id="organization" role="tabpanel">
                                    <br>
                                    <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <!-- <th>Name</th> -->
                                                <th>FARMC Organization</th>
                                                <th>Address of Organization</th>
                                                <th>Date</th>
                                                <!-- <th>Action</th> -->
                                                <!-- <th>Amount</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ms. Darlene Angel G. Fajarito</td>
                                                <td>Alphabet puzzle</td>
                                                <td></td>
                                                <!-- <td>2014/11/21</td> -->
                                                <!-- <td> <a href="#!"><button type="button" class="btn btn-primary">View details</button></a></td> -->
                                                <!-- <td data-order="1000">€1.000,00</td> -->
                                            </tr>
                                            <tr>
                                                <td>Mr. Antonio Montallana</td>
                                                <td>Layout for poster</td>
                                                <td></td>
                                                <!-- <td>2016/01/31</td> -->
                                                <!-- <td> <a href="#!"><button type="button" class="btn btn-primary">View details</button></a></td> -->
                                                <!-- <td data-order="1834">€1.834,00</td> -->
                                            </tr>
                                            <tr>
                                                <td>Mr. Philip Arguelles</td>
                                                <td>Image creation</td>
                                                <td></td>
                                                <!-- <td>2016/01/23</td> -->
                                                <!-- <td> <a href="#!"><button type="button" class="btn btn-primary">View details</button></a></td> -->
                                                <!-- <td data-order="1500">€1.500,00</td> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons extension CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <!-- DataTables Buttons extension JS -->
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <!-- <script src="{{ asset ('assets/vendors/base/vendor.bundle.base.js') }}"></script> -->

    <!-- Custom js for this page-->
    <script src="{{ asset ('assets/js/dashboard.js') }}"></script>

    <script src="{{ asset ('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js') }}"></script>


</body>

</html>