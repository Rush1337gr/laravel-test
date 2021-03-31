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
                    <h2>id: {{Auth::User()->id}}</h2>
                    <h2>nickname: {{Auth::User()->nickname}}</h2>
                    <h2>status: {{Auth::User()->status}}</h2>
                    <h2>email: {{Auth::User()->email}}</h2>
                    <h2>title: {{Auth::User()->title}}</h2>
                    <h2>registration date: {{Auth::User()->created_at}}</h2>
                    <h2>name: {{Auth::User()->name}}</h2>
                    <h2>surname: {{Auth::User()->surname}}</h2>
                    <h2>year of birth: {{Auth::User()->year_birth}}</h2>
                    <a href="{{route('edit')}}"><button>edit</button></a>
                    <a href="{{route('logout')}}"><button>exit</button></a>
                </div>
            </div>
        </div>
        <div class="footer-block">
        </div>
    </div>
    <hr>
@endsection
