<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CPSU | CAMPUS WIFI</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free-v6/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.css') }}">
    <!-- Logo for demo purposes -->
    <link rel="shortcut icon" type="" href="{{ asset('template/img/CPSU_L.png') }}">

    <style type="text/css">
        .bg-greenn{
            background-color: #04401f;
            color: #000 !important;
        }
        .card{
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2) !important;
        }
        .login-logo{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .input-group{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .icheck-primary{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .col-4{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .btn-primary{
            background-color: #1f5036 !important;
            border: #1f5036 !important;
        }
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #5f6f81;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100%;
            /*z-index: -1;*/
        }
        .btn-success {
            background-color: #044011 !important;
        }
        .btn-app{
            border-radius: 3px !important;
            border: 1px solid #04401f !important;
            color: #1f5036;
        }
        .btn-app:hover{
            background-color: #187744;
            color: #fff;
            border: #ffc107;
        }
        .btn-app.active{
            background-color: #187744;
            color: #fff;
            border: #ffc107;
        }
        .btn-app2{
            border-radius: 3px !important;
            background-color: ;
            border: 1px solid #044011 !important;
            height: 70px !important;
            margin: 0 0 10px 10px !important;
            min-width: 80px !important;
            padding: 25px 5px;
            color: #1f5036;
        }
        
        .buttonlarge {
            font-size: 10pt !important;
        }
        .btn-app2.clicked {
            animation: haptic-animation 0.3s ease;
            color: #000;
            border: #ffc107;
        }

        @keyframes haptic-animation {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .center-top {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .text1 {
            font-family: Bookman Old Style;
            text-align: center;
            font-size: 12pt;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">

    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light bg-greenn">
            <div class="container-fluid">
                <a href="" class="navbar-brand" style="color: #fff;font-family: Courier;">
                    CPSU CAMPUS WIFI
                </a>
                <div class="" style="z-index: 999">
                    <img src="{{ asset('template/img/CPSU_L.png') }}" style="width:80px;" class="center-top">
                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" style="color: #fff">
                            v1 
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid" style="margin-top: auto">
                    
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 17pt">
                                        <div class="">
                                            <h3  style="text-align: center;">Vision</h3>
                                            <p class="text1">CPSU as the leading technology-driven multi-disciplinary University by 2030.</p>
                                        </div>
                                    </h5>
                                    <h5 class="card-title" style="font-size: 17pt">
                                        <div class=""><hr>
                                            <h3  style="text-align: center;">Mission</h3>
                                            <p class="text1">CPSU is committed to produce competent graduates who can generate and extend leading technologies in multi-disciplinary areas beneficial to the community.</p>
                                        </div>
                                    </h5>
                                    <h5 class="card-title" style="font-size: 17pt">
                                        <div class=""><hr>
                                            <h3  style="text-align: center;">Goal</h3>
                                            <p class="text1">To provide efficient, Quality, Technology-driven and Gender-Sensitive Products abd Services.</p>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-1"></div>

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title pt-2">
                                        <p class="login-box-msg" style="font-family: Courier;font-weight: bolder;font-size: 13pt;">
                                            Login here to generate wifi voucher
                                        </p>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="">
                                        @csrf

                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <label><span class="badge badge-default">Student ID Number:</span></label>
                                                    <input type="text" id="studID_no" name="studID" placeholder="0000-0000-K" class="form-control" autofocus>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <button type="submit" name="btn-submit" class="btn btn-success btn-block">
                                                        <i class="fas fa-check"></i> <b>OK</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    @include('partials.numpad_control')
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="margin-left: -5px;">
                                        <a href="{{ route('login') }}" class="btn btn-app active">
                                            <i class="fas fa-sign-in"></i> <b>Login</b>
                                        </a>
                                        <a href="{{ route('register') }}" class="btn btn-app">
                                            <i class="fas fa-user-plus"></i> <b>Register</b>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>


    @include('script.numpad')
</body>
</html>