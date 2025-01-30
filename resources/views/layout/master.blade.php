<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Hi-soft - IT Solutions and Services Company HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hi-soft - IT Solutions and Services Company HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,400i,500,500i,600,600i,700,700i&display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{asset('css/font-awesome/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/flaticon/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup/magnific-popup.css')}}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>
<body>

@include('layout._navbar')

@yield('content')


@include('layout._footer')

<!-- JS Global Compulsory (Do not remove)-->
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/popper/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/swiper/swiper.min.js')}}"></script>
<script src={{asset('js/swiperanimation/SwiperAnimation.min.js')}}></script>
<script src={{asset('js/counter/jquery.countTo.js')}}></script>
<script src={{asset('js/owl-carousel/owl.carousel.min.js')}}></script>
<script src={{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}></script>

<!-- Template Scripts (Do not remove)-->
<script src={{asset('js/custom.js')}}></script>

</body>
</html>
