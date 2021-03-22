@extends('layout.main')

@section('content')

<h1>Calculator</h1>
<form action="{{route('do-math')}}" method="POST">
    <div>{{$r}}</div>
    X:<input type="text" name="x">
    Y:<input type="text" name="y">
    <button type="submit">Do math</button>
    @csrf

</form>

@endsection

@section('title') Calculator @endsection
