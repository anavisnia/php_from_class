<ul>
    @foreach($boxes as $box)
    <li>
        ID: {{$box->id}} Bananas in box: {{$box->bananas}}
        {{--linke tuo metu iteruojamas boxas --}}
        <a href="{{route('box.edit', $box)}}">[EDIT]</a>
        <a href="{{route('box.add', $box)}}">[ADD]</a>
        <form action="{{route('box.destroy', $box)}}" method="POST">
            <button type="submit">[DELEATE]</button>
            @csrf
        </form>
    </li>
    @endforeach
</ul>
