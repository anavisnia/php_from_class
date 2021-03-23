<form action="{{route('author.update',[$author->id])}}" method="POST">
    Name: <input type="text" name="author_name" value="{{$author->name}}">
    Surname: <input type="text" name="author_surname" value="{{$author->surname}}">
    <button type="submit">EDIT</button>
    @csrf
</form>
