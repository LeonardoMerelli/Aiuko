@extends('body')

@section('content')
<section class="profilo-section">
    <div class="upper-profilo">
        <div class="foto">

        </div>
        <div class="nome-cognome">
            <h5>Nome Cognome</h5>
        </div>
    </div>

    <div class="profilo-dati">
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        <div class="dato"></div>
        
    </div>
    <div class="modifica">
      <a href="{{route('caratteristiche.create')}}">MODIFICA</a>
    </div>
</section>
@endsection