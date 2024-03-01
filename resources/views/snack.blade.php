@extends('body')

@section('scripts')
<script src="{{ asset('js/multi-selection-diet-intollerances.js') }}" defer></script>
<script src="{{ asset('js/popup.js') }}" defer></script>
@endsection

@section('content')
<div class="snack-div">
  <span><strong>PASTI</strong></span>
  <h5>FAI SNACK DURANTE IL GIORNO</h5>
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
  <div id="popup" class="popup">
    <hr>
    <p>Quando desideri fare lo snack?</p>
    <div class="select-div-popup">
      <div class="select-div">
        @if(in_array('colazione pranzo', []))
        <div class="select-item selected">
        @else
        <div class="select-item">
        @endif
          <span>Colazione <br> - <br> Pranzo</span>
        </div>
        @if(in_array('pranzo cena', []))
        <div class="select-item selected">
        @else
        <div class="select-item">
        @endif
        <span>Pranzo <br> - <br> Cena</span>
        </div>
        @if(in_array('dopo cena', []))
        <div class="select-item selected">
        @else
        <div class="select-item">
        @endif
        <span>Dopo <br> Cena</span>
        </div>
      </div>
    </div>
    <br>
    <hr>
  </div>
  <form action="" method="post">
    <h5>Scrivi i tuoi alimenti preferiti</h5>
    <textarea name="preferenze" id="preferenze"></textarea>
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
    <div class="bottoni">
      <a href="{{route('caratteristiche.create')}}">INDIETRO</a>
      <input type="submit" class="confirm-button" value="AVANTI">
    </div>
  </form>
</div>

@endsection