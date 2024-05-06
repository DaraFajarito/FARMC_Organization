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
                    <div class="col-lg-12 inline-forms">
                        <form class="form-inline" action="{{ url('/add-personal-info1') }}" method="POST">
                            @csrf
                            @method ('PUT')
                            <div class="card">
                                <div class="card-block">
                                        <div class="card-header">
                                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                                <div class="grid-material bg-general">Personal Information</div>
                                            </div>
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
                                                                    placeholder="">
                                                                <label for=""><small> Family Name </small></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <input id="" name="given_name" type="text"
                                                                    class="form-control" style="width: 250px;"
                                                                    placeholder="">
                                                                <label for=""><small> Given Name
                                                                    </small></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="text-center">
                                                                <input id="" name="mid_name" type="text"
                                                                    class="form-control" style="width: 230px;"
                                                                    placeholder="">
                                                                <label for=""><small> Middle Name </small></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="text-center">
                                                                <input id="" name="ext" type="text"
                                                                    class="form-control" style="width: 150px;"
                                                                    placeholder="">
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
                                                                    placeholder="">
                                                                <label for=""><small> Barangay </small></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="add_city" type="text"
                                                                    class="form-control" style="width: 300px;"
                                                                    placeholder="">
                                                                <label for=""><small> City / Municipality
                                                                    </small></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <input id="" name="add_province"
                                                                    type="text" class="form-control"
                                                                    style="width: 300px;" placeholder="">
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
                                                                    value="Separated" /><i
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

                                                <div class="col-md-4">
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
                                                <div class="col-md-4">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general"><em>Cultural Affiliation
                                                            </em></div>

                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="cul_af"
                                                                        value="Yes"
                                                                        onclick="toggleTextBox('otherTextBox8');" />
                                                                    <i class="helper"></i> Yes
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="cul_af"
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
                                                                class="form-control" name="cul_af_yes">
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
                                                                <input type="checkbox" name=""
                                                                    id="checkbox">
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
                                                        <div class="col-md-6" style="margin-top:21px">
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
                                                                    class="block form-control-label"><small>Specify,if graduated</small></label>
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

                                                            <div class="form-radio" style="margin-top: 23px">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio"
                                                                            name="educational_attainment"
                                                                            value="Others"
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
                                                                    class="form-control" name="others">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                  <button type="submit" class="btn btn-primary">Next<i
                                                            class="icon-arrow-right"></i></button></a>
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