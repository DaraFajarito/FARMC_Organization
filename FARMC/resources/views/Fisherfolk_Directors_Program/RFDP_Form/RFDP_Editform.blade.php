<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Information | FARMC- BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
                        <a href="index.html" class="logo" style="display: inline-block; vertical-align: middle;">
                            <img src="{{ asset('assets/images/newlogo.png') }}" style="width: 40px;" alt="logo">
                        </a>
                        <span style="display: inline-block; vertical-align: middle; margin-top:10px">
                            <div>
                                <h4 style="margin: 0;">Fisherfolk Directors Program</h4>
                            </div>
                        </span>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Fisherfolk Directors Program | Personal
                                    Information</a>
                            </li>
                        </ol>
                    </div>
                    @foreach ($edit_rfdp as $item)
                        <div class="col-lg-12 inline-forms">
                            <form class="form-inline" action="{{ url('/edit-rfdp/' . $item->id) }}" method="POST">
                                @csrf
                                @method ('PUT')
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-header">
                                            <div class="grid-material bg-general">Personal Information</div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group m-r-15">
                                                        <br>
                                                        <label for="inline3mail" class="block form-control-label">Name
                                                            <em>(Family,given,middle & Ext.)</em></label>
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="fam_name" type="text"
                                                                    class="form-control" style="width: 300px;"
                                                                    placeholder=""
                                                                    value="{{ old('fam_name', $item->fam_name) }}">
                                                                <label for=""><small> Family Name
                                                                    </small></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <input id="" name="given_name" type="text"
                                                                    class="form-control" style="width: 250px;"
                                                                    placeholder=""
                                                                    value="{{ old('given_name', $item->given_name) }}">
                                                                <label for=""><small> Given Name
                                                                    </small></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <input id="" name="mid_name" type="text"
                                                                    class="form-control" style="width: 230px;"
                                                                    placeholder=""
                                                                    value="{{ old('mid_name', $item->mid_name) }}">
                                                                <label for=""><small> Middle Name
                                                                    </small></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="text-center">
                                                                <input id="" name="ext" type="text"
                                                                    class="form-control" style="width: 150px;"
                                                                    placeholder=""
                                                                    value="{{ old('ext', $item->fam_name) }}">
                                                                <label for=""><small> Ext. </small></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="form-group m-r-15">
                                                        <label for=""
                                                            class="block form-control-label">Address</em></label>
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="add_barangay" type="text"
                                                                    class="form-control" style="width: 300px;"
                                                                    placeholder=""
                                                                    value="{{ old('add_barangay', $item->add_barangay) }}">
                                                                <label for=""><small> Barangay </small></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="add_city" type="text"
                                                                    class="form-control" style="width: 300px;"
                                                                    placeholder=""
                                                                    value="{{ old('add_city', $item->add_city) }}">
                                                                <label for=""><small> City / Municipality
                                                                    </small></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="add_province"
                                                                    type="text" class="form-control"
                                                                    style="width: 300px;" placeholder=""
                                                                    value="{{ old('add_province', $item->add_province) }}">
                                                                <label for=""><small> Province </small></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- <div class="card-block"> -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Civil Status</em></div>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="civil_status"
                                                                    value="Single"
                                                                    {{ old('civil_status', $item->civil_status) == 'Single' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Single
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="civil_status"
                                                                    value="Married"
                                                                    {{ old('civil_status', $item->civil_status) == 'Married' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Married
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="civil_status"
                                                                    value="Widow/Widower"
                                                                    {{ old('civil_status', $item->civil_status) == 'Widow/Widower' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Widow/Widower
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="civil_status"
                                                                    value="Separated"
                                                                    {{ old('civil_status', $item->civil_status) == 'Separated' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Separated
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Gender</em></div>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">

                                                            <label>
                                                                <input type="radio" name="gender" value="Male"
                                                                    {{ old('gender', $item->gender) == 'Male' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Male
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="gender" value="Female"
                                                                    {{ old('gender', $item->gender) == 'Female' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Female
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="gender" value="Others"
                                                                    {{ old('gender', $item->gender) == 'Others' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Others
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general">Birthdate</div>
                                                        <div class="form-group">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Date</label>
                                                            <input id="inline3mail" type="text" name="birthdate"
                                                                class="form-control" placeholder="Date"
                                                                value="{{ old('birthdate', $item->birthdate) }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Age</label>
                                                            <input id="inline3mail" type="number" name="age"
                                                                class="form-control" placeholder="Age"
                                                                value="{{ old('age', $item->age) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </div> -->

                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>4P's Member</em>
                                                    </div>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">

                                                            <label>
                                                                <input type="radio" name="fourps" value="Yes"
                                                                    {{ old('fourps', $item->fourps) == 'Yes' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="fourps" value="No"
                                                                    {{ old('fourps', $item->fourps) == 'No' ? 'checked' : '' }} /><i
                                                                    class="helper"></i>No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general"><em>Cultural Affiliation
                                                            </em></div>

                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="cul_af"
                                                                        value="Yes"
                                                                        {{ old('cul_af', $item->cul_af) == 'Yes' ? 'checked' : '' }}
                                                                        onclick="toggleTextBox('otherTextBox8');" />
                                                                    <i class="helper"></i> Yes
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="cul_af"
                                                                        value="No"
                                                                        {{ old('cul_af', $item->cul_af) == 'No' ? 'checked' : '' }} />
                                                                    <i class="helper"></i> No
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" id="otherTextBox8"
                                                            style="display:none;">
                                                            <label for="inline3mail"
                                                                class="block form-control-label"><small>If
                                                                    If Yes, please specify</small></label>
                                                            <input id="otherInput" type="text" value=""
                                                                class="form-control" name="cul_af_yes"
                                                                value="{{ old('cul_af_yes', $item->cul_af_yes) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general">Birthplace</div>
                                                        <div class="form-group">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">City/Municipality</label>
                                                            <input id="inline3mail" type="text"
                                                                name="birthplace_municipality" class="form-control"
                                                                placeholder=""
                                                                value="{{ old('birthplace_municipality', $item->birthplace_municipality) }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Province</label>
                                                            <input id="inline3mail" type="text"
                                                                name="birthplace_province"
                                                                value="{{ old('birthplace_province', $item->birthplace_province) }}"
                                                                class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Name
                                                            Spouse<em>(Family, Given, Middle)</em></label>
                                                        <input id="inline3mail" type="text" name="name_spouse"
                                                            class="form-control" style="width: 650px;"
                                                            placeholder="Enter name"
                                                            value="{{ old('name_spouse', $item->name_spouse) }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">Occupation</label>
                                                                <input id="inline3mail" style="width: 310px;"
                                                                    type="text" name="occupation"
                                                                    class="form-control"
                                                                    value="{{ old('occupation', $item->occupation) }}">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-r-15">
                                                        <!-- <hr> -->
                                                        <label for="inline3mail" class="block form-control-label">No.
                                                            of Dependent/s</em></label>
                                                        <br>
                                                        <div class="col-md-4">
                                                            <div>
                                                                <input type="checkbox" name="" id="checkbox">
                                                                <span class="checkbox"></span>
                                                                <div class="captions">Male</div>
                                                            </div>
                                                            <br><br>
                                                            <div>
                                                                <input type="checkbox" name=""
                                                                    id="checkbox-1">
                                                                <span class="checkbox"></span>
                                                                <div class="captions">Female</div>
                                                            </div>
                                                            <br><br>
                                                            <div>
                                                                <input type="checkbox" name=""
                                                                    id="checkbox-2">
                                                                <span class="checkbox"></span>
                                                                <div class="captions">Others</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-inline">
                                                                <div>
                                                                    <label>
                                                                        <input type="number" class="form-control"
                                                                            name="dependent_male" placeholder=""
                                                                            style="width:150px"
                                                                            value="{{ old('dependent_male', $item->dependent_male) }}">
                                                                    </label>
                                                                    <br>
                                                                    <br>
                                                                    <label>
                                                                        <input type="number" class="form-control"
                                                                            name="dependent_female" placeholder=""
                                                                            style="width:150px"
                                                                            value="{{ old('dependent_female', $item->dependent_female) }}">

                                                                    </label>
                                                                    <br>
                                                                    <br>
                                                                    <label>
                                                                        <input type="number" class="form-control"
                                                                            name="dependent_others" placeholder=""
                                                                            style="width:150px"
                                                                            value="{{ old('dependent_others', $item->dependent_others) }}">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label">Educational
                                                            Attainment/Level</em></label>
                                                        <div class="col-md-6">
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Primary"
                                                                            {{ old('educational_attainment', $item->educational_attainment) == 'Primary' ? 'checked' : '' }} /><i
                                                                            class="helper"></i>Primary
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Secondary"
                                                                            {{ old('educational_attainment', $item->educational_attainment) == 'Secondary' ? 'checked' : '' }} /><i
                                                                            class="helper"></i>Secondary
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Vocational"
                                                                            {{ old('educational_attainment', $item->educational_attainment) == 'Vocational' ? 'checked' : '' }} /><i
                                                                            class="helper"></i>Vocational
                                                                    </label>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" style="margin-top:21px">
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Tertiary"
                                                                            {{ old('educational_attainment', $item->educational_attainment) == 'Tertiary' ? 'checked' : '' }}
                                                                            onclick="toggleTextBox('otherTextBox9');" />
                                                                        <i class="helper"></i> Tertiary
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" id="otherTextBox9"
                                                                style="display:none;">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label"><small>Specify,if
                                                                        graduated</small></label>
                                                                <input id="otherInput" type="text"
                                                                    class="form-control" name="tertiary"
                                                                    value="{{ old('tertiary', $item->tertiary) }}">
                                                            </div>

                                                            <div class="form-radio" style="margin-top: 23px">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Tesda"
                                                                            {{ old('educational_attainment', $item->educational_attainment) == 'Tesda' ? 'checked' : '' }}
                                                                            onclick="toggleTextBox('otherTextBox10');" />
                                                                        <i class="helper"></i> TESDA
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="otherTextBox10"
                                                                style="display:none;">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label"><small>Specify,TESDA</small></label>
                                                                <input id="otherInput" type="text"
                                                                    class="form-control" name="tesda"
                                                                    value="{{ old('tesda', $item->tesda) }}">
                                                            </div>

                                                            <div class="form-radio" style="margin-top: 23px">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Others"
                                                                            {{ old('educational_attainment', $item->educational_attainment) == 'Others' ? 'checked' : '' }}
                                                                            onclick="toggleTextBox('otherTextBox11');" />
                                                                        <i class="helper"></i> Others
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group" id="otherTextBox11"
                                                                style="display:none;">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label"><small>Specify</small></label>
                                                                <input id="otherInput" type="text"
                                                                    class="form-control" name="others"
                                                                    value="{{ old('others', $item->others) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="col-sm--1 col-xs--1 waves-effect waves-light">
                                                <div class="grid-material bg-general">Organizational Membership
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Name
                                                            of Association</label>
                                                        <input id="inline3mail" type="text" class="form-control"
                                                            name="name_ass"
                                                            value="{{ old('name_ass', $item->name_ass) }}"
                                                            style="width: 1100px;" placeholder="">
                                                    </div>
                                                    <br><br>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label">Address
                                                            of
                                                            Association </label>
                                                        <input id="inline3mail" type="text" class="form-control"
                                                            name="add_ass"
                                                            value="{{ old('add_ass', $item->add_ass) }}"
                                                            style="width: 1100px;" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- <div class="card-block"> -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Officer of
                                                            Association</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="officer_ass"
                                                                    onclick="toggleTextBox('otherTextBox5')"
                                                                    value="Yes"
                                                                    {{ old('officer_ass', $item->officer_ass) == 'Yes' ? 'checked' : '' }} />
                                                                <i class="helper"></i> Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="officer_ass"
                                                                    value="No"
                                                                    {{ old('officer_ass', $item->officer_ass) == 'No' ? 'checked' : '' }} />
                                                                <i class="helper"></i> No
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="officer_ass"
                                                                    value="Member only"
                                                                    {{ old('officer_ass', $item->officer_ass) == 'Member only' ? 'checked' : '' }}/ />
                                                                <i class="helper"></i> Member only
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox5" style="display:none;">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><small>If
                                                                Yes, please specify</small></label>
                                                        <input id="otherInput" type="text" value=""
                                                            class="form-control" name="officer_ass_yes"
                                                            value="{{ old('officer_ass_yes', $item->officer_ass_yes) }}">
                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Registration of
                                                            Agency</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <div class="col-md-6">

                                                                <label>
                                                                    <input type="radio" name="reg_agency"
                                                                        value="SEC"
                                                                        {{ old('reg_agency', $item->reg_agency) == 'SEC' ? 'checked' : '' }} />
                                                                    <i class="helper"></i> SEC
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="reg_agency"
                                                                        value="DOLE"
                                                                        {{ old('reg_agency', $item->reg_agency) == 'DOLE' ? 'checked' : '' }} />
                                                                    <i class="helper"></i> DOLE
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>
                                                                    <input type="radio" name="reg_agency"
                                                                        value="CDA"
                                                                        {{ old('reg_agency', $item->reg_agency) == 'CDA' ? 'checked' : '' }} />
                                                                    <i class="helper"></i> CDA
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="reg_agency"
                                                                        value="Others"
                                                                        {{ old('reg_agency', $item->reg_agency) == 'Others' ? 'checked' : '' }}
                                                                        onclick="toggleTextBox('otherTextBox4')" />
                                                                    <i class="helper"></i> Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox4" style="display:none;">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><small>If
                                                                Yes, please specify</small></label>
                                                        <input id="otherInput" type="text"
                                                            name="reg_agency_others"
                                                            value="{{ old('reg_agency_others', $item->reg_agency_others) }}"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Registration of
                                                            Information</em></div>
                                                    <br>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <label for="reg_info_no">Number:</label>
                                                            &nbsp; <input id="reg_info_no" type="text"
                                                                class="form-control" name="reg_info_no"
                                                                placeholder="Reg. No."
                                                                value="{{ old('reg_info_no', $item->reg_info_no) }}">
                                                            <br><br>
                                                            <label for="reg_info_date">Date:</label>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                                                                id="reg_info_date" type="text"
                                                                class="form-control" name="reg_info_date"
                                                                placeholder="Date"
                                                                value="{{ old('reg_info_date', $item->reg_info_date) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="grid-material bg-general"><em>Composition of
                                                            Membership</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <div class="col-md-4">
                                                                <label>
                                                                    <input type="radio" name="comp_mem"
                                                                        value="Municipal"
                                                                        {{ old('comp_mem', $item->comp_mem) == 'Municipal' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Municipal
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="comp_mem"
                                                                        value="Fishworker"
                                                                        {{ old('comp_mem', $item->comp_mem) == 'Fishworker' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Fishworker
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>
                                                                    <input type="radio" name="comp_mem"
                                                                        value="Commercial"
                                                                        {{ old('comp_mem', $item->comp_mem) == 'Commercial' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Commercial
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="comp_mem"
                                                                        value="Women/Youth"
                                                                        {{ old('comp_mem', $item->comp_mem) == 'Women/Youth' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Women/Youth
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>
                                                                    <input type="radio" name="comp_mem"
                                                                        value="Others"
                                                                        {{ old('comp_mem', $item->comp_mem) == 'Others' ? 'checked' : '' }}
                                                                        onclick="toggleTextBox('otherTextBox6')" />
                                                                    <i class="helper"></i> Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox6" style="display:none;">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><small>If
                                                                Yes, please specify</small></label>
                                                        <input id="otherInput" type="text" name="comp_mem_others"
                                                            value="{{ old('comp_mem_others', $item->comp_mem_others) }}"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="grid-material bg-general"><em>Type of
                                                            Organization</em>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-12">
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">

                                                                <label>
                                                                    <input type="radio" name="type_of_org"
                                                                        value="Association"
                                                                        {{ old('type_of_org', $item->type_of_org) == 'Association' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Association
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="type_of_org"
                                                                        value="Cooperative"
                                                                        {{ old('type_of_org', $item->type_of_org) == 'Cooperative' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Cooperative
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="col-sm--1 col-xs--1 waves-effect waves-light">
                                                <div class="grid-material bg-general">FARMC Membership</div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Name
                                                            of FARMC</label>
                                                        <input id="inline3mail" type="text" class="form-control"
                                                            name="name_FARMC" style="width: 1050px;"
                                                            value="{{ old('name_FARMC', $item->name_FARMC) }}"
                                                            placeholder="Enter Name (First Name, Middle Initial, Last Name)">
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label">Address
                                                            of
                                                            FARMC</label>
                                                        <input id="inline3mail" type="text" class="form-control"
                                                            name="add_FARMC" style="width: 1050px;"
                                                            value="{{ old('add_FARMC', $item->add_FARMC) }}"
                                                            placeholder="Enter Address ( Brgy., St., City, Province)">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em>Officer of
                                                            MFARMC</em>
                                                    </div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="officer_MFARMC"
                                                                    onclick="toggleTextBox('otherTextBox')"
                                                                    value="Yes"
                                                                    {{ old('officer_MFARMC', $item->officer_MFARMC) == 'Yes' ? 'checked' : '' }} />
                                                                <i class="helper"></i> Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="officer_MFARMC"
                                                                    value="No"
                                                                    {{ old('officer_MFARMC', $item->officer_MFARMC) == 'No' ? 'checked' : '' }} />
                                                                <i class="helper"></i> No
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox" style="display:none;">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><small>
                                                                If Yes, please specify</small></label>
                                                        <input id="otherInput" type="text" class="form-control"
                                                            name="officer_MFARMC_yes"
                                                            value="{{ old('officer_MFARMC_yes', $item->officer_MFARMC_yes) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="grid-material bg-general"><em>Registration of
                                                            Information</em></div>
                                                    <br>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <label for="reg_info_no">As Member:</label>
                                                            &nbsp; <input id="reg_info_no" type="text"
                                                                class="form-control" name="as_member" placeholder=""
                                                                value="{{ old('reg_info_no', $item->reg_info_no) }}">
                                                            &nbsp;&nbsp;
                                                            <label for="reg_info_date">As Officer:</label>
                                                            &nbsp;&nbsp;<input id="reg_info_date" type="text"
                                                                value="{{ old('reg_info_date', $item->reg_info_date) }}"
                                                                class="form-control" name="as_officer"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12" style="margin-top: 30px">
                                                    <div class="grid-material bg-general"><em>Sector
                                                            Represented</em>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <br>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="sector_rep"
                                                                        value="Fisherfolk/Fishworker"
                                                                        {{ old('sector_rep', $item->sector_rep) == 'Fisherfolk/Fishworker' ? 'checked' : '' }} />
                                                                    <i class="helper"></i> Fisherfolk/Fishworker
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="sector_rep"
                                                                        value="Commercial Operator"
                                                                        {{ old('sector_rep', $item->sector_rep) == 'Commercial Operator' ? 'checked' : '' }} />
                                                                    <i class="helper"></i>
                                                                    Commercial Operator
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="sector_rep"
                                                                        value="Women Sector"
                                                                        {{ old('sector_rep', $item->sector_rep) == 'Women Sector' ? 'checked' : '' }} />
                                                                    <i class="helper"></i>
                                                                    Women Sector
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="sector_rep"
                                                                        value="Youth Sector"
                                                                        {{ old('sector_rep', $item->sector_rep) == 'Youth Sector' ? 'checked' : '' }} />
                                                                    <i class="helper"></i>
                                                                    Youth Sector
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="sector_rep"
                                                                        value="Private Sector"
                                                                        {{ old('sector_rep', $item->sector_rep) == 'Private Sector' ? 'checked' : '' }} />
                                                                    <i class="helper"></i>
                                                                    Private Sector
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="sector_rep"
                                                                        value="NGO Representative"
                                                                        {{ old('sector_rep', $item->sector_rep) == 'NGO Representative' ? 'checked' : '' }} />
                                                                    <i class="helper"></i>
                                                                    NGO Representative
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="sector_rep"
                                                                        value="Cultural Community (IPs)"
                                                                        {{ old('sector_rep', $item->sector_rep) == 'Cultural Community (IPs)' ? 'checked' : '' }} />
                                                                    <i class="helper"></i>Cultural Community
                                                                    (IP's)
                                                                </label>
                                                                <label>
                                                                    <input type="radio" value="Other"
                                                                        {{ old('sector_rep', $item->sector_rep) == 'Other' ? 'checked' : '' }}
                                                                        onclick="toggleTextBox('otherTextBox2')"
                                                                        name="sector_rep" /><i class="helper"></i>
                                                                    Other,
                                                                    Please
                                                                    Specify
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" id="otherTextBox2"
                                                            style="display:none;">
                                                            <input id="otherInput" type="text"
                                                                class="form-control" name="sector_rep_others"
                                                                value="{{ old('sector_rep_others', $item->sector_rep_others) }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <hr>
                                                    <div class="col-sm--1 col-xs--1 waves-effect waves-light">
                                                        <div class="grid-material bg-general">Involvement in
                                                            Mangingisdang
                                                            Director Program</div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="grid-material bg-general"><em>Position /
                                                            Designation</em>
                                                    </div>
                                                    <br>
                                                    <div class="radio-container">
                                                        <div class="form-group">
                                                            <input type="radio" class="form-check-input"
                                                                name="involvement_mdo"
                                                                value="Provincial Fisherfolk Representative"
                                                                {{ old('involvement_mdo', $item->involvement_mdo) == 'Provincial Fisherfolk Representative' ? 'checked' : '' }}
                                                                id="pro_radio">
                                                            <label class="form-check-label" for="pro_radio">Provincial
                                                                Fisherfolk Representative</label>
                                                        </div>
                                                        <br><br>
                                                        <div class="form-group">
                                                            <input type="radio" class="form-check-input"
                                                                name="involvement_mdo"
                                                                value="Regional Fisherfolk Representative"
                                                                id="pro_radio">
                                                            {{ old('involvement_mdo', $item->involvement_mdo) == 'Regional Fisherfolk Representative' ? 'checked' : '' }}
                                                            <label class="form-check-label" for="pro_radio">Regional
                                                                Fisherfolk Representative</label>
                                                        </div>
                                                        <br><br>
                                                        <div class="form-group">
                                                            <input type="radio" class="form-check-input"
                                                                name="involvement_mdo"
                                                                value="Regional Fisherfolk Director"
                                                                {{ old('involvement_mdo', $item->involvement_mdo) == 'Regional Fisherfolk Director' ? 'checked' : '' }}
                                                                id="re_radio">
                                                            <label class="form-check-label" for="re_radio">Regional
                                                                Fisherfolk Director</label>
                                                        </div>
                                                        <br><br>
                                                        <div class="form-group">
                                                            <input type="radio" class="form-check-input"
                                                                name="involvement_mdo"
                                                                value="National Fisherfolk Director"
                                                                {{ old('involvement_mdo', $item->involvement_mdo) == 'National Fisherfolk Director' ? 'checked' : '' }}
                                                                id="na_radio">
                                                            <label class="form-check-label" for="na_radio">National
                                                                Fisherfolk Director</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="grid-material bg-general"><em>Year Elected
                                                            (Inclusive
                                                            Date/s)</em></div>
                                                    <br>
                                                    <div class="form-inline" style="line-height: 0.3;">
                                                        <div>
                                                            <label>
                                                                <input type="text" class="form-control"
                                                                    name="year1" placeholder="" style="width:150px"
                                                                    value="{{ old('year1', $item->year1) }}">
                                                            </label>
                                                            <br><br>
                                                            <label>
                                                                <input type="text" class="form-control"
                                                                    name="year2" placeholder="" style="width:150px"
                                                                    value="{{ old('year2', $item->year2) }}">
                                                            </label>
                                                            <br><br>
                                                            <label>
                                                                <input type="text" class="form-control"
                                                                    name="year3" placeholder="" style="width:150px"
                                                                    value="{{ old('year3', $item->year3) }}">
                                                            </label>
                                                            <br><br>
                                                            <label>
                                                                <input type="text" class="form-control"
                                                                    name="year4" placeholder="" style="width:150px"
                                                                    value="{{ old('year4', $item->year4) }}">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fas fa-save"></i> &nbsp; Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    background: '#8cc63f',
                    iconColor: '#ffffff',
                    customClass: {
                        title: 'text-white',
                        content: 'text-white'
                    }
                });
            </script>
        @endif

        @if (session('failed'))
            <script>
                Swal.fire({
                    icon: 'failed',
                    title: 'failed!',
                    text: '{{ session('failed') }}',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    background: '#dc3545',
                    iconColor: '#ffffff',
                    customClass: {
                        title: 'text-white',
                        content: 'text-white'
                    }
                });
            </script>
        @endif

        <script>
            const photoInput = document.getElementById('photo1x1');
            const photoLabel = document.getElementById('label1x1');
            const photoPreview = document.getElementById('preview1x1');

            // Function to handle file input change
            function handleFileInputChange() {
                const file = photoInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        photoPreview.style.display = 'block';
                        photoLabel.style.display = 'none';
                    };
                    reader.readAsDataURL(file);
                }
            }

            // Trigger file input click when the image is clicked
            photoPreview.addEventListener('click', function() {
                photoInput.click();
            });

            // Listen for file input change
            photoInput.addEventListener('change', handleFileInputChange);
        </script>

        <script>
            function toggleTextBox(radioId) {
                var textBoxGroup = document.getElementById('textBoxGroup');
                var radio = document.getElementById(radioId);
                if (radio.value === 'Yes') {
                    textBoxGroup.style.display = 'block';
                } else {
                    textBoxGroup.style.display = 'none';
                }
            }
        </script>

        <script>
            function toggleTextBox1(radioId) {
                var textBoxGroup1 = document.getElementById('textBoxGroup1');
                var radio = document.getElementById(radioId);
                if (radio.value === 'Yes') {
                    textBoxGroup1.style.display = 'block';
                } else {
                    textBoxGroup1.style.display = 'none';
                }
            }
        </script>

        <script>
            function toggleTextBox(textboxId) {
                var textBox = document.getElementById(textboxId);

                if (textBox) {
                    textBox.style.display = 'block';
                }
            }
        </script>

        <script>
            function showTertiaryTextbox() {
                document.getElementById('tertiaryTextboxGroup').style.display = 'block';
                document.getElementById('tesdaTextboxGroup').style.display = 'none';
            }

            function showTesdaTextbox() {
                document.getElementById('tesdaTextboxGroup').style.display = 'block';
                document.getElementById('tertiaryTextboxGroup').style.display = 'none';
            }
        </script>


</body>

</html>
