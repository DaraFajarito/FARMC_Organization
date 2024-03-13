<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password | FARMC - BFAR</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset ('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset ('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset ('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!--ico Fonts-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/icon/icofont/css/icofont.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- waves css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/Waves/waves.min.css') }}">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/responsive.css') }}">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/color/color-1.min.css') }}" id="color" />

</head>

<body>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12">
                    <div class="login-card card-block">
                        <form method="post" action="{{ route('password.reset') }} " class="md-float-material">
                            @csrf <!-- CSRF protection -->
                            <div class="text-center">
                                <img src="{{ asset ('assets/images/Logo_BFAR.png') }}" style="width:120px; height: 80px" alt="logo">
                            </div>
                            <h3 class="text-center txt-primary">
                                Reset Password
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" id="username" name="username" value="{{ old('username') }}">
                                        <label>Username</label>
                                        @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="password" class="md-form-control" id="new_password" name="new_password">
                                        <label>New Password</label>
                                        @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="password" class="md-form-control" id="confirm_password" name="confirm_password">
                                        <label>Confirm Password</label>
                                        @error('confirm_password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                        <!-- end of form -->
                    </div>
                    <!-- end of login-card -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Required Jqurey -->
    <script src="{{ asset ('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset ('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset ('assets/plugins/tether/dist/js/tether.min.js') }}"></script>

    <!-- Required Fremwork -->
    <script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- waves effects.js -->
    <script src="{{ asset ('assets/plugins/Waves/waves.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset ('assets/pages/elements.js') }}"></script>



</body>

</html>