@extends('layouts.header')

@section('title')
    <title>authorization</title>
@endsection

@section('content')
    <div class="block">
        <div class="block-title">
            <h1>authorization</h1>
        </div>
        <div class="block-main">
            <form action="#" method="post">
                <p>nickname:</p>
                <input type="text" name="nickname">
                <p>password:</p>
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
