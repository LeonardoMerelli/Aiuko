@extends('body')

@section('content')
<div class="home-div">
    <div class="home-top-div">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <div class="frase-motivazionale">
            Il tuo compagno di dieta intelligente
        </div>
    </div>
    <div class="home-bottom-div">
        <div>
            <section class="login-section">
                {{Form::open(array('route'=>'login.store', 'class'=>'login-form'))}}
                {{Form::token()}}
                <div> 
                    {{ Form::label('email','Email',['class'=>'label-form'])}}
                    {{ Form::text('email', null, ['placeholder' => 'Email'])}}

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
                    {{ Form::password('password', ['placeholder' => 'Password'])}}

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
                    {{ Form::submit('Avanti',['class'=>'login-btn'])}}
                </div>
                    {{ Form::close() }}  <div class="login-container-btn">
            </section>
            <p>Don't have account? <a href="{{route('register.create')}}">Register</a></p>
        </div>
    </div>

</div>

@endsection