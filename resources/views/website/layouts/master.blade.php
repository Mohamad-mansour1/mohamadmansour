<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta
      content="Expert software developer specialized in Laravel, Php, Javascript, MySql, Sql Server, Html, CSS , Bootstrap. Experience in building robust and scalable web applications. Skilled in utilizing Laravel's advanced features for custom solutions. Strong understanding of modern web development practices."
      name="description"/>
    <meta
      content="Mohamad Mansour, software developer, web developer, web application developer, Laravel, PHP, JavaScript, HTML, CSS, web development, web design, web technologies, web programming, web app development, software development, web applications, web services, web application design, software engineer, web developer portfolio"
      name="keywords"/>
    <meta content="Mohamad Mansour" name="author" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Mohamad Mansour - Software Developer" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mohamadmansour.me" />
    {{-- <meta property="og:image" content="https://mohamadmansour.me/public/assets/img/profile/profile-img.jpg"/> --}}
    <meta property="og:description" content="Explore my portfolio as a Software developer specialized in Laravel, Php, Javascript, MySql, Sql Server, Html, CSS , Bootstrap."/>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
    <title>Mohamad Mansour</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/new/logo.png') }}">
</head>
<body data-bs-spy="scroll" data-offset="70">

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="preloader__wrapper">
                    <div class="preloader__circle">
                        <div class="preloader__circle-line preloader__circle-line--1"></div>
                        <div class="preloader__circle-line preloader__circle-line--2"></div>
                        <div class="preloader__circle-line preloader__circle-line--3"></div>
                        <div class="preloader__circle-line preloader__circle-line--4"></div>
                        <div class="preloader__circle-line preloader__circle-line--5"></div>
                        <div class="preloader__circle-line preloader__circle-line--6"></div>
                        <div class="preloader__circle-line preloader__circle-line--7"></div>
                        <div class="preloader__circle-line preloader__circle-line--8"></div>
                        <div class="preloader__circle-line preloader__circle-line--9"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('website.layouts.header')

    @yield('content')
    
    @include('website.layouts.footer')


    <div class="go-top">
        <i class='bx bxs-up-arrow-alt'></i>
        <i class='bx bxs-up-arrow-alt'></i>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/js/smoothscroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    <script>
        var d = new Date();
        var y = d.getFullYear() - 2000;
        document.getElementById('birthday').innerHTML = y + ' Years';
    </script>
</body>

</html>
