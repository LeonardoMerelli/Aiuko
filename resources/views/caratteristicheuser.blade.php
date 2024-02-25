@extends('body')

@section('content')
<!--div esterna-->
<section class="caratteristiche-section">
        <!--titolo-->
        <h2>Caratteristiche <br> personali</h2>
        <!--inizio form-->
        {{Form::open(array('route'=>'caratteristiche.store', 'class'=>'input-container-form'))}}
        {{Form::token()}}

          <div class= "input-div">
            {{ Form::label('eta','Eta')}}
            {{ Form::number('eta', null, ['placeholder' => 'Eta'])}}
              @if ($errors->first('eta'))
              <ul>
                <li>
                    Eta è obbligatorio
                </li>   
              </ul>
              @endif
          </div>
          <div class= "input-div">
              {{ Form::label('peso','Peso')}}
              {{ Form::number('peso', null, ['placeholder' => 'Peso'])}}
                  @if ($errors->first('peso'))
                  <ul>
                      <li>
                          Peso è obbligatorio
                      </li>   
                  </ul>
                  @endif
          </div>
          <div class= "input-div">
              {{ Form::label('altezza','Altezza')}}
              {{ Form::number('altezza', null, ['placeholder' => 'Altezza'])}}
                  @if ($errors->first('peso'))
                  <ul>
                      <li>
                          Altezza è obbligatorio
                      </li>   
                  </ul>
                  @endif
          </div>
          <div class= "radio-div">
              <div class="radio-label">
                  {{Form::radio('attivita','sedentario',true)}}
                  {{Form::label('inLineRadio1','Sedentario')}}
              </div>
              <div class="radio-label">
                  {{Form::radio('attivita','leggera')}}
                  {{Form::label('inLineRadio1','Leggera')}}
              </div>
              <div class="radio-label">
                  {{Form::radio('attivita','moderata')}}
                  {{Form::label('inLineRadio1','Moderata')}}
              </div>
              <div class="radio-label">
                  {{Form::radio('attivita','intensa')}}
                  {{Form::label('inLineRadio1','Intensa')}}
              </div>
              <div class="radio-label">
                  {{Form::radio('attivita','moltointensa')}}
                  {{Form::label('inLineRadio1','Molto intensa')}}
              </div>
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
              <a href="" class="torna-indietro">Indietro</a>
              {{ Form::submit('Avanti',['class'=>'input-container-btn'])}} 
          </div>
        {{Form::close()}}
        <!--fine form-->
</section>
@endsection