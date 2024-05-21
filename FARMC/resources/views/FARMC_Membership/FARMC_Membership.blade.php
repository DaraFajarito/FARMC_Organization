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
                    <hr>
                    {{-- <div class="card-block"> --}}
                    <label for="">COUNT OVERVIEW</label>
                    {{-- </div> --}}
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
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="margin-bottom: 30px;">
                <a href="{{ url('/membership_archived') }}"><button type="button" class="btn btn-warning"><i
                            class="ti-archive"></i> Archived Members</button></a>
                <a href="{{ url('/viewall_members') }}"><button type="button" class="btn btn-primary"
                        style="margin-left: 10px">View All
                        Members</button></a>
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
                            <br>

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
                                <select id="mimaropa-filter">
                                    <option hidden value="">MIMAROPA Provinces</option>
                                    <option value="Occidental Mindoro">Occidental Mindoro</option>
                                    <option value="Oriental Mindoro">Oriental Mindoro</option>
                                    <option value="Marinduque">Marinduque</option>
                                    <option value="Romblon">Romblon</option>
                                    <option value="Palawan">Palawan</option>
                                </select>
                                <select id="municipality-filter">
                                    <option hidden value="">Municipality</option>
                                    <optgroup label="Occidental Mindoro">
                                        <option value="Abra de Ilog">Abra de Ilog</option>
                                        <option value="Calintaan">Calintaan</option>
                                        <option value="Looc">Looc</option>
                                        <option value="Lubang">Lubang</option>
                                        <option value="Magsaysay">Magsaysay</option>
                                        <option value="Mamburao">Mamburao</option>
                                        <option value="Paluan">Paluan</option>
                                        <option value="Rizal">Rizal</option>
                                        <option value="Sablayan">Sablayan</option>
                                        <option value="San Jose">San Jose</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                    </optgroup>
                                    <optgroup label="Oriental Mindoro">
                                        <option value="Baco">Baco</option>
                                        <option value="Bansud">Bansud</option>
                                        <option value="Bongabong">Bongabong</option>
                                        <option value="Bulalacao">Bulalacao</option>
                                        <option value="Calapan">Calapan</option>
                                        <option value="Gloria">Gloria</option>
                                        <option value="Mansalay">Mansalay</option>
                                        <option value="Naujan">Naujan</option>
                                        <option value="Pinamalayan">Pinamalayan</option>
                                        <option value="Pola">Pola</option>
                                        <option value="Puerto Galera">Puerto Galera</option>
                                        <option value="Roxas">Roxas</option>
                                        <option value="San Teodoro">San Teodoro</option>
                                        <option value="Socorro">Socorro</option>
                                        <option value="Victoria">Victoria</option>
                                    </optgroup>
                                    <optgroup label="Marinduque">
                                        <option value="Boac">Boac</option>
                                        <option value="Buenavista">Buenavista</option>
                                        <option value="Gasan">Gasan</option>
                                        <option value="Mogpog">Mogpog</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                        <option value="Torrijos">Torrijos</option>
                                    </optgroup>
                                    <optgroup label="Romblon">
                                        <option value="Alcantara">Alcantara</option>
                                        <option value="Banton">Banton</option>
                                        <option value="Cajidiocan">Cajidiocan</option>
                                        <option value="Calatrava">Calatrava</option>
                                        <option value="Concepcion">Concepcion</option>
                                        <option value="Corcuera">Corcuera</option>
                                        <option value="Ferrol">Ferrol</option>
                                        <option value="Looc">Looc</option>
                                        <option value="Magdiwang">Magdiwang</option>
                                        <option value="Odiongan">Odiongan</option>
                                        <option value="Romblon">Romblon</option>
                                        <option value="San Agustin">San Agustin</option>
                                        <option value="San Andres">San Andres</option>
                                        <option value="San Fernando">San Fernando</option>
                                        <option value="San Jose">San Jose</option>
                                        <option value="Santa Fe">Santa Fe</option>
                                    </optgroup>
                                    <optgroup label="Palawan">
                                        <option value="Aborlan">Aborlan</option>
                                        <option value="Agutaya">Agutaya</option>
                                        <option value="Araceli">Araceli</option>
                                        <option value="Balabac">Balabac</option>
                                        <option value="Bataraza">Bataraza</option>
                                        <option value="Brooke's Point">Brooke's Point</option>
                                        <option value="Busuanga">Busuanga</option>
                                        <option value="Cagayancillo">Cagayancillo</option>
                                        <option value="Coron">Coron</option>
                                        <option value="Culion">Culion</option>
                                        <option value="Cuyo">Cuyo</option>
                                        <option value="Dumaran">Dumaran</option>
                                        <option value="El Nido">El Nido</option>
                                        <option value="Kalayaan">Kalayaan</option>
                                        <option value="Linapacan">Linapacan</option>
                                        <option value="Magsaysay">Magsaysay</option>
                                        <option value="Narra">Narra</option>
                                        <option value="Puerto Princesa">Puerto Princesa</option>
                                        <option value="Quezon">Quezon</option>
                                        <option value="Rizal">Rizal</option>
                                        <option value="Roxas">Roxas</option>
                                        <option value="San Vicente">San Vicente</option>
                                        <option value="Sofronio Española">Sofronio Española</option>
                                        <option value="Taytay">Taytay</option>
                                    </optgroup>
                                </select>
                            </div>

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
                                            @foreach ($data as $item)
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
                                                            <td>{{ $item->barangay }}, {{ $item->city }},
                                                                {{ $item->province }}</td>
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
                                            @foreach ($data as $item)
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

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#FARMC').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ],
                "pagingType": "full_numbers"
            });
        });
    </script> --}}

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

<script>
    $(document).ready(function() {
        var table = $('#FARMC').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'excel', 'pdf', 'print'],
            pagingType: 'full_numbers',
            pageLength: 20
        });

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
            var selectedStatus = this.value;
            if (selectedStatus === '') {
                table.column(5).search('').draw();
            } else {
                table.column(5).search(selectedStatus).draw();
            }
        });

        // Add filtering for MIMAROPA provinces and municipalities
        $('#mimaropa-filter, #municipality-filter').change(function() {
            var selectedProvince = $('#mimaropa-filter').val().toLowerCase();
            var selectedMunicipality = $('#municipality-filter').val().toLowerCase();

            console.log('Selected Province:', selectedProvince);
            console.log('Selected Municipality:', selectedMunicipality);

            table.column(1).search(selectedProvince).draw();

            $('table tbody tr').each(function() {
                var address = $(this).find('td:nth-child(2)').text().toLowerCase();
                var province = address.split(',')[2].trim().toLowerCase();
                var municipality = address.split(',')[1].trim().toLowerCase();

                if ((selectedProvince === '' || province === selectedProvince) &&
                    (selectedMunicipality === '' || municipality === selectedMunicipality)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        // Reset all filters button
        $('#reset-filters').on('click', function() {
            $('#gender-filter, #age-filter, #civil-status-filter, #mimaropa-filter, #municipality-filter')
                .val('').trigger('change');
            $('table tbody tr').show();
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
            type: 'pie',
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
