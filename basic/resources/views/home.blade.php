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
            <a id="top"></a>
            <br>
            <div class="profilePic">
                <img src="{{ url('storage/img/colinProfile60px.jpg') }}" alt="wallpaper" />
            </div>
            <br>
            <p> Hello my name is {{$user->first_name}} {{$user->last_name}}.</p>
            <br>
            @foreach ($user->job as $job)
            <p>I have Experiance as a {{$job->title}}.</p>
            <br>
            <strong><p>A small Description:</p></strong>
            <br>
            <p>{{$job->description}}.</p>
            <br>
            @endforeach
            <br>
            <p> I live at {{$user->address}}.</p><br>
            <p> If you need a developer you can contact me.</p><br>
            <p>My phone number is {{$user->phone}}.</p><br>
            <p> Or you can send a mail to {{$user->email}}.</p><br>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ullam libero quidem, reiciendis debitis voluptas iure temporibus maiores explicabo ipsam illo distinctio tempora accusantium molestiae fuga vero inventore vel aliquid?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit repellat fugiat alias beatae qui ullam dicta voluptatem. Perspiciatis saepe, ea molestias unde ipsum rem delectus. Ea aliquam minus excepturi vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis omnis a aperiam harum sed quia ipsam, alias velit. Consequatur, ullam ut? Vel dolore eum aperiam ex enim odio aspernatur alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo, accusantium earum sapiente quod quo rem ducimus! Iusto, fuga ullam? Sunt vero ullam dolorum quas et est porro, omnis inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo distinctio quia adipisci, perspiciatis temporibus alias! Consequatur tempore, ipsa non distinctio laboriosam illo, quia ab amet, corrupti eos vel porro dignissimos. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum dolor in error quas quam voluptates. Eos dicta optio temporibus! Aspernatur dolorum alias molestias accusantium, delectus sint a iste impedit iusto!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ullam libero quidem, reiciendis debitis voluptas iure temporibus maiores explicabo ipsam illo distinctio tempora accusantium molestiae fuga vero inventore vel aliquid?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit repellat fugiat alias beatae qui ullam dicta voluptatem. Perspiciatis saepe, ea molestias unde ipsum rem delectus. Ea aliquam minus excepturi vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis omnis a aperiam harum sed quia ipsam, alias velit. Consequatur, ullam ut? Vel dolore eum aperiam ex enim odio aspernatur alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo, accusantium earum sapiente quod quo rem ducimus! Iusto, fuga ullam? Sunt vero ullam dolorum quas et est porro, omnis inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo distinctio quia adipisci, perspiciatis temporibus alias! Consequatur tempore, ipsa non distinctio laboriosam illo, quia ab amet, corrupti eos vel porro dignissimos. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum dolor in error quas quam voluptates. Eos dicta optio temporibus! Aspernatur dolorum alias molestias accusantium, delectus sint a iste impedit iusto!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ullam libero quidem, reiciendis debitis voluptas iure temporibus maiores explicabo ipsam illo distinctio tempora accusantium molestiae fuga vero inventore vel aliquid?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit repellat fugiat alias beatae qui ullam dicta voluptatem. Perspiciatis saepe, ea molestias unde ipsum rem delectus. Ea aliquam minus excepturi vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis omnis a aperiam harum sed quia ipsam, alias velit. Consequatur, ullam ut? Vel dolore eum aperiam ex enim odio aspernatur alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo, accusantium earum sapiente quod quo rem ducimus! Iusto, fuga ullam? Sunt vero ullam dolorum quas et est porro, omnis inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo distinctio quia adipisci, perspiciatis temporibus alias! Consequatur tempore, ipsa non distinctio laboriosam illo, quia ab amet, corrupti eos vel porro dignissimos. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum dolor in error quas quam voluptates. Eos dicta optio temporibus! Aspernatur dolorum alias molestias accusantium, delectus sint a iste impedit iusto!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ullam libero quidem, reiciendis debitis voluptas iure temporibus maiores explicabo ipsam illo distinctio tempora accusantium molestiae fuga vero inventore vel aliquid?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit repellat fugiat alias beatae qui ullam dicta voluptatem. Perspiciatis saepe, ea molestias unde ipsum rem delectus. Ea aliquam minus excepturi vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis omnis a aperiam harum sed quia ipsam, alias velit. Consequatur, ullam ut? Vel dolore eum aperiam ex enim odio aspernatur alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo, accusantium earum sapiente quod quo rem ducimus! Iusto, fuga ullam? Sunt vero ullam dolorum quas et est porro, omnis inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo distinctio quia adipisci, perspiciatis temporibus alias! Consequatur tempore, ipsa non distinctio laboriosam illo, quia ab amet, corrupti eos vel porro dignissimos. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum dolor in error quas quam voluptates. Eos dicta optio temporibus! Aspernatur dolorum alias molestias accusantium, delectus sint a iste impedit iusto!</p>
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
