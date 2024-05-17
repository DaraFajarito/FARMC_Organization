<!DOCTYPE html>
<html lang="en">

<head>
    <title>National Fisherfolk Director Overview | BFAR - FARMC</title>
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
                            <h4 style="margin: 0;">Fisherfolk Directors Program</h4>
                        </div>
                    </span>

                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> Fisherfolk Directors Program</a>
                        </li>
                        <li class="breadcrumb-item"><a href="tabs.html">National Fisherfolk Director</a>
                        </li>
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
                                <span>National Fisherfolk Directors</span>
                                <h2 class="dashboard-total-products">{{ $NFDMemCount }}</h2>
                                <div class="side-box ">
                                    <i class="ti-id-badge text-success-color"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>Association / Organization</span>
                                <h2 class="dashboard-total-products">{{ $NFDOrgCount }}</h2>
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
                                    <canvas id="ageChart" width="600" height="500"></canvas>
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
                                    <canvas id="compMemChart" width="20" height="20"></canvas>
                                </div>

                            </div>
                            <div class="col-lg-4 text-center">
                                <h6 class="card-title text-center">Member's Gender</h6>
                                <div class="col-sm-12" style="margin-bottom: 30px">
                                    <canvas id="genderChart" width="1" height="1"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="card-block">


                            <div class="col-lg-6">
                                <h6 class="card-title text-center">Address</h6>
                                <div class="row">
                                    <canvas id="addressChart"></canvas>
                                </div>

                            </div>
                            <div class="col-lg-6 text-center">
                                <h6 class="card-title text-center">Sector Represented</h6>
                                <div class="col-sm-12" style="margin-bottom: 30px">
                                    <canvas id="organizationChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="margin-bottom: 30px;">
                <a href="{{ url('/archived_NFD') }}"><button type="button" class="btn btn-warning"><i
                            class="ti-archive"></i> Archived Members</button></a>
                <a href="{{ url('/viewall_National') }}"><button type="button" class="btn btn-primary"
                        style="margin-left: 10px">View All
                        Members</button></a>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <ul class="nav nav-tabs  tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#members" role="tab">RF
                                        Directors
                                        Members</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#organization" role="tab">RFD
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
                                                <th>Civil Status</th>
                                                <th>Gender</th>
                                                <th>Birthdate</th>
                                                <th>Age</th>
                                                <th>4p's</th>
                                                <th>Cultural Affliation</th>
                                                {{-- <th hidden>Status</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size:11px">
                                            @foreach ($data as $item)
                                                @if ($item->status != 'ARCHIVED')
                                                    <tr>
                                                        <td>{{ $item->fam_name }}, {{ $item->given_name }}
                                                            {{ $item->mid_name }} {{ $item->ext }} </td>
                                                        <td>{{ $item->add_barangay }}, {{ $item->add_city }},
                                                            {{ $item->add_province }}</td>
                                                        <td>{{ $item->civil_status }}</td>
                                                        <td>{{ $item->gender }}</td>
                                                        <td>{{ $item->birthdate }}</td>
                                                        <td>{{ $item->age }}</td>
                                                        <td>{{ $item->fourps }}</td>
                                                        <td>{{ $item->cul_af }} - {{ $item->cul_af_yes }}</td>
                                                        <td style=" display: flex; justify-content: space-between;">
                                                            <a href="{{ url('/rfdp-viewform/' . $item->id) }}"
                                                                class="btn btn-success"><i class="ti-eye"></i></a>
                                                            <a href="{{ url('/rfdp_edit/' . $item->id) }}"
                                                                class="btn btn-warning"><i class="ti-pencil"></i></a>
                                                            <a href="{{ url('/archived_NFD/' . $item->id) }}"
                                                                class="btn btn-danger"><i class="ti-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
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
                                        <thead style="font-size:11px">
                                            <tr>
                                                <th>Member's Name</th>
                                                <th>Name of Association</th>
                                                <th>Address of Association</th>
                                                <th>Officer of Association</th>
                                                <th>Registration Agency</th>
                                                <th>Registration Information</th>
                                                <th>Composition of Organization</th>
                                                <th>Type of Organization</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size:12px">
                                            @foreach ($data as $item)
                                                @if ($item->status != 'ARCHIVED')
                                                    <tr>

                                                        <td>{{ $item->fam_name }}, {{ $item->given_name }}
                                                            {{ $item->mid_name }} {{ $item->ext }}</td>
                                                        <td>{{ $item->name_ass }}</td>
                                                        <td>{{ $item->add_ass }}</td>
                                                        <td>{{ $item->officer_ass }} - {{ $item->officer_ass_yes }}
                                                        </td>
                                                        <td>{{ $item->reg_agency }} - {{ $item->reg_agency_others }}
                                                        </td>
                                                        <td>{{ $item->reg_info_no }}</td>
                                                        <td>{{ $item->comp_mem }} - {{ $item->comp_mem_others }}</td>
                                                        <td>{{ $item->type_of_org }}</td>

                                                        <td style="text-align: center;">
                                                            <a href="{{ url('/rfdp-viewform/' . $item->id) }}"
                                                                class="btn btn-success"><i class="ti-eye"></i>
                                                                &nbsp;
                                                                View</a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
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
        var ctx = document.getElementById('ageChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labelsage); ?>,
                datasets: [{
                    label: 'Age Count',
                    data: <?php echo json_encode($dataage); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementById('genderChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labelsgen); ?>,
                datasets: [{
                    label: 'Gender Count',
                    data: <?php echo json_encode($datagen); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementById('compMemChart').getContext('2d');

        var data = {
            labels: <?php echo json_encode($labelscomp); ?>,
            datasets: [{
                data: <?php echo json_encode($datacomp); ?>,
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


    <script>
        // Data from PHP
        var labels = <?php echo json_encode($labelsAdd); ?>;
        var data = <?php echo json_encode($dataAdd); ?>;
        var backgroundColors = <?php echo json_encode($backgroundColors); ?>;

        // Create a bar chart
        var ctx = document.getElementById('addressChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'City Count',
                    data: data,
                    backgroundColor: backgroundColors, // Use the dynamically generated colors
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

    <script>
        var ctx = document.getElementById('organizationChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Association', 'Cooperative'],
                datasets: [{
                    label: 'Organization Type Count',
                    data: <?php echo json_encode($data_ass); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)', // Red color for 'Association'
                        'rgba(54, 162, 235, 0.6)', // Blue color for 'Cooperative'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#8cc63f',
                iconColor: '#ffffff',
                customClass: {
                    title: 'text-white',
                    content: 'text-white'
                }
            });
        </script>
    @endif

    @if (session('failed'))
        <script>
            Swal.fire({
                icon: 'failed',
                title: 'failed!',
                text: '{{ session('failed') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#dc3545',
                iconColor: '#ffffff',
                customClass: {
                    title: 'text-white',
                    content: 'text-white'
                }
            });
        </script>
    @endif

</body>

</html>
