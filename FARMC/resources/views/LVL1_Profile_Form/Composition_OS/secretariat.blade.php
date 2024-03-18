<!DOCTYPE html>
<html lang="en">

<head>
    <title>Secretariat | FARMC - BFAR</title>
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

                        <a href="{{ url ('/committee') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br>
                        <br>
                        @foreach($secretariat as $item)
                        <form method="POST" action="{{url('/add-secretariat/' . $item->id)}}" enctype="multipart/form-data" id="yourFormId">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-block">
                                        <hr>
                                        <div class="grid-material bg-general"><b>B. MFARMC Committee</b>
                                        </div>
                                        <hr>

                                        <div class="card-header">
                                            <table class="table">
                                                <thead>
                                                    <tr>

                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Office / Organization</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" name="name_sec" id="h-email" class="form-control" placeholder=""></td>
                                                        <td><input type="text" name="office_org" id="h-email" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" name="name_sec1" id="h-email" class="form-control" placeholder=""></td>
                                                        <td><input type="text" name="office_org1" id="h-email" class="form-control" placeholder=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" name="name_sec2" id="h-email" class="form-control" placeholder=""></td>
                                                        <td><input type="text" name="office_org2" id="h-email" class="form-control" placeholder=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 text-right">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">SUBMIT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to submit now?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- </div> -->


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

    <script>
        function submitForm() {
            document.getElementById("FormId").submit();
            window.location.href = "path/to/another/page.php"; // Replace with your desired URL
        }
    </script>
</body>

</html>