<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- site metas -->
    <title> @yield('title')</title>
    <link rel="icon" href="{{asset('public/home/img/logo.png')}}" type="image/gif">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <!-- bootstrap css -->
    {{-- swit aler --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{ asset('public/home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/home/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('public/home/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('public/home/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('public/home/img/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/home/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    {{-- Font Chữ --}}
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('public/home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/home/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<!-- body -->

<body class="main-layout" style="font-family: Mulish, sans-serif">

    <div class="header_section">
        @include('layout.headerHome')
    </div>

    @yield('content')
    @include('layout.footerHome')

    <!-- Javascript files-->
    <script src="{{ asset('public/home/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/home/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/home/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/home/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('public/home/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('public/home/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('public/home/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('public/home/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            /* debugger; */
                    $(".fancybox").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });

                    $('#myCarousel').carousel({
                        interval: false
                    });

                    //scroll slides on swipe for touch enabled devices
                    $("#myCarousel").on("touchstart", function(event) {

                        var yClick = event.originalEvent.touches[0].pageY;
                        $(this).one("touchmove", function(event) {

                            var yMove = event.originalEvent.touches[0].pageY;
                            if (Math.floor(yClick - yMove) > 1) {
                                $(".carousel").carousel('next');
                            } else if (Math.floor(yClick - yMove) < -1) {
                                $(".carousel").carousel('prev');
                            }
                        });
                        $(".carousel").on("touchend", function() {
                            $(this).off("touchmove");
                        });
                    });
        });
    </script>
</body>

</html>
