<!DOCTYPE html>
<html lang="en">

<head>
    <title>View All | Fisherfolk Organization| View All | BFAR - FARMC</title>
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
                            <h4 style="margin: 0;">Fisherfolk Organization</h4>
                        </div>
                    </span>

                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="#!"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> Fisherfolk Organization </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> Commercial </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">All</a>
                        </li>
                    </ol>
                    <br>
                    <div style="display: flex;">
                        <a href="{{ url('/FOCommercial') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                            Back</a>

                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="filter-container">
                                <button id="reset-filters" class="btn btn-secondary">Reset Filters</button>
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
                                        <option value="Santa Maria">Santa Maria</option>
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
                                        role="tab">Association</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#organization"
                                        role="tab">Cooperative</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div class="tab-pane active" id="members" role="tabpanel">
                                    <br>
                                    <table id="FARMC" class="table table-striped table-bordered" cellspacing="0"
                                        width="100%">
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
                                            @foreach ($association as $item)
                                                @if ($item->status != 'ARCHIVED')
                                                    <tr>
                                                        @if ($item->name_of_org === null)
                                                        <td style="color:red">no data</td>
                                                    @else
                                                        <td>{{ $item->name_of_org }}</td>
                                                    @endif

                                                    @if ($item->add_barangay === null && $item->add_city === null  && $item->add_province === null)
                                                        <td style="color:red">no data</td>
                                                    @else
                                                        <td>{{ $item->add_barangay }},
                                                            {{ $item->add_city }},
                                                            {{ $item->add_province }}</td>
                                                    @endif

                                                    @if ($item->sector_rep === null && $item->sector_rep_yes === null)
                                                        <td style="color:red">no data</td>

                                                    @else
                                                        <td>{{ $item->sector_rep }} -
                                                            {{ $item->sector_rep_yes }}</td>
                                                    @endif

                                                    @if ($item->status_of_reg === null &&  $item->status_of_reg_yes === null)
                                                        <td style="color:red">no data</td>
                                                    @else
                                                        <td>{{ $item->status_of_reg }} -
                                                            {{ $item->status_of_reg_yes }}</td>
                                                    @endif

                                                    @if ($item->status_of_accre === null && $item->status_of_accre_yes === null)
                                                        <td style="color:red">no data</td>
                                                    @else
                                                        <td>{{ $item->status_of_accre }} -
                                                            {{ $item->status_of_reg_yes }}</td>
                                                    @endif
                                                        <td style=" display: flex; justify-content: space-between;">
                                                            <a href="{{ url('/viewMunAssociation/' . $item->id) }}"
                                                                class="btn btn-success"><i class="ti-eye"></i></a>
                                                            <a href="{{ url('/association_edit/' . $item->id) }}"
                                                                class="btn btn-warning"><i class="ti-pencil"></i></a>
                                                            <a href="{{ url('/archived_ComAss/' . $item->id) }}"
                                                                class="btn btn-danger"><i class="ti-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane" id="organization" role="tabpanel">
                                    <br>
                                    <div class="col-mb-12">
                                        <table id="FARMC2" class="table table-striped table-bordered"
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
                                                @foreach ($cooperative as $item)
                                                    @if ($item->status != 'ARCHIVED')
                                                        <tr>
                                                            @if ($item->name_of_coop === null)
                                                                <td style="color:red">no data</td>
                                                            @else
                                                                <td>{{ $item->name_of_coop }}</td>
                                                            @endif

                                                            @if ($item->add_barangay === null && $item->add_city === null && $item->add_province === null)
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
                                                                    class="btn btn-success"><i class="ti-eye"></i></a>
                                                                <a href="#!" class="btn btn-warning"><i
                                                                        class="ti-pencil"></i></a>
                                                                <a href="{{ url('/archived_ComCoop/' . $item->id) }}"
                                                                    class="btn btn-danger"><i
                                                                        class="ti-trash"></i></a>
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
                "pagingType": "full_numbers",
                "pageLength": 20 // Set the default number of rows per page to 20
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
            "pageLength": 20 // Set the default number of rows per page to 20
        });
    });
</script>


<script>
    $(document).ready(function() {
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

        $('#reset-filters').click(function() {
            $('#mimaropa-filter, #municipality-filter').val('');
            $('table tbody tr').show();
        });
    });
</script>

</body>

</html>
