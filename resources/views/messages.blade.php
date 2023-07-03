@extends('layouts.app')


@section('title__block')Messages @endsection

@section('content')
    <h1>Messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->title }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">See full</button></a>
        </div>
    @endforeach
@endsection


