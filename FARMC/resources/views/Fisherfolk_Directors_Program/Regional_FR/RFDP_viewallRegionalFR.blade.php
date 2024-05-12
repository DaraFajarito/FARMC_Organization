<!DOCTYPE html>
<html lang="en">

<head>
    <title>Regional FR | Fisherfolk Directors Program | View All | BFAR - FARMC</title>
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
                            <h4 style="margin: 0;">Fisherfolk Directors Program</h4>
                        </div>
                    </span>

                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="#!"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> Fisherfolk Directors Program </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> Regional Fisherfolk Representative </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">All Directors</a>
                        </li>
                    </ol>
                    <br>
                    <div style="display: flex;">
                        <a href="{{ url('/regionalFR') }}" class="btn btn-secondary"> <i
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

                            <br>
                            <ul class="nav nav-tabs  tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#members"
                                        role="tab">RF Directors
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
                                            @foreach ($RFDPviewRegionalFR as $item)
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
                                                            <a href="{{ url('/archived_RFR/' . $item->id) }}"
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
                                        @foreach ($RFDPviewRegionalFR as $item)
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
                    table.column(3).search('').draw();
                } else {
                    table.column(3).search('^' + selectedGender + '$', true, false).draw();
                }
            });

            // Add filtering for age range
            $('#age-filter').on('change', function() {
                var ageRange = this.value;
                if (ageRange === '') {
                    table.column(5).search('').draw();
                } else if (ageRange === '0-18') {
                    table.column(5).search('^((0|1[0-8])\\b)', true, false).draw();
                } else if (ageRange === '19-25') {
                    table.column(5).search('^((1[9-9])|(2[0-5])\\b)', true, false).draw();
                } else if (ageRange === '26-35') {
                    table.column(5).search('^((2[6-9])|(3[0-5])\\b)', true, false).draw();
                } else if (ageRange === '36-50') {
                    table.column(5).search('^((3[6-9])|(4[0-9])|(50)\\b)', true, false).draw();
                } else if (ageRange === '50+') {
                    table.column(5).search('(5[1-9]|[6-9]\\d|\\d{3,})', true, false).draw();
                }
            });

            // Add filtering for civil status
            $('#civil-status-filter').on('change', function() {
                var selectedStatus = this.value;
                if (selectedStatus === '') {
                    table.column(2).search('').draw();
                } else {
                    table.column(2).search(selectedStatus).draw();
                }
            });

            $('#mimaropa-filter, #municipality-filter').change(function() {
                var selectedProvince = $('#mimaropa-filter').val().toLowerCase();
                var selectedMunicipality = $('#municipality-filter').val().toLowerCase();

                $('table tbody tr').each(function() {
                    var address = $(this).find('td:nth-child(2)').text().toLowerCase();
                    var province = address.split(',')[2].trim();
                    var municipality = address.split(',')[1].trim();

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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#FARMC2').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ],
                "pagingType": "full_numbers",
                "pageLength": 20
            });
        });
    </script>

</body>

</html>
