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
                                <h4 style="margin: 0;">FARMC Membership</h4>
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
                            <li class="breadcrumb-item"><a href="#">FARMC Membership | Personal Information</a>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-12 inline-forms">

                        <a href="{{ url('/farmc_membership') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i> Back</a>
                        <br> <br>
                        @foreach ($edit_mem as $item)
                            <div class="card">
                                <div class="card-block">
                                    <div class="card inline-form-style">
                                        <div class="card-header">
                                            <form class="form-inline"
                                                action="{{ url('/edit-membership/' . $item->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method ('PUT')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="grid-material bg-general">Personal Information</div>
                                                        <br>
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Name
                                                                <em>(Family,given,middle & Ext.) </em> </label>
                                                            <input id="inline3mail" name="name" type="text"
                                                                class="form-control" style="width: 500px;"
                                                                placeholder="" value="{{ old('name', $item->name) }}">
                                                        </div>
                                                        <br><br>
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Address <em>(Barangay,
                                                                    City/Municipality, Province & Region)</em></label>
                                                            <input id="inline3mail" name="address" type="text"
                                                                class="form-control" style="width: 500px;"
                                                                placeholder=""
                                                                value="{{ old('address', $item->address) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="grid-material bg-general">Contact Information</div>
                                                        <br>
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Landline No.</label>
                                                            <input id="inline3mail" name="landline_no" type="text"
                                                                class="form-control" placeholder="Landline No."
                                                                value="{{ old('landline_no', $item->landline_no) }}">
                                                        </div>
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Mobile
                                                                No.</label>
                                                            <input id="inline3mail" name="mobile_no" type="text"
                                                                class="form-control" placeholder="Mobile No."
                                                                value="{{ old('mobile_no', $item->mobile_no) }}">
                                                        </div>
                                                        <br> <br>
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Email
                                                                Address</label>
                                                            <input id="inline3mail" name="email" type="email"
                                                                class="form-control" style="width: 450px;"
                                                                placeholder="Email Add"
                                                                value="{{ old('email', $item->email) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- <div class="card-block"> -->
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em>Civil Status</em>
                                                        </div>
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
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em>Gender</em></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">

                                                                <label>
                                                                    <input type="radio" name="gender"
                                                                        value="Male"
                                                                        {{ old('gender', $item->gender) == 'Male' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Male
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="gender"
                                                                        value="Female"
                                                                        {{ old('gender', $item->gender) == 'Female' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Female
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="gender"
                                                                        value="Others"
                                                                        {{ old('gender', $item->gender) == 'Others' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                            <div class="grid-material bg-general">Birthdate</div>
                                                            <div class="form-group">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">Date</label>
                                                                <input id="inline3mail" type="text"
                                                                    name="birthdate" class="form-control"
                                                                    placeholder="Date"
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

                                                    <div class="col-md-3">
                                                        <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                            <div class="grid-material bg-general">Birthplace</div>
                                                            <div class="form-group">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">City/Municipality</label>
                                                                <input id="inline3mail" type="text"
                                                                    name="birthplace_municipality"
                                                                    class="form-control" placeholder=""
                                                                    value="{{ old('birthplace_municipality', $item->birthplace_municipality) }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">Province</label>
                                                                <input id="inline3mail" type="text"
                                                                    name="birthplace_province" class="form-control"
                                                                    placeholder=""
                                                                    value="{{ old('birthplace_province', $item->birthplace_province) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- </div> -->

                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em>4P's Member</em>
                                                        </div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">

                                                                <label>
                                                                    <input type="radio" name="fourps"
                                                                        value="Yes"
                                                                        {{ old('fourps', $item->fourps) == 'Yes' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>Yes
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="fourps"
                                                                        value="No"
                                                                        {{ old('fourps', $item->fourps) == 'Yes' ? 'checked' : '' }} /><i
                                                                        class="helper"></i>No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                            <div class="grid-material bg-general"><em>Person w/
                                                                    Disability
                                                                    (PWD)
                                                                </em></div>

                                                            <div class="form-check">
                                                                <label for="pwd" class="form-check-label">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="pwd" value="Yes"
                                                                        {{ old('pwd', $item->pwd) == 'Yes' ? 'checked' : '' }}
                                                                        onchange="toggleTextBox1('pwd');" />
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <label for="pwd" class="form-check-label">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="pwd" value="No"
                                                                        {{ old('pwd', $item->pwd) == 'No' ? 'checked' : '' }}>
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="textBoxGroup1"
                                                                style="display: none;">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">Specify, if
                                                                    yes</label>
                                                                <input id="inline3mail" type="text" name="pwd_yes"
                                                                    class="form-control" placeholder=""
                                                                    value="{{ old('pwd_yes', $item->pwd_yes) }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                            <div class="grid-material bg-general"><em>Cultural
                                                                    Community
                                                                    (IPs)</em></div>

                                                            <div class="form-check">
                                                                <label for="pwd" class="form-check-label">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="IP" id="IP"
                                                                        onchange="toggleTextBox2('IP');"
                                                                        value="Yes"
                                                                        {{ old('IP', $item->IP) == 'Yes' ? 'checked' : '' }} />
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <label for="optionsRadios2" class="form-check-label">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="IP" value="No"
                                                                        {{ old('IP', $item->IP) == 'No' ? 'checked' : '' }}
                                                                        id="optionsRadios4">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="textBoxGroup2"
                                                                style="display: none;">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">Specify, if
                                                                    yes</label>
                                                                <input id="inline3mail" type="text" name="IP_yes"
                                                                    value="{{ old('IP_yes', $item->IP_yes) }}"
                                                                    class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                            <div class="grid-material bg-general"><em>Religion
                                                                    Affiliation</em></div>

                                                            <div class="form-check">
                                                                <label for="islamRadio" class="form-check-label">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="religion" value="Islam"
                                                                        {{ old('religion', $item->religion) == 'Islam' ? 'checked' : '' }} />
                                                                    Islam
                                                                </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <label for="christianRadio" class="form-check-label">
                                                                    <input type="radio" class="form-check-input"
                                                                        name="religion" id="christianRadio"
                                                                        value="Christian"
                                                                        {{ old('religion', $item->religion) == 'Christian' ? 'checked' : '' }}
                                                                        onchange="toggleTextBox('christianRadio');" />
                                                                    Christian
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="textBoxGroup"
                                                                style="display: none;">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">If Christian,
                                                                    please
                                                                    specify</label>
                                                                <input id="inline3mail" type="text"
                                                                    name="religion_christ" class="form-control"
                                                                    value="{{ old('religion_christ', $item->religion_christ) }}"
                                                                    placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Name
                                                                Spouse<em>(Family, Given, Middle)</em></label>
                                                            <input id="inline3mail" type="text" name="name_spouse"
                                                                class="form-control" style="width: 650px;"
                                                                placeholder="Enter name"
                                                                value="{{ old('name_spouse', $item->name_spouse) }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                            <div class="form-group">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">Occupation</label>
                                                                <input id="inline3mail" style="width: 310px;"
                                                                    type="text" name="occupation"
                                                                    value="{{ old('occupation', $item->occupation) }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group m-r-15">
                                                            <!-- <hr> -->
                                                            <label for="inline3mail"
                                                                class="block form-control-label">No.
                                                                of Dependent/s</em></label>
                                                            <br>
                                                            <div class="col-md-4">
                                                                <div
                                                                    class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                                    <div class="captions">Male</div>
                                                                </div>
                                                                <br><br><br>
                                                                <div
                                                                    class="rkmd-checkbox checkbox-rotate checkbox-ripple">

                                                                    <div class="captions">Female</div>
                                                                </div>
                                                                <br><br><br>
                                                                <div
                                                                    class="rkmd-checkbox checkbox-rotate checkbox-ripple">

                                                                    <div class="captions">Others</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <div class="form-inline">
                                                                    <div>
                                                                        <label>
                                                                            <input type="number" class="form-control"
                                                                                name="dependent_male" placeholder=""
                                                                                value="{{ old('dependent_male', $item->dependent_male) }}"
                                                                                style="width:150px">
                                                                        </label>
                                                                        <br>
                                                                        <br>
                                                                        <label>
                                                                            <input type="number" class="form-control"
                                                                                name="dependent_female" placeholder=""
                                                                                value="{{ old('dependent_female', $item->dependent_female) }}"
                                                                                style="width:150px">

                                                                        </label>
                                                                        <br>
                                                                        <br>
                                                                        <label>
                                                                            <input type="number" class="form-control"
                                                                                name="dependent_others" placeholder=""
                                                                                value="{{ old('dependent_others', $item->dependent_others) }}"
                                                                                style="width:150px">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Educational
                                                                Attainment/Level</em></label>
                                                            <div class="col-md-5">
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
                                                            <div class="col-md-3">
                                                                <div class="form-radio">
                                                                    <div class="radio radio-inline">
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="educational_attainment"
                                                                                value="Tertiary"
                                                                                {{ old('educational_attainment', $item->educational_attainment) == 'Tertiary' ? 'checked' : '' }}
                                                                                onclick="showTextbox('tertiaryTextboxGroup');" /><i
                                                                                class="helper"></i>Tertiary
                                                                        </label>
                                                                        <div id="tertiaryTextboxGroup"
                                                                            class="form-group" style="display: none;">
                                                                            <div>
                                                                                <label for="tertiaryTextbox"
                                                                                    class="captions"><small>Specify
                                                                                        Tertiary</small></label>
                                                                                <textarea rows="2" style="width: 200px; border: 1px solid #ccc;" id="tertiaryTextbox" name="tertiary"> {{ old('tertiary', $item->tertiary) }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio"
                                                                                name="educational_attainment"
                                                                                value="tesda"
                                                                                {{ old('tesda', $item->tesda) == 'TESDA' ? 'checked' : '' }}
                                                                                onclick="showTextbox('tesdaTextboxGroup');" /><i
                                                                                class="helper"></i>TESDA
                                                                        </label>
                                                                        <div id="tesdaTextboxGroup" class="form-group"
                                                                            style="display: none;">
                                                                            <div>
                                                                                <label for="tesdaTextbox"
                                                                                    class="captions"><small>Specify
                                                                                        TESDA</small></label>
                                                                                <textarea rows="2" style="width: 200px; border: 1px solid #ccc;" id="tesdaTextbox" name="tesda">{{ old('tesda', $item->tesda) }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="col-md-4">
                                                            <div class="form-group m-r-10">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label">Other source of
                                                                    livelihood</label>
                                                                <div class="col-md-3">
                                                                    <div class="form-radio">
                                                                        <div class="radio radio-inline">
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="other_source" value="Salary"
                                                                                    {{ old('other_source', $item->other_source) == 'Salary' ? 'checked' : '' }} /><i
                                                                                    class="helper"></i>Salary
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="other_source"
                                                                                    value="Farming"
                                                                                    {{ old('other_source', $item->other_source) == 'Farming' ? 'checked' : '' }} /><i
                                                                                    class="helper"></i>Farming
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="other_source"
                                                                                    value="Business"
                                                                                    {{ old('other_source', $item->other_source) == 'Business' ? 'checked' : '' }} /><i
                                                                                    class="helper"></i>Business
                                                                            </label>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-radio">
                                                                        <div class="radio radio-inline"
                                                                            style="margin-left: 60px;">
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="other_source"
                                                                                    value="Other" /><i
                                                                                    class="helper"></i>Other,<small>specify</small>
                                                                            </label>
                                                                        </div>
                                                                        <div style="margin-left: 60px;">
                                                                            <textarea rows="4" name="other_source_other" style="width: 200px; border: 1px solid #ccc;"> {{ old('other_source_other', $item->other) }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- //=============================================================================================================================================||
                                                    //================================================== F A R M C  M E M B E R S H I P ===============================================================||
                                                    //==================================================================================================================================================|| --}}

<hr>
                                                <div class="col-sm--1 col-xs--1 waves-effect waves-light">
                                                    <div class="grid-material bg-general text-center">FARMC Membership</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Name
                                                                of FARMC<em><em></label>
                                                            <input id="inline3mail" type="text"
                                                                class="form-control" name="farmc_name"
                                                                style="width: 1050px;" value="{{ old('farmc_name', $item->farmc_name) }}"
                                                                placeholder="Enter Name (First Name, Middle Initial, Last Name)">
                                                        </div>
                                                        <br>

                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Address of
                                                                FARMC<em></em></label>
                                                            <input id="inline3mail" type="text"
                                                                class="form-control" name="farmc_add"
                                                                style="width: 1050px;"  value="{{ old('farmc_add', $item->farmc_add) }}"
                                                                placeholder="Enter Address ( Brgy., St., City, Province)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr>
                                                <!-- <div class="card-block"> -->
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em>Officer of
                                                                MFARMC</em>
                                                        </div>
                                                        <br>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="mfarmc_off"
                                                                        onclick="toggleTextBox3('officer')"
                                                                        value="Yes" {{old ('mfarmc_off', $item->mfarmc_off) == 'Yes' ? 'checked' : ''}} /> <i class="helper"></i> Yes
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="mfarmc_off"
                                                                        value="No"  {{old ('mfarmc_off', $item->mfarmc_off) == 'No' ? 'checked' : ''}}  /> <i class="helper"></i> No
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" id="otherTextBox2"
                                                            style="display:none;">
                                                            <input id="otherInput" type="text" value="{{ old ('mfarmc_off_yes', $item->mfarmc_off_yes) }}"
                                                                class="form-control" name="mfarmc_off_yes">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="grid-material bg-general"><em>Inclusive
                                                                Dates/s of
                                                                Membership</em></div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">As
                                                                Officer</label>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input id="inline3mail" type="text"
                                                                        name="inc_officer1" class="form-control"
                                                                        style="width: 150px;" value="{{ old ('inc_officer1' , $item->inc_officer1) }}">
                                                                </div>
                                                                <div class="col-md-3" style="padding-left:100px">
                                                                    <input id="anotherInput" type="text"
                                                                        name="inc_officer2" class="form-control" value="{{ old ('inc_officer2' , $item->inc_officer2) }}"
                                                                        style="width: 150px;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">As
                                                                Member</label>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input id="inline3mail" type="text"
                                                                        name="inc_member1" class="form-control" value="{{ old ('inc_member1' , $item->inc_member1) }}"
                                                                        style="width: 150px;">
                                                                </div>
                                                                <div class="col-md-3" style="padding-left:100px">
                                                                    <input id="anotherInput" type="text"
                                                                        name="inc_member2" class="form-control" value="{{ old ('inc_member2' , $item->inc_member2) }}"
                                                                        style="width: 150px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="grid-material bg-general"><em>FARMC
                                                                    Representation</em></div>
                                                            <br>
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="farmc_rep"
                                                                            value="Provincial Fisherfolk Representative" {{ old ('farmc_rep', $item->farmc_rep) == 'Provincial Fisherfolk Representative' ? 'checked' : '' }} /><i
                                                                            class="helper"></i>Provincial
                                                                        Fisherfolk
                                                                        Representative
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="farmc_rep"
                                                                            value="Regional Fisherfolk Representative" {{ old ('farmc_rep', $item->farmc_rep) == 'Regional Fisherfolk Representative' ? 'checked' : '' }} /><i
                                                                            class="helper"></i>Regional
                                                                        Fisherfolk
                                                                        Representative
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <!-- <div class="row"> -->
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em>Sector
                                                                Represented</em>
                                                        </div>
                                                        <br>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="sect"
                                                                        value="Fisherfolk/Fishworker" {{ old ('sect', $item->sect) == 'Fisherfolk/Fishworker' ? 'checked' : '' }} /> <i
                                                                        class="helper"></i>
                                                                    Fisherfolk/Fishworker
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="sect"
                                                                        value="Commercial Operator" {{ old ('sect', $item->sect) == 'Commercial Operator' ? 'checked' : '' }}  /> <i
                                                                        class="helper"></i> Commercial Operator
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em></em></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="sect"
                                                                        value="Women Sector"  {{ old ('sect', $item->sect) == 'Women Sector' ? 'checked' : '' }}  /> <i class="helper"></i>
                                                                    Women Sector
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="sect"
                                                                        value="Youth Sector" {{ old ('sect', $item->sect) == 'Youth Sector' ? 'checked' : '' }}/> <i class="helper"></i>
                                                                    Youth Sector
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em></em></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="sect"
                                                                        value="Private Sector" /> <i
                                                                        class="helper"></i>
                                                                    Private Sector
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="sect"
                                                                        value="NGO Representative" /> <i
                                                                        class="helper"></i> NGO Representative
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em></em></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="sect"
                                                                        value="Cultural Community (IPs)" /> <i
                                                                        class="helper"></i>Cultural Community
                                                                    (IP's)
                                                                </label>
                                                                <label>
                                                                    <input type="radio" value="sect"
                                                                        onclick="toggleTextBox4('sector')" />
                                                                    <i class="helper"></i> Other, Please
                                                                    Specify
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" id="otherTextBox"
                                                            style="display:none;">
                                                            <input id="otherInput" type="text"
                                                                class="form-control" name="sect_other">
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                    <br><br><br><br><br>
                                                    <hr>

                                                    <!-- <div class="row"> -->
                                                    <div class="col-md-4">
                                                        <div class="grid-material bg-general"><em>LGU
                                                                Representative,
                                                                specify the office</em></div>
                                                        <br>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="LGU_rep"
                                                                        value="SB Committee on Fisheries" />
                                                                    <i class="helper"></i> SB Committee on
                                                                    Fisheries
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="LGU_rep"
                                                                        value="Municipal/City Planning Office" />
                                                                    <i class="helper"></i> Municipal/City
                                                                    Planning Office
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>
                                                    <div class="col-md-4">
                                                        <div class="grid-material bg-general"><em></em></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="LGU_rep"
                                                                        value="Municipal/City Devt. Council" />
                                                                    <i class="helper"></i> Municipal/City
                                                                    Development Council
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="LGU_rep"
                                                                        value="Municipal/City Agriculture Office" />
                                                                    <i class="helper"></i> Municipal/City
                                                                    Agriculture
                                                                    Office
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="LGU_rep"
                                                                        onclick="toggleTextBox5('lgu')" />
                                                                    <i class="helper"></i> Others, Please
                                                                    specify
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" id="otherTextBox1"
                                                            style="display:none;">
                                                            <input id="otherInput" type="text"
                                                                class="form-control" name="LGU_rep_other">
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                                <br>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fas fa-save"></i> &nbsp; Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <script>
        document.querySelectorAll('input[name="culturalCommunity"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('culturalCommunityDetails').style.display = 'block';
                } else {
                    document.getElementById('culturalCommunityDetails').style.display = 'none';
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('input[name="Disability"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('DisabilityDetails').style.display = 'block';
                } else {
                    document.getElementById('DisabilityDetails').style.display = 'none';
                }
            });
        });
    </script>



    <script>
        function toggleTextBox(radioId) {
            var textBoxGroup = document.getElementById('textBoxGroup');
            if (radioId === 'christianRadio') {
                textBoxGroup.style.display = 'block';
            } else {
                textBoxGroup.style.display = 'none';
            }
        }
    </script>

    <script>
        function toggleTextBox1(radioId) {
            var textBoxGroup1 = document.getElementById('textBoxGroup1');
            if (radioId === 'pwd') {
                textBoxGroup1.style.display = 'block';
            } else {
                textBoxGroup1.style.display = 'none';
            }
        }
    </script>

    <script>
        function toggleTextBox2(radioId) {
            var textBoxGroup2 = document.getElementById('textBoxGroup2');
            if (radioId === 'IP') {
                textBoxGroup2.style.display = 'block';
            } else {
                textBoxGroup2.style.display = 'none';
            }
        }
    </script>
    <script>
        function toggleTextBox3(radioId) {
            var textBoxGroup3 = document.getElementById('textBoxGroup3');
            if (radioId === 'officer') {
                textBoxGroup3.style.display = 'block';
            } else {
                textBoxGroup3.style.display = 'none';
            }
        }
    </script>
    <script>
        function toggleTextBox4(radioId) {
            var textBoxGroup4 = document.getElementById('textBoxGroup4');
            if (radioId === 'sector') {
                textBoxGroup4.style.display = 'block';
            } else {
                textBoxGroup4.style.display = 'none';
            }
        }
    </script>
    <script>
        function toggleTextBox5(radioId) {
            var textBoxGroup5 = document.getElementById('textBoxGroup5');
            if (radioId === 'lgu') {
                textBoxGroup5.style.display = 'block';
            } else {
                textBoxGroup5.style.display = 'none';
            }
        }
    </script>

    <script>
        function showTextbox(groupName) {
            // Hide all textboxes first
            document.getElementById('tertiaryTextboxGroup').style.display = 'none';
            document.getElementById('tesdaTextboxGroup').style.display = 'none';

            // Show the selected textbox
            document.getElementById(groupName).style.display = 'block';

            // Clear the unselected textbox value
            if (groupName === 'tertiaryTextboxGroup') {
                document.getElementById('tesdaTextbox').value = '';
            } else {
                document.getElementById('tertiaryTextbox').value = '';
            }
        }
    </script>


</body>

</html>
