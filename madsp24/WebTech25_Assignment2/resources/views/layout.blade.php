<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'The Pet EmPAWrium')</title>
    <link rel="stylesheet" href="{{ asset('css/HeaderStyleSheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/FooterStyleSheet.css') }}">
</head>
<body>
<header>
    <div class="horizontalHeaderContainer">
        <a href="{{ route('Homepage') }}">
            <img class="headerLogo" src="{{ asset('Assets/Paw_logo.png') }}" alt="Logo">
        </a>
        <p class="headerLinks">Welcome to the Pet Em<span class="pawText">PAW</span>rium</p>

    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <!-- Placeholder for the footer. Don't really know what should be here yet -->

    <div class="footerContainer">
        <p class="footerText">Website created by:</p>

        <div class="footerTextContainer">
            <p class="footerText">Mads Paaske Rasmussen</p>
            <p class="footerText">Fillip Esmann Davidsen</p>
        </div>
    </div>
</footer>
</body>
</html>
