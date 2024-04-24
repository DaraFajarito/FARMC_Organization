<!DOCTYPE html>
<html lang="en">

<head>
    <title>FARMC Membership Overview | BFAR - FARMC</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


</head>

<style>
    input.form-control {
        border: 1px solid #AAAAAA;
    }
</style>

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
                        <img src="{{ asset('assets/images/newlogo.png') }}" style="width: 40px;" alt="logo">
                    </a>
                    <span style="display: inline-block; vertical-align: middle; margin-top:10px">
                        <div>
                            <h4 style="margin: 0;">FARMC Membership</h4>
                        </div>
                    </span>

                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> FARMC STRENGTHENING </a>
                        </li>
                        <li class="breadcrumb-item"><a href="tabs.html">FARMC Membership</a>
                        </li>

                        <div class="text-right">
                            <span><a href="{{ url('/personal_info') }}"><button type="button" class="btn btn-primary">+
                                        New Form</button></a></span>
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
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>FARMC Members</span>
                                <h2 class="dashboard-total-products">{{ $memberCount }}</h2>
                                <div class="side-box ">
                                    <i class="ti-id-badge text-success-color"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>Organization</span>
                                <h2 class="dashboard-total-products">{{ $farmcCount }}</h2>
                                <div class="side-box ">
                                    <i class="ti-layout-tab-v text-success-color"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="row">
                    <div class="card">
                        <!-- <div class="card-body"> -->


                        <div class="card-block">
                            <div class="col-lg-4">
                                <h6 class="card-title text-center">Member's Age</h6>
                                <div class="col-sm-12" style="margin-bottom: 20px">
                                    <canvas id="ageRangeChart" width="600" height="500"></canvas>
                                </div>
                                {{-- <ul class="graphl-legend-rectangle" style="line-height: 12px"> --}}
                                    <div class="col-sm-12">
                                        <li style="font-size: 13px"><span></span> &nbsp; (0
                                            - 18) Children</li>
                                        <li style="font-size: 13px"><span></span> &nbsp; (19
                                            - 25) Youth / Teenagers</li>
                                        <li style="font-size: 13px"><span></span> &nbsp; (26
                                            - 35) Young Adults</li>
                                        <li style="font-size: 13px"><span></span> &nbsp; (36
                                            - 50) Adults</li>
                                        <li style="font-size: 13px"><span></span> &nbsp;
                                            (51+) Elderly & Senior Citizens</li>
                                    </div>
                                {{-- </ul> --}}
                            </div>

                            <div class="col-lg-4">
                                <h6 class="card-title text-center">Composition of Membership</h6>
                                <div class="row">
                                    <canvas id="compMemChart"  width="20" height="20" ></canvas>
                                </div>

                            </div>
                            <div class="col-lg-4 text-center">
                                    <h6 class="card-title text-center">Member's Gender</h6>
                                    <div class="col-sm-12" style="margin-bottom: 30px">
                                        <canvas id="genderChart" width="1" height="1"></canvas>
                                    </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="margin-bottom: 30px;">
                <a href="#!"><button type="button" class="btn btn-warning"><i class="ti-archive"></i></button></a>
                <a href="#!"><button type="button" class="btn btn-primary">View All Members</button></a>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <ul class="nav nav-tabs  tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#members"
                                        role="tab">FARMC
                                        Members</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#organization" role="tab">FARMC
                                        Organizations</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div class="tab-pane active" id="members" role="tabpanel">
                                    <br>
                                    <!-- <a href="#!"><button type="button" class="btn btn-primary">View details</button> -->
                                    <table id="FARMC" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead style="font-size:12px">
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Landline Number</th>
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>Civil Status</th>
                                                <th>Gender</th>
                                                <th>Birthdate</th>
                                                <th>Age</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size:11px">
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->landline_no }}</td>
                                                    <td>{{ $item->mobile_no }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->civil_status }}</td>
                                                    <td>{{ $item->gender }}</td>
                                                    <td>{{ $item->birthdate }}</td>
                                                    <td>{{ $item->age }}</td>
                                                    <td style=" display: flex; justify-content: space-between;">
                                                        <a href="{{url ('/FARMCViewform/' . $item->id)}}" class="btn btn-success"><i
                                                                class="ti-eye"></i></a>
                                                        <a href="#!" class="btn btn-warning"><i
                                                                class="ti-pencil"></i></a>
                                                        <a href="#!" class="btn btn-danger"><i
                                                                class="ti-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- </div> -->

                                <!-- <div class="tab-content tabs"> -->
                                <div class="tab-pane" id="organization" role="tabpanel">
                                    <br>
                                    <table id="FARMC2" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead style="font-size:12px">
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
                                                <td style="color:red"><b>INCOMPLETE</b></td>
                                                <td style="text-align: center;">
                                                    <a href="{{ url('/L2Editform') }}" class="btn btn-danger"><i
                                                            class="ti-eye"></i> &nbsp; Edit</a>
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
        </div>
    </div>

    <!-- jQuery -->
    <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons extension CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

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

    <script>
        var ctx = document.getElementById('compMemChart').getContext('2d');

        var data = {
            labels: <?php echo json_encode($labelscomp); ?>,
            datasets: [{
                data: <?php echo json_encode($data_comp); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)', // Red
                    'rgba(54, 162, 235, 0.5)', // Blue
                    'rgba(255, 206, 86, 0.5)', // Yellow
                    'rgba(75, 192, 192, 0.5)', // Green
                    'rgba(153, 102, 255, 0.5)', // Purple
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            }]
        };

        var options = {
            cutoutPercentage: 70,

        };

        var compMemChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#FARMC2').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ],
                "pagingType": "full_numbers"
            });
        });
    </script>


    <script>
        var ctx = document.getElementById('ageRangeChart').getContext('2d');

        var data = {
            labels: <?php echo json_encode($labelsage); ?>,
            datasets: [{
                label: 'Members Count',
                data: <?php echo json_encode($data_age); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color for bars
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

        var ageRangeChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>

    <script>
        var ctx = document.getElementById('genderChart').getContext('2d');

        var data = {
            labels: ['Male', 'Female', 'Others'],
            datasets: [{
                label: 'Gender Count',
                data: <?php echo json_encode($data_gen); ?>,
                backgroundColor: [
                    'rgba(54, 162, 235, 0.5)', // Blue for male
                    'rgba(255, 99, 132, 0.5)', // Red for female
                    'rgba(255, 206, 86, 0.5)', // Yellow for others
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
        };

        var genderChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>



</body>

</html>
