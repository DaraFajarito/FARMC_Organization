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


    .filter-container button {
        float: left;
    }

    .filter-container {
        text-align: right;
        margin-bottom: 10px;
    }

    .filter-container select {
        display: inline-block;
        vertical-align: middle;
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        font-size: 14px;
    }

    .filter-container select:focus {
        outline: none;
        border-color: #007bff;
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
                        <li class="breadcrumb-item"><a href="#!"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> FARMC STRENGTHENING </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">FARMC Membership</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">All Members</a>
                        </li>
                    </ol>
                    <br>
                    <div style="display: flex;">
                        <a href="{{ url('/farmc_membership') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i> Back</a>

                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="filter-container">
                                <button id="reset-filters" class="btn btn-secondary">Reset Filters</button>
                                <select id="gender-filter">
                                    <option value="">All Genders</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                                <select id="age-filter">
                                    <option value="">All Ages</option>
                                    <option value="0-18">0-18</option>
                                    <option value="19-25">19-25</option>
                                    <option value="26-35">26-35</option>
                                    <option value="36-50">36-50</option>
                                    <option value="50+">50+</option>
                                </select>
                                <select id="civil-status-filter">
                                    <option value="">All Civil Statuses</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widow/widower">Widow/Widower</option>
                                    <option value="separated">Separated</option>
                                </select>
                            </div>

                            <br>
                            <ul class="nav nav-tabs  tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#members" role="tab">FARMC
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
                                                <th hidden>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size:11px">
                                            @foreach ($all_mem as $item)
                                                @if ($item->status != 'ARCHIVED')
                                                    <tr>
                                                        @if ($item->name === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->name }}</td>
                                                        @endif

                                                        @if ($item->barangay === null && $item->city === null && $item->province === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->barangay }}, {{ $item->city }}, {{ $item->province }}</td>
                                                        @endif

                                                        @if ($item->landline_no === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->landline_no }}</td>
                                                        @endif

                                                        @if ($item->mobile_no === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->mobile_no }}</td>
                                                        @endif

                                                        @if ($item->email === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->email }}</td>
                                                        @endif

                                                        @if ($item->civil_status === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->civil_status }}</td>
                                                        @endif

                                                        @if ($item->gender === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->gender }}</td>
                                                        @endif

                                                        @if ($item->birthdate === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->birthdate }}</td>
                                                        @endif

                                                        @if ($item->age === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->age }}</td>
                                                        @endif

                                                        <td hidden>{{ $item->status }}</td>
                                                        <td style=" display: flex; justify-content: space-between;">
                                                            <a href="{{ url('/FARMCViewform/' . $item->id) }}"
                                                                class="btn btn-success"><i class="ti-eye"></i></a>
                                                            <a href="{{ url('/membership_edit/' . $item->id) }}"
                                                                class="btn btn-warning"><i class="ti-pencil"></i></a>
                                                            <a href="{{ url('/membership_archived/' . $item->id) }}"
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
                                                <th>Name of Association / Organization / Cooperative</th>
                                                <th>Address of Association / Organization / Cooperative</th>
                                                <th>Composition of Membership</th>
                                                <th>Registration of Association</th>
                                                <th>LGU Accreditation</th>
                                                <th>Officer of Association</th>
                                                <th>Involvement in Mangingisdang Director Program</th>
                                                <th hidden>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size:12px">
                                            @foreach ($all_mem as $item)
                                                @if ($item->status != 'ARCHIVED')
                                                    <tr>
                                                        @if ($item->name === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->name }}</td>
                                                        @endif

                                                        @if ($item->org_mem_name === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->org_mem_name }}</td>
                                                        @endif

                                                        @if ($item->add_acc === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->add_acc }}</td>
                                                        @endif

                                                        @if ($item->comp_mem === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->comp_mem }}</td>
                                                        @endif

                                                        @if ($item->reg_ass === null)
                                                            <td style="color:red">no data</td>
                                                        @elseif ($item->reg_ass === 'No')
                                                            <td>No</td>
                                                        @elseif ($item->reg_ass === 'Yes')
                                                            <td>Yes , {{ $item->reg_ass_yes }}</td>
                                                        @endif

                                                        @if ($item->lgu_accre === null)
                                                            <td style="color:red">no data</td>
                                                        @else
                                                            <td>{{ $item->lgu_accre }}</td>
                                                        @endif


                                                        @if ($item->officer_ass === null)
                                                            <td style="color:red">no data</td>
                                                        @elseif ($item->officer_ass === 'No')
                                                            <td>No , {{ $item->position }}</td>
                                                        @elseif ($item->officer_ass === 'Yes')
                                                            <td>Yes , {{ $item->position }}</td>
                                                        @endif


                                                        @if ($item->involvement_mdo === null)
                                                            <td style="color:red">no data</td>
                                                        @elseif ($item->involvement_mdo !== null && $item->year1 !== null && $item->year2 !== null && $item->year3 !== null)
                                                            <td>{{ $item->involvement_mdo }}, {{ $item->year1 }}
                                                                {{ $item->year2 }} {{ $item->year3 }}</td>
                                                        @else
                                                            <td>{{ $item->involvement_mdo }}, {{ $item->year1 }}
                                                                {{ $item->year2 }} {{ $item->year3 }}</td>
                                                        @endif
                                                        <td hidden>{{ $item->status }}</td>

                                                        <td style="text-align: center;">
                                                            <a href="{{ url('/FARMCViewform/' . $item->id) }}"
                                                                class="btn btn-success"><i class="ti-eye"></i> &nbsp;
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
            var table = $('#FARMC').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'excel', 'pdf', 'print'],
                pagingType: 'full_numbers'
            });

            // Add filtering for gender
            // Add filtering for gender
            $('#gender-filter').on('change', function() {
                var selectedGender = this.value;
                if (selectedGender === '') {
                    table.column(6).search('').draw();
                } else {
                    table.column(6).search('^' + selectedGender + '$', true, false).draw();
                }
            });


            // Add filtering for age range
            $('#age-filter').on('change', function() {
                var ageRange = this.value;
                if (ageRange === '') {
                    table.column(8).search('').draw();
                } else if (ageRange === '0-18') {
                    table.column(8).search('^((0|1[0-8])\\b)', true, false).draw();
                } else if (ageRange === '19-25') {
                    table.column(8).search('^((1[9-9])|(2[0-5])\\b)', true, false).draw();
                } else if (ageRange === '26-35') {
                    table.column(8).search('^((2[6-9])|(3[0-5])\\b)', true, false).draw();
                } else if (ageRange === '36-50') {
                    table.column(8).search('^((3[6-9])|(4[0-9])|(50)\\b)', true, false).draw();
                } else if (ageRange === '50+') {
                    table.column(8).search('(5[1-9]|[6-9]\\d|\\d{3,})', true, false).draw();
                }
            });

            // Add filtering for civil status
            $('#civil-status-filter').on('change', function() {
                table.column(5).search(this.value).draw();
            });

            // Reset all filters button
            $('#reset-filters').on('click', function() {
                $('#gender-filter, #age-filter, #civil-status-filter').val('').trigger('change');
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

</body>

</html>
