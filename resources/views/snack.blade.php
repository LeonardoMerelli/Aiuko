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
    <div class="select-item selected">
      <div class="select-item" onclick="showPopup()">
        <div>
          <svg width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="tick"> <polyline fill="none" points="3.7 14.3 9.6 19 20.3 5" stroke="#2cc92f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> </g> </g> </g></svg>
        </div>
        SI
      </div>
    </div>
    <div class="select-item selected">
      <div class="select-item" onclick="closePopup()">
        <div>
          <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 5L4.99998 19M5.00001 5L19 19" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </div>
      NO
      </div>
    </div>
  </div>
  <div id="popup" class="popup">
        <p>Quando desideri fare lo snack?</p>
        <input type="text" id="snackTimeInput" placeholder="Inserisci il tempo">
        <button onclick="closePopup()">Conferma</button>
  </div>
  <form action="" method="post">
    <select name="diet[]" class="custom-select" id="snackSelect">
      <option value="si" selected>si</option>
      <option value="si">si</option>
      <option value="no" selected>no</option>
      <option value="no">no</option>     
    </select>
    <a href="">INDIETRO</a>
    <input type="submit" class="confirm-button" value="AVANTI">
  </form>
</div>

@endsection