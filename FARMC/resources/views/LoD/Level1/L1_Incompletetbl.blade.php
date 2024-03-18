<DOCTYPE html>
    <html lang="en">

    <head>
        <title>All Dashboard | BFAR - FARMC</title>
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
                            <a href="index.html" class="logo"><img src="{{ asset ('assets/images/Logo_BFAR.png') }}" style=" width: 60px;" alt="logo"></a>
                            <h4>M/C FARMC Profile | <small>PROFILE FORM</small></h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 1 | INCOMPLETED</a>
                                </li>
                            </ol>
                            <br>
                            <a href="{{ url ('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Go back to Level 1</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                            <!-- <hr> -->
                            <div class="grid-material bg-general" style="text-align: center;"><b>All Incomplete Table</b></div>
                            <hr>


                            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Description</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alphabet puzzle</td>
                                        <td>2016/01/15</td>
                                        <td>Done</td>
                                        <td data-order="1000">€1.000,00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Layout for poster</td>
                                        <td>2016/01/31</td>
                                        <td>Planned</td>
                                        <td data-order="1834">€1.834,00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Image creation</td>
                                        <td>2016/01/23</td>
                                        <td>To Do</td>
                                        <td data-order="1500">€1.500,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

        <!-- DataTables Buttons extension CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

        <!-- DataTables Buttons extension JS -->
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    </body>

    </html>