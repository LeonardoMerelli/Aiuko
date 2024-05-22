@extends('body')

@section('scripts')
<script src="{{ asset('js/multi-selection-sport.js') }}" defer></script>
<script src="{{ asset('js/popup.js') }}" defer></script>
<script src="{{ asset('js/sport.js') }}" defer></script>
@endsection

@section('content')
<div class="sport-div" id="sport-div">
  <h4>PRATICHI SPORT?</h4>
  <div class="select-div">
    @if($preferenzeSport != null && $preferenzeSport[0]['faSport'] == 1)
      <div class="select-item-yes selected" id="select-item-yes selected" onclick="showPopup()">
      @else
      <div class="select-item-yes" id="select-item-yes" onclick="showPopup()">
      @endif
        <div>
          <svg width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="tick"> <polyline fill="none" points="3.7 14.3 9.6 19 20.3 5" stroke="#2cc92f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> </g> </g> </g></svg>
        </div>
        SI
      </div>

    @if($preferenzeSport != null && $preferenzeSport[0]['faSport'] == 0)
    <div class="select-item-no selected" id="select-item-no selected" onclick="closePopup()">
    @else
    <div class="select-item-no" id="select-item-no selected" onclick="closePopup()">
    @endif
        <div>
          <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 5L4.99998 19M5.00001 5L19 19" stroke="#ff0000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </div>
        NO
    </div>
  </div>
  <div id="popup" class="popup">
    <hr>
    <p>Livello di attività?</p>
    <div class="select-div-popup">
      <div class="select-div">
        @if(in_array('moderata', []))
        <div class="select-item selected">
        @else
        <div class="select-item">
        @endif
          <span>Moderata</span>
        </div>
        @if(in_array('intensa', []))
        <div class="select-item selected">
        @else
        <div class="select-item">
        @endif
          <span>Intensa</span>
        </div>
        @if(in_array('molto intensa', []))
        <div class="select-item selected">
        @else
        <div class="select-item">
        @endif
          <span>Molto<br>intensa</span>
        </div>
      </div>
    </div>
    <br>
    <hr>
  </div>
  
  <h5>Inserisci i giorni di allenamento</h5>
  <form action="" id="sport" name="sport" method="post">
    @csrf
    <div id="contenitore-date-sport">
      <span id="box-data">
      <input type="date" id="data-allenamento-sport" name="data-allenamento-sport">
      <select name="quando-sport" id="quando-sport">
        <option value="Mattina" selected>Mattina</option>
        <option value="Pomeriggio">Pomeriggio</option>
        <option value="Sera">Sera</option>
      </select>
      </span> 
    </div>
    <select name="diet[]" class="custom-select" id="snackSelect" multiple>
      @if(in_array('si', []))
      <option value="si" selected>si</option>
      @else
      <option value="si">si</option>
      @endif

      @if(in_array('si', []))
      <option value="no" selected>no</option>
      @else
      <option value="no">no</option>
      @endif

      @if(in_array('moderata', []))
      <option value="moderata" selected>moderata</option>
      @else
      <option value="moderata">moderata</option>
      @endif

      @if(in_array('intensa', []))
      <option value="intensa" selected>intensa</option>
      @else
      <option value="intensa">intensa</option>
      @endif
      
      @if(in_array('molto intensa', []))
      <option value="moltointensa" selected>molto intensa</option>
      @else
      <option value="moltointensa">molto intensa</option>
      @endif
    </select>
    <input type="hidden" name="contenutiInputData" id="contenutiInputData">
    <input type="hidden" name="contenutiInputSelectLivello" id="contenutiInputSelectLivello">
    <input type="hidden" name="contenutiInputSelectQuando" id="contenutiInputSelectQuando">
    <div class="add" onclick="addDate()">
        <svg viewBox="0 0 24 24" fill="none" height="50px" width="50px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    </div>
    <div class="bottoni">
      <a href="{{route('cena.create')}}">INDIETRO</a>
      <input type="submit" class="confirm-button" value="AVANTI">
    </div>
  </form>
</div>

@endsection