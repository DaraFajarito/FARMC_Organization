<!DOCTYPE html>
<html lang="en">

<head>
    <title>Level 1 - EDIT FORM | Basic Structure | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

</head>

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
                        <h4>M/C FARMC Profile | <small>EDIT FORM</small></h4>
                        <br>
                        <br>
                        <a href="{{ url ('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                        <hr>
                        <div style="background-color: #415dfe;">
                            <div class="grid-material bg-general" style="color: white;padding:10px"> &nbsp&nbsp&nbsp<b>BASIC STRUCTURE</b></div>
                        </div>
                        <hr>
                        <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                            <div class="grid-material bg-general"></div>
                        </div>
                        <form class="form-inline" method="POST" action="{{ url('/add-basic-info') }}" enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                            @endif

                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="municipality" class="col-md-2 col-form-label form-control-label">Municipality / City</label>
                                            <div class="col-md-2">
                                                <input type="text" id="municipality" name="municipality" class="form-control" style="width:900px;" placeholder="">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="province" class="col-md-2 col-form-label form-control-label">Province</label>
                                            <div class="col-md-2">
                                                <input type="text" id="province" name="province" class="form-control" style="width:900px" placeholder="">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group m-r-15">
                                            <label for="date" class="block form-control-label">Date organized</label>
                                            <input id="date" type="date" name="date_organized" class="form-control" style="width: 400px;" placeholder="">
                                        </div>

                                        <div class="form-group m-r-15">
                                            <label for="minutes1" class="block form-control-label">Attach the minutes</label>
                                            <input id="minutes1" type="file" name="minutes1" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('minutes1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label">Attach the Photos</label>
                                            <input id="photos1" type="file" name="photos1" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('photos1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label">Attach the Attendance</label>
                                            <input id="attendance1" type="file" name="attendance1" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('attendance1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label">Date of Re-Organization</label>
                                            <input id="date_reorganized" type="date" name="date_reorganized" class="form-control" style="width: 400px;" placeholder="">
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label"><br></label>
                                            <input id="minutes2" type="file" name="minutes2" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('minutes2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label"><br></label>
                                            <input id="photos2" type="file" name="photos2" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('photos2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group m-r-15">
                                            <label for="inline3mail" class="block form-control-label"><br></label>
                                            <input id="attendance2" type="file" name="attendance2" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            @error('attendance2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <br>

                                        <!-- <div class="col-md-12"> -->
                                        <br>
                                        <div class="col-md-5">
                                            <br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="internalP" id="checkbox">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">Internal Policy</div>
                                            </div>
                                            <br><br><br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="fisherfolkR" id="checkbox-1">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">Fisherfolk Registry</div>
                                            </div>
                                            <br><br><br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="fisheriesP" id="checkbox-2">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">Fisheries Profile</div>
                                            </div>
                                            <br><br><br>
                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                <label class="input-checkbox checkbox-primary">
                                                    <input type="checkbox" name="formulationR" id="checkbox-3">
                                                    <span class="checkbox"></span>
                                                </label>
                                                <div class="captions">Formulation of Resolution and propose ordinances initiated </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7" style=" line-height:4rem">
                                            <input id="internalP_file" type="file" name="internalP_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <small><b><em>Attach Approved Internal Policy</b></em></small>
                                            <br>
                                            <input id="fisherfolkR_file" type="file" name="fisherfolkR_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <small><b><em>Attach Fisherfolk Registry</em></b></small>
                                            <br>
                                            <input id="fisheriesP_file" type="file" name="fisheriesP_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <small><b><em>Attach Fisheries Profile</em></b></small>
                                            <br>
                                            <input id="formulationR_file" type="file" name="formulationR_file" class="form-control file-input" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            <small><b><em>Attach Files</em></b></small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                        <hr>
                        <div style="background-color: #415dfe;">
                            <div class="grid-material bg-general" style="color: white;padding:10px"><b>FARMC OFFICERS</b></div>
                        </div>
                        <hr>
                        <div class="card-block">
                            <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                            <div class="grid-material bg-general"></div>
                            <!-- <div class="card-block"> -->
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <form method="POST" action="{{ url('/add-officer/') }}" enctype="multipart/form-data">
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
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="chairperson"></td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Vice-Chairperson</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="vice_chairperson"></td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Secretary</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="secretary"></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Assistant Secretary</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="asst_sec"></td>

                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Treasurer</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="treasurer"></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Assistant Treasurer</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="asst_treas"></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Auditor</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="auditor"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Assistant Auditor</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="asst_aud"></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Press Relation Officer 1</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="pro1"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Press Relation Officer 2</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="pro2"></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Sgt-at-Arms 1</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="sgt_arms1"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Sgt-at-Arms 2</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="sgt_arms2"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Sgt-at-Arms 3</td>
                                                    <td><input type="text" id="h-email" class="form-control" style="width: 700px;" placeholder="" name="sgt_arms3"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <hr>
                        <div style="background-color: #415dfe;">
                            <div class="grid-material bg-general" style="color: white;padding:10px"><b>A. COMPOSITION OF MEMBERSHIP</b></div>
                        </div>
                        <hr>
                        <div class="card-block">
                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <label for="inline3mail" class="block form-control-label"><strong>1. Mandated member</strong></label>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">1.1 Chairperson SB/SP Committee of Agriculture and Fisheries</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" id="h-email" class="form-control" placeholder="" name="chairpersonSB">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th colspan="2">1.2 Municipal Planning and Development Council</th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" id="h-email" class="form-control" placeholder="" name="mpdo">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th colspan="2">1.3 Representative from Municipal Development Council</th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" id="h-email" class="form-control" placeholder="" name="repmdc">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th colspan="2">1.4 Representative from Department of Agriculture/MAO</th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" id="h-email" class="form-control" placeholder="" name="repda">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th colspan="2">1.5 Representative from Non-Governmental Organization</th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" id="h-email" class="form-control" placeholder="" name="repngo">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th colspan="2">1.6 Representative from Private Sector</th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" id="h-email" class="form-control" placeholder="" name="repps">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th colspan="2">1.7 Other: Please specify</th>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" id="h-email" class="form-control" placeholder="" name="others">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </form>



                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form method="post" action="{{ url('/add-fisherfolk-rep') }}" enctype="multipart/form-data" id="yourFormId">
                                @csrf
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label for="inline3mail" class="block form-control-label"><strong>2. Fisherfolk Representative</strong></label>
                                        </div>
                                        <div class="col-md-3 text-left">
                                            <select name="category" class="js-example-basic-single form-control">
                                                <optgroup label="Fisherfolk Representative">
                                                    <option value="Municipal Fisherfolk">Municipal Fisherfolk</option>
                                                    <option value="Fisherworker">Fisherworker</option>
                                                    <option value="Commercial Fishing Operator">Commercial Fishing Operator</option>
                                                    <option value="Women Fisherfolk Sector Representative">Women Fisherfolk Sector Representative</option>
                                                    <option value="Youth Fisherfolk Sector Representative">Youth Fisherfolk Sector Representative</option>
                                                    <option value="Indigenous Peoples(IP's) if any">Indigenous Peoples(IP's) if any</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="h-email" class="col-md-3 col-form-label form-control-label">Name of Representative</label>
                                            <div class="col-md-2">
                                                <input type="text" name="name" id="h-email" class="form-control" style="width:780px" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" id="endorsement_fisherfolk_checkbox" name="endorsement_fisherfolk" onchange="toggleFileInput(this)">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">Endorsement of Fisherfolk Organization as their respective</div>
                                        </div>
                                        <input type="hidden" name="endorsement_fisherfolk" id="endorsement_fisherfolk_input">
                                        <input type="hidden" id="endorsement_fisherfolk_input" name="endorsement_fisherfolk" value="">
                                    </div>
                                    <div class="col-md-6" style="padding-left: 200px;">
                                        <input id="endorsement_fisherfolk_inputf" type="file" name="endorsement_attachment" class="form-control" style="width:200px" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="h-email" class="captions">Barangay Certification</label>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" id="atleast_one_year_checkbox" name="atleast_one_year" onchange="toggleFileInput(this)">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">Atleast 1 year residency</div>
                                        </div>
                                        <!-- <input type="hidden" name="atleast_one_year" id="atleast_one_year_input"> -->
                                    </div>
                                    <div class="col-md-6" style="padding-left: 200px;">
                                        <input id="atleast_one_year_inputf" type="file" name="aoy_attachment" class="form-control" style="width:200px" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" id="source_of_income_checkbox" name="source_of_income" onchange="toggleFileInput(this)">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">Source of income (Capture/Culture/Processing)</div>
                                        </div>
                                        <input type="hidden" name="source_of_income" id="source_of_income_input">
                                    </div>
                                    <div class="col-md-6" style="padding-left: 200px;">
                                        <input id="source_of_income_inputf" type="file" name="soi_attachment" namez class="form-control" style="width:200px" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                            <label class="input-checkbox checkbox-primary">
                                                <input type="checkbox" id="good_moral_checkbox" name="good_moral" onchange="toggleFileInput(this)">
                                                <span class="checkbox"></span>
                                            </label>
                                            <div class="captions">Good Moral Character</div>
                                        </div>
                                        <input type="hidden" name="good_moral" id="good_moral_input">
                                    </div>
                                    <div class="col-md-6" style="padding-left: 200px;">
                                        <input id="good_moral_inputf" type="file" name="gmc_attachment" class="form-control" style="width:200px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                    </div>

                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group row">
                                            <label for="h-email" class="col-md-3 col-form-label form-control-label">Name of Organization</label>
                                            <div class="col-md-2">
                                                <input type="text" id="h-email" name="org_name" class="form-control" style="width:800px" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style=" line-height:4rem">
                                        <small><b><em>Date of Registration</b></em></small>
                                        <input id="inline3mail" type="date" name="date_of_reg" class="form-control" style="width: 300px;" placeholder="">
                                        <small><b><em>Date of Accreditation</em></b></small>
                                        <input id="inline3mail" type="date" name="date_of_accreditation" class="form-control" style="width: 300px;" placeholder="">
                                    </div>
                                    <div class="col-md-6" style=" line-height:4rem">
                                        <br>
                                        <input id="inline3mail" type="file" name="dor_file" class="form-control" style="width:300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                        <br>
                                        <input id="inline3mail" type="file" name="doa_file" class="form-control" style="width:300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <br>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Change</button>
                                    </div>
                                    <!-- <div class="col-md-2 text-right">
                                    <a href="{{url('/go-to-committee')}}" class="btn btn-primary">Next<i class="icon-arrow-right"></i></a>
                                </div> -->
                                </div>
                            </form>
                        </div>



                        <hr>
                        <div style="background-color: #415dfe;">
                            <div class="grid-material bg-general" style="color: white;padding:10px"><b>B. MFARMC COMMITTEE</b></div>
                        </div>
                        <hr>
                        <div class="card-block">
                            <form method="post" action="{{url('/add-committee')}}" enctype="multipart/form-data" id="yourFormId">
                                @csrf
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center"> <!-- Wrap the elements in a div -->
                                                <select name="category" id="category" class="js-example-basic-single form-control">
                                                    <optgroup label="Committee">
                                                        <option value="Law Enforcement & Prosecution">Law Enforcement & Prosecution </option>
                                                        <option value="Rehabilitation and Conservation">Rehabilitation and Conservation</option>
                                                        <option value="Livelihood">Livelihood</option>
                                                        <option value="Research Education and Training">Research Education and Training</option>
                                                        <option value="Legislation">Legislation</option>
                                                        <option value="Land and Water Use">Land and Water Use</option>
                                                        <option value="Fisherfol Resettlement">Fisherfol Resettlement</option>
                                                        <option value="Other, if any">Other, if any</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <br>
                                            <input type="text" id="otherText" style="display: none;" placeholder="Please specify" class="form-control">
                                        </div>

                                        <div class="col-md-9"></div>
                                    </div>
                                    <br><br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Position</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Office / Organization</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Chairperson</td>
                                                <td><input type="text" name="chairperson_name" id="h-email" class="form-control" placeholder=""></td>
                                                <td><input type="text" name="chairperson_org" id="h-email" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>Secretary</td>
                                                <td><input type="text" name="sec_name" id="h-email" class="form-control" placeholder=""></td>
                                                <td><input type="text" name="sec_org" id="h-email" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td>Member</td>
                                                <td><input type="text" name="member_name" id="h-email" class="form-control" placeholder=""></td>
                                                <td><input type="text" name="member_org" id="h-email" class="form-control" placeholder=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary" type="submit">Change</button>
                                    </div>
                                    <!-- <div class="col-md-2 text-right">
                                    <a href="{{ url ('/secretariat-form') }}" class="btn btn-primary">Next<i class="icon-arrow-right"></i></a>
                                </div> -->
                                </div>
                            </form>
                        </div>

                        <hr>
                        <div style="background-color: #415dfe;">
                            <div class="grid-material bg-general" style="color: white;padding:10px"><b>C. SECRETARIAT</b></div>
                        </div>
                        <hr>
                        <div class="card-block">
                            <form method="POST" action="{{url('/add-secretariat')}}" enctype="multipart/form-data" id="yourFormId">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th class="text-center">Name</th>
                                                <th class="text-center">Office / Organization</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="name_sec" id="h-email" class="form-control" placeholder=""></td>
                                                <td><input type="text" name="office_org" id="h-email" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="name_sec1" id="h-email" class="form-control" placeholder=""></td>
                                                <td><input type="text" name="office_org1" id="h-email" class="form-control" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="name_sec2" id="h-email" class="form-control" placeholder=""></td>
                                                <td><input type="text" name="office_org2" id="h-email" class="form-control" placeholder=""></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">SAVE</button>
                                    </div>
                                </div>

                                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to submit now?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-primary">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>




                </div>
            </div>
        </div>
        <!-- </div> -->
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>




    <script type="text/javascript">
        SyntaxHighlighter.all();
    </script>

    <script>
        document.querySelectorAll('input[name="optionsRadios"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'IPoption') {
                    document.getElementById('textBoxContainer').style.display = 'block';
                } else {
                    document.getElementById('textBoxContainer').style.display = 'none';
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#internalP_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox').prop('checked', true);
                } else {
                    $('#checkbox').prop('checked', false);
                }
            });
            $('#fisherfolkR_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-1').prop('checked', true);
                } else {
                    $('#checkbox-1').prop('checked', false);
                }
            });
            $('#fisheriesP_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-2').prop('checked', true);
                } else {
                    $('#checkbox-2').prop('checked', false);
                }
            });
            $('#formulationR_file').change(function() {
                if ($(this).val()) {
                    $('#checkbox-3').prop('checked', true);
                } else {
                    $('#checkbox-3').prop('checked', false);
                }
            });

            // Add similar change event listeners for other file inputs
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function setupCheckbox(checkboxId, hiddenInputId) {
                const checkbox = document.getElementById(checkboxId);
                const hiddenInput = document.getElementById(hiddenInputId);

                checkbox.addEventListener('change', function() {
                    hiddenInput.value = this.checked ? '1' : null;
                });
            }

            setupCheckbox('checkbox', 'internalP_file');
            setupCheckbox('checkbox-1', 'fisherfolkR_file');
            setupCheckbox('checkbox-2', 'fisheriesP_file');
            setupCheckbox('checkbox-3', 'formulationR_file');
        });
    </script>


    <script>
        function submitFormAndAddAnother1() {
            // Submit the form
            document.getElementById("FormId").submit();
            // Clear the form fields
            document.getElementById("FormId").reset();
        }
    </script>

    <script>
        document.querySelectorAll('input[name="optionsRadios"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'IPoption') {
                    document.getElementById('textBoxContainer').style.display = 'block';
                } else {
                    document.getElementById('textBoxContainer').style.display = 'none';
                }
            });
        });
    </script>


</body>

</html>