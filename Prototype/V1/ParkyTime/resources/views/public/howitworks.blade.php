@extends('layouts.app')
@section('header')
    <link rel="stylesheet" href="/styles/home.css">
@endsection
@section('content')
    <div class="container">
        <div id="home">

            <div id="how-it-works">
                <a> <p> HOW IT WORKS </p> </a>
            </div>
        </div>
        <div id="location">
            <h2> HOW IT WORKS </h2>
            <p> </p>
            <figure>
                <a href="NewHostForm.html">
                    <img src="images/house.png" alt="downtown" width="300">
                </a>
                <figcaption>LIST A SPOT</figcaption>
            </figure>
            <figure>
                <a href="BookSpot.html">
                    <img src="images/spot.png" alt="richmond" width="300" height="200">
                </a>
                <figcaption> BOOK A SPOT </figcaption>
            </figure>
            <figure>
                <a href="Policies.html">
                    <img src="images/money-sign.png" alt="burnaby" width="300" height="200">
                </a>
                <figcaption> POLICIES </figcaption>
            </figure>
            <a> <p id="see-all"> </p> </a>
        </div>
    </div>
@endsection