@extends('welcome')

@section('content')
<div class="container-fluid">

    <h1>Books index:</h1>

    <!-- <form method="post"></form> -->

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title:</th>                
                <th>Author:</th>
                <th>Description:</th>
                <th>Price:</th>
            </tr>
        </thead>

        @foreach($books as $book)
        <tbody>
            <tr>
                <td>{{$book->id}} {{$book->title}}</td>                
                <td>{{$book->author}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->price}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    {{ $books->links() }}

</div>

@stop