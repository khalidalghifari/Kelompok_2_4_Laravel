<!doctype html>
<html lang="en">

<head>
    <title>Doctor Appointment Management System || Home Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet">

    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet">

    <link href="/assets/css/templatemo-medic-care.css" rel="stylesheet">
</head>

<body id="top">
    @include('sweetalert::alert')

    <main>
        @include('layouts.partials.navbar-patient')

        @yield('content')
    </main>
    @include('layouts.partials.footer-patient')
    <!-- JAVASCRIPT FILES -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/scrollspy.min.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>
