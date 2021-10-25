<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/hyipland/demo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Sep 2021 10:52:02 GMT -->

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

    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.png')}}" type="image/x-icon">
</head>

<body>
    <div class="main--body dashboard-bg">
        <!--========== Preloader ==========-->
        <div class="loader">
            <div class="loader-inner">
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <!--========== Preloader ==========-->


        <!--=======SideHeader-Section Starts Here=======-->
        <div class="notify-overlay"></div>
        <section class="dashboard-section">
            <div class="side-header oh">
                <div class="cross-header-bar d-xl-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="site-header-container">
                    <div class="side-logo">
                        <a href="{{route('dashboard')}}">
                            <img src="{{URL::asset('assets/images/logo/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="{{route('dashboard')}}" class="active"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('profile')}}"><i class="fas fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a href="{{route('create_invite')}}"><i class="fas fa-plus-square"></i>Create Invites</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-mail-bulk"></i>Saved Invites</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-video"></i>Make a Video</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}"><i style="color: red;" class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dasboard-body">
                <div class="dashboard-hero">
                    <div class="header-top">
                        <div class="container">
                            <div class="mobile-header d-flex justify-content-between d-lg-none align-items-center">
                                <div class="author">
                                    <img src="{{URL::asset('assets/images/dashboard/author.png')}}" alt="dashboard">
                                </div>
                                <div class="cross-header-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="mobile-header-content d-lg-flex flex-wrap justify-content-lg-between align-items-center">
                                <ul class="support-area">
                                    <li>
                                        <a href="#0"></a>
                                    </li>
                                    <li>
                                        <a href="Mailto:info@hyipland.com"><span class="__cf_email__" data-cfemail="dbb2b5bdb49bb3a2b2abb7bab5bff5b8b4b6"></span> </a>
                                    </li>
                                </ul>
                                <div class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">
                                    <ul class="dashboard-right-menus">
                                        @if($loggedUserInfo)
                                        <li>
                                            <a href="#0" class="author">
                                                <div class="thumb">
                                                    @if($loggedUserInfo['picture'] == NULL)
                                                    <img src="{{URL::asset('assets/images/dashboard/user.png')}}" alt="{{env('APP_NAME')}}">
                                                    @else
                                                    <img src="{{$loggedUserInfo['picture']}}" alt="{{env('APP_NAME')}}">
                                                    @endif
                                                    <span class="checked">
                                                        <i class="flaticon-checked"></i>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title">{{$loggedUserInfo['fullname']}}</h6>
                                                </div>
                                            </a>
                                            <div class="notification-area">
                                                <div class="author-header">
                                                    <div class="thumb">
                                                        @if($loggedUserInfo['picture'] == NULL)
                                                        <img src="{{URL::asset('assets/images/dashboard/user.png')}}" alt="{{env('APP_NAME')}}">
                                                        @else
                                                        <img src="{{$loggedUserInfo['picture']}}" alt="{{env('APP_NAME')}}">
                                                        @endif
                                                    </div>
                                                    <h6 class="title">{{$loggedUserInfo['fullname']}}</h6>
                                                    <a href="#mailto:johndoe@gmail.com"><span class="__cf_email__" data-cfemail="85cfeaedebe1eae0c5e2e8e4ece9abe6eae8">{{$loggedUserInfo['email']}}</span></a>
                                                </div>
                                                <div class="author-body">
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('profile')}}"><i class="far fa-user"></i>Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('logout')}}"><i style="color: red;" class="fas fa-sign-out-alt"></i>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @else
                                        <li>
                                            <a href="">
                                                <button type="submit" class="custom-button border-0">Sign In</button>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-hero-content text-white">
                        <h3 class="title"><?php echo $page ?></h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('dashboard')}}">Home</a>
                            </li>
                            <li>
                                <?php echo $page ?>
                            </li>
                        </ul>
                    </div>
                </div>

                @yield('content')

                <div class="container-fluid sticky-bottom">
                    <div class="dashboard-footer">
                        <div class="d-flex flex-wrap justify-content-between m-0-15-none">
                            <div class="left">
                                &copy; 2020 <a href="#0">{{env('APP_NAME')}}</a> | All right reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======SideHeader-Section Ends Here=======-->


    </div>

    <script data-cfasync="false" src="{{URL::asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
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
    <script src="{{URL::asset('assets/js/chart.js')}}"></script>
    <script src="{{URL::asset('assets/js/circle-progress.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>

    <script>
        $('.progress1.circle').circleProgress({
            value: .75,
            fill: {
                gradient: ['#00cca2', '#00cca2']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
        });
        $('.progress2.circle').circleProgress({
            value: .90,
            fill: {
                gradient: ['#8d16e8', '#8d16e8']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(90 * progress) + '<i>%</i>');
        });
        $('.progress3.circle').circleProgress({
            value: .85,
            fill: {
                gradient: ['#ef764c', '#ef764c']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(85 * progress) + '<i>%</i>');
        });
    </script>

</body>


<!-- Mirrored from pixner.net/hyipland/demo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Sep 2021 10:52:16 GMT -->

</html>