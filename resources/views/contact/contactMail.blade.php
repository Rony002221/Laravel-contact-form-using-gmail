@component('mail::message')

    <h1>New Messege from {{$var['email']}}</h1> <br>
    <h3>Name : {{$var['name']}}</h3> <br>
    <h3>Subject : {{$var['subject']}}</h3> <br>
    <p>Message : {{$var['message']}} </p>
    
@endcomponent
