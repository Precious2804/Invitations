<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/hyipland/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Sep 2021 10:51:36 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{env('APP_NAME')}}</title>

    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">

    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon">


</head>

<body>

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="account-section bg_img" data-background="{{URL::asset('assets/images/account-bg.jpg')}}">
        <div class="container">
            <div class="account-title text-center">
                <a href="{{route('/')}}" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span class="d-none d-sm-inline-block">To Home</span></span></a>
                <a href="{{route('/')}}" class="logo">
                    <img src="{{URL::asset('assets/images/invitation_white.png')}}" alt="Invitation" style="width: 200px;">
                </a>
            </div>


            @yield('content')

            <script src="{{URL::asset('assets/js/jquery-3.3.1.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/modernizr-3.6.0.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/plugins.js')}}"></script>
            <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/magnific-popup.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/jquery-ui.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/odometer.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/viewport.jquery.js')}}"></script>
            <script src="{{URL::asset('assets/js/nice-select.js')}}"></script>
            <script src="{{URL::asset('assets/js/owl.min.js')}}"></script>
            <script src="{{URL::asset('assets/js/paroller.js')}}"></script>
            <script src="{{URL::asset('assets/js/main.js')}}"></script>


</body>

</html>