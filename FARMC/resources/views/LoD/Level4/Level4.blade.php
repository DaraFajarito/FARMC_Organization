<!DOCTYPE html>
<html lang="en">

<head>
    <title> Level 4 - Sustainability Mechanism | BFAR - FARMC</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <style>
        /* @media print {

            #example th:nth-child(6),
            #example td:nth-child(6) {
                display: none;
            }
        } */
    </style>
</head>

<body>

    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Level Four Overview</h4> | <span class="label label-warning">Sustainability Mechanism</span>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> FARMC STRENGTHENING </a>
                        </li>
                        <li class="breadcrumb-item"><a href="tabs.html">Organized FARMC</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="tabs.html">Municipal / City FARMC | Level 4</a>
                        </li>
                        {{-- <div class="text-right">
                            <span><a href="{{ url ('/sustainabilityMechanism') }}"><button type="button" class="btn btn-primary">+ &nbsp;Additional Form</button></a></span>
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
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>Level 4 | Completed</span>
                                <h2 class="dashboard-total-products">{{$completedsustain}}</h2>
                                <div class="side-box ">
                                    <i class="ti-check text-success-color"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-danger">All</span>
                                <span>Level 4 | Incompleted</span>
                                <h2 class="dashboard-total-products">{{$incompletesustain}}</h2>
                                <div class="side-box ">
                                    <i class="ti-close text-danger-color"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>MIMAROPA LEVELS OVERVIEW</label>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <a href="{{ url ('/L4Completedtbl') }}"><button type="button" class="btn btn-primary">All Completed</button></a>
                                        <a href="{{ url ('/L4Incompletetbl') }}"><button type="button" class="btn btn-danger">All Incomplete</button></a>
                                        <a href="{{ url ('/L4Archivedtbl') }}"><button type="button" class="btn btn-warning"><i class="ti-archive"></i></button></a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <!-- <div class="col-xl-12 col-lg-12"> -->
                                    <div class="card">
                                        <div class="card-block">
                                            <ul class="nav nav-tabs  tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#mimaropa" role="tab">All</a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content tabs">
                                                <div class="tab-pane active" id="mimaropa" role="tabpanel">
                                                    <br>
                                                    <table id="FARMC" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead style="font-size:10px">
                                                            <tr>
                                                                <th>Province</th>
                                                                <th>Municipality</th>
                                                                <th>Undergone Training On FARMC</th>
                                                                <th>Fish Catch Database System Installed</th>
                                                                <th>Fisherfolk Registration Forms</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($data as $item)
                                                            @if ($item->status !== "ARCHIVED")
                                                            <tr>
                                                                <td>{{$item->profileForm->province}}</td>
                                                                <td>{{$item->profileForm->municipality}}</td>
                                                                @if ($item->data_training === 'No')
                                                                <td> No </td>
                                                                @else
                                                                <td>Yes</td>
                                                                @endif

                                                                @if ($item->data_fishcatch === 'No')
                                                                <td> No </td>
                                                                @else
                                                                <td>Yes</td>
                                                                @endif

                                                                @if ($item->data_regforms === 'No')
                                                                <td> No </td>
                                                                @else
                                                                <td>Yes </td>
                                                                @endif

                                                                @if ($item->status == "COMPLETED")
                                                                <td style="color:green"><b>COMPLETED</b></td>
                                                                @elseif ($item->status == "INCOMPLETE")
                                                                <td style="color:red"><b>INCOMPLETE</b></td>
                                                                @elseif ($item->status == "ARCHIVED")
                                                                <td style="color:orange"><b>ARCHIVED</b></td>
                                                                @endif

                                                                <td style=" display: flex; justify-content: space-between;">
                                                                    <a style="margin-left: 5px;" href="{{ url('/L4Viewform/' . $item->profileForm_id) }}" class="btn btn-success"><i class="ti-eye"></i></a>
                                                                    <a style="margin-left: 5px;" href="{{ url('/L4Editform/' . $item->profileForm_id) }}" class="btn btn-warning"><i class="ti-pencil"></i></a>
                                                                    <a style="margin-left: 5px;" href="{{ url('/L4Archivedtbl/' . $item->id) }}" class="btn btn-danger"><i class="ti-trash"></i></a>
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
                            <br><br><br>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-block">
                                        <h6 class="card-title">All Level 4 <em> <small>(Incomplete & Complete)</small> </em></h6>
                                        <div class="row">
                                            <div class="col-sm-12 grid-margin">
                                                <canvas id="level4chart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- 4-blocks row start -->

            </div>
        </div>
        <!-- jQuery -->
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

        <!-- CSS -->
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- JavaScript -->
        {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
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
            // Get the canvas element
            var ctx = document.getElementById('level4chart').getContext('2d');

            // Define data for the chart
            var completedsustain = <?php echo $completedsustain; ?>;
            var incompletesustain = <?php echo $incompletesustain; ?>;
            var data = {
                labels: ['Completed', 'Incomplete'],
                datasets: [{
                    label: 'Task Completion',
                    data: [completedsustain, incompletesustain],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.5)', // Green for completed tasks
                        'rgba(255, 99, 132, 0.5)' // Red for incomplete tasks
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            // Define options for the chart
            var options = {
                cutoutPercentage: 40,
                plugins: {
                    title: {
                        display: true,
                    }
                }
            };

            // Create the chart
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options
            });
        </script>

</body>

</html>
