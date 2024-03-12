<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Dashboard | BFAR - FARMC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
</head>

<body>

    <!-- side_navbar -->
    @include ('side_navbar');
    <!-- side_navbar -->

    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Level One Overview</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!"> FARMC STRENGTHENING </a>
                        </li>
                        <li class="breadcrumb-item"><a href="tabs.html">Organized FARMC</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="tabs.html">Municipal / City FARMC | Level 1</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content tabs">
                <div class="tab-pane active" id="farmc" role="tabpanel">
                    <br>
                    <label for="">Count Overview</label>
                    <div class="row dashboard-header">
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-warning">All</span>
                                <span>City / Municipalities</span>
                                <h2 class="dashboard-total-products">76</h2>
                                <div class="side-box ">
                                    <i class="ti-gift text-primary-color"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>Completed</span>
                                <h2 class="dashboard-total-products">0</h2>
                            </div>
                        </div>


                    </div>
                    <!-- 4-blocks row end -->
                    <hr>
                    <label for="">Mimaropa Levels Overview</label>
                    <!-- 2-1 block start -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
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
                                            <div class="table-responsive">
                                                <table class="table m-b-0 photo-table">
                                                    <thead>
                                                        <tr class="text-uppercase">
                                                            <th>Photo</th>
                                                            <th>Province</th>
                                                            <th>Municipality</th>
                                                            <th>Status</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                                            </th>
                                                            <td>Appestia Project
                                                                <p><i class="icofont icofont-clock-time"></i>Created 14.9.2016</p>
                                                            </td>
                                                            <td>
                                                                <span class="pie" style="display: none;">226,134</span><svg class="peity" height="30" width="30">
                                                                    <path d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15" fill="#2196F3"></path>
                                                                    <path d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15" fill="#ccc"></path>
                                                                </svg>
                                                            </td>
                                                            <td></td>
                                                            <td>October 21, 2015</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="mimaropa1" role="tabpanel">
                                            <br>
                                            <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#Ormin" role="tab">Baco</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin1" role="tab">Bansud</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin2" role="tab">Bongabong</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin3" role="tab">Bulalacao</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin4" role="tab">Calapan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin5" role="tab">Gloria</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin6" role="tab">Mansalay</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin7" role="tab">Naujan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin8" role="tab">Puerto Galera</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin9" role="tab">Pinamalayan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin10" role="tab">Pola</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin11" role="tab">Roxas</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin12" role="tab">San Teodoro</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Ormin13" role="tab">Socorro</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#ormin14" role="tab">Victoria</a>
                                                    <div class="slide"></div>
                                                </li>

                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content tabs-left-content">
                                                <div class="tab-pane active" id="Ormin" role="tabpanel">
                                                    <label for="">Ormin</label>
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
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin1" role="tab">Calintaan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin2" role="tab">Looc</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin3" role="tab">Lubang</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin4" role="tab">Magsaysay</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin5" role="tab">Mamburao</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin6" role="tab">Paluan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin7" role="tab">Rizal</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin8" role="tab"></a>Sablayan
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin9" role="tab">Pinamalayan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin10" role="tab">San Jose</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#OcciMin11" role="tab">Santa Cruz</a>
                                                    <div class="slide"></div>
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
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Marinduque1" role="tab">Buenavista</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Marinduque2" role="tab">Gasan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Marinduque3" role="tab">Mogpog</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Marinduque4" role="tab">Sta. Cruz</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Marinduque5" role="tab">Torrijos</a>
                                                    <div class="slide"></div>
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
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon1" role="tab">Banton</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon2" role="tab">Cajidiocan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon3" role="tab">Calatrava</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon4" role="tab">Concepcion</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon5" role="tab">Corcuera</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon6" role="tab">Ferrol</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon7" role="tab">Looc</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon8" role="tab"></a>Magdiwang
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon9" role="tab">Odiongan</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon10" role="tab">Romblon</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon11" role="tab">San Agustin</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon13" role="tab"></a>San Andres
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon14" role="tab">San Fernando</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon15" role="tab">San Jose</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon16" role="tab">Santa Fe</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#Romblon17" role="tab">Santa Maria</a>
                                                    <div class="slide"></div>
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
                                            <p>3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                                nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
                                        </div>
                                        <div class="tab-pane" id="mimaropa6" role="tabpanel">
                                            <p>4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="farmc1" role="tabpanel">
                    <p>2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                </div>
                <div class="tab-pane" id="messages1" role="tabpanel">
                    <p>3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                        nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
                </div>
                <div class="tab-pane" id="settings1" role="tabpanel">
                    <p>4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                </div>
            </div>
            <!-- 4-blocks row start -->

        </div>
    </div>

</body>