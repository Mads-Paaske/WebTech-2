@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/ListPageStyleSheet.css')}}">
    <script src="{{asset('js/ListPage.js')}}" defer></script>


    <h1>Available Animals</h1>

    @if (session('success'))
        <div class="successBox">
            <p class="successText">Pet added!</p>
        </div>
    @endif


    <div  class="ListingsContainer" id="ListingsContainer">
        @foreach($pets as $pet)
            <div class="petBox">



                <p class="PetName">{{$pet -> petName}}</p>

                <img src="{{asset('Assets/PlaceholderImg.svg')}}" alt="Pet Image" class="PetImage">

                <div class="ButtonsGrid">
                    <button class="PetActionButton" id="UpdateButton">Update listing</button>

                    <form action="{{route('pets.show',$pet -> id)}}" method="POST">
                        @method('GET')

                        <button class="PetActionButton" id="ShowButton">More info</button>
                    </form>

                    <form action="{{route('pets.destroy',$pet -> id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="PetActionButton" id="DeleteButton" >Adopt pet</button>
                    </form>




                </div>

            </div>
        @endforeach
    </div>


@endsection
