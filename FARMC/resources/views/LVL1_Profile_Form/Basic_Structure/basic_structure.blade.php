<!DOCTYPE html>
<html lang="en">

<head>
    <title>Basic Structure | FARMC - BFAR</title>

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
                            <h4>M/C FARMC Profile</h4>
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
                            <a href="{{ url ('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <!-- <div class="col-sm-12 col-xs-12 waves-effect waves-light"> -->
                            <hr>
                            <div class="grid-material bg-general" style="text-align:center; font-size:20px"><b>BASIC STRUCTURE</b></div>
                            <hr>
                            <!-- </div> -->

                            <!-- </div> -->
                            <!-- <div class="card inline-form-style"> -->
                            <!-- <div class="card-header"> -->
                            <div class="col-sm-6 col-xs-6 waves-effect waves-light">
                                <div class="grid-material bg-general"></div>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-inline">
                                            <div class="form-group row">
                                                <label for="h-email" class="col-md-2 col-form-label form-control-label">Municipality / City</label>
                                                <div class="col-md-2">
                                                    <input type="email" id="h-email" class="form-control" style="width:900px" placeholder="">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="h-email" class="col-md-2 col-form-label form-control-label">Province</label>
                                                <div class="col-md-2">
                                                    <input type="email" id="h-email" class="form-control" style="width:900px" placeholder="">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Date organized</label>
                                                <input id="inline3mail" type="date" class="form-control" style="width: 400px;" placeholder="">
                                            </div>

                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Attach the minutes</label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Attach the Photos</label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Attach the Attendance</label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label">Date of Re-Organization</label>
                                                <input id="inline3mail" type="date" class="form-control" style="width: 400px;" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label"><br></label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label"><br></label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                            <div class="form-group m-r-15">
                                                <label for="inline3mail" class="block form-control-label"><br></label>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 195px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                            </div>
                                        </form>
                                        <br>

                                        <!-- <div class="col-md-12"> -->
                                        <form class="form-inline">
                                            <br>
                                            <div class="col-md-5">
                                                <br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="checkbox">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Internal Policy</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="checkbox-1">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Fisherfolk Registry</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="checkbox-2">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Fisheries Profile</div>
                                                </div>
                                                <br><br><br>
                                                <div class="rkmd-checkbox checkbox-rotate checkbox-ripple">
                                                    <label class="input-checkbox checkbox-primary">
                                                        <input type="checkbox" id="checkbox-3">
                                                        <span class="checkbox"></span>
                                                    </label>
                                                    <div class="captions">Formulation of Resolution and propose ordinances initiated </div>
                                                </div>
                                            </div>



                                            <div class="col-md-7" style=" line-height:4rem">
                                                <input id="inline3mail" type="file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <small><b><em>Attach Approved Internal Policy</b></em></small>
                                                <br>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">

                                                <small><b><em>Attach Fisherfolk Registry</em></b></small>
                                                <br>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <small><b><em>Attach Fisheries Profile</em></b></small>
                                                <br>
                                                <input id="inline3mail" type="file" class="form-control" style="width: 300px;" accept="image/*,.pdf,.doc,.docx" placeholder="">
                                                <small><b><em>Attach Files</em></b></small>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <a href="{{ url ('/officers') }}" class="btn btn-primary">Next <i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
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

    </body>

</html>