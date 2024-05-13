@extends('body')

@section('content')
<section class="ricetta-section">
    <div class="upper-ricetta">
        <div class="titolo-ricetta">
            Pasta ai carciofi
        </div>
        <div class="immagine-ricetta">
            <img src="{{ asset('images\pasta ai carciofi.avif') }}" alt="">
        </div>
    </div>

    <div class="ricetta">
        <div class="link-video">
            <div class="titolo-video">Video ricetta: </div>
            https://www.youtube.com/watch?v=rmNWIIOlEI8
        </div>
        <div class="link-ricetta">
            <div class="titolo-ricetta">Ricetta: </div>
            https://ricette.giallozafferano.it/Pasta-ai-carciofi.html
        </div>
        <div class="ingredienti-ricetta">
            <div class="titolo-ingredienti-ricetta">Ingredienti</div>
            <div class="lista">
                <ul>
                    <li>Pasta di semola integrale</li>
                    <li>Scalogno</li>
                    <li>Menta</li>
                    <li>Carciofi</li>
                    <li>Olio di oliva extravergina</li>
                    <li>Sale</li>
                    <li>Pepe nero</li>
                </ul>
            </div>
        </div>
        <div class="elettrodomestici-ricetta">
            <div class="titolo-elettrodomestici-ricetta">Elettrodomestici</div>
            <div class="lista">
                <ul>
                <li>Fornello - Piastra ad induzione</li>
                <li>Pentola</li>
                <li>Padella</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection