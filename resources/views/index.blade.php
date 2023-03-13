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
                <td>{{$book->title}}</td>                
                <td>{{$book->author}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->price}}€</td>
                <td>
                    <form action="/books/{{$book->id}}" method="get">
                        <button class="btn btn-outline-dark" >Show details</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

    {{ $books->links() }}

</div>

@stop