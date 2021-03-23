@foreach($authors as $author)
<a href="{{route('author.edit', [$author])}}"> {{$author->name}} {{$author->surname}}</a>
<form action="{{route('author.destroy', [$author])}}" method="POST">
    <button type="submit">DELETE</button>
    @csrf
</form>
<br>
@endforeach
