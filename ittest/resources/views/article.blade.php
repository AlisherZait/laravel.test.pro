@extends('layout')
@section('title')
    {{$data->name_article}}
@endsection
@section('content')
    <div class="bg-dark" style="margin: 10px 0px -10px 0px">
    <img style="display: block; margin: 0 auto;" width="700" height="500" src="{{$data->img}}">
    <h1 align="center" style="color: white">{{$data->name_article}}</h1>
    <p style="color: white">{{$data->article}}</p>
        <br>
    </div>
@endsection

