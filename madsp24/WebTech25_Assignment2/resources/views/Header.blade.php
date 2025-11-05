<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <link rel="stylesheet" href="{{ asset('css/HeaderStyleSheet.css') }}">
</head>
<body>

<div class="horizontalHeaderContainer">
    <a href="{{ route('Homepage') }}">
        <img class="headerLogo" src="{{ asset('Assets/Paw_logo.png') }}" alt="Logo">
    </a>
    <p class="headerLinks">Welcome to the Pet Em<span class="pawText">PAW</span>rium</p>

</div>

</body>
</html>
