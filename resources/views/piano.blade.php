
@section('scripts')
 @endsection

@extends('body')


@section('content')
<div class="menu-view">
    <div class="profile-div">
      <div class="info">
        <span class="profile-name">
          Ciao <span>Tommaso</span>!
        </span>
      </div>
    </div>
    <div class="week">
      <span>Giorni della settimana</span>
      <div class="week-div">
        <a class="lun activated">L</a>
        <a class="mar">M</a>
        <a class="mer">M</a>
        <a class="gio">G</a>
        <a class="ven">V</a>
        <a class="sab">S</a>
        <a class="dom">D</a>
      </div>
    </div>
    <div class="pranzo">
      <span id="nomepasto">Pranzo</span>
    </div>
    <div class="cena">
      <span id="nomepasto">Cena</span>
    </div>
  </div>
</div>
@endsection