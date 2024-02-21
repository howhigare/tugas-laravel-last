@extends('dashboard.layout.sidebar')

@section('content')
    <h1>Hello {{ auth()->user()->name }}</h1>
    <p>This is a home dashboard page</p>

    <a href="https://i.pinimg.com/originals/1f/a2/2b/1fa22befc10e3cbacd58c5b407a97997.gif">
        <img src="https://i.pinimg.com/originals/1f/a2/2b/1fa22befc10e3cbacd58c5b407a97997.gif" alt="Description of the image">
    </a>
@endsection
