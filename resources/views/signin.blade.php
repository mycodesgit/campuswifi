<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CPUS | CAMPUS WIFI</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free-v6/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.css') }}">
    <style type="text/css">
        .navbar-light .navbar-nav .nav-item.active .nav-link.active{
            background-color: #f1c40f !important ;
            color: #000 !important;
            border-radius: 3px;
        }
        .bg-greenn{
            background-color: #1f5036;
            color: #000 !important;
        }
        .btn-success {
            background-color: #044011 !important;
        }
        .nav-link{
            color: #fff !important;
        }
        .btn-app1 {
          border-radius: 3px;
          background-color: #f8f9fa;
          border: 1px solid #ddd;
          color: #6c757d;
          font-size: 12px;
          height: 60px;
          margin: 0 0 10px 10px;
          min-width: 80px;
          padding: 15px 5px;
          position: relative;
          text-align: center;
        }
        .content-header {
            position: fixed !important;
            width: 100% !important;
            z-index: 999 !important;
        }

        .container-fluid {
            padding-right: 0 !important;
            padding-left: 0 !important;
            margin-right: auto !important;
            margin-left: auto !important;
        }
        .btn-app{
            color: #1f5036;
        }
        .btn-app:hover{
            background-color: #187744;
            color: #fff;
            border: #ffc107;
        }
        .btn-app2{
            border-radius: 3px !important;
            border: 1px solid #044011 !important;
            height: 80px !important;
            margin: 0 0 20px 20px !important;
            min-width: 90px !important;
            padding: 30px 5px;
            color: #1f5036;
        }
        
        .buttonlarge {
            font-size: 18pt !important;
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
    </style>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed text-sm">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light bg-greenn">
            <div class="container-fluid">
                <a href="" class="navbar-brand">
                    <img src="{{ asset('template/img/CPSU_L.png') }}" alt="AdminLTE Logo" class="brand-image img-circle" style="box-shadow: 0 0 4px white;">
                    <span class="brand-text text-light"> Central Philippines State University</span>
                </a>
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-user"></i> Signed In: Admin
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

            
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid" style="margin-top: auto">
                    <div class="row pt-2 bg-gray rounded">
                            <div class="col-sm-10">
                                <div>
                                    <a class="btn btn-app">
                                        <i class="fas fa-sign-in"></i> Sign In
                                    </a>
                                    <a class="btn btn-app">
                                        <i class="fas fa-user-plus"></i> Sign Up
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-2" style="text-align: right;" >
                                <div>
                                    {{-- <a class="btn btn-app pull-right">
                                        <i class="fas fa-sign-out-alt"></i> Sign Out
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row" style="padding-top: 100px;">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" id="addOptionTask">
                                        <input type="hidden" name="action" value="add_optiontask">

                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <input type="text" id="studID_no" name="studID_no" placeholder="0000-0000-K" class="form-control form-control-lg" autofocus>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-lg">
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <button type="submit" name="btn-submit" class="btn btn-success btn-lg btn-block">
                                                        <i class="fas fa-sign-in fa-lg buttonlarge"></i> <b class="buttonlarge">Login</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container" style="text-align: center;">
                                        <div class="col-md-12">
                                            <a id="btn-1" class="btn btn-app2">
                                                <i class="fas fa-1"></i>
                                            </a>

                                            <a id="btn-2" class="btn btn-app2">
                                                <i class="fas fa-2"></i>
                                            </a>

                                            <a id="btn-3" class="btn btn-app2">
                                                <i class="fas fa-3"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                            <a id="btn-4" class="btn btn-app2">
                                                <i class="fas fa-4"></i>
                                            </a>

                                            <a id="btn-5" class="btn btn-app2">
                                                <i class="fas fa-5"></i>
                                            </a>

                                            <a id="btn-6" class="btn btn-app2">
                                                <i class="fas fa-6"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                            <a id="btn-7" class="btn btn-app2">
                                                <i class="fas fa-7"></i>
                                            </a>

                                            <a id="btn-8" class="btn btn-app2">
                                                <i class="fas fa-8"></i>
                                            </a>

                                            <a id="btn-9" class="btn btn-app2">
                                                <i class="fas fa-9"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                            <a id="btn-0" class="btn btn-app2">
                                                <i class="fas fa-0"></i>
                                            </a>

                                            <a id="btn-minus" class="btn btn-app2">
                                                <i class="fas fa-minus"></i>
                                            </a>

                                            <a id="btn-reset" class="btn btn-app2" style="background-color: #fff782; color: #000;">
                                                <i class="fas fa-arrow-left"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                            <a id="btn-k" class="btn btn-app2" style="background-color: #fff782; color: #276e47;">
                                                <i class="fas fa-k"></i>
                                            </a>

                                            <a id="btn-g" class="btn btn-app2" style="background-color: #fff782; color: #276e47;">
                                                <i class="fas fa-g"></i>
                                            </a>

                                            <a id="btn-u" class="btn btn-app2" style="background-color: #fff782; color: #276e47;">
                                                <i class="fas fa-u"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <strong>Maintain and Manage by <a href="#">MIS</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>

<script>
    var currentInput = "studID_no";
    function updateSelect(value) {
        var inputElement = document.getElementById(currentInput);
        var currentValue = inputElement.value;
        currentValue = currentValue.replace(/[^a-zA-Z0-9-]/g, '');
        var newValue = currentValue + value;

        if (newValue.length > 12) {
            newValue = newValue.substring(0, 12);
        }
        var parts = newValue.split('-');
        if (parts.length >= 2) {
            parts[0] = parts[0].substring(0, 4);
            parts[1] = parts[1].substring(0, 4);
        }
        if (parts.length >= 3) {
            var lastPart = parts[2];
        if (lastPart.length > 1) {
            lastPart = lastPart.charAt(0);
        }
            lastPart = lastPart.replace(/[^A-Z]/g, '');
            parts[2] = lastPart;
        }
        newValue = parts.join('-');
        inputElement.value = newValue;
    }

    document.getElementById("btn-1").addEventListener("click", function () {
        updateSelect("1");
    });

    document.getElementById("btn-2").addEventListener("click", function () {
        updateSelect("2");
    });

    document.getElementById("btn-3").addEventListener("click", function () {
        updateSelect("3");
    });

    document.getElementById("btn-4").addEventListener("click", function () {
        updateSelect("4");
    });

    document.getElementById("btn-5").addEventListener("click", function () {
        updateSelect("5");
    });

    document.getElementById("btn-6").addEventListener("click", function () {
        updateSelect("6");
    });

    document.getElementById("btn-7").addEventListener("click", function () {
        updateSelect("7");
    });

    document.getElementById("btn-8").addEventListener("click", function () {
        updateSelect("8");
    });

    document.getElementById("btn-9").addEventListener("click", function () {
        updateSelect("9");
    });

    document.getElementById("btn-0").addEventListener("click", function () {
        updateSelect("0");
    });

    document.getElementById("btn-minus").addEventListener("click", function () {
        updateSelect("-");
    });

    document.getElementById("btn-k").addEventListener("click", function () {
        updateSelect("K");
    });

    document.getElementById("btn-g").addEventListener("click", function () {
        updateSelect("G");
    });

    document.getElementById("btn-u").addEventListener("click", function () {
        updateSelect("U");
    });

    document.getElementById("btn-reset").addEventListener("click", function () {
        var inputElement = document.getElementById("studID_no");
        var currentValue = inputElement.value;
        var newValue = currentValue.substring(0, currentValue.length - 1);
        inputElement.value = newValue;
    });
    document.getElementById("password").addEventListener("focus", function () {
        currentInput = "password";
    });

    document.getElementById("studID_no").addEventListener("focus", function () {
        currentInput = "studID_no";
    });

    
    var buttons = document.querySelectorAll(".btn-app2");

    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            if (button.classList.contains("clicked")) {
                button.classList.remove("clicked");
            } else {
                button.classList.add("clicked");
            }
            buttons.forEach(function (otherButton) {
                if (otherButton !== button) {
                    otherButton.classList.remove("clicked");
                }
            });
        });
    });

</script>



</body>
</html>
