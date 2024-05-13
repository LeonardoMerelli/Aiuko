@extends('body')

@section('scripts')
<script src="{{ asset('js/tempo.js') }}" defer></script>
@endsection

@section('content')
<div class="durata-div">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <div class="frase-finale">
        Abbiamo quasi finito indica quanti giorni vuoi che duri il piano alimentare,
        fino ad arrivare ad un massimo di 7
    </div>

    <form action="" method="post">
        @csrf
        <input type="range" id="tempo" name="tempo" min="1" max="7" step="1">
        <p><output id="value"></output> giorni</p>
        <div class="bottoni">
            <a href="">INDIETRO</a>
            <input type="submit" class="confirm-button" value="CONFERMA">
        </div>
    </form>

    <div class="frase-finale">
        Il tuo piano arriverà dopo 3 giorni via email
    </div>
</div>

@endsection