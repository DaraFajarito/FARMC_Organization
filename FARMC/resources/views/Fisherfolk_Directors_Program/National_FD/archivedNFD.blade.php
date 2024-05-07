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
                            <h4>Fisherfolk Directors Program</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Fisherfolk Directors Program | National Fisherfolk Director |
                                     ARCHIVED</a>
                                </li>
                            </ol>
                            <br>
                            <a href="{{ url('/nationalFR') }}" class="btn btn-secondary"> <i
                                    class="icon-arrow-left"></i>
                                back</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="grid-material bg-general" style="text-align: center;"><b>All Archived Table</b>
                            </div>
                            <hr>
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
                                @foreach ($nfd_archived as $item)
                                {{-- @if ($item->status != 'ARCHIVED') --}}
                                <tr>
                                    <td>{{$item->fam_name}}, {{$item->given_name}} {{$item->mid_name}} {{$item->ext}} </td>
                                    <td>{{$item->add_barangay}}, {{$item->add_city}}, {{$item->add_province}}</td>
                                    <td>{{$item->civil_status}}</td>
                                    <td>{{$item->gender}}</td>
                                    <td>{{$item->birthdate}}</td>
                                    <td>{{$item->age}}</td>
                                    <td>{{$item->fourps}}</td>
                                    <td>{{$item->cul_af}} - {{$item->cul_af_yes}}</td>
                                    <td style=" display: flex; justify-content: space-between;">
                                        <a  href="{{ url ('/rfdp-viewform/'. $item->id)}}" class="btn btn-success">View<i
                                                class="ti-eye"></i></a>

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
    </body>

    </html>
