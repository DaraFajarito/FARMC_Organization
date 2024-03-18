<DOCTYPE html>
    <html lang="en">

    <head>
        <title>All Dashboard | BFAR - FARMC</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    </head>

    <body>

        <!-- side_navbar -->
        @include ('side_navbar')
        <div class="wrapper">
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
                                <li class="breadcrumb-item"><a href="#">FARMC Strengthening | Organized FARMC | Municipal / City FARMC • Level 1 | INCOMPLETED</a>
                                </li>
                            </ol>
                            <br>
                            <a href="{{ url ('/level1') }}" class="btn btn-secondary"> <i class="icon-arrow-left"></i> Go back to Level 1</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>