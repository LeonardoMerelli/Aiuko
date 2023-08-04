@extends('body')

@section('content')
<div class="home-div">
    <div class="home-top-div">
        <div class="shade">
            <div class="logo"></div>
        </div>
    </div>
    <div class="home-bottom-div">
        <div>
            <a href=" {{route('register.create')}} " class="go-to-registration">Sign up with email</a>
            <p>Already have account? <a href="{{route('login.create')}}">Log in</a></p>
        </div>
    </div>

</div>

@endsection