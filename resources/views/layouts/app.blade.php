<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Mirza Zaidan</title>

    <!-- BOXICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>