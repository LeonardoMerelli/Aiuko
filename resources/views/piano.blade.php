
@section('scripts')
<script src="{{ asset('js/piano.js') }}" defer></script>

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
    <div class="pasto-section">
      <div class="pasto">
        <div class="top-pasto">
            <span id="nomepasto">Colazione</span>
            <div class="open"><svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path></g></svg></div>
        </div>
        <div class="bottom-pasto">
        <div class="portata">
            <div class="immagine"><img src="{{ asset('images\latte.jpeg') }}" alt=""></div>
            <span class="ingrediente">Latte parzialmente scremato</span>
            <span class="quantità">125g</span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\cornflakes.jpeg') }}" alt=""></div>
            <span class="ingrediente">Cornflakes</span>
            <span class="quantità">30g</span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\mela.jpg') }}" alt=""></div>
            <span class="ingrediente">Mela</span>
            <span class="quantità">100g</span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\caffe.jpeg') }}" alt=""></div>
            <span class="ingrediente">Caffè</span>
            <span class="quantità">45g</span>
          </div>
        </div>
      </div>
      <div class="pasto">
        <div class="top-pasto">
            <span id="nomepasto">Spuntino</span>
            <div class="open"><svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path></g></svg></div>
        </div>
        <div class="bottom-pasto">
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\pera.jpeg') }}" alt=""></div>
            <span class="ingrediente">Mela</span>
            <span class="quantità">250g</span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\mandorle.jpeg') }}" alt=""></div>
            <span class="ingrediente">Mandorle</span>
            <span class="quantità">9g</span>
          </div>
        </div>
      </div>
      <div class="pasto">
        <div class="top-pasto">
            <span id="nomepasto">Pranzo</span>
            <div class="open"><svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path></g></svg></div>
        </div>
        <div class="bottom-pasto">
        <div class="portata">
            <div class="immagine"><img src="{{ asset('images\pasta ai carciofi.avif') }}" alt=""></div>
            <span class="ingrediente">Pasta ai carciofi</span>
            <span class="quantità"></span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\bocconcini di pollo.avif') }}" alt=""></div>
            <span class="ingrediente">Bocconcini di pollo</span>
            <span class="quantità"></span>
          </div>
        </div>
      </div>
      <div class="pasto">
        <div class="top-pasto">
            <span id="nomepasto">Spuntino</span>
            <div class="open"><svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path></g></svg></div>
        </div>
        <div class="bottom-pasto">
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\wasa integrali.png') }}" alt=""></div>
            <span class="ingrediente">Wasa integrali</span>
            <span class="quantità">36g</span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\fesa di tacchino.jpg') }}" alt=""></div>
            <span class="ingrediente">Fesa di tacchino</span>
            <span class="quantità">40g</span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\noci.jpg') }}" alt=""></div>
            <span class="ingrediente">Noci</span>
            <span class="quantità">8g</span>
          </div>
        </div>
      </div>
            <div class="pasto">
        <div class="top-pasto">
            <span id="nomepasto">Cena</span>
            <div class="open"><svg width="20px" height="20px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path></g></svg></div>
        </div>
        <div class="bottom-pasto">
        <div class="portata">
            <div class="immagine"><img src="{{ asset('images\wasa integrali.png') }}" alt=""></div>
            <span class="ingrediente">Wasa integrali</span>
            <span class="quantità">36g</span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\fesa di tacchino.jpg') }}" alt=""></div>
            <span class="ingrediente">Fesa di tacchino</span>
            <span class="quantità">40g</span>
          </div>
          <div class="portata">
            <div class="immagine"><img src="{{ asset('images\noci.jpg') }}" alt=""></div>
            <span class="ingrediente">Noci</span>
            <span class="quantità">8g</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection