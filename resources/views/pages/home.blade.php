@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center py-5">
    <h1>Welcome to My CV</h1>
    <p class="lead">Click below to view my CV</p>
    <a href="{{ route('cv.index') }}" class="btn btn-primary mt-3">View CV</a>
</div>
@endsection
