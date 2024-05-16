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
        Grazie per aver scelto Aiuko,
        <br>
        i tuoi dati sono stati salvati. 
        <br>
        Riceverai il tuo piano per email
        <br>
        <br>
        Team Aiuko
    </div>
</div>

@endsection