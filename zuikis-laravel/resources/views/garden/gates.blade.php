@extends('layout.main')

@section('content')

<h1>Vartai I Soda</h1>

@foreach(range(1,5) as $key => $value)
@if($id > 55)
{{-- {{ $pirms }} ---- {{ $id }} --}}
{{ $vaisius }} ---- {{ $id }}
@endif
@endforeach

@endsection

@section('title') Mano Sodo Vartai @endsection
