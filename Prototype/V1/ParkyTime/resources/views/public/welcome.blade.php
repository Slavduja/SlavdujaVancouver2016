@extends('layouts.app')
@section('header')
    <link rel="stylesheet" href="/styles/home.css">
@endsection

@section('content')
    <div class="container">
        <div id="content">
            <header>
                <h1> Parky Time </h1>
            </header>
            <main>
                <div id="home">
                    <div id="intro">
                        <h1> FIND A SPOT </h1>
                        <p> Find affordable parking in Greater Vancouver</p>
                    </div>

                    <div id="how-it-works">
                        <a href="HowItWorks.html"> <p> HOW IT WORKS </p> </a>
                    </div>
                    <div id="search-box">
                        <input type="text" placeholder="Where to park?">
                        <input type="datetime" placeholder="Date">
                        <input type="number" placeholder="Start Time">
                        <input type="number" placeholder="End Time">
                        <a href="AvailableSpots.html"><input type="submit" value="Search"></a>
                    </div>
                </div>
                <div id="location">
                    <h2> Locations </h2>
                    <p> Find a spot near you. </p>
                    <figure>
                        <img src="images/downtown.jpg" alt="downtown" width="300">
                        <figcaption>DOWN TOWN</figcaption>
                    </figure>
                    <figure>
                        <img src="images/richmond.jpg" alt="richmond" width="300" height="200">
                        <figcaption>RICHMOND</figcaption>
                    </figure>
                    <figure>
                        <img src="images/burnaby.jpg" alt="burnaby" width="300" height="200">
                        <figcaption> BURNABY</figcaption>
                    </figure>
                    <a> <p id="see-all"> SEE ALL </p> </a>
                </div>
            </main>
            <footer>

                <div class="float-right">
                    <h3> Site Map </h3>
                    <ul>
                        <li><a href="index.html"> <p>Home</p></a>  </li>
                        <li> Become a Host </li>
                        <li> Sign Up </li>
                        <li> Log In </li>
                        <li> Others </li>
                    </ul>
                </div>

                <div class="float-right">
                    <h3> Hosting </h3>
                    <ul>
                        <li> Why Host</li>
                        <li> Trust and Safety </li>
                        <li> List a Spot </li>
                    </ul>
                </div>
                <div class="float-right">
                    <h3 > Company</h3>
                    <ul>
                        <li><a href="AboutUs.html">About Us</a></li>
                        <li><a href="Careers.html"><p>Careers</p></a></li>
                        <li> Press </li>
                        <li><a href="Policies.html"> Policies </a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
@endsection
