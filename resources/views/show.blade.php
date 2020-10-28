<ul>
    {{-- <li><img src="{{$book->image}}"></li> --}}
    <li>{{$book->title}}</li>
    <li>{{$book->author}}</li>
    <li>{{$book->genre}}</li>
    <li>{{$book->pages}}</li>
    <li>{{$book->edition}}</li>
    <li>{{$book->year}}</li>
    <li>{{$book->isbn}}</li>
</ul>

<form action = "{{route("books.destroy", $book->$id)}}" method = POST>

    @method("DELETE")
    @csrf
    <input type="submit" value="Cancella">
</form>