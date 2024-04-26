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

                        <form class="form-inline" action="{{ url('/add-personal-info') }}" method="POST">
                            @csrf
                            @method ('PUT')
                            <div class="card">
                                <div class="card-block">
                                    <div class="card inline-form-style">
                                        <div class="card-header">
                                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                                <div class="grid-material bg-general">Personal Information</div>
                                            </div>
                                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                                <div class="grid-material bg-general">Contact Information</div>
                                            </div>

                                            <!-- <div class="card-block"> -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Name
                                                            <em>(Family,given,middle & Ext.)</em></label>
                                                        <input id="inline3mail" name="name" type="text"
                                                            class="form-control" style="width: 500px;" placeholder="">
                                                    </div>
                                                    <br><br>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label">Address <em>(Barangay,
                                                                City/Municipality, Province & Region)</em></label>
                                                        <input id="inline3mail" name="address" type="text"
                                                            class="form-control" style="width: 500px;" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label">Landline No.</label>
                                                        <input id="inline3mail" name="landline_no" type="text"
                                                            class="form-control" placeholder="Landline No.">
                                                    </div>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Mobile
                                                            No.</label>
                                                        <input id="inline3mail" name="mobile_no" type="text"
                                                            class="form-control" placeholder="Mobile No.">
                                                    </div>
                                                    <br> <br>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Email
                                                            Address</label>
                                                        <input id="inline3mail" name="email" type="email"
                                                            class="form-control" style="width: 450px;"
                                                            placeholder="Email Add">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- <div class="card-block"> -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em>Civil Status</em></div>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">

                                                            <label>
                                                                <input type="radio" name="civil_status"
                                                                    value="Single" /><i class="helper"></i>Single
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="civil_status"
                                                                    value="Married" /><i class="helper"></i>Married
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="civil_status"
                                                                    value="Widow/Widower" /><i
                                                                    class="helper"></i>Widow/Widower
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="civil_status"
                                                                    value="Seperated" /><i
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
                                                                    value="Male" /><i class="helper"></i>Male
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="gender"
                                                                    value="Female" /><i class="helper"></i>Female
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="gender"
                                                                    value="Others" /><i class="helper"></i>Others
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
                                                            <input id="inline3mail" type="text" name="birthdate"
                                                                class="form-control" placeholder="Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Age</label>
                                                            <input id="inline3mail" type="number" name="age"
                                                                class="form-control" placeholder="Age">
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
                                                                name="birthplace_municipality" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inline3mail"
                                                                class="block form-control-label">Province</label>
                                                            <input id="inline3mail" type="text"
                                                                name="birthplace_province" class="form-control"
                                                                placeholder="">
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
                                                                    value="Yes" /><i class="helper"></i>Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="fourps"
                                                                    value="No" /><i class="helper"></i>No
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

                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="pwd"
                                                                        value="Yes"
                                                                        onclick="toggleTextBox('otherTextBox8');" />
                                                                    <i class="helper"></i> Yes
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="pwd"
                                                                        value="No" />
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
                                                                class="form-control" name="pwd_yes">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general"><em>Cultural
                                                                Community
                                                                (IPs)</em></div>

                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="IP"
                                                                        value="Yes"
                                                                        onclick="toggleTextBox('otherTextBox7');" />
                                                                    <i class="helper"></i> Yes
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="IP"
                                                                        value="No" />
                                                                    <i class="helper"></i> No
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" id="otherTextBox7"
                                                            style="display:none;">
                                                            <label for="inline3mail"
                                                                class="block form-control-label"><small>If
                                                                    If Yes, please specify</small></label>
                                                            <input id="otherInput" type="text" value=""
                                                                class="form-control" name="IP_yes">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general"><em>Religion
                                                                Affiliation</em></div>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="religion"
                                                                        value="Islam" />
                                                                    <i class="helper"></i> Islam
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="religion"
                                                                        value="Christian"
                                                                        onclick="toggleTextBox('otherTextBox6');" />
                                                                    <i class="helper"></i> Christian
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" id="otherTextBox6"
                                                            style="display:none;">
                                                            <label for="inline3mail"
                                                                class="block form-control-label"><small>
                                                                    If Christian, please specify</small></label>
                                                            <input id="otherInput" type="text" value=""
                                                                class="form-control" name="religion_christ">
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
                                                            placeholder="Enter name">
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
                                                        <label for="inline3mail" class="block form-control-label">No.
                                                            of Dependent/s</em></label>
                                                        <br>
                                                        <div class="col-md-4">
                                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                                <label class="input-checkbox checkbox-primary">
                                                                    <input type="checkbox" name="internalP"
                                                                        id="checkbox">
                                                                    <span class="checkbox"></span>
                                                                </label>
                                                                <div class="captions">Male</div>
                                                            </div>
                                                            <br><br><br>
                                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                                <label class="input-checkbox checkbox-primary">
                                                                    <input type="checkbox" name="fisherfolkR"
                                                                        id="checkbox-1">
                                                                    <span class="checkbox"></span>
                                                                </label>
                                                                <div class="captions">Female</div>
                                                            </div>
                                                            <br><br><br>
                                                            <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                                <label class="input-checkbox checkbox-primary">
                                                                    <input type="checkbox" name="fisheriesP"
                                                                        id="checkbox-2">
                                                                    <span class="checkbox"></span>
                                                                </label>
                                                                <div class="captions">Others</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-inline">
                                                                <div>
                                                                    <label>
                                                                        <input type="number" class="form-control"
                                                                            name="dependent_male" placeholder=""
                                                                            style="width:150px">
                                                                    </label>
                                                                    <br>
                                                                    <br>
                                                                    <label>
                                                                        <input type="number" class="form-control"
                                                                            name="dependent_female" placeholder=""
                                                                            style="width:150px">

                                                                    </label>
                                                                    <br>
                                                                    <br>
                                                                    <label>
                                                                        <input type="number" class="form-control"
                                                                            name="dependent_others" placeholder=""
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
                                                                            value="Primary" /><i
                                                                            class="helper"></i>Primary
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Secondary" /><i
                                                                            class="helper"></i>Secondary
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Vocational" /><i
                                                                            class="helper"></i>Vocational
                                                                    </label>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3" style="margin-top:21px">
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Tertiary"
                                                                            onclick="toggleTextBox('otherTextBox9');" />
                                                                        <i class="helper"></i> Tertiary
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" id="otherTextBox9"
                                                                style="display:none;">
                                                                <label for="inline3mail"
                                                                    class="block form-control-label"><small>Specify,Tertiary</small></label>
                                                                <input id="otherInput" type="text"
                                                                    class="form-control" name="tertiary">
                                                            </div>

                                                            <div class="form-radio" style="margin-top: 23px">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Tesda"
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
                                                                    class="form-control" name="tesda">
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
                                                            <div class="col-md-5">
                                                                <div class="form-radio">
                                                                    <div class="radio radio-inline">
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="other_source"
                                                                                value="Salary" /><i
                                                                                class="helper"></i>Salary
                                                                        </label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="other_source"
                                                                                value="Farming" /><i
                                                                                class="helper"></i>Farming
                                                                        </label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="other_source"
                                                                                value="Business" /><i
                                                                                class="helper"></i>Business
                                                                        </label>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-radio" style="margin-top: 23px">
                                                                    <div class="radio radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="other_source"
                                                                                value="Other"
                                                                                onclick="toggleTextBox('otherTextBox11');" />
                                                                            <i class="helper"></i> Others
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group" id="otherTextBox11"
                                                                    style="display:none;">
                                                                    <label for="inline3mail"
                                                                        class="block form-control-label"><small>Please
                                                                            specify</small></label>
                                                                    <input id="otherInput" type="text"
                                                                        style="width: 180px"
                                                                        class="form-control"
                                                                        name="other_source_other">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary">Next<i
                                                            class="icon-arrow-right"></i></button>
                                                </div>
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
        function toggleTextBox(textboxId) {
            var textBox = document.getElementById(textboxId);

            if (textBox) {
                textBox.style.display = 'block';
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
