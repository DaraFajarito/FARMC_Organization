     <!DOCTYPE html>
<html lang="en">

<head>
    <title>Mandated Member | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

</head>

<style>
      input.form-control{
        border: 1px solid #AAAAAA;
    }
</style>

<body>
    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

    <div class="wrapper">
        <!-- Navbar-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <a href="index.html" class="logo"><img src="{{ asset ('assets/images/Logo_BFAR.png') }}" style=" width: 60px;" alt="logo"></a>
                        <h4>M/C FARMC Profile | <small>PROFILE FORM</small></h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 2</a>
                            </li>
                        </ol>
                        <br>

                        <a href="{{ url ('/officers') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-header">
                                    <hr>
                                    <div class="grid-material bg-general"><b>A. COMPOSITION OF MEMBERSHIP</b></div>
                                    <hr>
                                    @foreach($officers as $officer)
                                    <form method="POST" action="{{ url('/add-mandated-officer/' . $officer->id) }}" enctype="multipart/form-data">
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
                                                            <input type="text" id="h-email" class="form-control" placeholder="" name="chairpersonSB" value="{{$officer->chairpersonSB}}">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="2">1.2 Municipal Planning and Development Council</th>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="text" id="h-email" class="form-control" placeholder="" name="mpdo" value="{{$officer->mpdo}}">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="2">1.3 Representative from Municipal Development Council</th>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="text" id="h-email" class="form-control" placeholder="" name="repmdc" value="{{$officer->repmdc}}">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="2">1.4 Representative from Department of Agriculture/MAO</th>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="text" id="h-email" class="form-control" placeholder="" name="repda" value="{{$officer->repda}}">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="2">1.5 Representative from Non-Governmental Organization</th>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="text" id="h-email" class="form-control" placeholder="" name="repngo" value="{{$officer->repngo}}">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="2">1.6 Representative from Private Sector</th>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="text" id="h-email" class="form-control" placeholder="" name="repps" value="{{$officer->repps}}">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="2">1.7 Other: Please specify</th>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <input type="text" id="h-email" class="form-control" placeholder="" name="others" value="N/A">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-12 text-right">
                                                    <button type="submit" class="btn btn-primary">Next<i class="icon-arrow-right"></i></button>
                                                </div>
                                            </div>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- </div> -->


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