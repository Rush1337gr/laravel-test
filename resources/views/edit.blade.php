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
                            <form action="" method="post">
                                <h2>img: <input name="picture" value="" type="file" /></h2>
                                <h2>name: <input type="text" value="{{Auth::User()->name}}" name="name" /></h2>
                                <h2>surname: <input type="text" value="{{Auth::User()->surname}}" name="surname" /></h2>
                                <h2>year of birth: <input type="date" value="{{Auth::User()->year_birth}}" name="year_birth" /></h2>
                                <h2>password: <input type="password" value="" name="password" /></h2>
                                <input type="submit" value="save">
                            </form>
                            <a href="{{route('profile')}}"><button>exit</button></a>
                        </div>
                </div>
            </div>
        <div class="footer-block">
        </div>
    </div>
    <hr>
@endsection
