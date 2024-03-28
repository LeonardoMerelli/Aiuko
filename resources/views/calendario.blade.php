@extends('body')

@section('scripts')
<script src="{{ asset('js/calendario.js') }}" defer></script>
@endsection

@section('content')
<div class="calendario-div" id="calendario-div">
  <h4>CALENDARIO</h4>
  <form action="" name="calendario" id="calendario" method="post">
    <div class="select-variazioni" id="select-variazioni">
        <span id="box-data">
        <input type="date" id="data-calendario" name="data-calendario">
        <select name="variazione" id="variazione">
        <option class="cazzo" disabled selected>Seleziona una voce</option>
        <option value="assenza">Assenza</option>
        <option value="al sacco">Al sacco</option>
        </select>
    </div>
    <div class="add" onclick="addDateMotivo()">
        <svg viewBox="0 0 24 24" fill="none" height="50px" width="50px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    </div>
    <div class="bottoni">
      <a href="{{route('caratteristiche.create')}}">INDIETRO</a>
      <input type="submit" class="confirm-button" value="AVANTI">
    </div>
  </form>
</div>

@endsection