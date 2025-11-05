@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/HomepageStylesheet.css') }}">
    <div class="FlexContainer">
        <div class="ImageContainer">
            <a href="{{ route('Listpage') }}">
                <img class="HomepageImageLinks" src="{{ asset('Assets/HomepageDogImage.jpg') }}" alt="Find your new best friend">
            </a>
            <div class="OverlayText">Find your new best friend</div>
        </div>

        <div class="ImageContainer">
            <a href="{{ route('Formpage') }}">
                <img class="HomepageImageLinks" src="{{ asset('Assets/HomepageCatImage.jpg') }}" alt="Put an animal up for adoption">
            </a>
            <div class="OverlayText">Put an animal up for adoption</div>
        </div>
    </div>

@endsection
