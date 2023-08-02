@extends('body')

@section('content')
<section class="login-section">
    <h2>Login</h2>
              {{Form::open(array('route'=>'login.store', 'class'=>'login-form'))}}
              {{Form::token()}}
            <div>
                {{ Form::label('username','Username',['class'=>'label-form'])}}
                {{ Form::text('username')}}
                
                @if ($errors->first('username'))
            <ul>
                    <li>
                        Errore
                    </li>  
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
                <a href="" class="torna-indietro">Indietro</a>
                {{ Form::submit('Avanti',['class'=>'login-btn'])}}
            </div>
              {{ Form::close() }}  
</section>
@endsection


