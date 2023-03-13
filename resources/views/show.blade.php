@extends('welcome')

@section('content')
<div class="container-fluid">

    <h1>{{$book->title}} - {{$book->price}}€</h1>
    <h3>{{$book->author}} - Publised: {{$book->publised_date}}</h3>
    <h4>ISBN: {{$book->isbn}}</h4>
    <p>{{$book->description}}</p>


</div>

@stop