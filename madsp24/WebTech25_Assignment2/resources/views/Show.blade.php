@extends('layout')

@section('content')

    <p>{{ $pet->petName }}</p>
    <p>{{ $pet->petDescription }}</p>

@endsection
