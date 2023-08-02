@extends('body')

@section('content')
<section class="login-section">
    <h2>Login</h2>
    <div class = "login-div">
              {{Form::open(array('route'=>'login.store', 'class'=>'login-form'))}}
              {{Form::token()}}
            <div>
                {{ Form::label('username','Username',['class'=>'label-form'])}}
                {{ Form::text('username')}}
            </div>
            @if ($errors->first('username'))
            <ul>
                @foreach($errors->get('username') as $message)
                    <li>
                        {{$message}}
                    </li>   
                @endforeach
            </ul>
            @endif
            <div>
                {{ Form::label('password','Password',['class'=>'label-form'])}}
                {{ Form::password('password')}}
            </div>
            @if ($errors->first('password'))
            <ul>
            @foreach($errors->get('password') as $message)
                    <li>
                        {{$message}}
                    </li>   
                @endforeach
            </ul>
            @endif
            <div>
              {{ Form::submit('Login',['class'=>'login-btn'])}}
            </div>
              {{ Form::close() }}  
      </div>
</section>
@endsection


