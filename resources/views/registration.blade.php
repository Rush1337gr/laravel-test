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
            <form action="#" method="post">
                <p>come up with a nickname:</p>
                <input type="text" name="nickname">
                <p>specify email:</p>
                <input type="text" name="email">
                <p>come up with a password:</p>
                <input type="password" name="password">
                <p>Repeat password:</p>
                <input type="password" name="password">
                <div class="alert-error"><p>message</p></div>
                <p><input type="submit"></p>
            </form>
        </div>
        <div class="footer-block">
        </div>
    </div>
    <hr>
@endsection
