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
            <a href="https://www.youtube.com/watch?v=rmNWIIOlEI8">https://www.youtube.com/watch?v=rmNWIIOlEI8</a>
        </div>
        <div class="link-ricetta">
            <div class="titolo-ricetta">Ricetta: </div>
            <a href="https://ricette.giallozafferano.it/Pasta-ai-carciofi.html">https://ricette.giallozafferano.it/Pasta-ai-carciofi.html</a>
        </div>
        <div class="ingredienti-ricetta">
            <div class="titolo-ingredienti-ricetta">Ingredienti</div>
            <div class="lista">
                <div class="box-ingrediente">
                    <div class="ingrediente-ricetta">Pasta di semola integrale</div><div class="grammatura-ricetta">100 g</div>
                </div>
                <div class="box-ingrediente">
                    <div class="ingrediente-ricetta">Scalogno</div><div class="grammatura-ricetta">100 g</div>
                </div>
                <div class="box-ingrediente">
                    <div class="ingrediente-ricetta">Menta</div><div class="grammatura-ricetta">100 g</div>
                </div>
                <div class="box-ingrediente">
                    <div class="ingrediente-ricetta">Carciofi</div><div class="grammatura-ricetta">100 g</div>
                </div>
                <div class="box-ingrediente">
                    <div class="ingrediente-ricetta">Olio di oliva extravergine</div><div class="grammatura-ricetta">100 g</div>
                </div>
                <div class="box-ingrediente">
                    <div class="ingrediente-ricetta">Sale</div><div class="grammatura-ricetta">100 g</div>
                </div>
                <div class="box-ingrediente">
                    <div class="ingrediente-ricetta">Pepe nero</div><div class="grammatura-ricetta">100 g</div>
                </div>
            </div>
        </div>
        <div class="elettrodomestici-ricetta">
            <div class="titolo-elettrodomestici-ricetta">Elettrodomestici</div>
            <div class="lista">
                <div class="elettrodomestico-ricetta">Fornello - Piastra ad induzione</div>
                <div class="elettrodomestico-ricetta">Pentola</div>
                <div class="elettrodomestico-ricetta">Padella</div>
            </div>
        </div>
    </div>
</section>
@endsection