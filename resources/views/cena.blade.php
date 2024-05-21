@section('scripts')
<script src="{{ asset('js/multi-selection-diet-intollerances.js') }}" defer></script>
<script src="{{ asset('js/tempo.js') }}" defer></script>
@endsection

@extends('body')


@section('content')
<div class="pranzo-div">
  <span><strong>CENA</strong></span>

  <div class="select-div">
    @if($preferenzeCena != null && $preferenzeCena[0]['antipasto'] == 1)
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg fill="#ffffff" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M287.116,233.399c5.458,0,9.884-4.425,9.884-9.883c0-5.458-4.426-9.884-9.884-9.884h-4.131 c3.699-6.779,5.86-14.943,5.86-23.721c0-19.183-10.327-35.431-24.461-40.697V92.065c0-5.458-4.426-9.884-9.884-9.884 s-9.884,4.426-9.884,9.884v57.149c-5.05,1.882-9.612,5.163-13.392,9.482c-2.807-3.965-6.201-7.484-10.064-10.422 c-0.095-12.222-7.88-22.644-18.748-26.653V73.484c0-5.458-4.425-9.884-9.883-9.884c-5.458,0-9.884,4.426-9.884,9.884v48.138 c-10.869,4.009-18.654,14.433-18.749,26.654c-10.392,7.904-17.425,19.994-18.579,33.735l-14.072-28.146 c-1.675-3.349-5.096-5.464-8.84-5.464h-6.425V93.054c0-5.458-4.425-9.884-9.883-9.884s-9.884,4.426-9.884,9.884v55.348H73.483 c-4.378,0-8.085,2.851-9.383,6.793c-2.984-2.608-6.313-4.647-9.89-5.98V92.065c0-5.458-4.426-9.884-9.884-9.884 c-5.458,0-9.884,4.426-9.884,9.884v57.149C20.31,154.481,9.981,170.73,9.981,189.912c0,8.777,2.162,16.941,5.861,23.721H9.884 c-5.458,0-9.884,4.426-9.884,9.884c0,5.458,4.426,9.883,9.884,9.883H287.116z M164.906,186.008 c0-15.232,12.392-27.624,27.625-27.624c15.232,0,27.624,12.392,27.624,27.624c0,15.233-12.392,27.625-27.624,27.625 C177.298,213.633,164.906,201.241,164.906,186.008z M254.501,212.645c-7.766,0-14.578-10.623-14.578-22.732 c0-12.109,6.813-22.731,14.578-22.731c7.766,0,14.578,10.622,14.578,22.731C269.079,202.021,262.267,212.645,254.501,212.645z M44.327,167.181c7.766,0,14.578,10.622,14.578,22.731c0,12.109-6.813,22.732-14.578,22.732c-7.766,0-14.578-10.623-14.578-22.732 C29.749,177.803,36.562,167.181,44.327,167.181z M83.367,213.633v-45.464h32.932l22.732,45.464H83.367z"></path> </g></svg>
      </div>
      <span>Antipasto</span>
    </div>
    @if($preferenzeCena != null && $preferenzeCena[0]['primo'] == 1)
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg height="50px" width="50px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M222.194,177.764c4.364,1.447,9.093-0.922,10.532-5.277l36.49-109.764c1.446-4.356-0.922-9.077-5.286-10.524 c-4.364-1.454-9.086,0.906-10.532,5.277l-36.474,109.748C215.471,171.597,217.831,176.318,222.194,177.764z"></path> <path class="st0" d="M251.086,186.333c4.356,1.446,9.078-0.922,10.524-5.278l33.518-100.83c1.454-4.372-0.907-9.077-5.278-10.523 c-4.363-1.463-9.076,0.906-10.523,5.262L245.8,175.793C244.346,180.165,246.714,184.878,251.086,186.333z"></path> <path class="st0" d="M139.979,82.753c7.487,3.552,9.386,11.334,11.501,18.67c3.799,13.059,14.37,34.662,36.235,44.629 c6.136,2.806,14.243,5.834,22.788,8.783l7.4-22.262l-14.354-6.836c-5.397-2.567-6.653-6.548-4.634-10.809 c1.844-3.878,5.198-6.963,10.761-4.57l13.48,6.406l6.295-18.933l-11.27-5.349c-4.952-2.225-5.103-7.344-3.251-11.231 c2.019-4.236,5.913-5.794,11.302-3.234l8.465,4.022l7.789-23.431c-3.759-2.162-7.32-4.133-10.484-5.699 c-21.532-10.642-44.971-5.222-57.481,0.072c-7.026,2.98-14.258,6.43-21.754,2.861L51.437,1.809 c-4.158-2.059-8.974-2.385-13.369-0.85c-4.388,1.51-7.972,4.728-9.975,8.918l-1.216,2.567c-1.995,4.196-2.226,9.013-0.628,13.384 c1.59,4.356,4.865,7.893,9.101,9.824L139.979,82.753z"></path> <path class="st0" d="M280.859,197.715c4.38,1.462,9.093-0.914,10.54-5.278l31.927-96.03c1.454-4.355-0.914-9.076-5.277-10.539 c-4.364-1.446-9.093,0.906-10.539,5.278l-31.928,96.037C274.136,191.547,276.496,196.268,280.859,197.715z"></path> <path class="st0" d="M230.286,323.296c8.544-6.081,20.307-12.24,35.64-17.796c4.339-1.566,6.564-6.327,5.007-10.658 c-1.566-4.324-6.334-6.573-10.666-5.008c-21.97,7.965-37.913,17.28-48.754,27.246c-5.412,4.976-9.554,10.15-12.415,15.483 c-2.845,5.325-4.403,10.874-4.403,16.358c-0.016,5.898,1.884,11.62,5.294,16.294c3.418,4.682,8.21,8.306,13.838,10.873 c7.217,3.259,15.436,4.515,24.21,4.515c11.342,0,23.726-2.146,36.283-5.819c12.55-3.68,25.259-8.893,37.11-15.228 c4.046-2.17,5.579-7.218,3.417-11.271c-2.178-4.054-7.224-5.588-11.278-3.418c-10.818,5.794-22.557,10.602-33.931,13.925 c-11.374,3.339-22.398,5.167-31.602,5.15c-7.13,0.016-13.122-1.096-17.319-3.036c-3.489-1.574-5.826-3.545-7.248-5.5 c-1.431-2.003-2.091-3.982-2.106-6.486c0-2.313,0.652-5.158,2.432-8.504C216.464,335.408,221.734,329.392,230.286,323.296z"></path> <path class="st0" d="M192.826,295.954c-9.45,5.357-16.723,14.1-21.825,24.17c-5.071,10.11-7.972,21.659-7.996,33.231 c0,8.584,1.63,17.208,5.436,25.085c3.768,7.869,9.832,14.927,18.17,19.886c17.382,10.396,36.712,14.18,55.415,14.18 c21.42,0,42.172-4.896,59.444-10.984c8.631-3.06,16.388-6.414,22.938-9.673c6.558-3.266,11.843-6.383,15.746-9.164 c3.752-2.671,4.618-7.877,1.94-11.621c-2.678-3.736-7.869-4.61-11.621-1.94c-2.861,2.051-7.574,4.865-13.496,7.822 c-17.796,8.886-46.695,18.948-74.95,18.9c-16.509-0.007-32.676-3.338-46.87-11.818c-5.469-3.282-9.173-7.622-11.716-12.829 c-2.52-5.222-3.768-11.358-3.768-17.844c-0.008-8.726,2.297-17.971,6.216-25.736c3.902-7.797,9.41-13.973,15.102-17.128 c4.013-2.249,5.428-7.336,3.179-11.342S196.84,293.712,192.826,295.954z"></path> <path class="st0" d="M192.58,436.326c18.4,6.033,38.66,8.902,59.253,8.902c34.178-0.024,69.324-7.86,98.446-23.058 c14.053-7.336,24.274-16.595,30.982-26.626c6.708-10.022,9.864-20.784,9.864-30.886c0-10.539-3.434-20.427-9.872-27.834 c-6.391-7.424-16.016-12.145-26.841-12.105c-6.39,0-13.098,1.582-19.862,4.76c-4.165,1.948-5.961,6.916-4.006,11.072 c1.956,4.173,6.915,5.969,11.088,4.014v-0.008c4.88-2.282,9.141-3.164,12.781-3.172c6.137,0.048,10.715,2.377,14.268,6.383 c3.512,4.03,5.778,9.943,5.778,16.89c0,6.653-2.058,14.156-7.05,21.62c-4.984,7.462-12.939,14.894-24.846,21.126 c-26.276,13.766-59.118,21.174-90.728,21.158c-19.052,0-37.642-2.671-54.055-8.067c-16.437-5.382-30.648-13.472-41.282-24.091 c-3.243-3.259-8.529-3.259-11.779,0c-3.251,3.251-3.251,8.52,0,11.779C157.623,421.073,174.196,430.301,192.58,436.326z"></path> <path class="st0" d="M160.215,322.08c3.242-3.259,3.242-8.529,0-11.78c-3.259-3.259-8.536-3.259-11.795,0 c-6.104,6.16-10.794,14.505-14.283,23.598c-3.442,9.109-5.572,18.901-5.604,28.121c0.032,6.009,0.899,11.835,3.529,17.144 c2.035,4.118,7.042,5.794,11.159,3.728c4.125-2.05,5.794-7.042,3.736-11.159c-1.017-1.987-1.764-5.444-1.749-9.712 c-0.016-6.533,1.669-14.768,4.514-22.207C152.513,332.38,156.535,325.696,160.215,322.08z"></path> <path class="st0" d="M468.992,320.545c-17.192-24.894-45.408-45.146-81.54-59.333c-7.987-3.148-16.436-5.937-25.196-8.456v0.334 c0,6.661-0.779,13.154-2.162,19.497c19.203,5.786,36.26,13.13,50.71,21.715c18.36,10.881,32.539,23.653,41.998,37.388 c9.474,13.774,14.323,28.375,14.331,43.763c-0.008,15.356-4.856,29.964-14.331,43.738c-14.164,20.609-39.065,39.065-72.535,52.188 c-33.446,13.13-75.325,20.959-122.879,20.959c-63.442,0.032-116.17-13.949-152.294-35.719 c-18.074-10.856-31.967-23.622-41.242-37.356c-9.268-13.766-14.021-28.391-14.044-43.81c0.024-15.436,4.777-30.084,14.044-43.842 c13.885-20.586,38.286-39.01,71.358-52.108c33.041-13.122,74.601-20.951,122.179-20.951c15.602,0,30.617,0.85,44.9,2.432 c0.636-2.496,0.977-5.118,0.977-7.924v-11.66c-14.704-1.589-29.972-2.512-45.877-2.512c-66.303,0.016-122.282,14.41-162.42,38.517 c-20.069,12.081-36.204,26.61-47.402,43.19c-11.216,16.581-17.43,35.282-17.415,54.859c-0.016,19.552,6.199,38.27,17.415,54.826 c16.85,24.878,44.629,45.169,80.38,59.389C163.736,503.861,207.657,512,257.388,512c66.28-0.016,122.775-14.418,163.446-38.485 c20.324-12.057,36.72-26.586,48.158-43.166c11.445-16.564,17.828-35.282,17.811-54.898 C486.82,355.819,480.438,337.085,468.992,320.545z"></path> <path class="st0" d="M320.044,132.857v133.339c-0.024,7.392-1.669,13.877-4.801,19.981c-4.705,9.124-13.042,17.534-24.79,25.18 c-11.715,7.654-26.722,14.474-44.017,20.586c-4.34,1.526-6.613,6.279-5.079,10.634c1.526,4.332,6.287,6.613,10.627,5.079 c24.138-8.544,44.772-18.519,59.953-31.577c7.575-6.534,13.79-13.902,18.106-22.255c4.332-8.346,6.668-17.66,6.661-27.628V132.857 c0-4.61-3.736-8.329-8.33-8.329C323.772,124.528,320.044,128.248,320.044,132.857z"></path> </g> </g></svg>
      </div>
      Primo
    </div>
    @if($preferenzeCena != null && $preferenzeCena[0]['secondo'] == 1)
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg fill="#ffffff" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M487.489,361.123h-10.404c1.474-8.065,2.234-16.27,2.234-24.511c0-75.383-61.33-136.712-136.715-136.712h-75.311 c-72.649,0-132.237,56.965-136.465,128.575l-21.399,0.066L93.12,312.325c-6.688-6.688-15.578-10.371-25.035-10.371 c-9.458,0-18.348,3.683-25.035,10.371c-6.686,6.686-10.37,15.577-10.37,25.034c0,8.87,3.239,17.24,9.159,23.763h-17.33 C10.996,361.123,0,372.118,0,385.634c0,13.516,10.996,24.511,24.511,24.511h10.451l5.959,17.878 c6.839,20.518,29.139,36.591,50.768,36.591h328.623c21.628,0,43.927-16.072,50.768-36.591l5.959-17.878h10.451 c13.515,0,24.511-10.995,24.511-24.511C512,372.118,501.004,361.123,487.489,361.123z M462.979,336.613 c0,8.258-0.863,16.475-2.541,24.511h-16.74c1.939-7.989,2.941-16.191,2.941-24.511c0-57.365-46.669-104.034-104.034-104.034 c-21.589,0-42.313,6.584-59.931,19.04c-3.684,2.605-4.56,7.704-1.954,11.388c2.605,3.684,7.701,4.561,11.388,1.954 c14.844-10.495,32.305-16.042,50.496-16.042c48.355,0,87.694,39.339,87.694,87.694c0,8.361-1.191,16.578-3.506,24.511H258.416 c-2.315-7.933-3.506-16.15-3.506-24.511c0-18.192,5.547-35.654,16.042-50.497c2.606-3.684,1.73-8.782-1.954-11.388 c-3.688-2.606-8.782-1.73-11.388,1.954c-12.456,17.617-19.04,38.341-19.04,59.931c0,8.319,1.002,16.521,2.941,24.511h-16.74 c-1.679-8.035-2.541-16.252-2.541-24.511c0-66.373,54-120.371,120.374-120.371S462.979,270.24,462.979,336.613z M146.919,336.621 c0-66.378,54.001-120.38,120.374-120.38h10.546c-42.803,23.121-71.95,68.404-71.95,120.371c0,8.241,0.761,16.446,2.234,24.511 h-61.205V336.621z M54.605,323.879c3.6-3.6,8.387-5.584,13.48-5.584s9.879,1.983,13.497,5.6l18.725,18.622 c1.536,1.529,3.617,2.415,5.787,2.377l24.486-0.076v16.306H64.894l-10.29-10.284c-3.6-3.6-5.583-8.388-5.583-13.481 C49.021,332.267,51.004,327.48,54.605,323.879z M487.489,393.804h-16.17c-0.026,0-365.106,0-365.106,0 c-4.513,0-8.17,3.658-8.17,8.17s3.657,8.17,8.17,8.17h353.6l-4.237,12.711c-4.593,13.777-20.741,25.417-35.265,25.417H91.688 c-14.523,0-30.672-11.64-35.265-25.417l-4.237-12.711h21.345c4.513,0,8.17-3.658,8.17-8.17s-3.657-8.17-8.17-8.17H40.709 c-0.029,0-16.199,0-16.199,0c-4.506,0-8.17-3.665-8.17-8.17c0-4.506,3.665-8.17,8.17-8.17h462.979c4.506,0,8.17,3.665,8.17,8.17 C495.66,390.14,491.995,393.804,487.489,393.804z"></path> </g> </g> <g> <g> <path d="M342.604,295.762c-22.526,0-40.851,18.325-40.851,40.851c0,4.512,3.657,8.17,8.17,8.17s8.17-3.658,8.17-8.17 c0-13.516,10.996-24.511,24.511-24.511c13.515,0,24.511,10.995,24.511,24.511c0,4.512,3.657,8.17,8.17,8.17s8.17-3.658,8.17-8.17 C383.455,314.087,365.13,295.762,342.604,295.762z"></path> </g> </g> <g> <g> <path d="M228.767,145.431c0-12.895,3.324-18.99,7.172-26.046c4.296-7.878,9.168-16.808,9.168-33.869 c0-17.028-4.852-25.954-9.144-33.82c-1.378-2.564-4.085-4.308-7.2-4.308c-4.512,0-8.17,3.658-8.17,8.17 c0,1.424,0.366,2.762,1.007,3.927c3.847,7.051,7.167,13.144,7.167,26.031c0,12.895-3.324,18.99-7.172,26.046 c-4.296,7.878-9.168,16.808-9.168,33.869s4.871,25.99,9.167,33.868c1.483,2.719,4.287,4.259,7.18,4.259 c1.321,0,2.662-0.321,3.904-0.999c3.962-2.16,5.422-7.123,3.26-11.084C232.091,164.418,228.767,158.326,228.767,145.431z"></path> </g> </g> <g> <g> <path d="M283.235,145.431c0-12.895,3.324-18.99,7.172-26.046c4.296-7.878,9.168-16.808,9.168-33.869 c0-17.028-4.852-25.954-9.144-33.82c-1.378-2.564-4.085-4.308-7.2-4.308c-4.512,0-8.17,3.658-8.17,8.17 c0,1.424,0.366,2.762,1.007,3.927c3.847,7.051,7.167,13.144,7.167,26.031c0,12.895-3.324,18.99-7.172,26.046 c-4.296,7.878-9.168,16.808-9.168,33.869s4.871,25.99,9.167,33.868c1.483,2.719,4.287,4.259,7.18,4.259 c1.321,0,2.662-0.321,3.904-0.999c3.962-2.16,5.422-7.123,3.26-11.084C286.559,164.418,283.235,158.326,283.235,145.431z"></path> </g> </g> </g></svg>
      </div>
      Secondo
    </div>
    @if($preferenzeCena != null && $preferenzeCena[0]['contorno'] == 1)
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg fill="#ffffff" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.002 512.002" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M437.021,74.981C388.669,26.629,324.381,0,256.001,0S123.335,26.629,74.983,74.981 C26.629,123.333,0.001,187.62,0.001,256.001c0,68.044,26.404,132.105,74.348,180.382c3.461,3.485,9.09,3.502,12.571,0.044 c3.482-3.46,3.502-9.087,0.043-12.571c-44.614-44.927-69.183-104.538-69.183-167.855c0-131.356,106.866-238.222,238.222-238.222 s238.221,106.866,238.221,238.222S387.357,494.223,256.001,494.223c-54.572,0-105.913-17.952-148.474-51.916 c-3.837-3.061-9.43-2.433-12.492,1.403c-3.063,3.838-2.434,9.431,1.405,12.494c45.742,36.503,100.919,55.799,159.562,55.799 c68.379,0,132.668-26.629,181.02-74.981s74.981-112.64,74.981-181.02S485.373,123.333,437.021,74.981z"></path> </g> </g> <g> <g> <path d="M412.044,194.471c-4.42-11.196-10.077-21.953-16.82-31.974c-2.741-4.074-8.265-5.155-12.337-2.413 c-4.074,2.742-5.155,8.265-2.413,12.338c6.027,8.956,11.084,18.569,15.031,28.574c1.38,3.495,4.728,5.629,8.272,5.629 c1.086,0,2.19-0.2,3.261-0.622C411.605,204.2,413.846,199.038,412.044,194.471z"></path> </g> </g> <g> <g> <path d="M326,398.861c-1.912-4.522-7.128-6.636-11.65-4.724c-18.477,7.814-38.108,11.778-58.349,11.778 c-82.662,0-149.913-67.251-149.913-149.913c0-14.016,1.931-27.888,5.739-41.231c1.348-4.721-1.388-9.64-6.108-10.987 c-4.726-1.346-9.641,1.385-10.988,6.108c-4.261,14.93-6.422,30.444-6.422,46.109c0,92.466,75.226,167.692,167.692,167.692 c22.633,0,44.596-4.435,65.276-13.181C325.798,408.598,327.915,403.383,326,398.861z"></path> </g> </g> <g> <g> <path d="M378.325,85.227c-5.112-8.844-13.278-12.511-18.977-14.499c-1.581-0.552-3.287-0.646-4.919-0.27l-0.685,0.158 c-10.072,2.312-20.488-1.613-26.528-10.003c-1.011-1.404-2.41-2.484-4.025-3.105c-5.535-2.126-13.989-4.567-23.451-1.203 c-18.495,6.577-32.941,20.922-39.635,39.357c-0.94,2.589-1.691,5.208-2.297,7.844c-3.597-4.532-7.686-8.747-12.242-12.574 c-2.873-2.412-6.061-4.355-9.477-5.773c-10.253-4.257-22.114-3.089-31.73,3.127l-3.479,2.248 c-6.656,4.305-15.19,4.201-21.741-0.268l-2.067-1.41c-12.246-8.354-28.261-8.179-39.847,0.433 c-0.495,0.369-0.988,0.754-1.48,1.159c-7.53,6.215-13.902,13.597-18.939,21.941c-2.538,4.203-1.186,9.667,3.016,12.204 c4.205,2.536,9.667,1.186,12.204-3.016c3.998-6.622,9.056-12.482,15.034-17.415c0.254-0.21,0.511-0.41,0.77-0.603 c5.507-4.094,13.232-4.101,19.222-0.015l2.067,1.41c12.477,8.511,28.734,8.71,41.412,0.511l3.479-2.248 c4.703-3.04,10.408-3.652,15.258-1.637c1.766,0.734,3.358,1.704,4.862,2.968c16.648,13.983,25.467,34.483,24.2,56.246 c-1.996,34.273-30.438,62.349-64.753,63.92c-18.823,0.863-36.662-5.805-50.235-18.772c-13.582-12.975-21.063-30.461-21.063-49.236 c0-4.484,0.437-8.966,1.301-13.322c0.953-4.817-2.177-9.495-6.994-10.448c-4.805-0.955-9.493,2.176-10.447,6.992 c-1.087,5.491-1.639,11.137-1.639,16.777c0,23.679,9.432,45.73,26.56,62.091c16.136,15.415,37.044,23.771,59.254,23.77 c1.354,0,2.712-0.031,4.075-0.094c21.099-0.966,41.075-9.746,56.249-24.723c14.458-14.27,23.326-32.972,25.196-52.937 c7.306,7.162,16.26,12.556,26.375,15.714c6.305,1.969,12.816,2.945,19.325,2.945c9.36,0,18.713-2.022,27.428-6.025 c14.775-6.788,26.42-18.674,32.787-33.469C390.031,124.739,388.784,103.325,378.325,85.227z M365.422,136.949 c-9.507,22.087-34.948,33.772-57.913,26.606c-12.6-3.933-22.754-12.588-28.593-24.371c-5.842-11.791-6.588-25.093-2.099-37.455 c4.876-13.429,15.402-23.88,28.878-28.673c1.192-0.423,2.401-0.639,3.713-0.639c1.54,0,3.219,0.297,5.172,0.904 c9.979,12.075,25.65,17.83,41.117,15.037c3.633,1.533,5.801,3.283,7.235,5.765C370.553,107.311,371.458,122.919,365.422,136.949z"></path> </g> </g> <g> <g> <path d="M449.421,272.561c1.37-19.976-8.637-39.304-26.265-49.604c-17.63-10.3-39.382-9.527-56.108,1.477 c-9.073-5.12-19.592-6.483-29.689-3.833c-10.297,2.702-18.924,9.252-24.293,18.442c-10.749,18.398-5.04,41.949,12.617,53.466 c-0.111,1.638-0.206,3.263-0.298,4.862c-0.894,15.625-1.818,31.782-18.624,60.547c-2.477,4.238-1.049,9.682,3.191,12.159 l40.634,23.74c1.372,0.802,2.922,1.214,4.484,1.214c0.755,0,1.514-0.096,2.257-0.292c2.28-0.599,4.229-2.078,5.418-4.114 c12.98-22.217,23.985-32.071,32.124-38.174c3.927-2.945,4.723-8.517,1.778-12.445c-2.945-3.927-8.516-4.723-12.445-1.778 c-12.168,9.125-22.3,20.373-32.176,35.839l-25.583-14.947c14.704-27.738,15.834-45.721,16.674-60.396 c2.994,0.329,6.023,0.34,9.028-0.012c4.447,6.608,10.331,12.138,17.287,16.202c6.956,4.064,14.661,6.473,22.601,7.103 c3.32,7.926,9.154,14.661,16.66,19.046c6.303,3.683,13.212,5.433,20.034,5.433c13.711,0,27.075-7.071,34.476-19.739 C474.184,307.962,467.987,283.786,449.421,272.561z M447.851,317.79c-6.138,10.508-19.682,14.064-30.193,7.925 c-5.395-3.152-9.099-8.255-10.43-14.37c-0.892-4.102-4.524-6.999-8.681-6.999c-0.154,0-0.309,0.004-0.465,0.012 c-6.887,0.358-13.706-1.3-19.686-4.793c-5.978-3.494-10.766-8.61-13.842-14.795c-1.938-3.899-6.417-5.82-10.576-4.537 c-5.985,1.843-12.247,1.12-17.641-2.029c-10.507-6.14-14.062-19.683-7.923-30.193c2.975-5.089,7.753-8.717,13.455-10.214 c5.703-1.498,11.647-0.683,16.736,2.291c1.038,0.607,2.049,1.317,3.006,2.112c3.34,2.778,8.202,2.734,11.494-0.108 c11.474-9.913,27.982-11.435,41.081-3.783c13.093,7.651,19.877,22.779,16.876,37.646c-0.861,4.261,1.487,8.52,5.55,10.066 c1.163,0.443,2.277,0.973,3.312,1.579c0.001,0,0.001,0,0.002,0C450.436,293.739,453.99,307.282,447.851,317.79z"></path> </g> </g> <g> <g> <circle cx="251.924" cy="332.33" r="8.889"></circle> </g> </g> <g> <g> <circle cx="233.422" cy="296.773" r="8.889"></circle> </g> </g> <g> <g> <circle cx="208.212" cy="328.775" r="8.889"></circle> </g> </g> <g> <g> <circle cx="182.682" cy="341.22" r="8.889"></circle> </g> </g> <g> <g> <circle cx="168.376" cy="309.218" r="8.889"></circle> </g> </g> <g> <g> <circle cx="198.6" cy="293.217" r="8.889"></circle> </g> </g> <g> <g> <circle cx="208.212" cy="261.216" r="8.889"></circle> </g> </g> <g> <g> <circle cx="166.598" cy="277.216" r="8.889"></circle> </g> </g> </g></svg>
      </div>
      <span>Contorno</span>
    </div>
    @if($preferenzeCena != null && $preferenzeCena[0]['dolce'] == 1)
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg fill="#ffffff" height="50px" width="50px" viewBox="-4.64 0 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 113.6 122.88" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill-rule:evenodd;clip-rule:evenodd;}  </style> <g> <path class="st0" d="M0.76,73.63l-0.05-0.02c0.03-0.03,0.06-0.06,0.08-0.08c0.14-0.41,0.41-0.75,0.75-0.99l56.28-48.89 c0.24-0.59,0.53-1.18,0.86-1.75c2.19-3.8,5.86-6.22,9.86-6.96c-2.4-4.22-5.73-7.77-9.61-9.84l0,0l-0.16-0.08 c-1.3-0.68-1.81-2.29-1.12-3.6c0.68-1.3,2.29-1.81,3.6-1.12l0.17,0.09l0.01-0.01l0,0c1.15,0.59,2.26,1.29,3.32,2.08 c4.16,3.12,7.58,7.62,9.89,12.67c1.27,0.32,2.51,0.82,3.7,1.5c2.58,1.49,4.52,3.65,5.73,6.14l0,0.01l0.06,0.14l0,0 c0.93,2.04,1.38,4.27,1.3,6.52c8.46,4.32,15.36,10.75,20.69,19.01c0.2,0.2,0.37,0.45,0.47,0.74l0.01,0.02l0.06,0.09h-0.02 c4.89,10.76,7.03,21.15,6.94,31.22c-0.08,10.16-2.43,19.97-6.49,29.52c-0.29,0.68-0.92,1.12-1.61,1.19l0,0L2.2,122.87 c-1.09,0.12-2.07-0.67-2.19-1.76c0-0.07-0.01-0.14-0.01-0.21l0,0c0-27.1,0.32-33.94,0.68-46.79C0.68,73.96,0.71,73.79,0.76,73.63 L0.76,73.63L0.76,73.63z M62.26,23.3l-0.01,0.01l-0.01,0.02l-0.01,0.01l0,0l-0.01,0.01l-0.01,0.02l-0.01,0.01l-0.01,0.02 l-0.01,0.01l-0.01,0.02l-0.01,0.02l-0.01,0.01l-0.01,0.02l-0.01,0.01l0,0l-0.01,0.01l-0.01,0.02l-0.01,0.02l-0.01,0.01l-0.01,0.02 l-0.01,0.02l-0.01,0.02l-0.01,0.01l-0.01,0.02l0,0.01l-0.01,0.01l-0.01,0.02l-0.01,0.02l-0.01,0.02l-0.01,0.01L62,23.71l-0.01,0.02 l-0.01,0.02l-0.01,0.02l-0.01,0.02l-0.04,0.06l-0.02,0.04l-0.01,0.02l-0.03,0.06l-0.01,0.02l-0.02,0.04l-0.03,0.06l0,0l-0.03,0.06 l-0.02,0.05l-0.01,0.01l-0.03,0.06l-0.01,0.03l-0.02,0.03l-0.03,0.06l0,0.01l-0.03,0.05l-0.03,0.05l0,0.01l-0.03,0.06l-0.02,0.03 l-0.01,0.03l-0.03,0.06l-0.01,0.02l-0.02,0.05l-0.07,0.17l-0.01,0.02l-0.03,0.06l-0.01,0.02l-0.02,0.04l-0.03,0.06v0l-0.02,0.06 l-0.02,0.04l-0.01,0.02l-0.02,0.06l-0.01,0.03l-0.04,0.1l0,0.01l-0.02,0.06l-0.04,0.13l-0.01,0.03l-0.01,0.03l-0.02,0.06l0,0.01 l-0.02,0.05l-0.02,0.06l0,0.01L61,25.98l-0.01,0.04l-0.01,0.03l-0.02,0.06l0,0.02l-0.01,0.05l-0.02,0.06l0,0l-0.02,0.06l-0.01,0.04 l-0.02,0.09l0,0.02l-0.01,0.04l-0.02,0.06v0l-0.02,0.06l-0.01,0.05l0,0.02l-0.01,0.06l-0.01,0.03l-0.01,0.04l-0.01,0.06l0,0.01 l-0.01,0.06L60.74,27l0,0.01l-0.01,0.06l-0.01,0.03l-0.01,0.03l-0.01,0.06l0,0.01l-0.01,0.05l-0.01,0.06l0,0.01l-0.01,0.06l0,0.04 l0,0.03l-0.01,0.06l0,0.02l-0.01,0.05l-0.01,0.06v0l-0.01,0.07l0,0.04l0,0.02l-0.01,0.07c-0.11,0.97-0.09,1.95,0.07,2.9l0,0 c0.53,2.97,2.31,5.69,5.13,7.32c5.06,2.92,11.52,1.19,14.44-3.87c0.23-0.4,0.43-0.81,0.61-1.22l0.03-0.08l0.01-0.02l0.02-0.06 l0.03-0.08l0.01-0.01l0.03-0.07l0.03-0.08h0l0.03-0.08l0.03-0.07l0-0.01l0.03-0.08l0.02-0.06l0.01-0.02l0.03-0.08l0.02-0.05 l0.01-0.04l0.03-0.08l0.01-0.04l0.01-0.05l0.03-0.08l0.01-0.02l0.02-0.06l0.02-0.08l0-0.01l0.02-0.07l0.02-0.08v0l0.02-0.08 l0.02-0.07l0-0.01l0.02-0.08l0.01-0.06l0-0.02l0.02-0.08l0.01-0.05l0.01-0.04l0.02-0.08l0.01-0.03l0.01-0.05l0.02-0.08l0-0.02 l0.01-0.06l0.01-0.08l0-0.01l0.01-0.07l0.01-0.08v0l0.01-0.08l0.01-0.07l0-0.01l0.01-0.08l0.01-0.06l0-0.03l0.01-0.08l0-0.04 l0-0.04l0.01-0.08l0-0.03l0-0.05l0.01-0.08l0-0.02l0-0.06l0-0.08V29.5l0-0.08l0-0.08v0l0-0.08l0-0.07v-0.02l0-0.08l0-0.06v-0.03 v-0.08v-0.04v-0.04l0-0.08l0-0.03l0-0.14l0-0.02l0-0.06l0-0.08v-0.01l0-0.08l-0.01-0.08v0l-0.01-0.08l0-0.07l0-0.02l-0.01-0.08 l-0.01-0.06l0-0.03l-0.01-0.08l0-0.04l0-0.04l-0.01-0.08c-0.13-1.09-0.43-2.15-0.89-3.15l0,0l-0.05-0.1l0,0 c-0.9-1.83-2.32-3.43-4.22-4.52l-0.09-0.05l-0.09-0.05l-0.06-0.03l-0.04-0.02l-0.09-0.05l-0.09-0.05l-0.02-0.01l-0.07-0.04 l-0.09-0.04l-0.08-0.04l-0.01-0.01l-0.19-0.09l-0.05-0.02l-0.05-0.02l-0.09-0.04l-0.09-0.04l-0.01,0l-0.08-0.03l-0.09-0.04 l-0.07-0.03l-0.03-0.01l-0.1-0.04l-0.09-0.04l-0.03-0.01l-0.06-0.02l-0.1-0.03l-0.09-0.03l0,0l-0.1-0.03l-0.1-0.03l-0.06-0.02 l-0.04-0.01l-0.1-0.03L74,18.87l-0.02-0.01l-0.08-0.02l-0.1-0.03l-0.08-0.02l-0.02,0l-0.1-0.02l-0.1-0.02l-0.04-0.01l-0.05-0.01 l-0.1-0.02l-0.1-0.02l-0.01,0l-0.09-0.02l-0.1-0.02l-0.07-0.01l-0.03,0l-0.1-0.02l-0.1-0.02l-0.03,0l-0.17-0.02l-0.09-0.01l-0.01,0 l-0.1-0.01l-0.1-0.01l-0.06,0l-0.04,0l-0.1-0.01l-0.1-0.01l-0.02,0l-0.08-0.01l-0.18-0.01l-0.02,0l-0.1,0l-0.1,0l-0.04,0l-0.06,0 l-0.1,0h-0.1h0h-0.09l-0.1,0l-0.07,0h-0.03l-0.1,0l-0.1,0l-0.03,0l-0.07,0l-0.1,0.01L70.4,18.5h-0.01l-0.1,0.01 C67.12,18.77,64.11,20.45,62.26,23.3L62.26,23.3z M56.88,30.98L9.13,70.89l91.19-22.81c-4.56-4.35-10.06-9.2-16.2-13.12 c-0.18,0.39-0.38,0.77-0.59,1.14c-3.97,6.87-12.75,9.23-19.62,5.26c-3.83-2.21-6.25-5.91-6.97-9.94l0,0L56.88,30.98L56.88,30.98z M76.8,33.84c0.4-0.27,0.5-0.81,0.24-1.21c-0.26-0.4-0.81-0.51-1.2-0.24c-0.99,0.66-2.01,1.16-3.05,1.49 c-1.04,0.33-2.11,0.51-3.22,0.54c-0.48,0.01-0.86,0.4-0.85,0.88c0.01,0.48,0.4,0.86,0.88,0.85c1.27-0.03,2.51-0.23,3.71-0.62 C74.51,35.15,75.68,34.58,76.8,33.84L76.8,33.84L76.8,33.84L76.8,33.84z M4.88,84.32c0.7,0.35,1.4,0.73,2.09,1.1l0.02,0.01 c9.24,5.01,13.89,0.51,18.71-4.14c5.38-5.2,10.96-10.6,22.94-4.1c2.12,1.15,4.23,2.29,6.64,2.33c2.41,0.04,5.19-1,8.72-4.2 l0.26-0.31c10.29-10.49,16.1-7.34,22.02-4.14c9.25,5.02,13.9,0.52,18.71-4.14c0.76-0.74,1.53-1.48,2.31-2.19 c-0.97-3.97-2.33-8-4.11-12.09C45.4,66.22,62.4,62.18,5.03,75.84C5,76.65,4.95,79.92,4.88,84.32L4.88,84.32z M108.29,69.44 c-0.4,0.38-0.79,0.76-1.19,1.15c-5.38,5.2-10.96,10.6-22.94,4.1c-2.12-1.15-4.23-2.29-6.64-2.33c-2.41-0.04-5.19,1-8.71,4.19 l-0.27,0.32c-10.29,10.48-16.1,7.34-22.02,4.13l-0.02-0.01c-9.24-5-13.89-0.51-18.7,4.14c-5.38,5.21-10.96,10.6-22.95,4.1 L4.8,89.19L4.59,103.4c1.16,0.51,2.28,1.12,3.4,1.73l0.02,0.01c9.25,5.02,13.9,0.52,18.71-4.14c5.38-5.2,10.96-10.6,22.94-4.1 c2.12,1.15,4.23,2.29,6.65,2.33c2.41,0.04,5.19-1,8.72-4.2l0.25-0.29c10.3-10.5,16.11-7.35,22.03-4.14 c9.25,5.01,13.9,0.52,18.71-4.14c1-0.97,2.01-1.94,3.05-2.83c0.06-1.02,0.09-2.05,0.1-3.08C109.2,76.89,108.92,73.19,108.29,69.44 L108.29,69.44z M108.39,90.07l-0.24,0.23c-5.38,5.2-10.96,10.6-22.94,4.1c-2.12-1.15-4.23-2.29-6.64-2.33 c-2.41-0.04-5.19,1-8.72,4.2l-0.26,0.31c-10.29,10.49-16.1,7.34-22.01,4.14c-9.26-5.02-13.91-0.52-18.72,4.13 c-5.38,5.2-10.96,10.6-22.95,4.1l-0.02-0.01c-0.45-0.25-0.91-0.49-1.37-0.73c-0.06,4.89-0.11,8.78-0.11,10.19l99.07-11.14 C105.8,101.61,107.47,95.89,108.39,90.07L108.39,90.07z"></path> </g> </g></svg>
      </div>
      Dolce
    </div>
  </div>

  <h4>Tempo a disposizione</h4>

  <form action="" method="post">
    @csrf
    @if($preferenzeCena != null)
      <input type="range" id="tempo" name="tempo" min="10" max="90" step="5" value="{{$preferenzeCena[0]['tempoCena']}}">
    @else
      <input type="range" id="tempo" name="tempo" min="10" max="90" step="5">
    @endif
    <p><output id="value"></output> minuti</p>
    <h4>I tuoi alimenti preferiti per cena</h4>
    @if($preferenzeCena != null) 
      <textarea name="preferenzeCena" id="preferenzeCena">{{$preferenzeCena[0]['alimentiPreferiti']}}</textarea>
    @else
      <textarea name="preferenzeCena" id="preferenzeCena"></textarea>
    @endif
    <select name="intollerances[]" class="custom-select" multiple>
      @if($preferenzeCena != null && $preferenzeCena[0]['antipasto'] == 1)
      <option value="antipasto" selected>antipasto</option>
      @else
      <option value="antipasto">antipasto</option>
      @endif

      @if($preferenzeCena != null && $preferenzeCena[0]['primo'] == 1)
      <option value="primo" selected>primo</option>
      @else
      <option value="primo">primo</option>
      @endif

      @if($preferenzeCena != null && $preferenzeCena[0]['secondo'] == 1)
      <option value="secondo" selected>secondo</option>
      @else
      <option value="secondo">secondo</option>
      @endif

      @if($preferenzeCena != null && $preferenzeCena[0]['contorno'] == 1)
      <option value="contorno" selected>contorno</option>
      @else
      <option value="contorno">contorno</option>
      @endif

      @if($preferenzeCena != null && $preferenzeCena[0]['dolce'] == 1)
      <option value="dolce" selected>dolce</option>
      @else
      <option value="dolce">dolce</option>
      @endif
    </select>
    <div class="bottoni">
        <a href="{{route('pranzo.create')}}">INDIETRO</a>
        <input type="submit" class="confirm-button" value="AVANTI">
    </div>
    </form>
</div>
@endsection