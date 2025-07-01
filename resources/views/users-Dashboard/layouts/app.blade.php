<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CK GEO TECH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/user-dashboard.css')}}" rel="stylesheet">
    @yield('css')

</head>

<body class="antialiased">
    <!-- <div class="wrapper"> -->

    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="header-left">
                <div class="logo-section">
                    <div class="logo">CK</div>
                    <div class="company-info">
                        <h1>CK GEO TECH</h1>
                        <p>Project Dashboard</p>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <div class="project-info">
                    <i class="fas fa-folder-open"></i>
                    <span>Silchar Survey Project</span>
                </div>

                <div class="user-menu" style="position: relative;">
                    <div class="user-avatar" id="avatar-toggle" style="cursor: pointer;">{{auth()->user()->name}}</div>

                    <div class="dropdown-menu" id="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </header>
    <!-- Header End -->

    <div>
        @yield('content')
    </div>
    <!-- </div> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/slick/slick.min.js')}}"></script>

    <!-- Template Javascript -->
    @yield('js')
    <script src="{{asset('js/app.js')}}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const avatar = document.getElementById('avatar-toggle');
            const dropdown = document.getElementById('dropdown-menu');

            avatar.addEventListener('click', function(e) {
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            });

            // Optional: click outside to close
            document.addEventListener('click', function(e) {
                if (!document.querySelector('.user-menu').contains(e.target)) {
                    dropdown.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Get the current URL path
            var path = window.location.pathname;

            // Loop through each nav-link and check if the href matches the current path
            $(".nav-item.nav-link").each(function() {
                if ($(this).attr("href") === path) {
                    $(this).addClass("active");
                }
            });
        });
    </script>
</body>

</html>
