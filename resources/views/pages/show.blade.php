@extends('layouts.main-layout')
@section('content')
<h1>show movie</h1>
    <p>
        {{$movie -> title}} - {{$movie -> release}} <br>
        {{$movie -> subtitle}}
    </p>
@endsection