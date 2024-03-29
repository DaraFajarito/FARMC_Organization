<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Information | FARMC- BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

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
                        <a href="index.html" class="logo" style="display: inline-block; vertical-align: middle;">
                            <img src="{{ asset ('assets/images/newlogo.png') }}" style="width: 40px;" alt="logo">
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

                        <a href="{{ url ('/farmc_membership') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br> <br>

                        <form class="form-inline">
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
                                                        <label for="inline3mail" class="block form-control-label">Name <em>(Family,given,middle & Ext.)</em></label>
                                                        <input id="inline3mail" type="email" class="form-control" style="width: 500px;" placeholder="Enter name">
                                                    </div>
                                                    <br><br>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Address <em>(Barangay, City/Municipality, Province & Region)</em></label>
                                                        <input id="inline3mail" type="email" class="form-control" style="width: 500px;" placeholder="Enter name">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Landline No.</label>
                                                        <input id="inline3mail" type="email" class="form-control" placeholder="Landline No.">
                                                    </div>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Mobile No.</label>
                                                        <input id="inline3mail" type="email" class="form-control" placeholder="Mobile No.">
                                                    </div>
                                                    <br> <br>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Email Add</label>
                                                        <input id="inline3mail" type="email" class="form-control" style="width: 450px;" placeholder="Email Add">
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
                                                                <input type="radio" name="radio" c /><i class="helper"></i>Single
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio" /><i class="helper"></i>Married
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio" /><i class="helper"></i>Widow/Widower
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio" /><i class="helper"></i>Separated
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em>Gender</em></div>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">

                                                            <label>
                                                                <input type="radio" name="radio" /><i class="helper"></i>Male
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio" /><i class="helper"></i>Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general">Birthdate</div>
                                                        <div class="form-group">
                                                            <label for="inline3mail" class="block form-control-label">Date</label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inline3mail" class="block form-control-label">Ages</label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="Ages">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general">Birthplace</div>
                                                        <div class="form-group">
                                                            <label for="inline3mail" class="block form-control-label">City/Municipality</label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="Date">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inline3mail" class="block form-control-label">Province</label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="Ages">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </div> -->

                                            <hr>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em>4P's Member</em></div>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">

                                                            <label>
                                                                <input type="radio" name="radio" c /><i class="helper"></i>Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="radio" /><i class="helper"></i>No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general"><em>Person w/ Disabiliy (PWD)</em></div>

                                                        <div class="form-check">
                                                            <label for="pwd" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="Disability" value="yes" id="yes(pwd)">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <div class="form-check">
                                                            <label for="pwd" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="Disability" value="no" id="no (pwd)">
                                                                No
                                                            </label>
                                                        </div>
                                                        <div class="form-group" id="DisabilityDetails" style="display:none;">
                                                            <label for="inline3mail" class="block form-control-label">Specify, if yes</label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general"><em>Cultural Community (IP's)</em></div>

                                                        <div class="form-check">
                                                            <label for="optionsRadios2" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="culturalCommunity" value="yes" id="optionsRadios3">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <div class="form-check">
                                                            <label for="optionsRadios2" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="culturalCommunity" value="no" id="optionsRadios4">
                                                                No
                                                            </label>
                                                        </div>
                                                        <div class="form-group" id="culturalCommunityDetails" style="display:none;">
                                                            <label for="inline3mail" class="block form-control-label">Specify, if yes</label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <div class="grid-material bg-general"><em>Religion Affiliation</em></div>

                                                        <div class="form-check">
                                                            <label for="islamRadio" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="religionRadios" id="islamRadio" value="Islam" onchange="toggleTextBox('islamRadio');">
                                                                Islam
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <div class="form-check">
                                                            <label for="christianRadio" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="religionRadios" id="christianRadio" value="Christian" onchange="toggleTextBox('christianRadio');">
                                                                Christian
                                                            </label>
                                                        </div>
                                                        <div class="form-group" id="textBoxGroup" style="display: none;">
                                                            <label for="inline3mail" class="block form-control-label">If Christian, please specify</label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Name Spouse<em>(Family, Given, Middle)</em></label>
                                                        <input id="inline3mail" type="email" class="form-control" style="width: 650px;" placeholder="Enter name">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="inline3mail" class="block form-control-label">Occupation</label>
                                                                <input id="inline3mail" style="width: 310px;" type="email" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group m-r-15">
                                                        <!-- <hr> -->
                                                        <label for="inline3mail" class="block form-control-label">No. of Dependent/s</em></label>
                                                        <div class="col-md-3">
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="radio" /><i class="helper"></i>Male
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="radio" /><i class="helper"></i>Female
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="radio" /><i class="helper"></i>Others
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-inline">
                                                                <div>
                                                                    <label>
                                                                        <input type="number" class="form-control" placeholder="" style="width:150px">
                                                                    </label>
                                                                    <br>
                                                                    <br>
                                                                    <label>
                                                                        <input type="number" class="form-control" placeholder="" style="width:150px">

                                                                    </label>
                                                                    <br>
                                                                    <br>
                                                                    <label>
                                                                        <input type="number" class="form-control" placeholder="" style="width:150px">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Educational Attainment/Level</em></label>
                                                        <div class="col-md-5">
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="radio1" /><i class="helper"></i>Primary
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="radio2" /><i class="helper"></i>Secondary
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="radio3" /><i class="helper"></i>Vocational
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
                                                                        <input type="radio" name="radio4" onclick="showTertiaryTextbox();" /><i class="helper"></i>Tertiary
                                                                    </label>
                                                                    <div id="tertiaryTextboxGroup" class="form-group" style="display: none;">
                                                                        <div>
                                                                            <label for="tertiaryTextbox" class="captions"><small>Specify Tertiary</small></label>
                                                                            <textarea rows="2" style="width: 200px; border: 1px solid #ccc;"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="radio5" onclick="showTesdaTextbox();" /><i class="helper"></i>TESDA
                                                                    </label>
                                                                    <div id="tesdaTextboxGroup" class="form-group" style="display: none;">
                                                                        <div>
                                                                            <label for="tertiaryTextbox" class="captions"><small>Specify TESDA</small></label>
                                                                            <textarea rows="2" style="width: 200px; border: 1px solid #ccc;"></textarea>
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
                                                            <label for="inline3mail" class="block form-control-label">Other source of livelihood</label>
                                                            <div class="col-md-3">
                                                                <div class="form-radio">
                                                                    <div class="radio radio-inline">
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="radio" /><i class="helper"></i>Salary
                                                                        </label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="radio" /><i class="helper"></i>Farming
                                                                        </label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="radio" /><i class="helper"></i>Business
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-radio">
                                                                    <div class="radio radio-inline" style="margin-left: 60px;">
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="radio" /><i class="helper"></i>Other,<small><em>specify</em></small>
                                                                        </label>
                                                                    </div>
                                                                    <div style="margin-left: 60px;">
                                                                        <textarea rows="4" style="width: 200px; border: 1px solid #ccc;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <a href="{{ url ('/membership')}}" class="btn btn-primary">Next<i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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