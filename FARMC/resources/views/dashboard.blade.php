<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Dashboard | BFAR - FARMC</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
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
                    <h4>All Dashboard</h4>
                </div>
            </div>

            <ul class="nav nav-tabs  tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#farmc" role="tab">Organized FARMC</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#farmc1" role="tab">FARMC Membership</a>
                </li> --}}


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
                                <h2 class="dashboard-total-products">{{ $completedCount }}</h2>
                            </div>
                        </div>

                        <!-- <div class="col-md-12"> -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level One</span>
                                <h2 class="dashboard-total-products"><span>{{ $allcominc1 }}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#"
                                    id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle">1</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level Two</span>
                                <h2 class="dashboard-total-products"><span>{{ $allcominc2 }}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#"
                                    id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle1">2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level Three</span>
                                <h2 class="dashboard-total-products"><span>{{ $allcominc3 }}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#"
                                    id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle2">3</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level Four</span>
                                <h2 class="dashboard-total-products"><span>{{ $allcominc4 }}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#"
                                    id="incomplete-link"><small>Incomplete</small></a>
                                <div class="side-box">
                                    <div class="circle3">4</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="card dashboard-product">
                                <span>Level Five</span>
                                <h2 class="dashboard-total-products"><span>{{ $allcominc5 }}</span></h2>
                                <a href="#" id="completed-link"><small>Completed </small></a> | <a href="#"
                                    id="incomplete-link"><small>Incomplete</small></a>
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
                                            <a class="nav-link active" data-toggle="tab" href="#mimaropa"
                                                role="tab">All</a>
                                        </li>
                                    </ul>
                                    <br>
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
                                        <select id="levels-filter">
                                            <option hidden value="">Levels</option>
                                            <option value="LEVEL ONE">Level 1</option>
                                            <option value="LEVEL TWO">Level 2</option>
                                            <option value="LEVEL THREE">Level 3</option>
                                            <option value="LEVEL FOUR">Level 4</option>
                                            <option value="LEVEL FIVE">Level 5</option>
                                        </select>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabs">
                                        <div class="tab-pane active" id="mimaropa" role="tabpanel">
                                            <br>
                                            <div class="table-responsive">
                                                <table id="FARMC" class="table table-striped table-bordered"
                                                    cellspacing="0" width="100%">
                                                    <thead style="font-size:smaller">
                                                        <tr>
                                                            <th>Level</th>
                                                            <th>Province</th>
                                                            <th>Municipality</th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    {{-- //LEVEL I --}}
                                                    @if (count($data) > 0 &&
                                                            !$data->every(function ($item) {
                                                                return $item->status == 'ARCHIVED';
                                                            }))
                                                        <tbody style="font-size: 15px">
                                                            @foreach ($data as $item)
                                                                @if ($item->status != 'ARCHIVED')
                                                                    <tr>
                                                                        @if ($item->level === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                        <td style="font-size: 14px; color:darkred">
                                                                            <div><b>{{$item->level}}</b></div>
                                                                        </td>
                                                                        @endif

                                                                        @if ($item->province === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->province }}</td>
                                                                        @endif
                                                                        @if ($item->municipality === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->municipality }}</td>
                                                                        @endif
                                                                        <td>{{ \Carbon\Carbon::parse($item->date_organized)->format('Y/m/d') }}
                                                                        </td>
                                                                        <td>{{ \Carbon\Carbon::parse($item->date_reorganized)->format('Y/m/d') }}
                                                                        </td>
                                                                        @if ($item->status == 'COMPLETED')
                                                                            <td style="color:green"><b>COMPLETED</b>
                                                                            </td>
                                                                        @elseif ($item->status == 'INCOMPLETE')
                                                                            <td style="color:red"><b>INCOMPLETE</b>
                                                                            </td>
                                                                        @endif
                                                                        <td style=" display: flex; justify-content:">
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L1Viewform/' . $item->id) }}"
                                                                                class="btn btn-success"><i
                                                                                    class="ti-eye"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L1Editform/' . $item->id) }}"
                                                                                class="btn btn-warning"><i
                                                                                    class="ti-pencil"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L1Archivedtbl/' . $item->id) }}"
                                                                                class="btn btn-danger"><i
                                                                                    class="ti-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    @endif

                                                    {{-- //LEVEL II --}}
                                                    @if (count($data) > 0 &&
                                                            !$data1->every(function ($item) {
                                                                return $item->status == 'ARCHIVED';
                                                            }))
                                                        <tbody style="font-size: 15px">
                                                            @foreach ($data1 as $item)
                                                                @if ($item->status !== 'ARCHIVED')
                                                                    <tr>
                                                                        @if ($item->level === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                        <td style="font-size: 14px; color:chocolate">
                                                                            <div><b>{{$item->level}}</b></div>
                                                                        </td>
                                                                        @endif
                                                                        @if ($item->profileForm->province === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->profileForm->province }}</td>
                                                                        @endif

                                                                        @if ($item->profileForm->municipality === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->profileForm->municipality }}
                                                                            </td>
                                                                        @endif
                                                                        <td>{{ $item->mfdp }}</td>
                                                                        <td>{{ $item->mfo }}</td>
                                                                        @if ($item->status == 'COMPLETED')
                                                                            <td style="color:green"><b>COMPLETED</b>
                                                                            </td>
                                                                        @elseif ($item->status == 'INCOMPLETE')
                                                                            <td style="color:red"><b>INCOMPLETE</b>
                                                                            </td>
                                                                        @endif
                                                                        <td style=" display: flex; justify-content:">
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L2Viewform/' . $item->profileForm_id) }}"
                                                                                class="btn btn-success"><i
                                                                                    class="ti-eye"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L2Editform/' . $item->profileForm_id) }}"
                                                                                class="btn btn-warning"><i
                                                                                    class="ti-pencil"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L2Archivedtbl/' . $item->id) }}"
                                                                                class="btn btn-danger"><i
                                                                                    class="ti-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    @endif

                                                    @if (count($data) > 0 &&
                                                            !$data2->every(function ($item) {
                                                                return $item->status == 'ARCHIVED';
                                                            }))
                                                        <tbody style="font-size: 15px">
                                                            @foreach ($data2 as $item)
                                                                @if ($item->status !== 'ARCHIVED')
                                                                    <tr>
                                                                        @if ($item->level === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td style="font-size: 14px; color:orange">
                                                                                <div><b>{{$item->level}}</b></div>
                                                                            </td>
                                                                        @endif

                                                                        @if ($item->profileForm->province === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->profileForm->province }}</td>
                                                                        @endif
                                                                        @if ($item->profileForm->municipality === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->profileForm->municipality }}
                                                                            </td>
                                                                        @endif


                                                                        @if ($item->approved_MFDP_file === null)
                                                                            <td> <i class="ti-close"
                                                                                    style="color: red; font-size: 1.5em;"></i>
                                                                            </td>
                                                                        @else
                                                                            <td> <i class="ti-check-box"
                                                                                    style="color: green; font-size: 1.5em;"></i>
                                                                            </td>
                                                                        @endif

                                                                        @if (
                                                                            $item->imp_act1 === null ||
                                                                                $item->imp_act1_file === null ||
                                                                                $item->imp_act2 === null ||
                                                                                $item->imp_act2_file === null ||
                                                                                $item->imp_act3 === null ||
                                                                                $item->imp_act3_file === null)
                                                                            <td> <i class="ti-close"
                                                                                    style="color: red; font-size: 1.5em;"></i>
                                                                            </td>
                                                                        @else
                                                                            <td> <i class="ti-check-box"
                                                                                    style="color: green; font-size: 1.5em;"></i>
                                                                            </td>
                                                                        @endif

                                                                        @if ($item->status == 'COMPLETED')
                                                                            <td style="color:green"><b>COMPLETED</b>
                                                                            </td>
                                                                        @elseif ($item->status == 'INCOMPLETE')
                                                                            <td style="color:red"><b>INCOMPLETE</b>
                                                                            </td>
                                                                        @endif

                                                                        <td style=" display: flex; justify-content:">
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L3Viewform/' . $item->profileForm_id) }}"
                                                                                class="btn btn-success"><i
                                                                                    class="ti-eye"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L3Editform/' . $item->profileForm_id) }}"
                                                                                class="btn btn-warning"><i
                                                                                    class="ti-pencil"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L3Archivedtbl/' . $item->id) }}"
                                                                                class="btn btn-danger"><i
                                                                                    class="ti-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    @endif

                                                    @if (count($data) > 0 &&
                                                            !$data3->every(function ($item) {
                                                                return $item->status == 'ARCHIVED';
                                                            }))
                                                        <tbody style="font-size: 15px">
                                                            @foreach ($data3 as $item)
                                                                @if ($item->status !== 'ARCHIVED')
                                                                    <tr>
                                                                        @if ($item->level === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                        <td style="font-size: 14px; color:goldenrod">
                                                                            <div><b>{{$item->level}}</b></div>
                                                                        </td>
                                                                        @endif

                                                                        @if ($item->profileForm->province === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->profileForm->province }}</td>
                                                                        @endif
                                                                        @if ($item->profileForm->municipality === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->profileForm->municipality }}
                                                                            </td>
                                                                        @endif
                                                                        @if ($item->data_training === 'No')
                                                                            <td> No </td>
                                                                        @else
                                                                            <td>Yes</td>
                                                                        @endif

                                                                        @if ($item->data_fishcatch === 'No')
                                                                            <td> No </td>
                                                                        @else
                                                                            <td>Yes</td>
                                                                        @endif

                                                                        @if ($item->status == 'COMPLETED')
                                                                            <td style="color:green"><b>COMPLETED</b>
                                                                            </td>
                                                                        @elseif ($item->status == 'INCOMPLETE')
                                                                            <td style="color:red"><b>INCOMPLETE</b>
                                                                            </td>
                                                                        @endif

                                                                        <td style=" display: flex; justify-content:">
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L4Viewform/' . $item->profileForm_id) }}"
                                                                                class="btn btn-success"><i
                                                                                    class="ti-eye"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L4Editform/' . $item->profileForm_id) }}"
                                                                                class="btn btn-warning"><i
                                                                                    class="ti-pencil"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L4Archivedtbl/' . $item->id) }}"
                                                                                class="btn btn-danger"><i
                                                                                    class="ti-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    @endif

                                                    @if (count($data) > 0 &&
                                                            !$data4->every(function ($item) {
                                                                return $item->status == 'ARCHIVED';
                                                            }))
                                                        <tbody style="font-size: 15px">
                                                            @foreach ($data4 as $item)
                                                                @if ($item->status !== 'ARCHIVED')
                                                                    <tr>
                                                                        @if ($item->level === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                        <td style="font-size: 14px; color:darkgreen">
                                                                            <div><b>{{$item->level}}</b></div>
                                                                        </td>
                                                                        @endif

                                                                        @if ($item->profileForm->province === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->profileForm->province }}</td>
                                                                        @endif
                                                                        @if ($item->profileForm->municipality === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span></td>
                                                                        @else
                                                                            <td>{{ $item->profileForm->municipality }}
                                                                            </td>
                                                                        @endif
                                                                        @if ($item->rec_list1 === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span>
                                                                            </td>
                                                                        @else
                                                                            <td>{{ $item->rec_list1 }}</td>
                                                                        @endif

                                                                        @if ($item->award_plaq1 === null)
                                                                            <td><span style="color: red;"> no
                                                                                    data</span>
                                                                            </td>
                                                                        @else
                                                                            <td>{{ $item->award_plaq1 }}</td>
                                                                        @endif

                                                                        @if ($item->status == 'COMPLETED')
                                                                            <td style="color:green"><b>COMPLETED</b>
                                                                            </td>
                                                                        @elseif ($item->status == 'INCOMPLETE')
                                                                            <td style="color:red"><b>INCOMPLETE</b>
                                                                            </td>
                                                                        @endif

                                                                        <td style=" display: flex; justify-content:">
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L5Viewform/' . $item->profileForm_id) }}"
                                                                                class="btn btn-success"><i
                                                                                    class="ti-eye"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L5Editform/' . $item->profileForm_id) }}"
                                                                                class="btn btn-warning"><i
                                                                                    class="ti-pencil"></i></a>
                                                                            <a style="margin-left: 5px;"
                                                                                href="{{ url('/L5Archivedtbl/' . $item->id) }}"
                                                                                class="btn btn-danger"><i
                                                                                    class="ti-trash"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane" id="farmc1" role="tabpanel">
                    <p>2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                </div>
                <div class="tab-pane" id="messages1" role="tabpanel">
                    <p>3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                        nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
                </div>
                <div class="tab-pane" id="settings1" role="tabpanel">
                    <p>4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                </div> --}}
            </div>
            <!-- 4-blocks row start -->

        </div>
    </div>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

    <!-- JavaScript -->
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
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
                "pagingType": "full_numbers",
                "pageLength": 20
            });
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const levelFilter = document.getElementById('levels-filter');
            const provinceFilter = document.getElementById('mimaropa-filter');
            const municipalityFilter = document.getElementById('municipality-filter');

            levelFilter.addEventListener('change', filterTable);
            provinceFilter.addEventListener('change', filterTable);
            municipalityFilter.addEventListener('change', filterTable);

            function filterTable() {
                const level = levelFilter.value;
                const province = provinceFilter.value;
                const municipality = municipalityFilter.value;

                const rows = document.querySelectorAll('#FARMC tbody tr');

                rows.forEach(row => {
                    const rowLevel = row.cells[0].textContent.trim();
                    const rowProvince = row.cells[1].textContent.trim();
                    const rowMunicipality = row.cells[2].textContent.trim();

                    const levelMatch = level === '' || rowLevel === level;
                    const provinceMatch = province === '' || rowProvince === province;
                    const municipalityMatch = municipality === '' || rowMunicipality === municipality;

                    if (levelMatch && provinceMatch && municipalityMatch) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            $('#reset-filters').click(function() {
                $('#mimaropa-filter, #municipality-filter, #levels-filter').val('');
                $('table tbody tr').show();
            });
        });
    </script>





</body>

</html>
