@extends('body')

@section('scripts')
<script src="{{ asset('js/multi-selection-diet-intollerances.js') }}" defer></script>
<script src="{{ asset('js/popup.js') }}" defer></script>
<script src="{{ asset('js/sport.js') }}" defer></script>
@endsection

@section('content')
<div class="sport-div">
  <h4>PRATICHI SPORT?</h4>
  <div class="select-div">
      <div class="select-item-yes" onclick="showPopup()">
        <div>
          <svg width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="tick"> <polyline fill="none" points="3.7 14.3 9.6 19 20.3 5" stroke="#2cc92f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> </g> </g> </g></svg>
        </div>
        SI
      </div>

      <div class="select-item-no" onclick="closePopup()">
        <div>
          <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 5L4.99998 19M5.00001 5L19 19" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </div>
        NO
      </div>
  </div>

  <h5>Inserisci i giorni di allenamento</h5>

  <form action="" name="sport" method="post">
    <span id="box-data">
    <input type="date" id="data-allenamento" name="data-allenamento">
    </span> 
    <select name="diet[]" class="custom-select" id="snackSelect" multiple>
      <option value="si" selected>si</option>
      <option value="si">si</option>
      <option value="no" selected>no</option>
      <option value="no">no</option>
      <option value="colazione pranzo" selected>colazione pranzo</option>
      <option value="colazione pranzo">colazione pranzo</option>
      <option value="pranzo cena" selected>pranzo cena</option>
      <option value="pranzo cena">pranzo cena</option>
      <option value="dopo cena" selected>dopo cena</option>
      <option value="dopo cena">dopo cena</option>
    </select>
    <div class="add" onclick="addDate()">
        <svg viewBox="0 0 24 24" fill="none" height="50px" width="50px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    </div>
    <div class="bottoni">
      <a href="{{route('caratteristiche.create')}}">INDIETRO</a>
      <input type="submit" class="confirm-button" value="AVANTI">
    </div>
  </form>
</div>

@endsection