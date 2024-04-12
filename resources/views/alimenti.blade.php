@extends('body')

@section('scripts')
<script src="{{ asset('js/alimenti.js') }}" defer></script>
@endsection

@section('content')
<div class="sport-div" id="sport-div">
  <h4>ALIMENTI POSSEDUTI</h4>
  
  <h5>Inserisci gli alimenti che possiedi</h5>

    <div class="specifiche">
        <h6>Nome</h6>
        <h6>Quantità</h6>
    </div>

  <form action="" name="sport" method="post">
    <span id="box-data">
        <div id="prova">
            <input type="text" id="nome-alimento" name="nome-alimento" placeholder="Nome">
            <input type="text" id="quantità-alimento" name="quantità-alimento" placeholder="Grammi">
        </div>
    </span>
    <div class="add" onclick="addAlimento()">
        <svg viewBox="0 0 24 24" fill="none" height="50px" width="50px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    </div>
    <div class="bottoni">
      <a href="{{route('caratteristiche.create')}}">INDIETRO</a>
      <input type="submit" class="confirm-button" value="AVANTI">
    </div>
  </form>
</div>

@endsection