@extends('body')

@section('content')
<section class="dispensa-section">
    <div class="upper-dispensa">
        <div class="titolo-dispensa">
            Lista della spesa
        </div>
    </div>

    <div class="dispensa">
        <div class="alimento">
            <div class="immagine"><b>Foto</b></div>
            <div class="ingrediente-dispensa"><b>Alimento</b></div>
            <div class="quantità-dispensa"><b>Quantità</b></div>     
        </div>
        <div class="alimento">
            <div class="immagine"><img src="{{ asset('images\pera.jpeg') }}" alt=""></div>
            <div class="ingrediente-dispensa">Pera</div>
            <div class="quantità-dispensa">200</div>
        </div>
        <div class="alimento">
            <div class="immagine"><img src="{{ asset('images\pera.jpeg') }}" alt=""></div>
            <div class="ingrediente-dispensa">Paaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaera</div>
            <div class="quantità-dispensa">200</div>
        </div>
        <div class="alimento">
            <div class="immagine"><img src="{{ asset('images\pera.jpeg') }}" alt=""></div>
            <div class="ingrediente-dispensa">Zucchero</div>
            <div class="quantità-dispensa">200</div>
        </div>        
        <div class="alimento">
            <div class="immagine"><img src="{{ asset('images\pera.jpeg') }}" alt=""></div>
            <div class="ingrediente-dispensa">Acqua</div>
            <div class="quantità-dispensa">200</div>
        </div>
        <div class="alimento">
            <div class="immagine"><img src="{{ asset('images\pera.jpeg') }}" alt=""></div>
            <div class="ingrediente-dispensa">Pane</div>
            <div class="quantità-dispensa">200</div>
        </div>
        <div class="alimento">
            <div class="immagine"><img src="{{ asset('images\pera.jpeg') }}" alt=""></div>
            <div class="ingrediente-dispensa">Mela</div>
            <div class="quantità-dispensa">200</div>
        </div>
        
        
    </div>
</section>
@endsection