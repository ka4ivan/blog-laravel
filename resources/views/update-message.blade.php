@extends('layouts.app')


@section('title__block')Edit message @endsection

@section('content')
<h1>Edit message</h1>


<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Input name</label>
        <input type="text" name="name" id="name" placeholder="Your name" value="{{$data->name}}" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="email">Input email</label>
        <input type="email" name="email" id="email" placeholder="Your email" value="{{$data->email}}" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="title">Input title</label>
        <input type="text" name="title" id="title" placeholder="Your title" value="{{$data->title}}" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" placeholder="Your message"  cols="30" rows="10">{{$data->message}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
