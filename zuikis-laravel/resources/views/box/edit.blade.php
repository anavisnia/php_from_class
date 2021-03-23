<form action="{{route('box.update', $box)}}" method="POST">
    <input type="text" name="bananas_in_box" value="{{$box->bananas}}">
    <button type="submit">Edit Box</button>
    @csrf
</form>
