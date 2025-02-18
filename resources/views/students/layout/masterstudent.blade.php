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

    <style type="text/css">
        .voucher {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }

        .code {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .text {
            font-size: 18px;
            color: #555;
        }
        .coupon-card{
            background: linear-gradient(135deg, #ffc107, #04401f);
            color: #fff;
            text-align: center;
            padding: 40px 80px;
            border-radius: 15px;
            box-shadow: 0 10px 10px 0 rgba(0,0,0,0.15);
            position: relative;

        }
        .logo{
            width: 100px;
            border-radius: 8px;
            margin-bottom: 20px;

        }
        .coupon-card h3{
            font-size: 28px;
            font-weight: 400;
            line-height: 40px;

        }
        .coupon-card p{
            font-size: 15px;

        }
        .coupon-row{
            display: flex;
            align-items: center;
            margin: 25px auto;
            width: fit-content;

        }
       #cpnCode {
            border: 2px dashed #fff; 
            padding: 10px 20px;
            font-weight: bolder;
            font-size: 20pt;
            display: inline-block; 
        }

        #cpnBtn{
            border: 1px solid #fff;
            background: #fff;
            padding: 10px 20px;
            color: #7158fe;
            cursor: pointer;
        }
        .circle1, .circle2{
            background: #ffffff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);

        }
        .circle1{
            left: -25px;
        }
        .circle2{
            right: -25px;
        }
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('template/img/bg-campuswifi.png') }}');
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
        <nav class="main-header navbar navbar-expand-md border-bottom-0" style="background-color: #134c2c">
            <div class="container-fluid">
                <a href="" class="navbar-brand" style="color: #fff;font-family: Courier;">
                    CPSU CAMPUS WIFI
                </a>
                <div class="" style="z-index: 999">
                    {{-- <img src="{{ asset('template/img/CPSU_L.png') }}" style="width:80px;" class="center-top"> --}}
                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" role="button" style="color: #fff">
                            <i class="fas fa-sign-out"></i> Logout 
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
                <div class="container-fluid">
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-lg-3"></div>
                        {{-- <div class="col-lg-3">
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
                        </div> --}}

                        <div class="col-lg-1"></div>
                        <div class="col-lg-4"></div>

                        <div class="col-lg-4">
                            <div class="card"> 
                                <div class="card-header">
                                    <h3 class="card-title pt-2">
                                        <p class="login-box-msg" style="font-family: Courier;font-weight: bolder;font-size: 14pt;">
                                            <b style="color: #04401f">Welcome:</b> 
                                                {{ Auth::guard('kioskstudent')->user()->student->fname }} 
                                                {{ substr(Auth::guard('kioskstudent')->user()->student->mname, 0, 1) }}. 
                                                {{ Auth::guard('kioskstudent')->user()->student->lname }}
                                        </p>
                                    </h3>
                                </div>

                                <div class="card-body">
                                    <div class="container">
                                        <div id="voucher-section">
                                            @if(!isset($studvouch))
                                            <button class="btn btn-success btn-block" id="generateVoucherBtn">Generate Voucher</button>
                                            @else
                                            <div class="coupon-card">
                                                <img src="{{ asset('template/img/wifi.png') }}" class="logo">
                                                <h4>This is your voucher Code.<br>Use this as your username to login.</h4>
                                                <div class="coupon-row">
                                                    <span id="cpnCode" style="color: black;">{{ $studvouch->voucher_code }}</span>
                                                </div>
                                                <p>Total Time: 30 Hours per day in this Semester</p>
                                                <div class="circle1"></div>
                                                <div class="circle2"></div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        document.getElementById('generateVoucherBtn').addEventListener('click', function () {
            fetch("{{ route('generateVoucher') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.voucher_code) {
                    document.getElementById('voucher-section').innerHTML = `
                        <div class="coupon-card">
                            <img src="{{ asset('template/img/wifi.png') }}" class="logo">
                            <h4>This is your voucher Code.<br>Use this as your username to login.</h4>
                            <div class="coupon-row">
                                <span id="cpnCode" style="color: black;">${data.voucher_code}</span>
                            </div>
                            <p>Total Time: 30 Hours per day in this Semester</p>
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                        </div>`;
                    // Show success message with Swal.fire
                    Swal.fire({
                        icon: 'success',
                        title: 'Voucher Generated!',
                        // text: `Your voucher code: ${data.voucher_code}`,
                        confirmButtonColor: '#28a745',
                        timer: 5000
                    });

                } else if (data.error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed to Generate Voucher',
                        text: data.error,
                        confirmButtonColor: '#dc3545',
                        timer: 5000
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Network Error',
                    text: 'Failed to connect to the server. Please try again.',
                    confirmButtonColor: '#dc3545',
                    timer: 5000
                });
            });
        });
    </script>        
</body>
</html>
   