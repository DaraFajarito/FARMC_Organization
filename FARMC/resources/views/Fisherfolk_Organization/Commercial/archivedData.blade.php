<DOCTYPE html>
    <html lang="en">

    <head>
        <title>FARMC Membership - Archive Table | FARMC - BFAR</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    </head>

    <body>

        <!-- side_navbar -->
        @include ('side_navbar')
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main-header">
                            <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}"
                                    style=" width: 60px;" alt="logo"></a>
                            <h4>Fisherfolk Organization</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Fisherfolk Organization | Commercial |
                                        ARCHIVED</a>
                                </li>
                            </ol>
                            <br>
                            <a href="{{ url('/FOCommercial') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                                back</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="grid-material bg-general" style="text-align: center;"><b>All Archived Table</b>
                            </div>
                            <div class="row">
                                <div class="card-block">
                                    <ul class="nav nav-tabs  tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#mimaropa"
                                                role="tab">Association</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#mimaropa1"
                                                role="tab">Cooperative</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabs">
                                        <div class="tab-pane active" id="mimaropa" role="tabpanel">
                                            <br>
                                            <table id="FARMC" class="table table-striped table-bordered"
                                                cellspacing="0" width="100%">
                                                <thead style="font-size: 13px">
                                                    <tr>
                                                        <th>Name of Organization</th>
                                                        <th>Address</th>
                                                        <th>Sector Represented</th>
                                                        <th>Status of Registration</th>
                                                        <th>Status of Accreditation</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="font-size: 13px">
                                                    @foreach ($ass_archived as $item)
                                                        {{-- @if ($item->status != 'ARCHIVED') --}}
                                                            <tr>
                                                                @if ($item->name_of_org === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->name_of_org }}</td>
                                                                @endif

                                                                @if ($item->add_barangay === null || $item->add_city === null || $item->add_province === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->add_barangay }},
                                                                        {{ $item->add_city }},
                                                                        {{ $item->add_province }}</td>
                                                                @endif

                                                                @if ($item->sector_rep === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->sector_rep }} -
                                                                        {{ $item->sector_rep_yes }}</td>
                                                                @endif

                                                                @if ($item->status_of_reg === null || $item->status_of_reg_yes === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->status_of_reg }} -
                                                                        {{ $item->status_of_reg_yes }}</td>
                                                                @endif

                                                                @if ($item->status_of_accre === null || $item->status_of_accre_yes === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->status_of_accre }} -
                                                                        {{ $item->status_of_reg_yes }}</td>
                                                                @endif
                                                                {{-- <td><b>REGISTERED</b></td> --}}
                                                                <td
                                                                    style=" display: flex; justify-content: space-between;">
                                                                    <a href="{{ url('/viewMunAssociation/' . $item->id) }}"
                                                                        class="btn btn-success"><i
                                                                            class="ti-eye"></i> &nbsp; View</a>
                                                                </td>
                                                            </tr>
                                                        {{-- @endif --}}
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane" id="mimaropa1" role="tabpanel">
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
                                                            <th>Membership Operation</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 13px">
                                                        @foreach ($fc_archived as $item)
                                                        {{-- @if ($item->status != 'ARCHIVED') --}}
                                                            <tr>
                                                                @if ($item->name_of_coop === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->name_of_coop }}</td>
                                                                @endif

                                                                @if ($item->add_barangay === null || $item->add_city === null || $item->add_province === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->add_barangay }},
                                                                        {{ $item->add_city }},
                                                                        {{ $item->add_province }}</td>
                                                                @endif

                                                                @if ($item->sector_rep === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->sector_rep }} -
                                                                        {{ $item->sector_rep_yes }}</td>
                                                                @endif

                                                                @if ($item->CIN === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->CIN }}</td>
                                                                @endif

                                                                @if ($item->date_of_amend === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->date_of_amend }}
                                                                    </td>
                                                                @endif

                                                                @if ($item->RD_memOp === null)
                                                                    <td style="color:red">no data</td>
                                                                @else
                                                                    <td>{{ $item->RD_memOp }}
                                                                    </td>
                                                                @endif

                                                                <td
                                                                    style=" display: flex; justify-content: space-between;">
                                                                    <a href="{{ url('/viewCooperative/' . $item->id) }}"
                                                                        class="btn btn-success"><i
                                                                            class="ti-eye"></i> &nbsp; View</a>

                                                                </td>
                                                            </tr>
                                                            {{-- @endif --}}
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
            </div>
        </div>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

        <!-- JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                $('#FARMC1').DataTable({
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
