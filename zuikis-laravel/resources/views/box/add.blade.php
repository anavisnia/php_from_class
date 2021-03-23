<form action="{{route('box.add_to_box', $box)}}" method="POST">
    <input type="text" name="add" value="0">
    <button type="submit">Add to Box</button>
    @csrf
</form>
