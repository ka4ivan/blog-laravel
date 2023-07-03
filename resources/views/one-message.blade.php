@extends('layouts.app')


@section('title__block'){{$data->title}} @endsection

@section('content')
    <h1>{{$data->title}}</h1>
    <div class="alert alert-info">
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }} - {{ $data->name }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Edit</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
    </div>
@endsection


