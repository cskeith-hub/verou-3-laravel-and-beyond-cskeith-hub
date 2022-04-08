@extends('template.index')

@section('body')
<div id="name">
    <h1>
        <i class="material-icons">computer</i>
        Colin Renkema
        <i class="material-icons">computer</i>
    </h1>
    <p>Learning Full Stack Web Development</p>
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
            <a id="top"></a>
            <br>
            <p> Hello my name is {{$user->first_name}} {{$user->last_name}}</p>
            <br>
            @foreach ($user->job as $job)
            <br>
            <strong>
                <p>I have Experiance with {{$job->title}}</p>
            </strong>
            <br>
            <strong>
                <p>A small Description:</p>
            </strong>
            <br>
            <p>{{$job->description}}</p>
            @endforeach
            <br>
            <p> I live at {{$user->address}}.</p><br>
            <p> If you need a developer you can contact me.</p><br>
            <p>My phone number is {{$user->phone}}</p><br>
            <p> Or you can send a mail to {{$user->email}}</p><br>
            <br>
        </div>
    </div>
    <div class="menuBar">
        <div class="reverse">
            <a href="{{route('user',['id'=>$previous])}}">Back</a>
        </div>
        <br>
        <div class="upButton">
            <a href="#top">Up</a>
        </div>
        <br>
        <div class="forward">
            <a href="{{route('user',['id'=>$next])}}">Next</a>
        </div>
    </div>



</div>

@endsection
