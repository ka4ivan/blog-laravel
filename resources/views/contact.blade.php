@extends('layouts.app')


@section('title__block')Contact @endsection

@section('content')
<h1>Contact</h1>


<form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Input name</label>
        <input type="text" name="name" id="name" placeholder="Your name" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="email">Input email</label>
        <input type="email" name="email" id="email" placeholder="Your email" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="title">Input title</label>
        <input type="text" name="title" id="title" placeholder="Your title" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" placeholder="Your message" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Send</button>
</form>
@endsection
