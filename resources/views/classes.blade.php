@extends('layout.index')
@section('body')
    <div class="container">
        <span>{{$classes[0]->id}}</span>
        <span>{{$classes[0]->name}}</span>
        <span>{{$classes[0]->taille}}</span>
    </div>

    <div class="container">
        <span>{{$classes[1]->id}}</span>
        <span>{{$classes[1]->name}}</span>
        <span>{{$classes[1]->taille}}</span>
    </div>
@endsection