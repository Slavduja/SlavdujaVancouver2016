@extends('layouts.app')
@section('header')
    <link rel="stylesheet" href="../styles/maps.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5X9-dw66On842kfDY6cLrJ91pu-Lam_I&libraries=places&callback=initMap"
            async defer></script>
    <script src="../scripts/googleMap.js" type="text/javascript"></script>

@endsection
@section('content')
    <div class="container">
        <input id="pac-input" class="controls" type="text"
               placeholder="Enter a location">
        <div id="type-selector" class="controls">
            <input type="radio" name="type" id="changetype-all" checked="checked">
            <label for="changetype-all">All</label>

            <input type="radio" name="type" id="changetype-establishment">
            <label for="changetype-establishment">Establishments</label>

            <input type="radio" name="type" id="changetype-address">
            <label for="changetype-address">Addresses</label>

            <input type="radio" name="type" id="changetype-geocode">
            <label for="changetype-geocode">Geocodes</label>
        </div>
        <div id="map"></div>
    </div>
@endsection