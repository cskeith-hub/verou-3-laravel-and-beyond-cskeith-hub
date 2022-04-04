@extends('template.index')

@section('body')
<br>
<div class="contactWelcome">
    <h1> Contact Me </h1>
</div>
<br>
<div class="mapView">
    <img src="{{ url('storage/img/schommelstraat71.png') }}" alt="Map view schommelstraat" />
</div>
<br>
<div class="contactInfoContainer">
    <div class="contactInfo">

        <div class="profilePicture">
            <img src="{{ url('storage/img/colinProfile60px.jpg') }}" alt="Profile Picture" />
        </div>
        <br>

        <ul>
            <li>Contact:</li>
            <li>Colin Renkema</li>
            <br>
            <li>Telefoon Number:</li>
            <li>+32-476361577</li>
            <br>
            <li>Email:</li>
            <li>cskeith01@gmail.com</li>
            <br>
            <li>Adres:</li>
            <li>Schommelstraat 71 9000</li>
            <br>
            <li>Location:</li>
            <li>Ghent, Belgium</li>
            <br> 
        </ul>
    </div>
    <br>
    <div class="contactForm">
        <form action="contactQuestion" method="post">

            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="firstname">
            <br>

            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lastname">
            <br>

            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email">
            <br>

            <label for="subject">Question</label><br>
            <textarea id="subject" name="subject" placeholder="Ask your Question.." style="height:200px"></textarea>
            <br>

            <input type="submit" value="Submit">
            <br>
        </form>
        <br>
    </div>
</div>

@endsection
