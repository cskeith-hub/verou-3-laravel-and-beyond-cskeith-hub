@extends('template.index')

@section('body')
<div id="name">

    <h1>
        <i class="material-icons">computer</i>
        Colin Renkema
        <i class="material-icons">computer</i>
    </h1>
    <p>Learning Full Stack Web Development</p>
    <br>
    <h6>Mobile First</h6>
</div>
<div class="field">
    <div class="frame">
        <div class="frontEnd">
            <div class="left"></div>
        </div>
        <div class="backEnd">
            <div class="right"></div>
        </div>
    </div>
    <div class="frameOne">
        <div class="dbContent">
            <br>
            <br>
            <br>
            <br>
            <br>
            <p> Add a photo of the user</p>
            <br>
            {{-- <img src="{{ url('storage/img/wallpaper.jpg') }}" alt="wallpaper" /> --}}
            <p> Hello my name is {{$user->first_name}} {{$user->last_name}}.</p><br>
            <p> I live at {{$user->address}}.</p><br>
            <p> If you need a developer you can contact me.</p><br>
            <p>My phone number is {{$user->phone}}.</p><br>
            <p> Or you can send a mail to {{$user->email}}.</p><br>
            <br>
        </div>
    </div>
    <div class="menuBar">
        <div class="reverse">
            <a href="{{route('user',['id'=>$previous])}}">Back</a>  
        </div>
        <br>
        <div class="upButton">Up</div>
        <br>
        <div class="forward">
            <a href="{{route('user',['id'=>$next])}}">Next</a>
        </div>
    </div>



</div>
@endsection
