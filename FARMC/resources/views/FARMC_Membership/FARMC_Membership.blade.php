<!DOCTYPE html>
<html lang="en">

<head>
    <title>FARMC Membership Overview | BFAR - FARMC</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
</head>

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
                        <img src="{{ asset ('assets/images/newlogo.png') }}" style="width: 40px;" alt="logo">
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
                            <span><a href="{{ url ('/personal_info') }}"><button type="button" class="btn btn-primary">+ New Form</button></a></span>
                        </div>
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
                                <span>FARMC Members</span>
                                <h2 class="dashboard-total-products">0</h2>
                                <div class="side-box ">
                                    <i class="ti-id-badge text-success-color"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>Organization</span>
                                <h2 class="dashboard-total-products">0</h2>
                                <div class="side-box ">
                                    <i class="ti-layout-tab-v text-success-color"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <ul class="nav nav-tabs  tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#mimaropa" role="tab">FARMC Members</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#mimaropa1" role="tab">FARMC Organizations</a>
                                </li>


                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div class="tab-pane active" id="mimaropa" role="tabpanel">
                                    <br>
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
                                            <tr>
                                                <td>4</td>
                                                <td>Create font</td>
                                                <td>2016/02/26</td>
                                                <td>Done</td>
                                                <td data-order="1200">€1.200,00</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Sticker production</td>
                                                <td>2016/02/18</td>
                                                <td>Planned</td>
                                                <td data-order="2100">€2.100,00</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Glossy poster</td>
                                                <td>2016/03/17</td>
                                                <td>To Do</td>
                                                <td data-order="899">€899,00</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Beer label</td>
                                                <td>2016/05/28</td>
                                                <td>Confirmed</td>
                                                <td data-order="2499">€2.499,00</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Shop sign</td>
                                                <td>2016/04/19</td>
                                                <td>Offer</td>
                                                <td data-order="1099">€1.099,00</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>X-Mas decoration</td>
                                                <td>2016/10/31</td>
                                                <td>Confirmed</td>
                                                <td data-order="1750">€1.750,00</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Halloween invite</td>
                                                <td>2016/09/12</td>
                                                <td>Planned</td>
                                                <td data-order="400">€400,00</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Wedding announcement</td>
                                                <td>2016/07/09</td>
                                                <td>To Do</td>
                                                <td data-order="299">€299,00</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Member pasport</td>
                                                <td>2016/06/22</td>
                                                <td>Offer</td>
                                                <td data-order="149">€149,00</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Drink tickets</td>
                                                <td>2016/11/01</td>
                                                <td>Confirmed</td>
                                                <td data-order="199">€199,00</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Album cover</td>
                                                <td>2017/03/15</td>
                                                <td>To Do</td>
                                                <td data-order="4999">€4.999,00</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Shipment box</td>
                                                <td>2017/02/08</td>
                                                <td>Offer</td>
                                                <td data-order="1399">€1.399,00</td>
                                            </tr>
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

    <script type="text/javascript" src="{{ asset ('assets/js/datatable.js') }}"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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