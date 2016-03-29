@extends('layouts.app')
@section('header')
    <link rel="stylesheet" href="../styles/maps.css">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5X9-dw66On842kfDY6cLrJ91pu-Lam_I&libraries=places&callback=initMap"
            async defer></script>
    <script src="../scripts/googleMap.js" type="text/javascript" defer></script>

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

{{--<script>--}}
    {{--function initMap() {--}}
        {{--// Try HTML5 geolocation.--}}
        {{--if (navigator.geolocation) {--}}
            {{--navigator.geolocation.getCurrentPosition(function(position) {--}}

                {{--var pos = {--}}
                    {{--lat: position.coords.latitude,--}}
                    {{--lng: position.coords.longitude--}}
                {{--};--}}

                {{--var map = new google.maps.Map(document.getElementById('map'), {--}}
                    {{--center: pos,--}}
                    {{--zoom: 15--}}
                {{--});--}}

                {{--var infoWindow = new google.maps.InfoWindow({map: map});--}}


                {{--infoWindow.setPosition(pos);--}}
                {{--infoWindow.setContent('Location found.');--}}
                {{--map.setCenter(pos);--}}
            {{--}, function() {--}}
                {{--handleLocationError(true, infoWindow, map.getCenter());--}}
            {{--});--}}
        {{--} else {--}}
            {{--// Browser doesn't support Geolocation--}}
            {{--handleLocationError(false, infoWindow, map.getCenter());--}}
        {{--}--}}
    {{--}--}}

    {{--function handleLocationError(browserHasGeolocation, infoWindow, pos) {--}}
        {{--infoWindow.setPosition(pos);--}}
        {{--infoWindow.setContent(browserHasGeolocation ?--}}
                {{--'Error: The Geolocation service failed.' :--}}
                {{--'Error: Your browser doesn\'t support geolocation.');--}}
    {{--}--}}
{{--</script>--}}