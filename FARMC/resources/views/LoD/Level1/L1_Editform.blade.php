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
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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
                        <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}"
                                style=" width: 60px;" alt="logo"></a>
                        <h4>M/C FARMC Profile | <small>EDIT FORM</small></h4>
                        <br>
                        <br>
                        <a href="{{ url('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i>
                            Back</a>
                    </div>
                </div>
                @foreach ($data as $item)
                    <div class="card">
                        <div class="card-header">
                            <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                            <hr>
                            <div style="background-color: #415dfe;">
                                <div class="grid-material bg-general" style="color: white;padding:10px">
                                    &nbsp&nbsp&nbsp<b>BASIC STRUCTURE</b></div>
                            </div>
                            <hr>
                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                <div class="grid-material bg-general"></div>
                            </div>
                            <form class="form-inline" method="POST"
                                action="{{ url('/edit-profileForm/' . $item->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="municipality"
                                                    class="col-md-2 col-form-label form-control-label">Municipality /
                                                    City</label>
                                                <div class="col-md-2">
                                                    <input type="text" id="municipality" name="municipality"
                                                        class="form-control" style="width:900px;"
                                                        value="{{ old('municipality', $item->municipality) }}"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="province"
                                                    class="col-md-2 col-form-label form-control-label">Province</label>
                                                <div class="col-md-2">
                                                    <input type="text" id="province" name="province"
                                                        value="{{ old('province', $item->province) }}"
                                                        class="form-control" style="width:900px" placeholder="">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <div class="form-group m-r-15">
                                                        <label class="block form-control-label">Date
                                                            organized</label>
                                                        <input type="date"
                                                            value="{{ \Carbon\Carbon::parse($item->date_organized)->format('Y-m-d') }}"
                                                            id="dateInput" name="date" class="form-control" style="width: 300px;"
                                                            placeholder="dd/mm/yyyy">


                                                        {{-- <input id="date" type="date" name="date_organized"
                                                           {{ old('date_organized', $item->date_organized) }}
                                                            class="form-control" style="width: 300px;" placeholder=""> --}}
                                                    </div>
                                                    <div class="form-group m-r-15">
                                                        <label for="minutes1" class="block form-control-label">Attach
                                                            the minutes</label>
                                                        <input id="minutes1" type="file" name="minutes1"
                                                            class="form-control" style="width: 195px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['minutes1'])
                                                            <a href="{{ asset($item['minutes1']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                        @endif
                                                    </div>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Attach
                                                            the Photos</label>
                                                        <input id="photos1" type="file" name="photos1"
                                                            class="form-control" style="width: 195px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['photos1'])
                                                            <a href="{{ asset($item['photos1']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                        @endif
                                                    </div>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label">Attach the
                                                            Attendance</label>
                                                        <input id="attendance1" type="file" name="attendance1"
                                                            class="form-control" style="width: 195px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['attendance1'])
                                                            <a href="{{ asset($item['attendance1']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12" style="margin-top: 20px">
                                                <div class="col-md-12">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Date
                                                            of Re-Organization</label>
                                                        <input type="date"
                                                            value="{{ \Carbon\Carbon::parse($item->date_reorganized)->format('Y-m-d') }}"
                                                            id="dateInput" name="date" class="form-control" style="width: 300px;"
                                                            placeholder="dd/mm/yyyy">

                                                        {{-- <input id="date_reorganized" value="{{ old('date_organized', $item->date_organized) }}"  type="date" name="date_reorganized" class="form-control" style="width: 300px;" placeholder=""> --}}
                                                    </div>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><br></label>
                                                        <input id="minutes2" type="file" name="minutes2"
                                                            class="form-control" style="width: 195px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['minutes2'])
                                                            <a href="{{ asset($item['minutes2']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                        @endif
                                                    </div>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><br></label>
                                                        <input id="photos2" type="file" name="photos2"
                                                            class="form-control" style="width: 195px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['photos2'])
                                                            <a href="{{ asset($item['photos2']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                        @endif
                                                    </div>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><br></label>
                                                        <input id="attendance2" type="file" name="attendance2"
                                                            class="form-control" style="width: 195px;"
                                                            accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                        <br>
                                                        @if ($item['attendance2'])
                                                            <a href="{{ asset($item['attendance2']) }}"
                                                                target="_blank"><small>View old
                                                                    file</small></a>
                                                            {{-- <small>Previous file: {{ $item['copy1_file'] }}</small> --}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <br>

                                            <!-- <div class="col-md-12"> -->
                                            <br>
                                            <div class="col-md-6" style="margin-top: 30px">
                                                <br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" name="internalP" id="checkbox"
                                                            {{ $item->internalP == 1 ? 'checked' : '' }}>
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Internal Policy</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" name="fisherfolkR" id="checkbox-1"
                                                            {{ $item->fisherfolkR == 1 ? 'checked' : '' }}>
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Fisherfolk Registry</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" name="fisheriesP" id="checkbox-2"
                                                            {{ $item->fisheriesP == 1 ? 'checked' : '' }}>
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Fisheries Profile</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" name="formulationR" id="checkbox-3"
                                                            {{ $item->formulationR == 1 ? 'checked' : '' }}>
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Formulation of Resolution and propose
                                                        ordinances initiated </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="line-height:4rem; margin-top: 40px">
                                                <input id="internalP_file" type="file" name="internalP_file"
                                                    class="form-control file-input" style="width: 300px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                {{-- <small><b><em>Attach Approved Internal Policy</b></em></small> --}}
                                                @if ($item['internalP_file'])
                                                    <a href="{{ asset('assets' . $item->internalP_file) }}"
                                                        target="_blank"><small>View old file</small></a>
                                                    {{-- <small>Previous file: {{ $item['internalP_file'] }}</small> --}}
                                                @endif
                                                <br>

                                                <input id="fisherfolkR_file" type="file" name="fisherfolkR_file"
                                                    class="form-control file-input" style="width: 300px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                {{-- <small><b><em>Attach Approved Fisherfolk Registry</b></em></small> --}}
                                                @if ($item['fisherfolkR_file'])
                                                    <a href="{{ asset('assets' . $item->fisherfolkR_file) }}"
                                                        target="_blank"><small>View old file</small></a>
                                                    {{-- <small>Previous file: {{ $item['fisherfolkR_file'] }}</small> --}}
                                                @endif
                                                <br>
                                                <input id="fisheriesP_file" type="file" name="fisheriesP_file"
                                                    class="form-control file-input" style="width: 300px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                {{-- <small><b><em>Attach Approved Fisherfolk Profile</b></em></small> --}}
                                                @if ($item['fisheriesP_file'])
                                                    <a href="{{ asset('assets' . $item->fisheriesP_file) }}"
                                                        target="_blank"><small>View old file</small></a>
                                                    {{-- <small>Previous file: {{ $item['fisheriesP_file'] }}</small> --}}
                                                @endif
                                                <br>
                                                <input id="formulationR_file" type="file" name="formulationR_file"
                                                    class="form-control file-input" style="width: 300px;"
                                                    accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                {{-- <small><b><em>Attach Approved Formulation Resolution</b></em></small> --}}
                                                @if ($item['formulationR_file'])
                                                    <a href="{{ asset('assets' . $item->formulationR_file) }}"
                                                        target="_blank"><small>View old file</small></a>
                                                    {{-- <small>Previous file: {{ $item['formulationR_file'] }}</small> --}}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div style="background-color: #415dfe;">
                                        <div class="grid-material bg-general" style="color: white;padding:10px">
                                            <b>FARMC
                                                OFFICERS</b>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 table-responsive">
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
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder=""
                                                                name="chairperson"
                                                                value="{{ old('chairperson', $item->chairperson) }}">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Vice-Chairperson</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder=""
                                                                name="vice_chairperson"
                                                                value="{{ old('vice_chairperson', $item->vice_chairperson) }}">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Secretary</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder="" name="secretary"
                                                                value="{{ old('secretary', $item->secretary) }}">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Secretary</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder="" name="asst_sec"
                                                                value="{{ old('asst_sec', $item->asst_sec) }}">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Treasurer</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder="" name="treasurer"
                                                                value="{{ old('treasurer', $item->treasurer) }}">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Treasurer</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder=""
                                                                name="asst_treas"
                                                                value="{{ old('asst_treas', $item->asst_treas) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Auditor</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder="" name="auditor"
                                                                value="{{ old('auditor', $item->auditor) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Assistant Auditor</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder="" name="asst_aud"
                                                                value="{{ old('asst_aud', $item->asst_aud) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Press Relation Officer 1</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder="" name="pro1"
                                                                value="{{ old('pro1', $item->pro1) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Press Relation Officer 2</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder="" name="pro2"
                                                                value="{{ old('pro2', $item->pro2) }}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Sgt-at-Arms 1</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder=""
                                                                value="{{ old('sgt_arms1', $item->sgt_arms1) }}"
                                                                name="sgt_arms1"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Sgt-at-Arms 2</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder=""
                                                                value="{{ old('sgt_arms2', $item->sgt_arms2) }}"
                                                                name="sgt_arms2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>Sgt-at-Arms 3</td>
                                                        <td><input type="text" id="h-email" class="form-control"
                                                                style="width: 700px;" placeholder=""
                                                                value="{{ old('sgt_arms3', $item->sgt_arms3) }}"
                                                                name="sgt_arms3"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <div style="background-color: #415dfe;">
                                        <div class="grid-material bg-general" style="color: white;padding:10px">
                                            <b>A. COMPOSITION
                                                OF MEMBERSHIP</b>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-header">
                                        <label for="inline3mail" class="block form-control-label"><strong>1.
                                                Mandated
                                                member</strong>
                                        </label>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">1.1 Chairperson SB/SP Committee of
                                                        Agriculture
                                                        and Fisheries</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="h-email" class="form-control"
                                                            placeholder="" name="chairpersonSB" style="width:1000px;"
                                                            value="{{ old('chairpersonSB', $item->chairpersonSB) }}">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th colspan="2">1.2 Municipal Planning and Development
                                                        Council
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="text" id="h-email" class="form-control"
                                                            placeholder="" name="mpdo" style="width:1000px;"
                                                            value="{{ old('mpdo', $item->mpdo) }}">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th colspan="2">1.3 Representative from Municipal
                                                        Development
                                                        Council</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="text" id="h-email" class="form-control"
                                                            placeholder="" name="repmdc" style="width:1000px;"
                                                            value="{{ old('repmdc', $item->repmdc) }}">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th colspan="2">1.4 Representative from Department of
                                                        Agriculture/MAO</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="text" id="h-email" class="form-control"
                                                            placeholder="" name="repda" style="width:1000px;"
                                                            value="{{ old('repda', $item->repda) }}">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th colspan="2">1.5 Representative from Non-Governmental
                                                        Organization</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="text" id="h-email" class="form-control"
                                                            placeholder="" name="repngo" style="width:1000px;"
                                                            value="{{ old('repngo', $item->repngo) }}">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th colspan="2">1.6 Representative from Private Sector</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="text" id="h-email" class="form-control"
                                                            placeholder="" name="repps" style="width:1000px;"
                                                            value="{{ old('repps', $item->repps) }}">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th colspan="2">1.7 Other: Please specify</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="text" id="h-email" class="form-control"
                                                            placeholder="" name="others" style="width:1000px;"
                                                            value="{{ old('others', $item->others) }}">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <label for="inline3mail" class="block form-control-label"><strong>2.
                                                Fisherfolk Reresentative
                                            </strong>
                                        </label>
                                        <div><small> <span style="color: red"> This section <small><b>
                                                            "FISHERFOLK REPRESENTATIVE"</b></small> cannot be edited.
                                                    Please ensure
                                                    that all fields in each category are filled out when adding
                                                    Fisherfolk Representative.
                                                </span></small>
                                        </div>
                                    </div>

                                    <div style="background-color: #415dfe;">
                                        <div class="grid-material bg-general" style="color: white;padding:10px">
                                            <b>B. COMPOSITION OF MEMBERSHIP</b>
                                        </div>
                                    </div>
                                    <br>
                                    <div><small> <span style="color: red"> This section <small><b>
                                                        "B. COMPOSITION OF MEMBERSHIP"</b></small> cannot be edited.
                                                Please ensure
                                                that all fields in each category are filled out when adding
                                                composition of membership.
                                            </span></small>
                                    </div>
                                    <hr>
                                    <div style="background-color: #415dfe;">
                                        <div class="grid-material bg-general" style="color: white;padding:10px">
                                            <b>SECRETARIAT</b>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-block">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Office / Organization</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" name="name_sec" id="h-email"
                                                            class="form-control" placeholder="" style="width:500px;"
                                                            value="{{ old('name_sec', $item->name_sec) }}"></td>
                                                    <td><input type="text" name="office_org" id="h-email"
                                                            class="form-control" placeholder="" style="width:500px;"
                                                            value="{{ old('office_org', $item->office_org) }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="name_sec1" id="h-email"
                                                            class="form-control" placeholder="" style="width:500px;"
                                                            value="{{ old('name_sec1', $item->name_sec1) }}"></td>
                                                    <td><input type="text" name="office_org1" id="h-email"
                                                            class="form-control" placeholder="" style="width:500px;"
                                                            value="{{ old('office_org1', $item->office_org1) }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="name_sec2" id="h-email"
                                                            class="form-control" placeholder="" style="width:500px;"
                                                            value="{{ old('name_sec2', $item->name_sec2) }}"></td>
                                                    <td><input type="text" name="office_org2" id="h-email"
                                                            class="form-control" placeholder="" style="width:500px;"
                                                            value="{{ old('office_org2', $item->office_org2) }}"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">SAVE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
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
        flatpickr('#dateInput', {
            dateFormat: "d/m/Y",
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
