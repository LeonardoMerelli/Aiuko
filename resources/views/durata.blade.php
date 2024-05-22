@extends('body')

@section('scripts')
<script src="{{ asset('js/tempo.js') }}" defer></script>
<script src="{{ asset('js/dataodierna.js') }}" defer></script>
@endsection

@section('content')
<div class="durata-div">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <div class="frase-finale">
        Quando vuoi che inizi il piano
    </div>

    <form action="{{route('durata.store')}}" method="post">
        @csrf
        <input type="hidden" id="dataAppoggio" value="{{$infoDurata[0]['giornoInizioDieta']}}">
        @if($infoDurata != null)
            <input type="date" id="dataInizio" name="dataInizio" value="{{$infoDurata[0]['giornoInizioDieta']}}">
        @else
            <input type="date" id="dataInizio" name="dataInizio">
        @endif

        <label for="frase-finale"> 
        Quanti giorni vuoi che duri il piano alimentare,
        <br> 
        fino ad arrivare ad un massimo di 7
        </label>
        @if($infoDurata != null)
            <input type="range" id="tempo" name="tempo" min="1" max="7" step="1" value="{{$infoDurata[0]['durataPiano']}}">
        @else
            <input type="range" id="tempo" name="tempo" min="1" max="7" step="1">
        @endif
        <p><output id="value"></output> giorni</p>
        <div class="bottoni">
            <a href="{{route('alimenti.create')}}">INDIETRO</a>
            <input type="submit" class="confirm-button" value="AVANTI">
        </div>
    </form>

    <div class="frase-finale">
        Il tuo piano arriverà dopo 3 giorni via email
    </div>
</div>

@endsection