<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form | BFAR - FARMC</title>
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
                                <li class="breadcrumb-item"><a href="#">FARMC Membership | Membership</a>
                                </li>
                            </ol>
                        </div>
                    <div class="col-lg-12 inline-forms">

                        <a href="../../BFAR_FARMC/FARMC_MembersProfile_Form/member_info.php" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br> <br>
                        
                        <div class="card">
                            <div class="card-block">


                                <div class="card inline-form-style">
                                    <div class="card-header">
                                        <div class="col-sm--1 col-xs--1 waves-effect waves-light">
                                            <div class="grid-material bg-general">FARMC Membership</div>
                                        </div>
                                        <!-- <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                                    <div class="grid-material bg-general">Address of FARMC</div>
                                                </div> -->



                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form class="form-inline">
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail" class="block form-control-label">Name of FARMC<em><em></label>
                                                            <input id="inline3mail" type="email" class="form-control" style="width: 1050px;" placeholder="Enter Name (First Name, Middle Initial, Last Name)">
                                                        </div>
                                                    </form>
                                                    <br>

                                                    <form class="form-inline">
                                                        <div class="form-group m-r-15">
                                                            <label for="inline3mail" class="block form-control-label">Address of FARMC<em></em></label>
                                                            <input id="inline3mail" type="email" class="form-control" style="width: 1050px;" placeholder="Enter Address ( Brgy., St., City, Province)">
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- <div class="col-md-6">

                                                            <form class="form-inline">
                                                                <div class="form-group m-r-15">
                                                                    <label for="inline3mail" class="block form-control-label">Landline No.</label>
                                                                    <input id="inline3mail" type="email" class="form-control" placeholder="Landline No.">
                                                                </div>
                                                                <div class="form-group m-r-15">
                                                                    <label for="inline3mail" class="block form-control-label">Mobile No.</label>
                                                                    <input id="inline3mail" type="email" class="form-control" placeholder="Mobile No.">
                                                                </div>
                                                            </form>
                                                            <br>

                                                            <form class="form-inline">
                                                                <div class="form-group m-r-15">
                                                                    <label for="inline3mail" class="block form-control-label">Email Add</label>
                                                                    <input id="inline3mail" type="email" class="form-control" style="width: 450px;" placeholder="Email Add">
                                                                </div>
                                                            </form>
                                                        </div> -->
                                            </div>
                                            <hr>
                                            <!-- <div class="card-block"> -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em>Officer of MFARMC</em></div>
                                                    <form>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="radio" c /><i class="helper"></i>Yes
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="radio" /><i class="helper"></i>No
                                                                </label>
                                                                <div class="form-group" id="officerDetails" style="display:none;">
                                                                    <label for="inline3mail" class="block form-control-label">Specified, if yes</label>
                                                                    <input id="inline3mail" type="email" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="grid-material bg-general"><em>Inclusive Dates/s of Membership</em></div>
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="inline3mail" class="block form-control-label">As Officer</label>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input id="inline3mail" type="email" class="form-control" style="width: 150px;" placeholder="As Officer">
                                                                </div>
                                                                <div class="col-md-3" style="padding-left:100px">
                                                                    <input id="anotherInput" type="text" class="form-control" style="width: 150px;" placeholder="Another Input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inline3mail" class="block form-control-label">As Member</label>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input id="inline3mail" type="email" class="form-control" style="width: 150px;" placeholder="As Officer">
                                                                </div>
                                                                <div class="col-md-3" style="padding-left:100px">
                                                                    <input id="anotherInput" type="text" class="form-control" style="width: 150px;" placeholder="Another Input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em>FARMC Representation</em></div>
                                                        <form>
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" c /><i class="helper"></i>Provincial Fisherfolk Representative
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="radio" /><i class="helper"></i>Regional Fisherfolk Representative
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em>Sector Represented</em></div>
                                                        <form>
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> Fisherfolk/Fishworker
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> Commercial Operator
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <br>
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em></em></div>
                                                        <form>
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> Women Sector
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> Youth Sector
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em></em></div>
                                                        <form>
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> Private Sector
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> NGO Representative
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="col-sm-12 col-xs-12 waves-effect waves-light">
                                                            <div class="grid-material bg-general"><em></em></div>
                                                            <form class="form-inline">
                                                                <div class="form-check">
                                                                    <label for="ccRadio" class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="ccRadios" id="ccRadio" value="cc" onchange="toggleTextBox('ccRadio');">
                                                                        Cultural Community (IP's)
                                                                    </label>
                                                                </div>
                                                                <br>
                                                                <div class="form-check">
                                                                    <label for="OtherRadio" class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="ccRadios" id="OtherRadio" value="Other" onchange="toggleTextBox('OtherRadio');">
                                                                        Other, Please Specify
                                                                    </label>
                                                                </div>
                                                                <div class="form-group" id="textBoxGroup" style="display: none;">
                                                                    <label for="inline3mail" class="block form-control-label"></label>
                                                                    <input id="inline3mail" type="email" class="form-control" placeholder="">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em>LGU Representative, specify the office</em></div>
                                                        <form>
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> SB, Committee on Fisheries
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> Municipal/City Planning Office
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <br>
                                                    <div class="col-md-3">
                                                        <div class="grid-material bg-general"><em></em></div>
                                                        <form>
                                                            <div class="form-radio">
                                                                <div class="radio radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> Municipal/City Dev't. Council
                                                                    </label>
                                                                    <label>
                                                                        <input type="radio" name="radio" onclick="toggleTextBox('')" /> <i class="helper"></i> Municipal/City Agriculture Office
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label for="OtherOfficeRadio" class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="ooRadios" id="OtherOfficeRadio" value="OtherOffice" onchange="toggleTextBox('OtherOfficeRadio');">
                                                                Other, Please Specify
                                                            </label>
                                                        </div>
                                                        <div class="form-group" id="textBoxGroup" style="display: none;">
                                                            <label for="inline3mail" class="block form-control-label"></label>
                                                            <input id="inline3mail" type="email" class="form-control" placeholder="">
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-right">
                                                <a href="../../BFAR_FARMC/FARMC_MembersProfile_Form/Organizational_Membership.php" class="btn btn-primary">Next<i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Required Jqurey -->
            <script src="./../assets/plugins/jquery/dist/jquery.min.js"></script>
            <script src="./../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
            <script src="./../assets/plugins/tether/dist/js/tether.min.js"></script>

            <!-- Required Fremwork -->
            <script src="./../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

            <!-- waves effects.js -->
            <script src="./../assets/plugins/Waves/waves.min.js"></script>

            <!-- Scrollbar JS-->
            <script src="./../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
            <script src="./../assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

            <!--classic JS-->
            <script src="./../assets/plugins/classie/classie.js"></script>

            <!-- notification -->
            <script src="./../assets/plugins/notification/js/bootstrap-growl.min.js"></script>

            <!-- Date picker.js -->
            <script src="./../assets/plugins/datepicker/js/moment-with-locales.min.js"></script>
            <script src="./../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

            <!-- Select 2 js -->
            <script src="./../assets/plugins/select2/dist/js/select2.full.min.js"></script>

            <!-- Max-Length js -->
            <script src="./../assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>

            <!-- Multi Select js -->
            <script src="./../assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>
            <script src="./../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
            <script type="text/javascript" src="./../assets/plugins/multi-select/js/jquery.quicksearch.js"></script>

            <!-- Tags js -->
            <script src="./../assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

            <!-- Bootstrap Datepicker js -->
            <script type="text/javascript" src="./../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
            <script src="./../assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>

            <!-- bootstrap range picker -->
            <script type="text/javascript" src="./../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

            <!-- color picker -->
            <script type="text/javascript" src="./../assets/plugins/spectrum/spectrum.js"></script>
            <script type="text/javascript" src="./../assets/plugins/jscolor/jscolor.js"></script>

            <!-- highlite js -->
            <script type="text/javascript" src="./../assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
            <script type="text/javascript" src="./../assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
            <script type="text/javascript" src="./../assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
            <script type="text/javascript">
                SyntaxHighlighter.all();
            </script>

            <!-- custom js -->
            <script type="text/javascript" src="./../assets/js/main.min.js"></script>
            <script type="text/javascript" src="./../assets/pages/advance-form.js"></script>
            <script src="assets/js/menu.min.js"></script>
            <script type="text/javascript">
                SyntaxHighlighter.all();
            </script>

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
                document.querySelectorAll('input[name="OtherOffice"]').forEach(function(radio) {
                    radio.addEventListener('change', function() {
                        if (this.value === 'yes') {
                            document.getElementById('OtherOfficeDetails').style.display = 'block';
                        } else {
                            document.getElementById('OtherOfficeDetails').style.display = 'none';
                        }
                    });
                });
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