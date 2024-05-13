@extends('body')

@section('content')
<!--div esterna-->
<section class="register-section">
        <!--titolo-->
        <span><strong>REGISTRAZIONE</strong></span>
        <!--inizio form-->
        {{Form::open(array('route'=>'register.store', 'class'=>'input-container-form'))}}
        {{Form::token()}}

            <div class= "input-div">
                {{ Form::label('nome','Nome')}}
                @if($user === null)
                {{ Form::text('nome', null, ['placeholder' => 'Nome'])}}
                @else
                {{ Form::text('nome', $user->nome, ['placeholder' => 'Nome']) }}
                @endif
                    @if ($errors->first('nome'))
                    <ul>
                        <li>
                            Nome è obbligatorio
                        </li>   
                    </ul>
                    @endif
            </div>
            <div class= "input-div">
                {{ Form::label('cognome','Cognome')}}
                {{ Form::text('cognome', null, ['placeholder' => 'Cognome'])}}
                    @if ($errors->first('cognome'))
                    <ul>
                        <li>
                            Cognome è obbligatorio
                        </li>   
                    </ul>
                    @endif
            </div>
            <div class= "input-div">
                {{Form::label('citta','Città')}}
                {{Form::text('citta', null, ['placeholder' => 'Città'])}}
                @if ($errors->first('citta'))
                <ul>
                    <li>
                        Città è obbligatoria
                    </li>   
                </ul>
                @endif
            </div>
            <div class= "input-div">
                {{ Form::label('email','E-mail')}}
                @if($user === null)
                {{ Form::text('email', null, ['placeholder' => 'E-mail'])}}
                @else
                {{ Form::text('email', $user->email, ['placeholder' => 'E-mail', 'readonly' => 'readonly']) }}
                @endif
                @if ($errors->first('email'))
                    <ul>
                        <li>
                            Email non valida
                        </li>   
                    </ul>
                @endif
            </div>
            <div class= "input-div">
                {{ Form::label('password','Password')}}
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
            <div class= "input-div">
                {{ Form::label('conferma-password','Conferma password')}}
                {{ Form::password('password_confirmation', ['id' => 'ConfermaPassword', 'placeholder' => 'Conferma password'])}} 
            </div>
            <div class="input-container-btn-div">
                <a href="{{route('home')}}" class="torna-indietro">Indietro</a>
                {{ Form::submit('Avanti',['class'=>'input-container-btn'])}} 
            </div>
        {{Form::close()}}
        <!--fine form-->
  </section>
  @endsection