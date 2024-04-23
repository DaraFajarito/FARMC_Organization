<DOCTYPE html>
    <html lang="en">

    <head>
        <title>Level 5 - Archived Table | BFAR - FARMC</title>
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
                            <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}" style=" width: 60px;" alt="logo"></a>
                            <h4>M/C FARMC Profile | <small>PROFILE FORM</small></h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC |
                                        Municipal / City FARMC • Level 5 | ARCHIVED</a>
                                </li>
                            </ol>
                            <br>
                            <a href="{{ url('/level5') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                                Go back to Level 5</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="grid-material bg-general" style="text-align: center;"><b>All Archived Table</b>
                            </div>
                            <hr>
                            <table id="FARMC" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead style="font-size:10px">
                                    <tr>
                                        <th>Province</th>
                                        <th>Municipality</th>
                                        <th>List Of Governing Bodies That Recognises The MFARMC As A Member</th>
                                        <th>Plaque Of Recognition Received</th>
                                        <th>Certificate Of Merit, Recognition And Appreciation Received</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sustain as $item)
                                    <tr>
                                        <td>{{$item->profileForm->province}}</td>
                                        <td>{{$item->profileForm->municipality}}</td>
                                        @if ($item->rec_list1 === NULL)
                                        <td><span style="color: red;"> no data</span></td>
                                        @else
                                        <td>{{$item->rec_list1}}</td>
                                        @endif

                                        @if ($item->award_plaq1 === NULL)
                                        <td><span style="color: red;"> no data</span></td>
                                        @else
                                        <td>{{$item->award_plaq1}}</td>
                                        @endif

                                        @if ($item->award_cert1 === NULL)
                                        <td><span style="color: red;"> no data</span></td>
                                        @else
                                        <td>{{$item->award_cert1}}</td>
                                        @endif

                                        @if ($item->status == "ARCHIVED")
                                        <td style="color:green"><b>ARCHIVED</b></td>
                                        @endif

                                        <td style=" display: flex; justify-content: space-between;">
                                            <a style="margin-left: 5px;" href="{{ url('/L5Viewform/' . $item->profileForm_id) }}" class="btn btn-success"><i class="ti-eye"></i></a>
                                        </td>
                                    </tr>
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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

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