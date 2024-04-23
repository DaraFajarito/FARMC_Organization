<!DOCTYPE html>
<html lang="en">

<head>
    <title>FARMC Officers | BFAR - FARMC</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
</head>


<style>
    input.form-control{
        border: 1px solid #AAAAAA;
    }
</style>

<body>

    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

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
                            <li class="breadcrumb-item"><a href="#">FARMC Strenngthening | Organized FARMC | Municipal / City FARMC • Level 2</a>
                            </li>
                        </ol>
                        <br>
                        <a href="{{ url ('/basicStructure') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                        <hr>
                        <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>FARMC OFFICERS</b></div>
                        <hr>
                        <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-12 table-responsive">
                                        @foreach($officers as $officer)
                                        <form method="POST" action="{{ url('/add-officer/' . $officer->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Position</th>
                                                        <th>Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Chairperson</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder="" name="chairperson" value="{{$officer->chairperson}}"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Vice-Chairperson</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder="" name="vice_chairperson" value="{{$officer->vice_chairperson}}"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Secretary</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder=""  name="secretary" value="{{$officer->secretary}}"></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Secretary</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder="Optional"  name="asst_sec" value="N/A"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Treasurer</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder=""  name="treasurer" value="{{$officer->treasurer}}"></td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Treasurer</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder="Optional"  name="asst_treas" value="N/A"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Auditor</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder=""  name="auditor" value="{{$officer->auditor}}"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Auditor</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder="Optional"  name="asst_aud" value="N/A"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Press Relation Officer 1</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder=""  name="pro1" value="{{$officer->pro1}}"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Press Relation Officer 2</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder="Optional"  name="pro2" value="N/A"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Sgt-at-Arms 1</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder=""  name="sgt_arms1" value="{{$officer->sgt_arms1}}"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Sgt-at-Arms 2</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder="Optional"  name="sgt_arms2" value="N/A"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Sgt-at-Arms 3</td>
                                                        <td><input type="text" id="h-email" class="form-control" placeholder="Optional"  name="sgt_arms3" value="N/A"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-12 text-right">
                                                    <button type="submit" class="btn btn-primary">Next <i class="icon-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>