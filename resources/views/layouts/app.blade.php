<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bacchus') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300i,400,600' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sm-clean.css') }}" /> 

</head>
<body>
    <div id="app">
        <div class="doc-loader">                        
            <img src="{{ asset('images/preloader@2x.gif') }}" alt="Loading..." />            
        </div>

        @guest
            
        @else
            @include('includes.menubar')
        @endguest

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    @guest
            
    @else
    <footer>
        <div class="footer box-wrapper">    
            <div class="container-fluid">  
                <div class="row no-gutter"> 
                    <div class="col-md-12 text-center">
                        <div class="footer-text">Hey, you can connect with us via major social network sites. Click on the logo below.</div>
                        <div class="social-footer">                
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-behance"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-rss"></span></a>            
                        </div>                            
                        <div class="copyright">© 2017 All Rights Reserved. - <a href="http://cocobasic.com">CocoBasic</a>.</div>
                    </div>                        
                </div>
            </div>
        </div>
    </footer>
    @endguest

    <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>  
    <script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.smartmenus.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.onePageMenu.js') }}"></script>        
    <script type='text/javascript' src="{{ asset('js/isotope.pkgd.js') }}"></script>        
    <script type='text/javascript' src="{{ asset('js/slick.min.js') }}"></script>       
    <script type='text/javascript' src="{{ asset('js/imagesloaded.pkgd.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
