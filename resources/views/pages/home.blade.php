@extends('layouts.main-layout')
@section('content')
<h1><a href="{{route('create')}}">create new</a></h1>
<ul>
    @foreach ($movies as $movie)
    <li><a href="{{ route('show', $movie -> id )}}">{{$movie -> title}}</a> - {{$movie -> release_date}} 
        <a href="{{route('edit', $movie -> id)}}">EDIT</a> - <a href="{{route('delete', $movie -> id)}}">DELETE</a>
    </li>
    @endforeach
</ul>
    
@endsection