<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Dashboard | BFAR - FARMC</title>
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
                    <h4>Level One Overview</h4> | <span class="label label-default">Basic Structure of the Council</span>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> FARMC STRENGTHENING </a>
                        </li>
                        <li class="breadcrumb-item"><a href="tabs.html">Organized FARMC</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="tabs.html">Municipal / City FARMC | Level 1</a>
                        </li>
                        <div class="text-right">
                            <span><a href="{{ url ('/basicStructure') }}"><button type="button" class="btn btn-primary">+ &nbsp;New Form</button></a></span>
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
                                <span>Level 1 | Completed</span>
                                <h2 class="dashboard-total-products">0</h2>
                                <div class="side-box ">
                                    <i class="ti-check text-success-color"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-danger">All</span>
                                <span>Level 1 | Incompleted</span>
                                <h2 class="dashboard-total-products">0</h2>
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
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>MIMAROPA LEVELS OVERVIEW</label>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <a href="{{ url ('/L1Completedtbl') }}"><button type="button" class="btn btn-primary">All Completed</button></a>
                                            <a href="{{ url ('/L1Incompletetbl') }}"><button type="button" class="btn btn-danger">All Incomplete</button></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- <div class="col-xl-12 col-lg-12"> -->
                                    <div class="card">
                                        <div class="card-block">
                                            <ul class="nav nav-tabs  tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#mimaropa" role="tab">All</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#mimaropa1" role="tab">Oriental Mindoro</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#mimaropa2" role="tab">Occidental Mindoro</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#mimaropa3" role="tab">Marinduque</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#mimaropa4" role="tab">Romblon</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#mimaropa5" role="tab">Palawan</a>
                                                </li>


                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content tabs">
                                                <div class="tab-pane active" id="mimaropa" role="tabpanel">
                                                    <br>
                                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Province</th>
                                                                <th>Municipality</th>
                                                                <th>Date of Organized</th>
                                                                <th>Date of Re-organized</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Oriental Mindoro</td>
                                                                <td>Calapan City</td>
                                                                <td>2016/01/15</td>
                                                                <td>2020/11/25</td>
                                                                <td style="color:green"><b>COMPLETE</b></td>
                                                                <td style="text-align: center;">
                                                                    <a href="{{ url('/L1Viewform') }}" class="btn btn-warning"><i class="ti-eye"></i> &nbsp; View</a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane" id="mimaropa1" role="tabpanel">
                                                    <br>
                                                    <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#Ormin" role="tab">Baco</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin1" role="tab">Bansud</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin2" role="tab">Bongabong</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin3" role="tab">Bulalacao</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin4" role="tab">Calapan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin5" role="tab">Gloria</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin6" role="tab">Mansalay</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin7" role="tab">Naujan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin8" role="tab">Puerto Galera</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin9" role="tab">Pinamalayan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin10" role="tab">Pola</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin11" role="tab">Roxas</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin12" role="tab">San Teodoro</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Ormin13" role="tab">Socorro</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#ormin14" role="tab">Victoria</a>
                                                        </li>

                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content tabs-left-content">
                                                        <div class="tab-pane active" id="Ormin" role="tabpanel">
                                                            <br>
                                                            <div class="col-mb-12">
                                                                <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Province</th>
                                                                            <!-- <th>Municipality</th> -->
                                                                            <th>Date of Organized</th>
                                                                            <th>Date of Re-organized</th>
                                                                            <th>Status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Oriental Mindoro</td>
                                                                            <!-- <td>Calapan City</td> -->
                                                                            <td>2016/01/15</td>
                                                                            <td>2016/01/15</td>
                                                                            <td style="color:red"><b>INCOMPLETE</b></td>
                                                                            <td><a href="{{ url('/L1Editform') }}" class="btn btn-danger"><i class="ti-write"></i> &nbsp; Edit</a></td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin1" role="tabpanel">
                                                            <label for="">Ormin1</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin2" role="tabpanel">
                                                            <label for="">Ormin2</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin3" role="tabpanel">
                                                            <label for="">Ormin3</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin4" role="tabpanel">
                                                            <label for="">Ormin4</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin5" role="tabpanel">
                                                            <label for="">Ormin5</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin6" role="tabpanel">
                                                            <label for="">Ormin6</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin7" role="tabpanel">
                                                            <label for="">Ormin7</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin8" role="tabpanel">
                                                            <label for="">Ormin8</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin9" role="tabpanel">
                                                            <label for="">Ormin9</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin10" role="tabpanel">
                                                            <label for="">Ormin10</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin11" role="tabpanel">
                                                            <label for="">Ormin11</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin12" role="tabpanel">
                                                            <label for="">Ormin12</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin13" role="tabpanel">
                                                            <label for="">Ormin13</label>
                                                        </div>
                                                        <div class="tab-pane" id="Ormin14" role="tabpanel">
                                                            <label for="">Ormin14</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="mimaropa2" role="tabpanel">
                                                    <br>
                                                    <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#OcciMin" role="tab">Abra de Ilog</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin1" role="tab">Calintaan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin2" role="tab">Looc</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin3" role="tab">Lubang</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin4" role="tab">Magsaysay</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin5" role="tab">Mamburao</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin6" role="tab">Paluan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin7" role="tab">Rizal</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin8" role="tab"></a>Sablayan
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin9" role="tab">Pinamalayan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin10" role="tab">San Jose</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#OcciMin11" role="tab">Santa Cruz</a>
                                                        </li>


                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content tabs-left-content">
                                                        <div class="tab-pane active" id="OcciMin" role="tabpanel">
                                                            <label for="">OcciMin</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin1" role="tabpanel">
                                                            <label for="">OcciMin1</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin2" role="tabpanel">
                                                            <label for="">OcciMin2</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin3" role="tabpanel">
                                                            <label for="">OcciMin3</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin4" role="tabpanel">
                                                            <label for="">OcciMin4</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin5" role="tabpanel">
                                                            <label for="">OcciMin5</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin6" role="tabpanel">
                                                            <label for="">OcciMin6</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin7" role="tabpanel">
                                                            <label for="">OcciMin7</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin8" role="tabpanel">
                                                            <label for="">OcciMin8</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin9" role="tabpanel">
                                                            <label for="">OcciMin9</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin10" role="tabpanel">
                                                            <label for="">OcciMin10</label>
                                                        </div>
                                                        <div class="tab-pane" id="OcciMin11" role="tabpanel">
                                                            <label for="">OcciMin11</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="mimaropa3" role="tabpanel">
                                                    <br>
                                                    <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#Marinduque" role="tab">Boac</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Marinduque1" role="tab">Buenavista</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Marinduque2" role="tab">Gasan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Marinduque3" role="tab">Mogpog</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Marinduque4" role="tab">Sta. Cruz</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Marinduque5" role="tab">Torrijos</a>
                                                        </li>
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content tabs-left-content">
                                                        <div class="tab-pane active" id="Marinduque" role="tabpanel">
                                                            <label for="">Marinduque</label>
                                                        </div>
                                                        <div class="tab-pane" id="Marinduque1" role="tabpanel">
                                                            <label for="">Marinduque1</label>
                                                        </div>
                                                        <div class="tab-pane" id="Marinduque2" role="tabpanel">
                                                            <label for="">Marinduque2</label>
                                                        </div>
                                                        <div class="tab-pane" id="Marinduque3" role="tabpanel">
                                                            <label for="">Marinduque3</label>
                                                        </div>
                                                        <div class="tab-pane" id="Marinduque4" role="tabpanel">
                                                            <label for="">Marinduque4</label>
                                                        </div>
                                                        <div class="tab-pane" id="Marinduque5" role="tabpanel">
                                                            <label for="">Marinduque5</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="mimaropa4" role="tabpanel">
                                                    <br>
                                                    <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#Romblon" role="tab">Alcantara</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon1" role="tab">Banton</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon2" role="tab">Cajidiocan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon3" role="tab">Calatrava</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon4" role="tab">Concepcion</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon5" role="tab">Corcuera</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon6" role="tab">Ferrol</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon7" role="tab">Looc</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon8" role="tab"></a>Magdiwang
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon9" role="tab">Odiongan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon10" role="tab">Romblon</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon11" role="tab">San Agustin</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon13" role="tab"></a>San Andres
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon14" role="tab">San Fernando</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon15" role="tab">San Jose</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon16" role="tab">Santa Fe</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Romblon17" role="tab">Santa Maria</a>
                                                        </li>

                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content tabs-left-content">
                                                        <div class="tab-pane active" id="Romblon" role="tabpanel">
                                                            <label for="">Romblon</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon1" role="tabpanel">
                                                            <label for="">Romblon1</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon2" role="tabpanel">
                                                            <label for="">Romblon2</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon3" role="tabpanel">
                                                            <label for="">Romblon3</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon4" role="tabpanel">
                                                            <label for="">Romblon4</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon5" role="tabpanel">
                                                            <label for="">Romblon5</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon6" role="tabpanel">
                                                            <label for="">Romblon6</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon7" role="tabpanel">
                                                            <label for="">Romblon7</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon8" role="tabpanel">
                                                            <label for="">Romblon8</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon9" role="tabpanel">
                                                            <label for="">Romblon9</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon10" role="tabpanel">
                                                            <label for="">Romblon10</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon11" role="tabpanel">
                                                            <label for="">Romblon11</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon13" role="tabpanel">
                                                            <label for="">Romblon13</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon14" role="tabpanel">
                                                            <label for="">Romblon14</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon15" role="tabpanel">
                                                            <label for="">Romblon15</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon16" role="tabpanel">
                                                            <label for="">Romblon16</label>
                                                        </div>
                                                        <div class="tab-pane" id="Romblon17" role="tabpanel">
                                                            <label for="">Romblon17</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="mimaropa5" role="tabpanel">
                                                    <br>
                                                    <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#Palawan" role="tab">Aborlan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan1" role="tab">Agutaya</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan2" role="tab">Aracelli</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan3" role="tab">Balabac</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan4" role="tab">Bataraza</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan5" role="tab">Brooke's Point</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan6" role="tab">Busuanga</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan7" role="tab">Cagayancillo</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan8" role="tab"></a>Coron
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan9" role="tab">Culion</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan10" role="tab">Cuyo</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan11" role="tab">Dumaran</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan13" role="tab"></a>El Nido
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan14" role="tab">Kalayaan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan15" role="tab">Linapacan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan16" role="tab">Magsaysay</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan17" role="tab">Narra</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan18" role="tab">Quezon</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan19" role="tab">Rizal</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan20" role="tab">Roxas</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan21" role="tab">San Vicente</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan22" role="tab">Sofronio Espaniola</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Palawan23" role="tab">Taytay</a>
                                                        </li>

                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content tabs-left-content">
                                                        <div class="tab-pane active" id="Palawan" role="tabpanel">
                                                            <label for="">Palawan</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan1" role="tabpanel">
                                                            <label for="">Palawan1</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan2" role="tabpanel">
                                                            <label for="">Palawan2</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan3" role="tabpanel">
                                                            <label for="">Palawan3</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan4" role="tabpanel">
                                                            <label for="">Palawan4</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan5" role="tabpanel">
                                                            <label for="">Palawan5</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan6" role="tabpanel">
                                                            <label for="">Palawan6</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan7" role="tabpanel">
                                                            <label for="">Palawan7</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan8" role="tabpanel">
                                                            <label for="">Palawan8</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan9" role="tabpanel">
                                                            <label for="">Palawan9</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan10" role="tabpanel">
                                                            <label for="">Palawan10</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan11" role="tabpanel">
                                                            <label for="">Palawan11</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan13" role="tabpanel">
                                                            <label for="">Palawan13</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan14" role="tabpanel">
                                                            <label for="">Palawan14</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan15" role="tabpanel">
                                                            <label for="">Palawan15</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan16" role="tabpanel">
                                                            <label for="">Palawan16</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan17" role="tabpanel">
                                                            <label for="">Palawan17</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan18" role="tabpanel">
                                                            <label for="">Palawan18</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan19" role="tabpanel">
                                                            <label for="">Palawan19</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan20" role="tabpanel">
                                                            <label for="">Palawan20</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan21" role="tabpanel">
                                                            <label for="">Palawan21</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan22" role="tabpanel">
                                                            <label for="">Palawan22</label>
                                                        </div>
                                                        <div class="tab-pane" id="Palawan23" role="tabpanel">
                                                            <label for="">Palawan23</label>
                                                        </div>
                                                    </div>
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
                                        <h6 class="card-title">All Level 1 <em> <small>(Incomplete & Complete)</small> </em></h6>
                                       <br>
                                        <div class="row">
                                            <div class="col-sm-12 grid-margin">
                                                <canvas id="bestSellers"></canvas>
                                            </div>
                                            <div class="col-sm-12">
                                                <ul class="graphl-legend-rectangle">
                                                    <br>
                                                    <li><span class="btn btn-danger"></span> Completed</li>
                                                    <li><span class="btn btn-warning"></span> Incomplete</li>
                                                <br>
                                                </ul>
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

        <script>
            $(document).ready(function() {
                $('#example1').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>

        <script src="{{ asset ('assets/js/dashboard.js') }}"></script>

        <script src="{{ asset ('assets/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset ('assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js') }}"></script>



</body>

</html>