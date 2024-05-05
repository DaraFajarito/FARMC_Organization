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
                            <h4 style="margin: 0;">Women Fisherfolk</h4>
                        </div>
                    </span>

                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Fisherfolk Organization</a>
                        </li>
                        <li class="breadcrumb-item"><a href="tabs.html"> Women Fisherfolk</a>
                        </li>

                        {{-- <div class="text-right">
                            <span><a href="{{ url ('/FOcform1') }}"><button type="button" class="btn btn-primary">+ Association Form</button></a></span>
                            <span><a href="{{ url ('/FOform2GenInfo2') }}"><button type="button" class="btn btn-primary">+ Cooperative Form</button></a></span>
                        </div> --}}
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
                                <span>Women Fisherfolk Members</span>
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
                        <div class="card-block">
                            <div class="col-lg-4">
                                <h6 class="card-title">Member's Age</h6>
                                <canvas id="salesDifference"></canvas>
                            </div>

                            <div class="col-lg-4">
                                <h6 class="card-title">Association / Cooperative</h6>
                                <div class="row">
                                    <div class="col-sm-10 grid-margin">
                                        <canvas id="bestSellers"></canvas>
                                    </div>
                                </div>
                                <br>
                                <!-- <div class="col-sm-12"> -->
                                <ul class="graphl-legend-rectangle">
                                    <div class="col-sm-6">
                                        <li><span class="btn btn-danger"></span> Association</li>
                                    </div>
                                    <div class="col-sm-6">
                                        <li><span class="btn btn-primary"></span>Cooperative</li>
                                    </div>
                                </ul>
                                <!-- </div> -->
                            </div>
                            <div class="col-lg-4">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <label>LIST OF OVERVIEW</label>
                                </div>
                                <div class="col-md-8 text-right">
                                    <a href="{{ url('/FOmregistered') }}"><button type="button"
                                            class="btn btn-primary">All Registered</button></a>
                                    <a href="{{ url('/FOmunregistered') }}"><button type="button"
                                            class="btn btn-danger">All Unregistered</button></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-block">
                                    <ul class="nav nav-tabs  tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#members"
                                                role="tab">Association</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#members1"
                                                role="tab">Cooperative</a>
                                        </li>

                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content tabs">
                                        <div class="tab-pane active" id="members" role="tabpanel">
                                            <br>
                                            <table id="FARMC" class="table table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name of Organization</th>
                                                        <th>Address</th>
                                                        <th>Sector Represented</th>
                                                        <th>Status of Registration</th>
                                                        <th>Status of Accreditation</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $item->name_of_org }}</td>
                                                            <td>{{ $item->add_barangay }}, {{ $item->add_city }},
                                                                {{ $item->add_province }}</td>
                                                            <td>{{ $item->sector_rep }} {{ $item->sector_rep_yes }}</td>
                                                            <td>{{ $item->status_of_reg }},
                                                                {{ $item->status_of_reg_yes }} </td>
                                                            <td>{{ $item->status_of_accre }},
                                                                {{ $item->status_of_accre_yes }}</td>
                                                            {{-- <td><b>REGISTERED</b></td> --}}
                                                            <td
                                                                style=" display: flex; justify-content: space-between;">
                                                                <a href="" class="btn btn-success"><i
                                                                        class="ti-eye"></i></a>
                                                                <a href="" class="btn btn-warning"><i
                                                                        class="ti-pencil"></i></a>
                                                                <a href="" class="btn btn-danger"><i
                                                                        class="ti-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="members1" role="tabpanel">
                                            <br>
                                            <div class="col-mb-12">
                                                <table id="FARMC1" class="table table-striped table-bordered"
                                                    cellspacing="0" width="100%">
                                                    <thead style="font-size: 13px">
                                                        <tr>
                                                            <th>Name of Cooperative</th>
                                                            <th>Address</th>
                                                            <th>Sector Represented</th>
                                                            <th>Cooperative Identification Number (CIN)</th>
                                                            <th>Date of Latest Amendment</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 13px">
                                                        @foreach ($data1 as $item)
                                                            <tr>
                                                                <td>{{ $item->name_of_coop }}</td>
                                                                <td>{{ $item->add_barangay }}, {{ $item->add_city }},
                                                                    {{ $item->add_province }}</td>
                                                                <td>{{ $item->sector_rep }}
                                                                    {{ $item->sector_rep_yes }}</td>
                                                                <td>{{ $item->CIN }}</td>
                                                                <td>{{ $item->date_of_amend }}</td>
                                                                {{-- <td><b>REGISTERED</b></td> --}}
                                                                <td
                                                                    style=" display: flex; justify-content: space-between;">
                                                                    <a href="" class="btn btn-success"><i
                                                                            class="ti-eye"></i></a>
                                                                    <a href="" class="btn btn-warning"><i
                                                                            class="ti-pencil"></i></a>
                                                                    <a href="" class="btn btn-danger"><i
                                                                            class="ti-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="members2" role="tabpanel">
                                            <br>
                                        </div>
                                    </div>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#FARMC1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ],
                "pagingType": "full_numbers"
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
