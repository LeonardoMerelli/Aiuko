@extends('body')

@section('scripts')
<script src="{{ asset('js/multi-selection-snack.js') }}" defer></script>
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
        @if($preferenzeSnack != null && $preferenzeSnack[0]['colazionePranzo'] == 1)
        <div class="select-item selected">
        @else
        <div class="select-item">
        @endif
          <span>Colazione <br> - <br> Pranzo</span>
        </div>
        @if($preferenzeSnack != null && $preferenzeSnack[0]['pranzoCena'] == 1)
        <div class="select-item selected">
        @else
        <div class="select-item">
        @endif
        <span>Pranzo <br> - <br> Cena</span>
        </div>
        @if($preferenzeSnack != null && $preferenzeSnack[0]['dopoCena'] == 1)
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
  <form action="{{route('snack.store')}}" method="post">
    @csrf
    <h5>Scrivi i tuoi alimenti preferiti</h5>
    @if($preferenzeSnack != null) 
      <textarea name="preferenze" id="preferenze">{{$preferenzeSnack[0]['snackPreferiti']}}</textarea>
    @else
      <textarea name="preferenze" id="preferenze"></textarea>
    @endif
    <select name="diet[]" class="custom-select" id="snackSelect" multiple>
      @if($preferenzeSnack != null && $preferenzeSnack[0]['faSpuntino'] == 1)
      <option value="si" selected>si</option>
      @else
      <option value="si">si</option>
      @endif
      @if($preferenzeSnack != null && $preferenzeSnack[0]['faSpuntino'] == 0)   
      <option value="no" selected>no</option>
      @else
      <option value="no">no</option>
      @endif
      @if($preferenzeSnack != null && $preferenzeSnack[0]['colazionePranzo'] == 1)
      <option value="colazione pranzo" selected>colazione pranzo</option>
      @else
      <option value="colazione pranzo">colazione pranzo</option>
      @endif
      @if($preferenzeSnack != null && $preferenzeSnack[0]['pranzoCena'] == 1)
      <option value="pranzo cena" selected>pranzo cena</option>
      @else
      <option value="pranzo cena">pranzo cena</option>
      @endif
      @if($preferenzeSnack != null && $preferenzeSnack[0]['dopoCena'] == 1)
      <option value="dopo cena" selected>dopo cena</option>
      @else
      <option value="dopo cena">dopo cena</option>
      @endif
    </select>
    <div class="bottoni">
      <a href="{{route('alimenti.create')}}">INDIETRO</a>
      <input type="submit" class="confirm-button" value="AVANTI">
    </div>
  </form>
</div>

@endsection