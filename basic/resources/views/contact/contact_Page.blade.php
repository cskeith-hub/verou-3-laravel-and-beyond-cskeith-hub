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

<div class="alertS">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
</div>
<div class="contactInfoContainer">
    <div class="contactInfo">
        <div class="midSection">
            <div class="profilePicture">
                <img src="{{ url('storage/img/colinProfile60px.jpg') }}" alt="Profile Picture" />
            </div>
        </div>
        <ul>
            <strong>
                <li>Name:</li>
            </strong>
            <li>Colin Renkema</li>
            <strong>
                <li>Telephone Number:</li>
            </strong>
            <li>+32 4 76 36 15 77</li>
            <strong>
                <li>Email:</li>
            </strong>
            <li>cskeith01@gmail.com</li>
            <strong>
                <li>Address:</li>
            </strong>
            <li>Schommelstraat 71</li>
            <strong>
                <li>Country:</li>
            </strong>
            <li>Ghent, Belgium</li>
        </ul>
    </div>
    <br>
    <div class="contactForm">
        <form action="contactQuestion" method="post">
            @csrf
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="firstname">
            <br>

            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lastname">
            <br>

            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email">
            <br>

            <label for="subject">Question:</label><br>
            <textarea id="subject" name="subject" placeholder="Ask your Question.." style="height:200px"></textarea>
            <br>
            <input type="submit" id="submit" name="submit" value="submit">
            <br>
        </form>
        <br>
    </div>
</div>

@endsection
