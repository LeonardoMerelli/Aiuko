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
        Grazie per aver scelto Aiuko
        <br>
        I tuoi dati sono stati salvati, a breve riceverai il tuo piano.
        <br>
        Team Aiuko
    </div>
</div>

@endsection