@extends('layouts.header')

@section('title')
    <title>registration</title>
@endsection

@section('content')
    <div class="block">
        <div class="block-title">
            <h1>registration</h1>
        </div>
        <div class="block-main">
            <form action="{{route('registration-form')}}" method="post">
                @csrf
                <p>come up with a nickname:</p>
                <input type="text" name="nickname">
                <p>specify email:</p>
                <input type="text" name="email">
                <p>come up with a password:</p>
                <input type="password" name="password">
                <p>Repeat password:</p>
                <input type="password" name="password-confirmation">
                @include('layouts.alert')
                <p><input type="submit"></p>
            </form>
        </div>
        <div class="footer-block">
        </div>
    </div>
    <hr>
@endsection
