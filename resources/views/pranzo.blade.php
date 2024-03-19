@section('scripts')
<script src="{{ asset('js/multi-selection-diet-intollerances.js') }}" defer></script>
@endsection

@extends('body')


@section('content')
<div class="elettrodomestici-div">
  <span>PRANZO</span>

  <div class="select-div">
    @if(in_array('forno', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
      <svg width="50px" height="50px" fill="#ffffff" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12 2C10.906937 2 10 2.9069372 10 4L7 4C5.3550302 4 4 5.3550302 4 7L4 42C4 43.644459 5.3544268 45 7 45L9 45L9 46C9 47.093063 9.9069372 48 11 48L14 48C15.093063 48 16 47.093063 16 46L16 45L34 45L34 46C34 47.093063 34.906937 48 36 48L39 48C40.093063 48 41 47.093063 41 46L41 45L43 45C44.645063 45 46 43.645063 46 42L46 15.167969 A 1.0001 1.0001 0 0 0 46 14.841797L46 7C46 5.3544268 44.644459 4 43 4L40 4C40 2.9069372 39.093063 2 38 2L32 2C30.906937 2 30 2.9069372 30 4L21 4C21 2.9069372 20.093063 2 19 2L12 2 z M 7 6L10.832031 6 A 1.0001 1.0001 0 0 0 11.158203 6L19.832031 6 A 1.0001 1.0001 0 0 0 20.158203 6L30.832031 6 A 1.0001 1.0001 0 0 0 31.158203 6L38.832031 6 A 1.0001 1.0001 0 0 0 39.158203 6L43 6C43.563541 6 44 6.4355732 44 7L44 14L6 14L6 7C6 6.4349698 6.4349698 6 7 6 z M 10 8 A 2 2 0 0 0 8 10 A 2 2 0 0 0 10 12 A 2 2 0 0 0 12 10 A 2 2 0 0 0 10 8 z M 16 8 A 2 2 0 0 0 14 10 A 2 2 0 0 0 16 12 A 2 2 0 0 0 18 10 A 2 2 0 0 0 16 8 z M 22 8 A 2 2 0 0 0 20 10 A 2 2 0 0 0 22 12 A 2 2 0 0 0 24 10 A 2 2 0 0 0 22 8 z M 28 8 A 2 2 0 0 0 26 10 A 2 2 0 0 0 28 12 A 2 2 0 0 0 30 10 A 2 2 0 0 0 28 8 z M 40 8 A 2 2 0 0 0 38 10 A 2 2 0 0 0 40 12 A 2 2 0 0 0 42 10 A 2 2 0 0 0 40 8 z M 6 16L44 16L44 42C44 42.562937 43.562937 43 43 43L40.167969 43 A 1.0001 1.0001 0 0 0 39.841797 43L35.154297 43 A 1.0001 1.0001 0 0 0 34.984375 42.986328 A 1.0001 1.0001 0 0 0 34.839844 43L15.167969 43 A 1.0001 1.0001 0 0 0 14.841797 43L10.154297 43 A 1.0001 1.0001 0 0 0 9.984375 42.986328 A 1.0001 1.0001 0 0 0 9.8398438 43L7 43C6.4355732 43 6 42.563541 6 42L6 16 z M 9 19L9 20L9 40L41 40L41 19L9 19 z M 11 21L39 21L39 38L11 38L11 21 z M 11 45L14 45L14 46L11 46L11 45 z M 36 45L39 45L39 46L36 46L36 45 z"></path></g></svg>
      </div>
      Forno
    </div>
    @if(in_array('friggitrice ad aria', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <img width="50" height="50" src="https://img.icons8.com/external-outline-andi-nur-abdillah/64/ffffff/external-Air-Fryer-home-appliances-(outline)-outline-andi-nur-abdillah.png" alt="external-Air-Fryer-home-appliances-(outline)-outline-andi-nur-abdillah"/>
      </div>
      <span>Friggitrice ad aria</span>
    </div>
    @if(in_array('sbattitore', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="50" height="50" fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 216.375 216.375" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M144.438,55.596c-0.063-0.032-0.127-0.061-0.191-0.089c-30.926-13.188-33.071-14.178-34.225-14.709 c-0.536-0.247-0.921-0.424-3.194-1.394c-8.279-3.53-13.385-3.803-19.694-3.803H55.742c-6.689,0-12.13,5.231-12.13,11.66v20.745 c0,6.429,5.441,11.659,12.13,11.659h83.604c6.008,0,11.012-4.223,11.965-9.744c0.106-0.328,0.164-0.678,0.164-1.041v-1.711 C151.475,62.995,150.623,58.704,144.438,55.596z M144.725,68.007c0,2.707-2.414,4.909-5.379,4.909H55.742 c-2.967,0-5.38-2.202-5.38-4.909V47.262c0-2.708,2.413-4.91,5.38-4.91h31.392c5.675,0,9.928,0.227,17.046,3.263 c2.183,0.931,2.533,1.092,3.016,1.315c1.266,0.583,3.383,1.559,34.3,14.744c3.084,1.575,3.229,2.975,3.229,5.497V68.007z"></path> <path d="M186.415,51.579c-0.051-0.039-0.1-0.076-0.152-0.113c-14.576-10.184-41.793-25.287-58.647-33.439 c-7.806-3.774-14.067-6.248-29.401-6.248h-42.81V3.375C55.403,1.511,53.893,0,52.028,0h-15.3c-1.864,0-3.375,1.511-3.375,3.375 v8.528c-8.098,0.985-14.394,7.898-14.394,16.258v80.993c0,9.033,7.349,16.383,16.383,16.383H46.01v28.588h-3.088 c-8.064,0-14.625,6.561-14.625,14.625v33c0,8.064,6.561,14.625,14.625,14.625h11.625c2.659,0,5.153-0.717,7.304-1.962 c2.151,1.245,4.644,1.962,7.304,1.962h11.625c8.064,0,14.625-6.561,14.625-14.625v-33c0-8.064-6.561-14.625-14.625-14.625h-1.787 v-28.588H181.03c9.033,0,16.384-7.35,16.384-16.383V78.459l0.001-0.993C197.432,69,197.45,60.246,186.415,51.579z M40.104,6.75 h8.55v5.029h-8.55V6.75z M35.046,201.75v-33c0-4.342,3.532-7.875,7.875-7.875h3.088v48.75h-3.088 C38.58,209.626,35.046,206.094,35.046,201.75z M52.759,209.626v-48.75h1.787c0.73,0,1.433,0.108,2.105,0.295 c-1.346,2.212-2.122,4.808-2.122,7.58v33c0,2.772,0.776,5.369,2.122,7.581c-0.671,0.188-1.375,0.294-2.105,0.294H52.759z M62.421,168.75v33c0,1.036-0.206,2.023-0.571,2.93c-0.365-0.906-0.571-1.895-0.571-2.93v-33c0-1.036,0.206-2.023,0.571-2.93 C62.215,166.727,62.421,167.715,62.421,168.75z M67.049,209.331c1.346-2.212,2.122-4.808,2.122-7.581v-33 c0-2.773-0.776-5.369-2.122-7.581c0.671-0.187,1.375-0.294,2.104-0.294h3.088v48.75h-3.088 C68.424,209.626,67.721,209.518,67.049,209.331z M80.778,160.875c4.342,0,7.875,3.533,7.875,7.875v33 c0,4.344-3.533,7.875-7.875,7.875h-1.787v-48.75H80.778z M72.242,154.125h-3.088c-2.659,0-5.153,0.717-7.304,1.963 c-2.151-1.244-4.645-1.963-7.304-1.963h-1.787v-28.588h19.482L72.242,154.125L72.242,154.125z M190.665,77.451l-0.001,31.703 c0,5.312-4.321,9.633-9.634,9.633H35.342c-5.311,0-9.633-4.321-9.633-9.633V28.161c0-5.312,4.321-9.633,9.633-9.633h62.871 c13.93,0,19.29,2.106,26.462,5.575c16.593,8.024,43.319,22.848,57.644,32.841C190.692,63.558,190.68,69.692,190.665,77.451z"></path> </g> </g> </g></svg>
      </div>
      Sbattitore
    </div>
    @if(in_array('microonde', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="50" height="50" fill="#ffffff" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M3 8C1.355469 8 0 9.355469 0 11L0 39C0 40.644531 1.355469 42 3 42L5 42L5 43C5 44.09375 5.90625 45 7 45L10 45C11.09375 45 12 44.09375 12 43L12 42L38 42L38 43C38 44.09375 38.90625 45 40 45L43 45C44.09375 45 45 44.09375 45 43L45 42L47 42C48.644531 42 50 40.644531 50 39L50 11C50 9.355469 48.644531 8 47 8 Z M 3 10L47 10C47.5625 10 48 10.4375 48 11L48 39C48 39.5625 47.5625 40 47 40L39.1875 40C39.054688 39.972656 38.914063 39.972656 38.78125 40L6.1875 40C6.054688 39.972656 5.914063 39.972656 5.78125 40L3 40C2.4375 40 2 39.5625 2 39L2 11C2 10.4375 2.4375 10 3 10 Z M 5 13L5 37L40 37L40 13 Z M 7 15L38 15L38 35L7 35 Z M 44 16C42.894531 16 42 16.894531 42 18C42 19.105469 42.894531 20 44 20C45.105469 20 46 19.105469 46 18C46 16.894531 45.105469 16 44 16 Z M 34.15625 19.9375C33.957031 19.933594 33.761719 19.988281 33.59375 20.09375C33.59375 20.09375 28.964844 22 26.125 22C24.707031 22 23.75 21.59375 22.59375 21.09375C21.4375 20.59375 20.066406 20 18.21875 20C14.523438 20 10.5625 22.09375 10.5625 22.09375C10.0625 22.335938 9.851563 22.9375 10.09375 23.4375C10.335938 23.9375 10.9375 24.148438 11.4375 23.90625C11.4375 23.90625 15.332031 22 18.21875 22C19.664063 22 20.628906 22.40625 21.78125 22.90625C22.933594 23.40625 24.296875 24 26.125 24C29.785156 24 34.40625 21.90625 34.40625 21.90625C34.894531 21.78125 35.214844 21.3125 35.148438 20.8125C35.085938 20.3125 34.660156 19.9375 34.15625 19.9375 Z M 44 23C42.894531 23 42 23.894531 42 25C42 26.105469 42.894531 27 44 27C45.105469 27 46 26.105469 46 25C46 23.894531 45.105469 23 44 23 Z M 34.15625 25.9375C33.957031 25.933594 33.761719 25.988281 33.59375 26.09375C33.59375 26.09375 28.964844 28 26.125 28C24.707031 28 23.75 27.59375 22.59375 27.09375C21.4375 26.59375 20.066406 26 18.21875 26C14.523438 26 10.5625 28.09375 10.5625 28.09375C10.0625 28.335938 9.851563 28.9375 10.09375 29.4375C10.335938 29.9375 10.9375 30.148438 11.4375 29.90625C11.4375 29.90625 15.332031 28 18.21875 28C19.664063 28 20.628906 28.40625 21.78125 28.90625C22.933594 29.40625 24.296875 30 26.125 30C29.785156 30 34.40625 27.90625 34.40625 27.90625C34.894531 27.78125 35.214844 27.3125 35.148438 26.8125C35.085938 26.3125 34.660156 25.9375 34.15625 25.9375 Z M 44 30C42.894531 30 42 30.894531 42 32C42 33.105469 42.894531 34 44 34C45.105469 34 46 33.105469 46 32C46 30.894531 45.105469 30 44 30 Z M 7 42L10 42L10 43L7 43 Z M 40 42L43 42L43 43L40 43Z"></path></g></svg>            
      </div>
      Microonde
    </div>
    @if(in_array('griglia elettrica', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="50" height="50" fill="#ffffff" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 470 470" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M260,152.148l-46.543,0.001c-4.143,0-7.5,3.358-7.5,7.5c0,4.143,3.358,7.5,7.5,7.5L260,167.148c4.143,0,7.5-3.358,7.5-7.5 C267.5,155.506,264.142,152.148,260,152.148z"></path> <path d="M414.074,83.574c0-29.889-6.039-58.122-17.006-79.498C395.784,1.574,393.208,0,390.396,0H79.604 c-2.813,0-5.389,1.574-6.673,4.076C61.965,25.452,55.926,53.686,55.926,83.574c0,28.32,5.421,55.152,15.319,76.075 c-9.898,20.923-15.319,47.754-15.319,76.074c0,29.889,6.039,58.121,17.006,79.498c1.284,2.502,3.86,4.076,6.673,4.076h103.577 c0.039,0,19.318,0,19.318,0V437.5c0,17.921,14.579,32.5,32.5,32.5s32.5-14.579,32.5-32.5V319.298h19.28 c0.039,0,103.616,0,103.616,0c2.813,0,5.389-1.574,6.673-4.076c10.967-21.377,17.006-49.609,17.006-79.498 c0-28.32-5.421-55.152-15.319-76.075C408.653,138.726,414.074,111.895,414.074,83.574z M279.299,122.148h-88.598V45h88.598V122.148 z M294.299,45h33.397c21.271,0,38.575,17.305,38.575,38.574s-17.305,38.574-38.575,38.574h-33.397V45z M279.299,274.298h-88.598 v-77.148h88.598V274.298z M294.299,197.149h50.799c11.675,0,21.174,9.498,21.174,21.174v34.801 c0,11.676-9.499,21.174-21.174,21.174h-50.799V197.149z M190.701,304.298v-15h88.598v15H190.701z M175.701,274.298h-33.397 c-21.271,0-38.575-17.305-38.575-38.574s17.305-38.574,38.575-38.574h33.397V274.298z M190.701,182.149v-45.001h88.598v45.001 H190.701z M175.701,122.148h-50.799c-11.675,0-21.174-9.498-21.174-21.174V66.174c0-11.676,9.499-21.174,21.174-21.174h50.799 V122.148z M190.701,30V15h88.598v15H190.701z M84.304,167.149l68.897-0.001c4.143,0,7.5-3.358,7.5-7.5c0-4.143-3.358-7.5-7.5-7.5 l-68.897,0.001C66.391,113.246,66.387,53.906,84.296,15h91.405v15h-50.799c-19.946,0-36.174,16.228-36.174,36.174v34.801 c0,19.946,16.228,36.174,36.174,36.174h50.799v45.001h-33.397c-29.541,0-53.575,24.033-53.575,53.574s24.034,53.574,53.575,53.574 h33.397v15H84.296C66.387,265.392,66.391,206.052,84.304,167.149z M252.5,437.5c0,9.649-7.851,17.5-17.5,17.5 s-17.5-7.851-17.5-17.5V319.298h35V437.5z M385.704,304.298h-91.405v-15h50.799c19.946,0,36.174-16.228,36.174-36.174v-34.801 c0-19.946-16.228-36.174-36.174-36.174h-50.799v-45.001h33.397c29.541,0,53.575-24.033,53.575-53.574S357.237,30,327.696,30 h-33.397V15h91.405c17.909,38.906,17.904,98.246-0.008,137.148h-68.897c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5h68.897 C403.608,206.052,403.613,265.392,385.704,304.298z"></path> </g> </g></svg>
      </div>
      <span>Griglia elettrica</span>
    </div>
    @if(in_array('bollitore', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="50" height="50" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect id="bg" x="-238" y="-149" display="none" fill="#6DCFF6" width="544" height="455"></rect> <g id="Kettle"> <path d="M61.9,13.5C61.7,13.2,61.3,13,61,13H48.2c-2.5-4.7-5.6-8-9.3-10.2c-1.9-1.1-4.9-1.1-6.8-0.1c-4.4,2.4-7.5,5.4-9.9,10.2 h-0.4l-10,0c-0.3,0-0.7,0.2-0.9,0.5C0.9,30.5,0.9,51.8,0.9,52c0,0.1,0,0.2,0.1,0.4c0.9,2.2,2.3,2.7,3.4,2.7c1.7,0,3.1-1.2,3.2-1.3 c0.2-0.2,0.3-0.5,0.3-0.7c0-0.2,0.2-18.6,7.6-32h4C14,37.2,12,53.2,12,63c0,0.5,0.5,1,1,1l44.9,0c0.6,0,1-0.4,1-1 c0-7.9-1.3-21.2-4.5-33.5l7.5-15.1C62,14.1,62,13.8,61.9,13.5z M33.3,4.4c1.2-0.6,3.2-0.6,4.3,0c3.2,1.7,5.9,4.5,8.2,8.6H24.5 C26.6,8.9,29.5,6.5,33.3,4.4z M14,62c0.1-10,2.2-25.9,7.8-41.7c0.1-0.3,0.1-0.6-0.1-0.9c-0.2-0.3-0.5-0.4-0.8-0.4h-6 c-0.4,0-0.7,0.2-0.9,0.5c-7.3,12.9-8,29.8-8.1,33c-0.4,0.3-1,0.6-1.6,0.6c-0.2,0-0.9,0-1.4-1.3c0-2.1,0.5-21.2,9.6-36.8h34.5 c6.8,13.4,9.8,34.5,10,47H14z M53.6,26.7c-1.2-4.1-2.7-8.1-4.4-11.7h10.2L53.6,26.7z"></path> <path d="M43.8,19.2c-0.3-0.5-0.9-0.6-1.4-0.3c-0.5,0.3-0.6,0.9-0.3,1.4c0.2,0.4,0.7,1.3,0.9,2.1c0.1,0.4,0.5,0.7,0.9,0.7 c0.1,0,0.2,0,0.3-0.1c0.5-0.2,0.8-0.7,0.6-1.3C44.7,20.8,44.2,19.7,43.8,19.2z"></path> <path d="M45.7,25c-0.5,0.1-0.8,0.7-0.7,1.2c4.5,16.1,6,32.6,6,32.8c0,0.5,0.5,0.9,1,0.9c0,0,0.1,0,0.1,0c0.6,0,1-0.5,0.9-1.1 c0-0.2-1.4-16.9-6-33.2C46.8,25.2,46.3,24.9,45.7,25z"></path> </g> </g></svg>     
      </div>
      Bollitore
    </div>
    @if(in_array('frullatore', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="50" height="50" fill="#ffffff" viewBox="-18.49 0 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 85.89 122.88" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M10.36,23.42h53.68c0.07,0,0.15,0,0.24,0.01c0.68,0.06,1.31,0.36,1.78,0.82c0.5,0.49,0.82,1.16,0.82,1.91 c0,0.07,0,0.15-0.01,0.22l0,0.04L66.38,32h17.96c0.86,0,1.55,0.69,1.55,1.55c0,0.06,0,0.13-0.01,0.19 c-0.44,11-2.54,19.75-6.38,26.12c-3.82,6.35-9.31,10.35-16.55,11.9l-1.4,16.28c-0.06,0.73-0.38,1.4-0.86,1.88 c-0.04,0.04-0.08,0.08-0.13,0.11c-0.49,0.44-1.12,0.7-1.83,0.7H15.02c-0.77,0-1.45-0.31-1.96-0.82l0,0 c-0.49-0.49-0.8-1.16-0.86-1.9L7.54,26.37c-0.01-0.08-0.01-0.15-0.01-0.2c0-0.75,0.32-1.42,0.82-1.92c0.47-0.46,1.11-0.77,1.8-0.82 C10.24,23.43,10.31,23.42,10.36,23.42L10.36,23.42z M13.69,103l0.12-5.43c0.01-0.85,0.7-1.52,1.55-1.52v-0.01h44.09 c0.86,0,1.55,0.69,1.55,1.55v5.43l13.1,17.38c0.52,0.68,0.38,1.65-0.3,2.17c-0.28,0.21-0.61,0.31-0.93,0.31v0H1.55 c-0.86,0-1.55-0.69-1.55-1.55c0-0.41,0.16-0.79,0.43-1.07L13.69,103L13.69,103z M37.21,101.83c3.14,0,5.69,2.55,5.69,5.69 c0,3.14-2.55,5.69-5.69,5.69c-3.14,0-5.69-2.55-5.69-5.69C31.52,104.38,34.07,101.83,37.21,101.83L37.21,101.83z M16.88,99.14 l-0.11,4.42h0c0,0.32-0.11,0.64-0.32,0.92L4.69,119.78h65.06l-11.49-15.25c-0.23-0.27-0.36-0.62-0.36-1v-4.39H16.88L16.88,99.14z M6.72,11.4h26.99c-1.71-1.1-2.85-2.41-2.85-5.21c0-2.8,2.77-6.19,6.19-6.19c3.42,0,6.19,3.39,6.19,6.19c0,2.8-1.14,4.11-2.85,5.21 h27.3c0.47,0,0.86,0.39,0.86,0.86v6.08c0,0.47-0.39,0.86-0.86,0.86H6.72c-0.47,0-0.86-0.39-0.86-0.86v-6.08 C5.86,11.79,6.25,11.4,6.72,11.4L6.72,11.4z M66.12,36.09l-2.88,31.44c15.25-3.88,18.53-17.24,19.31-31.44H66.12L66.12,36.09z M31.81,65.77c-0.86,0-1.55-0.69-1.55-1.55c0-0.86,0.69-1.55,1.55-1.55h11.31c0.86,0,1.55,0.69,1.55,1.55 c0,0.86-0.69,1.55-1.55,1.55H31.81L31.81,65.77z M31.81,38c-0.86,0-1.55-0.69-1.55-1.55c0-0.86,0.69-1.55,1.55-1.55h11.31 c0.86,0,1.55,0.69,1.55,1.55c0,0.86-0.69,1.55-1.55,1.55H31.81L31.81,38z M31.81,51.88c-0.86,0-1.55-0.69-1.55-1.55 c0-0.86,0.69-1.55,1.55-1.55h11.31c0.86,0,1.55,0.69,1.55,1.55c0,0.86-0.69,1.55-1.55,1.55H31.81L31.81,51.88z M31.81,79.65 c-0.86,0-1.55-0.69-1.55-1.55c0-0.86,0.69-1.55,1.55-1.55h11.31c0.86,0,1.55,0.69,1.55,1.55c0,0.86-0.69,1.55-1.55,1.55H31.81 L31.81,79.65z M63.74,26.78H10.66l4.61,60.24h43.2L63.74,26.78L63.74,26.78z M10.63,26.39l0,0.02l0,0L10.63,26.39L10.63,26.39z"></path> </g> </g></svg>
      </div>
      Frullatore
    </div>
    @if(in_array('spremiagrumi', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg fill="#ffffff" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 481.123 481.123" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M481.123,234.319c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5c0,11.163-8.193,20.244-18.264,20.244h-82.078 c-8.071-29.912-48.09-162.301-123.946-162.301S125.961,224.651,117.89,254.563H33.264c-10.07,0-18.264-9.081-18.264-20.244 c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5c0,16.7,11.024,30.715,25.764,34.329v91.826c0,15.653,12.734,28.387,28.388,28.387 h375.187c15.653,0,28.388-12.734,28.388-28.387V267.98C471.265,263.516,481.123,250.115,481.123,234.319z M323.595,183.981 c13.63,28.04,22.545,56.409,26.588,70.582h-42.701c-0.361-2.618-0.834-5.937-1.424-9.849c-0.618-4.096-4.444-6.914-8.535-6.297 c-4.096,0.618-6.915,4.439-6.297,8.535c0.433,2.872,0.802,5.424,1.111,7.612h-43V111.018c4.511,4.163,10.438,12.766,17.117,30.292 c7.025,18.437,13.516,43.155,19.291,73.466c0.774,4.069,4.709,6.738,8.771,5.964c4.069-0.775,6.739-4.703,5.964-8.771 c-5.938-31.173-12.671-56.743-20.009-76c-2.793-7.331-5.676-13.721-8.658-19.187C294.039,131.124,311.563,159.231,323.595,183.981z M191.339,254.563c1.967-13.925,6.497-43.12,13.509-71.992c11.455-47.17,22.299-64.971,29.487-71.56v143.552H191.339z M159.978,184.187c12.023-24.775,29.526-52.905,51.729-67.307c-7.741,14.267-14.817,34.878-21.462,62.265 c-7.504,30.929-12.216,62.167-14.05,75.419h-42.708C137.513,240.438,146.384,212.2,159.978,184.187z M442.726,360.474 c0,7.382-6.006,13.387-13.388,13.387H54.151c-7.382,0-13.388-6.005-13.388-13.387v-90.911h82.905c0.011,0,0.022,0.002,0.033,0.002 c0.008,0,0.015-0.002,0.023-0.002h59.043c0.003,0,0.005,0,0.008,0c0.004,0,0.007,0,0.01,0h118.1c0.004,0,0.007,0,0.01,0 c0.003,0,0.005,0,0.008,0h141.821V360.474z M350.695,290.982c4.143,0,7.5,3.358,7.5,7.5s-3.357,7.5-7.5,7.5H61.395 c-4.143,0-7.5-3.358-7.5-7.5s3.357-7.5,7.5-7.5H350.695z M389.319,298.482c0-4.142,3.357-7.5,7.5-7.5h25.275 c4.143,0,7.5,3.358,7.5,7.5s-3.357,7.5-7.5,7.5h-25.275C392.677,305.982,389.319,302.625,389.319,298.482z"></path> </g></svg>
      </div>
      <span>Spremi agrumi</span>
    </div>
    @if(in_array('tostapane', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg height="50px" width="50px" fill="#ffffff" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.875 2C20.652344 2.023438 20.441406 2.125 20.28125 2.28125C19.652344 2.910156 19.367188 3.773438 19.46875 4.46875C19.570313 5.164063 19.917969 5.644531 20.15625 6.03125C20.394531 6.417969 20.511719 6.6875 20.53125 6.8125C20.550781 6.9375 20.601563 6.960938 20.28125 7.28125C19.882813 7.679688 19.882813 8.320313 20.28125 8.71875C20.679688 9.117188 21.320313 9.117188 21.71875 8.71875C22.347656 8.089844 22.632813 7.226563 22.53125 6.53125C22.429688 5.835938 22.082031 5.355469 21.84375 4.96875C21.605469 4.582031 21.488281 4.3125 21.46875 4.1875C21.449219 4.0625 21.398438 4.039063 21.71875 3.71875C22.042969 3.417969 22.128906 2.941406 21.933594 2.546875C21.742188 2.148438 21.308594 1.929688 20.875 2 Z M 25.875 2C25.652344 2.023438 25.441406 2.125 25.28125 2.28125C24.652344 2.910156 24.367188 3.773438 24.46875 4.46875C24.570313 5.164063 24.917969 5.644531 25.15625 6.03125C25.394531 6.417969 25.511719 6.6875 25.53125 6.8125C25.550781 6.9375 25.601563 6.960938 25.28125 7.28125C24.882813 7.679688 24.882813 8.320313 25.28125 8.71875C25.679688 9.117188 26.320313 9.117188 26.71875 8.71875C27.347656 8.089844 27.632813 7.226563 27.53125 6.53125C27.429688 5.835938 27.082031 5.355469 26.84375 4.96875C26.605469 4.582031 26.488281 4.3125 26.46875 4.1875C26.449219 4.0625 26.398438 4.039063 26.71875 3.71875C27.042969 3.417969 27.128906 2.941406 26.933594 2.546875C26.742188 2.148438 26.308594 1.929688 25.875 2 Z M 30.875 2C30.652344 2.023438 30.441406 2.125 30.28125 2.28125C29.652344 2.910156 29.367188 3.773438 29.46875 4.46875C29.570313 5.164063 29.917969 5.644531 30.15625 6.03125C30.394531 6.417969 30.511719 6.6875 30.53125 6.8125C30.550781 6.9375 30.601563 6.960938 30.28125 7.28125C29.882813 7.679688 29.882813 8.320313 30.28125 8.71875C30.679688 9.117188 31.320313 9.117188 31.71875 8.71875C32.347656 8.089844 32.632813 7.226563 32.53125 6.53125C32.429688 5.835938 32.082031 5.355469 31.84375 4.96875C31.605469 4.582031 31.488281 4.3125 31.46875 4.1875C31.449219 4.0625 31.398438 4.039063 31.71875 3.71875C32.042969 3.417969 32.128906 2.941406 31.933594 2.546875C31.742188 2.148438 31.308594 1.929688 30.875 2 Z M 23 10C18.394531 10 15.566406 10.367188 13.75 11C12.84375 11.316406 12.164063 11.695313 11.6875 12.21875C11.210938 12.742188 11 13.414063 11 14C11 15.269531 11.601563 15.980469 12 16.375L12 20.0625C7.523438 20.570313 4 24.394531 4 29L4 43C4 43.550781 4.449219 44 5 44L6.28125 44L7.0625 46.3125C7.195313 46.71875 7.574219 46.996094 8 47L11 47C11.425781 46.996094 11.804688 46.71875 11.9375 46.3125L12.71875 44L37.28125 44L38.0625 46.3125C38.195313 46.71875 38.574219 46.996094 39 47L42 47C42.425781 46.996094 42.804688 46.71875 42.9375 46.3125L43.71875 44L45 44C45.550781 44 46 43.550781 46 43L46 34L49 34C49.550781 34 50 33.550781 50 33L50 32C50 30.355469 48.644531 29 47 29L46 29C46 25.109375 43.480469 21.777344 40 20.53125L40 16.375C40.421875 15.960938 41 15.261719 41 14C41 13.421875 40.753906 12.761719 40.28125 12.25C39.808594 11.738281 39.15625 11.355469 38.25 11.03125C36.4375 10.382813 33.609375 10 29 10C28.398438 10 27.804688 9.992188 27.25 10C26.851563 10.007813 26.488281 10.03125 26.125 10.0625C25.183594 10.015625 24.152344 10 23 10 Z M 23 12C24.078125 12 25.03125 12.019531 25.90625 12.0625L25.90625 12.09375C25.988281 12.085938 26.101563 12.070313 26.1875 12.0625C28.796875 12.203125 30.527344 12.535156 31.5625 12.90625C32.269531 13.15625 32.644531 13.441406 32.8125 13.625C32.980469 13.808594 33 13.875 33 14C33 14.789063 32.4375 15.1875 32.4375 15.1875L32 15.46875L32 20L14 20L14 15.53125L13.625 15.21875C13.625 15.21875 13 14.644531 13 14C13 13.835938 13.023438 13.742188 13.1875 13.5625C13.351563 13.382813 13.703125 13.121094 14.40625 12.875C15.816406 12.382813 18.503906 12 23 12 Z M 34.28125 12.25C35.753906 12.414063 36.832031 12.644531 37.5625 12.90625C38.269531 13.15625 38.644531 13.441406 38.8125 13.625C38.980469 13.808594 39 13.875 39 14C39 14.789063 38.4375 15.1875 38.4375 15.1875L38 15.46875L38 20.0625C37.667969 20.023438 37.34375 20 37 20L34 20L34 19C34.550781 19 35 18.550781 35 18C35 17.449219 34.550781 17 34 17L34 16.375C34.421875 15.960938 35 15.261719 35 14C35 13.421875 34.753906 12.761719 34.28125 12.25 Z M 28 14C27.449219 14 27 14.449219 27 15C27 15.550781 27.449219 16 28 16C28.550781 16 29 15.550781 29 15C29 14.449219 28.550781 14 28 14 Z M 18 15C17.449219 15 17 15.449219 17 16C17 16.550781 17.449219 17 18 17C18.550781 17 19 16.550781 19 16C19 15.449219 18.550781 15 18 15 Z M 22.5 16C21.671875 16 21 16.671875 21 17.5C21 18.328125 21.671875 19 22.5 19C23.328125 19 24 18.328125 24 17.5C24 16.671875 23.328125 16 22.5 16 Z M 26.5 18C26.222656 18 26 18.222656 26 18.5C26 18.777344 26.222656 19 26.5 19C26.777344 19 27 18.777344 27 18.5C27 18.222656 26.777344 18 26.5 18 Z M 13 22L37 22C40.855469 22 44 25.144531 44 29L44 42L6 42L6 29C6 25.144531 9.144531 22 13 22 Z M 46 31L47 31C47.554688 31 48 31.445313 48 32L46 32 Z M 39 34C37.355469 34 36 35.355469 36 37C36 38.644531 37.355469 40 39 40C40.644531 40 42 38.644531 42 37C42 35.355469 40.644531 34 39 34 Z M 39 36C39.5625 36 40 36.4375 40 37C40 37.5625 39.5625 38 39 38C38.4375 38 38 37.5625 38 37C38 36.4375 38.4375 36 39 36 Z M 8.375 44L10.625 44L10.28125 45L8.71875 45 Z M 39.375 44L41.625 44L41.28125 45L39.71875 45Z"></path></g></svg>
      </div>
      Tostapane
    </div>
    @if(in_array('piastra ad induzione', []))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg height="50px" width="50px" fill="#ffffff" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M9 4C6.2504839 4 4 6.2504839 4 9L4 41C4 43.749516 6.2504839 46 9 46L41 46C43.749516 46 46 43.749516 46 41L46 9C46 6.2504839 43.749516 4 41 4L9 4 z M 9 6L41 6C42.668484 6 44 7.3315161 44 9L44 41C44 42.668484 42.668484 44 41 44L9 44C7.3315161 44 6 42.668484 6 41L6 9C6 7.3315161 7.3315161 6 9 6 z M 16.5 8C14.750001 8 13.310226 8.6922556 12.376953 9.7421875C11.443681 10.792119 11 12.152778 11 13.5C11 14.847222 11.443681 16.207881 12.376953 17.257812C13.310226 18.307744 14.750001 19 16.5 19C18.249999 19 19.689774 18.307744 20.623047 17.257812C21.556319 16.207881 22 14.847222 22 13.5C22 12.152778 21.556319 10.792119 20.623047 9.7421875C19.689774 8.6922556 18.249999 8 16.5 8 z M 33 8C29.145849 8 26 11.145852 26 15C26 18.854148 29.145849 22 33 22C36.854151 22 40 18.854148 40 15C40 11.145852 36.854151 8 33 8 z M 16.5 10C17.749999 10 18.560226 10.432744 19.126953 11.070312C19.69368 11.707882 20 12.597222 20 13.5C20 14.402778 19.69368 15.292119 19.126953 15.929688C18.560226 16.567256 17.749999 17 16.5 17C15.250001 17 14.439774 16.567256 13.873047 15.929688C13.30632 15.292118 13 14.402778 13 13.5C13 12.597222 13.30632 11.707881 13.873047 11.070312C14.439774 10.432745 15.250001 10 16.5 10 z M 33 10C35.773271 10 38 12.226731 38 15C38 17.773269 35.773271 20 33 20C30.226729 20 28 17.773269 28 15C28 12.226731 30.226729 10 33 10 z M 17 23C13.145849 23 10 26.145852 10 30C10 33.854148 13.145849 37 17 37C20.854151 37 24 33.854148 24 30C24 26.145852 20.854151 23 17 23 z M 17 25C19.773271 25 22 27.226731 22 30C22 32.773269 19.773271 35 17 35C14.226729 35 12 32.773269 12 30C12 27.226731 14.226729 25 17 25 z M 33.5 26C31.750001 26 30.310226 26.692256 29.376953 27.742188C28.443681 28.792119 28 30.152778 28 31.5C28 32.847222 28.443681 34.207881 29.376953 35.257812C30.310226 36.307744 31.750001 37 33.5 37C35.249999 37 36.689774 36.307744 37.623047 35.257812C38.556319 34.207881 39 32.847222 39 31.5C39 30.152778 38.556319 28.792118 37.623047 27.742188C36.689774 26.692256 35.249999 26 33.5 26 z M 33.5 28C34.749999 28 35.560226 28.432744 36.126953 29.070312C36.69368 29.707881 37 30.597222 37 31.5C37 32.402778 36.69368 33.292119 36.126953 33.929688C35.560226 34.567256 34.749999 35 33.5 35C32.250001 35 31.439774 34.567256 30.873047 33.929688C30.30632 33.292119 30 32.402778 30 31.5C30 30.597222 30.30632 29.707882 30.873047 29.070312C31.439774 28.432744 32.250001 28 33.5 28 z M 16.5 39 A 1.5 1.5 0 0 0 16.5 42 A 1.5 1.5 0 0 0 16.5 39 z M 21.5 39 A 1.5 1.5 0 0 0 21.5 42 A 1.5 1.5 0 0 0 21.5 39 z M 28.5 39 A 1.5 1.5 0 0 0 28.5 42 A 1.5 1.5 0 0 0 28.5 39 z M 33.5 39 A 1.5 1.5 0 0 0 33.5 42 A 1.5 1.5 0 0 0 33.5 39 z"></path></g></svg>
      </div>
      <span>Piastra ad induzione</span>
    </div>

  </div>
  <form action="" method="post">
    @csrf
    <select name="intollerances[]" class="custom-select" multiple>
      @if(in_array('forno', []))
      <option value="forno" selected>forno</option>
      @else
      <option value="forno">forno</option>
      @endif

      @if(in_array('friggitriceadaria', []))
      <option value="friggitrice ad aria" selected>friggitrice ad aria</option>
      @else
      <option value="friggitrice ad aria">friggitrice ad aria</option>
      @endif

      @if(in_array('sbattitore', []))
      <option value="sbattitore" selected>sbattitore</option>
      @else
      <option value="sbattitore">sbattitore</option>
      @endif

      @if(in_array('microonde', []))
      <option value="microonde" selected>microonde</option>
      @else
      <option value="microonde">microonde</option>
      @endif

      @if(in_array('griglia elettrica', []))
      <option value="griglia elettrica" selected>griglia elettrica</option>
      @else
      <option value="griglia elettrica">griglia elettrica</option>
      @endif

      @if(in_array('bollitore', []))
      <option value="bollitore" selected>bollitore</option>
      @else
      <option value="bollitore">bollitore</option>
      @endif

      @if(in_array('frullatore', []))
      <option value="frullatore" selected>frullatore</option>
      @else
      <option value="frullatore">frullatore</option>
      @endif

      @if(in_array('spremiagrumi', []))
      <option value="spremiagrumi" selected>spremiagrumi</option>
      @else
      <option value="spremiagrumi">spremiagrumi</option>
      @endif

      @if(in_array('tostapane', []))
      <option value="tostapane" selected>tostapane</option>
      @else
      <option value="tostapane">tostapane</option>
      @endif

      @if(in_array('piastra ad induzione', []))
      <option value="piastra ad induzione" selected>piastra ad induzione</option>
      @else
      <option value="piastra ad induzione">piastra ad induzione</option>
      @endif
    </select>
    <a href="{{route('intollerances.create')}}">INDIETRO</a>
    <input type="submit" class="confirm-button" value="AVANTI">
  </form>
</div>
@endsection