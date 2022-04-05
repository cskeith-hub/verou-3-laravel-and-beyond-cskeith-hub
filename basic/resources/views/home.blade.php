@extends('template.index')

@section('body')
<div id="name">
       
    <h1>
        <i class="material-icons">computer</i>
        Colin Renkema
        <i class="material-icons">computer</i>
    </h1>
    <p>Learning FullStack WebDevelopment</p>
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
            {{-- <img src="{{ url('storage/img/wallpaper.jpg') }}" alt="wallpaper" /> --}}
            <p> Hello my name is {{$user->first_name}} {{$user->last_name}}.</p><br>
            <p> I live on {{$user->address}}.</p><br>
            <p> If u need a Developer u can Contact me.</p><br>
            <p>My phone number is {{$user->phone}}.</p><br>
            <p> Or u can send a mail to {{$user->email}}.</p><br>
        </div>
    </div>
    <div class="menuBar">
        <div class="reverse">
          <a href="{{route('previous',['id'=>$user->previous()])}}">Previous</a>
        </div>
        <div class="upButton">Up</div>
        <div class="forward"> 
            <a href="{{route('next',['id'=>$user->next()])}}">Next</a>
        </div>
    </div>
    
    
   
</div>
@endsection