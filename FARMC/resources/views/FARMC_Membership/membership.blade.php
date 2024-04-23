<!DOCTYPE html>
<html lang="en">

<head>
    <title>FARMC Membership | BFAR - FARMC</title>
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
                        <a href="{{ url ('/personal_info') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br><br>

                        <form class="form-inline" action="{{url('/add-membership/' . $data->id)}}" method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-block">
                                    <div class="card inline-form-style">
                                        <div class="card-header">
                                            <div class="col-sm--1 col-xs--1 waves-effect waves-light">
                                                <div class="grid-material bg-general">FARMC Membership</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Name of FARMC<em><em></label>
                                                        <input id="inline3mail" type="text" class="form-control" name="farmc_name" style="width: 1050px;" placeholder="Enter Name (First Name, Middle Initial, Last Name)">
                                                    </div>
                                                    <br>

                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Address of FARMC<em></em></label>
                                                        <input id="inline3mail" type="text" class="form-control" name="farmc_add" style="width: 1050px;" placeholder="Enter Address ( Brgy., St., City, Province)">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <!-- <div class="card-block"> -->
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em>Officer of MFARMC</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="mfarmc_off" onclick="toggleTextBox('otherTextBox2')" value="Yes" /> <i class="helper"></i> Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="mfarmc_off" value="No" /> <i class="helper"></i> No
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox2" style="display:none;">
                                                        <input id="otherInput" type="text" class="form-control" name="mfarmc_officer">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Inclusive Dates/s of Membership</em></div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label for="inline3mail" class="block form-control-label">As Officer</label>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <input id="inline3mail" type="text" name="inc_officer1" class="form-control" style="width: 150px;">
                                                            </div>
                                                            <div class="col-md-3" style="padding-left:100px">
                                                                <input id="anotherInput" type="text" name="inc_officer2" class="form-control" style="width: 150px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inline3mail" class="block form-control-label">As Member</label>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <input id="inline3mail" type="text" name="inc_member1" class="form-control" style="width: 150px;">
                                                            </div>
                                                            <div class="col-md-3" style="padding-left:100px">
                                                                <input id="anotherInput" type="text" name="inc_member2" class="form-control" style="width: 150px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="grid-material bg-general"><em>FARMC Representation</em></div>
                                                        <br>
                                                        <div class="form-radio">
                                                            <div class="radio radio-inline">
                                                                <label>
                                                                    <input type="radio" name="farmc_rep" value="Provincial Fisherfolk Representative" /><i class="helper"></i>Provincial Fisherfolk Representative
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="farmc_rep" value="Regional Fisherfolk Representative" /><i class="helper"></i>Regional Fisherfolk Representative
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- <div class="row"> -->
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em>Sector Represented</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="sector" value="Fisherfolk/Fishworker" /> <i class="helper"></i> Fisherfolk/Fishworker
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="sector" value="Commercial Operator" /> <i class="helper"></i> Commercial Operator
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
                                                                <input type="radio" name="sect" value="Women Sector" /> <i class="helper"></i> Women Sector
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="sect" value="Youth Sector" /> <i class="helper"></i> Youth Sector
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em></em></div>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="sect" value="Private Sector" /> <i class="helper"></i> Private Sector
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="sect" value="NGO Representative" /> <i class="helper"></i> NGO Representative
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em></em></div>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="sect" value="Cultural Community (IP's)" /> <i class="helper"></i>Cultural Community (IP's)
                                                            </label>
                                                            <label>
                                                                <input type="radio" value="Other" onclick="toggleTextBox('otherTextBox')" /> <i class="helper"></i> Other, Please Specify
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox" style="display:none;">
                                                        <input id="otherInput" type="text" class="form-control" name="sect">
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                                <br><br><br><br><br>
                                                <hr>

                                                <!-- <div class="row"> -->
                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>LGU Representative, specify the office</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="LGU_rep"  value="SB, Committee on Fisheries"/> <i class="helper"></i> SB, Committee on Fisheries
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="LGU_rep" value="Municipal/City Planning Office"/> <i class="helper"></i> Municipal/City Planning Office
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
                                                                <input type="radio" name="LGU_rep" value="Municipal/City Dev't. Council" /> <i class="helper"></i> Municipal/City Dev't. Council
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="LGU_rep" value="Municipal/City Agriculture Office" /> <i class="helper"></i> Municipal/City Agriculture Office
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="LGU_rep" onclick="toggleTextBox('otherTextBox1')" /> <i class="helper"></i> Others, Please specify
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox1" style="display:none;">
                                                        <input id="otherInput" type="text" class="form-control" name="LGU_rep">
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Next<i class="icon-arrow-right"></i></button>
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
            function toggleTextBox(textboxId) {
                var textBox = document.getElementById(textboxId);

                if (textBox) {
                    textBox.style.display = 'block';
                }
            }
        </script>

        <script>
            function showOfficerDetails(textboxId) {
                var officerDetails = document.getElementById(textboxId);

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
