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
            {{ Form::number('eta', $user->eta, ['placeholder' => 'Eta'])}}
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
              {{ Form::number('peso', $user->peso, ['placeholder' => 'Peso'])}}
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
              {{ Form::number('altezza', $user->altezza, ['placeholder' => 'Altezza'])}}
                  @if ($errors->first('peso'))
                  <ul>
                      <li>
                          Altezza è obbligatorio
                      </li>   
                  </ul>
                  @endif
          </div>
          <div class= "radio-div">

          @if($user->attivitaGiornaliera == null)
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
          @endif

              <div class="radio-label">
               @if($user->attivitaGiornaliera == "sedentario")
                  {{Form::radio('attivita','sedentario',true)}}
                  {{Form::label('inLineRadio1','Sedentario')}}
                @else
                  {{Form::radio('attivita','sedentario')}}
                  {{Form::label('inLineRadio1','Sedentario')}}
                @endif
              </div>
              <div class="radio-label">
               @if($user->attivitaGiornaliera == "leggera")
                  {{Form::radio('attivita','leggera', true)}}
                  {{Form::label('inLineRadio1','Leggera')}}
                @else
                  {{Form::radio('attivita','leggera')}}
                  {{Form::label('inLineRadio1','Leggera')}}
                @endif
              </div>
              <div class="radio-label">
               @if($user->attivitaGiornaliera == "moderata")
                  {{Form::radio('attivita','moderata', true)}}
                  {{Form::label('inLineRadio1','Moderata')}}
                @else
                  {{Form::radio('attivita','moderata')}}
                  {{Form::label('inLineRadio1','Moderata')}}
                @endif
              </div>
              <div class="radio-label">
               @if($user->attivitaGiornaliera == "intensa")
                  {{Form::radio('attivita','intensa', true)}}
                  {{Form::label('inLineRadio1','Intensa')}}
                @else
                  {{Form::radio('attivita','intensa')}}
                  {{Form::label('inLineRadio1','Intensa')}}
                @endif
              </div>
              <div class="radio-label">
               @if($user->attivitaGiornaliera == "moltointensa")
                  {{Form::radio('attivita','moltointensa', true)}}
                  {{Form::label('inLineRadio1','Molto intensa')}}
                @else
                  {{Form::radio('attivita','moltointensa')}}
                  {{Form::label('inLineRadio1','Molto intensa')}}
                @endif
              </div>
          </div>

          @if($user->genere == null)
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
          @endif

          <div class= "radio-div">
                <div class="radio-label">
                @if($user->genere == "uomo")
                    {{Form::radio('genere','uomo',true)}}
                    {{Form::label('inLineRadio1','Uomo')}}
                @else
                    {{Form::radio('genere','uomo')}}
                    {{Form::label('inLineRadio1','Uomo')}}
                @endif
                </div>
            <div class="radio-label">
                @if($user->genere == "donna")
                    {{Form::radio('genere','donna', true)}}
                    {{Form::label('inLineRadio1','Donna')}}
                @else
                    {{Form::radio('genere','donna')}}
                    {{Form::label('inLineRadio1','Donna')}}
                @endif
                </div>
                <div class="radio-label">
                @if($user->genere == "altro")
                    {{Form::radio('genere','altro', true)}}
                    {{Form::label('inLineRadio1','Altro')}}
                @else
                    {{Form::radio('genere','altro')}}
                    {{Form::label('inLineRadio1','Altro')}}
                @endif
                </div>
          </div>

          <div class="input-container-btn-div">
              <a href="{{route('intollerances.create')}}" class="torna-indietro">Indietro</a>
              {{ Form::submit('Avanti',['class'=>'input-container-btn'])}} 
          </div>
        {{Form::close()}}
        <!--fine form-->
</section>
@endsection