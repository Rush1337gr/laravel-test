@extends('layouts.header')

@section('title')
    <title>profile</title>
@endsection

@section('content')
    <div class="block">
        <div class="block-title">
            <h1>profile</h1>
        </div>
        <div class="block-main">
            <div class="block-main-header">
                <img class="block-line" src="img/1.jpg" alt="">
                <div  class="block-line">
                    <h2>id: {{$user->id}}</h2>
                    <h2>nickname: {{$user->nickname}}</h2>
                    <h2>status: {{$user->status}}</h2>
                    <h2>email: {{$user->email}}</h2>
                    <h2>title: {{$user->title}}</h2>
                    <h2>registration date: {{$user->created_at}}</h2>
                    <h2>name: {{$user->name}}</h2>
                    <h2>surname: {{$user->surname}}</h2>
                    <h2>year of birth: {{$user->year_birth}}</h2>
                </div>
            </div>
        </div>
        <div class="footer-block">
        </div>
    </div>
    <hr>
@endsection
