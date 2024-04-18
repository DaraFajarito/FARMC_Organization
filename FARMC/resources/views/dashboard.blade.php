<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Dashboard | BFAR - FARMC</title>
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
                    <h4>All Dashboard</h4>
                </div>
            </div>

            <ul class="nav nav-tabs  tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#farmc" role="tab">Organized FARMC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#farmc1" role="tab">FARMC Membership</a>
                </li>


            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabs">
                <div class="tab-pane active" id="farmc" role="tabpanel">
                    <br>
                    <label for="">Count Overview</label>
                    <div class="row dashboard-header">
                        <div class="col-lg-8 col-md-8">
                            <div class="card dashboard-product">
                                <span class="label label-warning">All</span>
                                <span>City / Municipalities</span>
                                <h2 class="dashboard-total-products">76</h2>
                                <div class="side-box ">
                                    <i class="ti-gift text-primary-color"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card dashboard-product">
                                <span class="label label-success">All</span>
                                <span>Completed</span>
                                <h2 class="dashboard-total-products">0</h2>
                            </div>
                        </div>

                        <!-- <div class="col-md-12"> -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level One</span>
                                <h2 class="dashboard-total-products"><span>{{$allcominc1}}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#" id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle">1</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level Two</span>
                                <h2 class="dashboard-total-products"><span>{{$allcominc2}}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#" id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle1">2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level Three</span>
                                <h2 class="dashboard-total-products"><span>{{$allcominc3}}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#" id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle2">3</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level Four</span>
                                <h2 class="dashboard-total-products"><span>{{$allcominc4}}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#" id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle3">4</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level Five</span>
                                <h2 class="dashboard-total-products"><span>{{$allcominc5}}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#" id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle4">5</div>
                                </div>
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
                                                            <!-- <th>Photo</th> -->
                                                            <th>Province</th>
                                                            <th>Municipality</th>
                                                            <th>Status</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <!-- <th>
                                                                <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                                            </th> -->
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
                                            <p>2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                                        </div>
                                        <div class="tab-pane" id="mimaropa2" role="tabpanel">
                                            <p>3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                                nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
                                        </div>
                                        <div class="tab-pane" id="mimaropa3" role="tabpanel">
                                            <p>4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                                        </div>
                                        <div class="tab-pane" id="mimaropa4" role="tabpanel">
                                            <p>2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
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