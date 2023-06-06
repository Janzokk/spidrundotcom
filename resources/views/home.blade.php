@extends('layout')

@section('content')
    <div class="d-flex flex-column w-100">
        <div class="d-flex flex-column align-items-center">
            <h1 id="title" class="homeTitle d-flex justify-content-center align-items-center w-100"><img id="titleImage" src="{{ asset('icon.png') }}"/>WELCOME TO SPIDRUNDOTCOM</h1>
            <button id="toGames" class="d-flex justify-content-center align-items-center text-light w-50" onclick="window.location.replace('{{ route('games') }}')">
                <img src="{{ asset('d-pad.png') }}">
                <h3>CHECK GAMES</h3>
            </button>
        </div>
    </div>
@endsection