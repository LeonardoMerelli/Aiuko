@extends('body')

@section('content')
<section class="login-section">
    <h2>Login</h2>
              {{Form::open(array('route'=>'login.store', 'class'=>'login-form'))}}
              {{Form::token()}}
            <div>
                {{ Form::label('email','Email',['class'=>'label-form'])}}
                {{ Form::text('email')}}

                @if ($errors->first('email'))
            <ul>
                @foreach($errors->get('email') as $message)
                    <li>
                        {{$message}}
                    </li>   
                @endforeach
            </ul>
            @endif
            </div>
            <div>
                {{ Form::label('password','Password',['class'=>'label-form'])}}
                {{ Form::password('password')}}

                @if ($errors->first('password'))
            <ul>
            @foreach($errors->get('password') as $message)
                    <li>
                        {{$message}}
                    </li>   
                @endforeach
            </ul>
            @endif
            </div>
            <div class="login-container-btn">
                <a href="{{route('home')}}" class="torna-indietro">Indietro</a>
                {{ Form::submit('Avanti',['class'=>'login-btn'])}}
            </div>
              {{ Form::close() }}  
</section>
@endsection


