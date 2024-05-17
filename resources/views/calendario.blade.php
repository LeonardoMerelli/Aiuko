@extends('body')

@section('scripts')
<script src="{{ asset('js/calendario.js') }}" defer></script>
@endsection

@section('content')
<div class="calendario-div" id="calendario-div">
  <div class="titolo-calendario"><strong>CALENDARIO</strong></div>
  <div class="spiegazione-calendario">Inserisci le variazioni al tuo piano, specificando giorno, pasto e motivo</div>
  <form action="{{route('calendario.store')}}" name="calendario" id="calendario" method="post">
    @csrf
    <div class="select-variazioni" id="select-variazioni">
      <span id="box-data">
        <input type="date" id="data-calendario" name="data-calendario">
        <select name="pasto" id="pasto">
          <option disabled selected>Seleziona una voce</option>
          <option value="colazione">Colazione</option>
          <option value="pranzo">Pranzo</option>
          <option value="merenda">Merenda</option>
          <option value="cena">Cena</option>
        </select>
        <select name="variazione" id="variazione">
          <option disabled selected>Seleziona una voce</option>
          <option value="colazione">Assenza</option>
          <option value="pranzo">Al sacco</option>
          <option value="merenda">Poco tempo</option>
        </select>
        <div id="poco-tempo" style="display:none">
          <label for="tempo">Tempo</label>
          <input type="number" id="tempo" name="tempo">
        </div>
      </span>
    </div>
    <div class="add" onclick="addDateMotivo()">
        <svg viewBox="0 0 24 24" fill="none" height="50px" width="50px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    </div>
    <input type="hidden" name="contenutiInputData" id="contenutiInputData">
    <input type="hidden" name="contenutiInputSelectPasto" id="contenutiInputSelectPasto">
    <input type="hidden" name="contenutiInputSelectVariazione" id="contenutiInputSelectVariazione">
    <input type="hidden" name="contenutiInputTempo" id="contenutiInputTempo">
    <div class="bottoni">
      <a href="{{route('sport.create')}}">INDIETRO</a>
      <input type="submit" class="confirm-button" value="AVANTI">
    </div>
  </form>
</div>

@endsection