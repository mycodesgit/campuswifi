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
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('template/plugins/toastr/toastr.min.css') }}">
    <!-- Logo for demo purposes -->
    <link rel="shortcut icon" type="" href="{{ asset('template/img/CPSU_L.png') }}">

    <link rel="stylesheet" href="{{ asset('student-style.css') }}">
    <style>
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #6c9076;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100%;
            /*z-index: -1;*/
        }
    </style>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">

    <div class="wrapper">
        <div id="particles-js"></div>
        <nav class="main-header navbar navbar-expand-md navbar-light border-bottom-0 bg-greenn">
            <div class="container-fluid">
                <a href="" class="navbar-brand" style="color: #fff;font-family: Courier;">
                    CPSU CAMPUS WIFI
                </a>
                <div class="" style="z-index: 999">
                    <img src="{{ asset('template/img/CPSU_L.png') }}" style="width:80px;" class="center-top">
                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a id="v1" class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" style="color: #fff">
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
                            <div class="card" style="box-shadow: 5px 8px 10px rgba(0, 0, 0, 0.2) !important; background-color: rgba(255, 255, 255, 0.8) !important;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 12pt">
                                        <div class="">
                                            <h3  style="text-align: center;">Vision</h3>
                                            <p class="text1">CPSU as the leading technology-driven multi-disciplinary University by 2030.</p>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                            <div class="card" style="box-shadow: 5px 8px 10px rgba(0, 0, 0, 0.2) !important; background-color: rgba(255, 255, 255, 0.8) !important;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 12pt">
                                        <div class="">
                                            <h3  style="text-align: center;">Mission</h3>
                                            <p class="text1">CPSU is committed to produce competent graduates who can generate and extend leading technologies in multi-disciplinary areas beneficial to the community.</p>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                            <div class="card" style="box-shadow: 5px 8px 10px rgba(0, 0, 0, 0.2) !important; background-color: rgba(255, 255, 255, 0.8) !important;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 12pt">
                                        <div class="">
                                            <h3  style="text-align: center;">Goal</h3>
                                            <p class="text1">To provide efficient, Quality, Technology-driven and Gender-Sensitive Products abd Services.</p>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-1"></div>

                        <div class="col-lg-4">
                            <div class="card" style="border-radius: 20px;">
                                <div class="">
                                    <div class="text-center" style="margin-top: -100px">
                                        <img class="" src="{{ asset('template/img/2438132-removebg-preview.png') }}" width="90%" alt="user" />
                                    </div>
                                    <h3 class="card-title pt-2">
                                        <p class="login-box-msg" style="font-family: Courier;font-weight: bolder;font-size: 13pt;">
                                            Login here to generate Wi-Fi Voucher
                                        </p>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('postLogin')}}" method="post">
                                        @csrf

                                        @if(session('error'))
                                            <div class="alert alert-danger" style="font-size: 12pt;">
                                                <i class="fas fa-exclamation-triangle "></i> {{session('error')}}
                                            </div>
                                        @endif

                                        @if(session('success'))
                                            <div class="alert alert-success" style="font-size: 10pt;">
                                            <i class="fas fa-check"></i> {{session('success')}}
                                            </div>
                                        @endif
                                        
                                        <div class="input-group mb-3">
                                            <input type="text" id="studID_no" name="stud_id" placeholder="Enter Student ID Number" class="form-control" autofocus="" required="">
                                            <div class="input-group-append" style="background-color: #fff; border-radius: 5px 5px 5px 5px">
                                                <div class="input-group-text">
                                                    <span class="fas fa-id-card"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" required="">
                                            <div class="input-group-append" style="background-color: #fff; border-radius: 5px 5px 5px 5px">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-block" style="">
                                                        <i class="fas fa-check"></i> <b>Login</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="social-auth-links text-center mt-1 mb-1">
                                            OR
                                        </div>
                                        <p class="mb-0 text-center">
                                            <a href="{{ route('register') }}" class="text-center" style="color: #000 !important">
                                                Create your Account
                                            </a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    @include('partials.numpad_control')
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="margin-left: -5px;">
                                        <a href="{{ route('studlogin') }}" class="btn btn-app active">
                                            <i class="fas fa-sign-in"></i> <b>Login</b>
                                        </a>
                                        <a href="{{ route('register') }}" class="btn btn-app">
                                            <i class="fas fa-user-plus"></i> <b>Register</b>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <strong>Developed and Managed By:</strong> Management Information System Office
            <div class="float-right d-none d-sm-inline-block">
                {{-- <b>Version</b> 3.2.0 --}}
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark" style="border-radius: 20px; background-color: rgba(255, 255, 255, 0.8) !important;">
            @include('students.partials.numpad_control')
        </aside>
    </div>

    <script src="{{ asset('particles/particles.js') }}"></script>
    <script src="{{ asset('particles/app.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>

    <!-- jquery-validation -->
    <script src="{{ asset('template/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('template/plugins/toastr/toastr.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('template/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        document.getElementById("password").addEventListener("focus", function () {
            currentInput = "password";
        });
    </script>
    
    @include('script.numpad')

    <script>
        $(document).ready(function(){
            $('#v1').click();
        });
    </script>

</body>
</html>
   