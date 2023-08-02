@extends('body')

@section('content')
<!--div esterna-->
<section class="register-section">
        <!--titolo-->
        <h2>Registrazione</h2>
        <!--inizio form-->
        {{Form::open(array('route'=>'register.store', 'class'=>'input-container-form'))}}
        {{Form::token()}}

            <div class= "input-div">
                {{ Form::label('nome','Nome')}}
                {{ Form::text('nome')}}
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
                {{ Form::text('cognome')}}
                    @if ($errors->first('cognome'))
                    <ul>
                        <li>
                            Cognome è obbligatorio
                        </li>   
                    </ul>
                    @endif
            </div>
            <div class= "input-div">
                {{Form::label('eta','Età')}}
                {{Form::number('eta')}}
                @if ($errors->first('eta'))
                <ul>
                    <li>
                        Età è obbligatoria
                    </li>   
                </ul>
                @endif
            </div>
            <div class= "input-div">
                {{ Form::label('telefono','Telefono')}}
                {{ Form::text('telefono')}}
                @if ($errors->first('telefono'))
                <ul>
                    <li>
                        Telefono non valido
                    </li>   
                </ul>
                @endif
            </div>
            <div class= "input-div">
                {{Form::label('citta','Città')}}
                {{Form::text('citta')}}
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
                {{ Form::text('email')}}
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
            <div class= "input-div">
                {{ Form::label('conferma-password','Conferma password')}}
                {{ Form::password('password_confirmation')}}  
            </div> 
            <div class= "radio-div">
                <div class="radio-label">
                    {{Form::radio('genere','uomo',true)}}
                    {{Form::label('inLineRadio1','Uomo')}}
                </div>
                <div class="radio-label">
                    {{Form::radio('genere','donna')}}
                    {{Form::label('inLineRadio1','Donna')}}
                </div>
                <div class="radio-label">
                    {{Form::radio('genere','altro')}}
                    {{Form::label('inLineRadio1','Altro')}}
                </div>
            </div>
            <div class="input-container-btn-div">
                <a href="" class="torna-indietro">Torna indietro</a>
                {{ Form::submit('Avanti',['class'=>'input-container-btn'])}} 
            </div>
        {{Form::close()}}
        <!--fine form-->
  </section>
  @endsection