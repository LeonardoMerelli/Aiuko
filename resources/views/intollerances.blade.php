@section('scripts')
<script src="{{ asset('js/multi-selection-diet-intollerances.js') }}" defer></script>
@endsection

@extends('body')


@section('content')
<div class="diet-div">
  <div class="logo"></div>
  <span>HAI QUALCHE <br><strong>INTOLLERANZA ?</strong></span>

  <div class="select-div">
    @if(in_array('glutine', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18.325 45.825C16.25 42.925 16.25 39.575 16.25 36.25C20.425 38.75 24.575 41.25 26.675 44.175L27.5 45.575V39.875C23.75 37.625 20.2 35.325 18.325 32.7C16.25 29.8 16.25 26.45 16.25 23.125C20.425 25.625 24.575 28.125 26.675 31.05L27.5 32.5V26.75C23.75 24.5 20.2 22.2 18.325 19.575C16.25 16.675 16.25 13.325 16.25 10C20.425 12.5 24.575 15 26.675 17.925C26.925 18.275 27.15 18.65 27.35 19.05C26.925 17.5 26.65 16.05 26.625 14.55C26.6 10.775 28.25 6.90002 29.9 3.02502C31.625 6.72502 33.35 10.45 33.375 14.225C33.4 15.8 33.125 17.4 32.675 18.975C32.875 18.625 33.075 18.275 33.325 17.925C35.425 15 39.575 12.5 43.75 10C43.75 13.325 43.75 16.675 41.675 19.575C39.8 22.2 36.25 24.5 32.5 26.75V32.5L33.325 31.05C35.425 28.125 39.575 25.625 43.75 23.125C43.75 26.45 43.75 29.8 41.675 32.7C39.8 35.325 36.25 37.625 32.5 39.875V45.575L33.325 44.175C35.425 41.25 39.575 38.75 43.75 36.25C43.75 39.575 43.75 42.925 41.675 45.825C39.8 48.45 36.25 50.75 32.5 53V57.5H27.5V53C23.75 50.75 20.2 48.45 18.325 45.825Z" fill="#F8F8F8"/>
        </svg>
      </div>
      Glutine
    </div>
    @if(in_array('latticini', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 5H40M22.5 5V11.9725C22.4999 13.947 21.9154 15.8772 20.82 17.52L19.18 19.98C18.0841 21.6235 17.4996 23.5547 17.5 25.53V50C17.5 51.3261 18.0268 52.5979 18.9645 53.5355C19.9021 54.4732 21.1739 55 22.5 55H37.5C38.8261 55 40.0979 54.4732 41.0355 53.5355C41.9732 52.5979 42.5 51.3261 42.5 50V25.5275C42.4999 23.553 41.9154 21.6228 40.82 19.98L39.18 17.52C38.0841 15.8765 37.4996 13.9453 37.5 11.97V5" stroke="#F8F8F8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M17.5 37.5C19.4794 36.671 21.604 36.2441 23.75 36.2441C25.896 36.2441 28.0206 36.671 30 37.5C31.9794 38.3292 34.104 38.7563 36.25 38.7563C38.396 38.7563 40.5206 38.3292 42.5 37.5" stroke="#F8F8F8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      Latticini
    </div>
    @if(in_array('soia', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M34.75 18.75C34.75 17 35.25 15.75 35.5 15H37L39.25 8.75H41.25V5H18.75V8.75H20.75L23 15H24.5C25 15.75 25.25 17 25.25 18.75C25.25 22 15 34.25 15 44V49C15 52.5 21.75 54.75 30 54.75C38.25 54.75 45 52.5 45 49V44C45 34.25 34.75 22 34.75 18.75ZM30 37.5C28.6739 37.5 27.4021 36.9732 26.4645 36.0355C25.5268 35.0979 25 33.8261 25 32.5C25 31.1739 25.5268 29.9021 26.4645 28.9645C27.4021 28.0268 28.6739 27.5 30 27.5C31.3261 27.5 32.5979 28.0268 33.5355 28.9645C34.4732 29.9021 35 31.1739 35 32.5C35 33.8261 34.4732 35.0979 33.5355 36.0355C32.5979 36.9732 31.3261 37.5 30 37.5Z" fill="#F8F8F8"/>
        </svg>
      </div>
      Soia
    </div>
    @if(in_array('uova', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M30 52.5C25.125 52.5 20.9892 50.8017 17.5925 47.405C14.1958 44.0083 12.4983 39.8733 12.5 35C12.5 31.7917 13.0317 28.5625 14.095 25.3125C15.1583 22.0625 16.5333 19.1142 18.22 16.4675C19.9067 13.8225 21.7917 11.6667 23.875 10C25.9583 8.33333 28 7.5 30 7.5C32.0417 7.5 34.0942 8.33333 36.1575 10C38.2208 11.6667 40.0958 13.8233 41.7825 16.47C43.4692 19.115 44.8442 22.0625 45.9075 25.3125C46.9708 28.5625 47.5017 31.7917 47.5 35C47.5 39.875 45.8017 44.0108 42.405 47.4075C39.0083 50.8042 34.8733 52.5017 30 52.5ZM30 47.5C33.4583 47.5 36.4067 46.2808 38.845 43.8425C41.2833 41.4042 42.5017 38.4567 42.5 35C42.5 32.625 42.0933 30.125 41.28 27.5C40.4667 24.875 39.4458 22.4475 38.2175 20.2175C36.9892 17.9892 35.6458 16.1458 34.1875 14.6875C32.7292 13.2292 31.3333 12.5 30 12.5C28.7083 12.5 27.3225 13.2292 25.8425 14.6875C24.3625 16.1458 23.0092 17.9892 21.7825 20.2175C20.5525 22.4475 19.5317 24.875 18.72 27.5C17.9083 30.125 17.5017 32.625 17.5 35C17.5 38.4583 18.7192 41.4067 21.1575 43.845C23.5958 46.2833 26.5433 47.5017 30 47.5ZM32.5 45C33.2083 45 33.8025 44.76 34.2825 44.28C34.7625 43.8 35.0017 43.2067 35 42.5C35 41.7917 34.76 41.1975 34.28 40.7175C33.8 40.2375 33.2067 39.9983 32.5 40C30.4167 40 28.6458 39.2708 27.1875 37.8125C25.7292 36.3542 25 34.5833 25 32.5C25 31.7917 24.76 31.1975 24.28 30.7175C23.8 30.2375 23.2067 29.9983 22.5 30C21.7917 30 21.1975 30.24 20.7175 30.72C20.2375 31.2 19.9983 31.7933 20 32.5C20 35.9583 21.2192 38.9067 23.6575 41.345C26.0958 43.7833 29.0433 45.0017 32.5 45Z" fill="#F8F8F8"/>
        </svg>
      </div>
      Uova
    </div>
    @if(in_array('arachidi', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M55.5394 8.23775C55.2281 5.219 54.735 4.19338 54.3844 3.6815C53.9006 2.97557 52.6078 1.9265 51.3759 1.9265C51.2841 1.9265 51.1969 1.93213 51.1097 1.94244C50.4544 2.02025 49.8225 2.3615 49.1063 3.04025C47.1953 2.26491 45.1516 1.8691 43.0894 1.87494C38.2931 1.87494 33.4762 3.93463 29.8734 7.52619C27.4031 9.98994 26.3109 12.4471 25.3462 14.6146C24.4594 16.6115 23.6906 18.3374 21.9684 19.8393C19.9209 21.6253 17.9222 22.0509 15.6037 22.5449C12.9741 23.1056 9.99469 23.7403 7.11563 26.6118C3.73688 29.9803 1.87594 34.4915 1.875 39.3131C1.875 44.3043 3.8475 49.0199 7.42875 52.5909C11.0091 56.1599 15.735 58.1249 20.7366 58.1249C25.5703 58.1249 30.0919 56.2696 33.4697 52.9012C36.3534 50.0268 37.0959 47.1628 37.7503 44.6353C38.3053 42.494 38.8284 40.4709 40.6359 38.3821C42.1791 36.5981 43.8553 35.7187 45.7931 34.7006C47.805 33.6449 50.0859 32.4487 52.4691 30.0712C58.6378 23.9212 59.9128 14.6287 55.5394 8.23775ZM51.2288 28.8262C46.7869 33.2568 42.7903 33.2062 39.3066 37.2328C34.9669 42.2493 37.1044 46.7962 32.2284 51.6571C29.0756 54.8015 24.9253 56.3671 20.7366 56.3671C16.4006 56.3671 12.0234 54.6881 8.67 51.3468C2.07844 44.7721 1.93781 34.2562 8.35781 27.8549C13.2009 23.0249 18.1603 25.4943 23.1253 21.1631C27.1612 17.6437 26.6475 13.2281 31.1147 8.77119C34.5272 5.36994 38.9072 3.63369 43.0884 3.63369C45.3544 3.63369 47.5622 4.14369 49.5262 5.17588C50.0981 4.48588 50.8172 3.74994 51.3159 3.689C51.3356 3.68709 51.3553 3.68615 51.375 3.68619C51.8578 3.68619 52.6772 4.304 52.9341 4.679C53.4459 5.42338 53.7094 7.50557 53.8331 8.87432C57.9975 14.5209 57.0122 23.0606 51.2288 28.8262Z" fill="#F8F8F8"/>
        <path d="M52.5169 5.354C52.2319 4.55619 51.5578 4.06494 51.3815 4.06494C50.8744 4.06494 49.8797 5.42994 49.8797 5.42994L52.5694 7.69588C52.5694 7.69588 52.8506 6.28588 52.5169 5.354ZM40.7906 6.37682C41.8556 6.43588 45.0187 5.07557 44.7562 4.814C44.6353 4.694 44.3962 4.59275 44.0794 4.514C43.14 4.99307 41.4975 5.5865 40.7869 5.54619C40.4569 5.52838 39.7894 5.22275 39.3103 4.94057C39.1164 5.03721 38.938 5.162 38.7806 5.31088C38.6362 5.45244 40.2215 6.34494 40.7906 6.37682ZM35.1928 11.1787C35.9231 10.9199 39.1284 7.69682 39.0816 7.30119C39.0694 7.20369 38.9512 7.09494 38.7712 6.98807C37.9622 8.01932 35.7703 10.1474 35.1816 10.3556C34.6547 10.544 33.0516 9.67869 32.3906 9.10025C32.2434 9.27182 32.1422 9.41619 32.1131 9.51275C32.0006 9.88682 34.5084 11.4215 35.1928 11.1787ZM29.9981 16.799C30.5147 16.814 33.6872 12.9853 33.6703 12.5596C33.6656 12.4631 33.5681 12.3459 33.4153 12.2203C32.6691 13.3603 30.4087 15.9984 29.9803 15.9843C29.4656 15.9693 28.5291 15.5231 28.17 15.0234C28.0791 15.2999 28.035 15.5071 28.0631 15.5981C28.2366 16.1878 29.4019 16.7803 29.9981 16.799ZM26.7375 21.9984C27.0891 21.9599 29.5237 19.0687 29.6287 18.599C29.6559 18.4771 29.5697 18.3159 29.4159 18.1434C28.8197 19.0584 27.0131 21.1565 26.7122 21.1903C26.2547 21.239 25.4625 20.7543 25.1287 20.2528C25.0773 20.3484 25.0355 20.4489 25.0041 20.5528C24.8962 21.1621 26.1206 22.0649 26.7375 21.9984ZM21.6009 26.1178C22.0922 26.0906 24.7153 24.0168 24.9037 23.7149C25.0266 23.519 24.9844 23.2284 24.8531 22.9368C24.5616 23.3109 22.05 25.289 21.5691 25.3162C21.1078 25.3396 20.3878 24.6196 20.0559 24.0159C20.0173 24.0478 19.9819 24.0832 19.95 24.1218C19.6612 24.5456 20.9156 26.1534 21.6009 26.1178ZM14.5097 29.0878C15.0966 29.1571 18.6319 27.2456 18.9169 26.9268C19.1156 26.7065 19.1128 26.3184 18.9975 25.9209C18.9744 25.9972 18.9354 26.0678 18.8831 26.1281C18.5981 26.4478 15.0591 28.3631 14.4712 28.2918C13.9162 28.2262 13.2112 27.2109 12.9478 26.4262C12.6037 26.9353 13.7119 28.9893 14.5097 29.0878ZM9.35062 33.4893C9.95624 33.4349 12.7462 30.4874 12.9103 30.0665C12.9797 29.8874 12.9328 29.6428 12.8128 29.3746C12.3853 30.0318 9.87562 32.6512 9.30468 32.7037C8.67562 32.7609 7.6153 31.7465 7.22062 30.9796C7.18405 31.0359 7.15593 31.0809 7.13999 31.1165C6.87562 31.7043 8.50405 33.5653 9.35062 33.4893ZM8.14968 35.7646C8.17968 35.639 8.12999 35.4506 8.03249 35.2331C7.77843 36.1321 6.91968 38.9156 6.47062 38.8809C5.88374 38.8349 5.07468 38.0015 4.79905 37.4362C4.76919 37.587 4.75132 37.74 4.74562 37.8937C4.75312 38.3812 5.80968 39.6037 6.52218 39.6609C7.03405 39.7012 8.06999 36.1031 8.14968 35.7646ZM5.5078 44.264C5.12718 44.2331 4.72312 41.939 4.57593 40.3781C4.62655 41.7749 5.11218 45.0056 5.56499 45.0393C5.98218 45.0712 6.1678 41.7712 6.23249 41.4946C6.25687 41.3887 6.21187 41.2499 6.13218 41.1018C6.0403 42.0374 5.8528 44.2893 5.5078 44.264ZM8.94468 45.0037C8.68874 45.6834 7.82718 47.564 7.21874 46.9574C6.9478 46.6884 6.78561 46.1596 6.70593 45.5559C6.72562 46.4624 6.89249 47.3512 7.27593 47.7337C7.97343 48.4303 9.00562 45.8437 9.0703 45.5671C9.09749 45.4574 9.04405 45.2512 8.94468 45.0037ZM7.60499 40.4568C7.54874 40.7699 7.53374 41.0081 7.57593 41.0999C7.69968 41.3634 9.4753 43.9143 9.75843 43.9799C10.3237 44.1121 12.1566 41.0906 12.0684 40.6349C12.035 40.502 11.9856 40.3735 11.9212 40.2524C11.5462 41.204 10.1812 43.3106 9.70687 43.2009C9.44905 43.1418 7.97624 41.0521 7.60499 40.4568ZM17.94 33.0637C17.5809 33.134 16.0762 31.3537 15.5175 30.3187C15.42 30.3956 15.3553 30.4556 15.3478 30.4874C15.2166 31.0518 17.5237 33.9459 17.9803 33.8568C18.7256 33.7124 22.215 31.4999 22.26 30.8559C22.2703 30.7096 22.2131 30.5109 22.1156 30.2859C21.5306 31.109 18.615 32.9315 17.94 33.0637ZM22.0734 27.2071C21.9919 27.2784 21.9366 27.3384 21.93 27.3684C21.7987 27.9328 23.5134 30.2456 23.9691 30.1574C24.7153 30.0131 28.005 27.4181 28.05 26.774C28.0622 26.6118 28.0041 26.4262 27.9019 26.234C27.3103 27.1331 24.6056 29.2274 23.9381 29.3587C23.5884 29.4262 22.5075 28.0921 22.0734 27.2071ZM27.6366 22.8346C27.555 22.9509 27.5044 23.0306 27.4969 23.0662C27.3666 23.6306 29.0794 25.6687 29.5341 25.5815C29.8266 25.5253 30.4837 25.0228 31.1775 24.3956C31.6275 23.9896 32.0906 23.5321 32.4816 23.1065C33.0262 22.5149 33.4303 21.9871 33.4453 21.7584C33.4566 21.6187 33.3909 21.4509 33.284 21.2737C32.6606 22.2806 30.165 24.6449 29.5087 24.7734C29.1553 24.8437 28.0603 23.6456 27.6366 22.8346ZM34.2637 19.3706C33.9009 19.4409 32.3259 18.2062 31.7587 17.4121C31.6528 17.5734 31.5825 17.6896 31.5741 17.729C31.4428 18.2915 33.8269 20.2753 34.2825 20.1853C35.0287 20.0409 38.0025 16.6256 38.0494 15.9824C38.0578 15.854 37.9922 15.7003 37.8853 15.5334C37.2637 16.6265 34.9144 19.244 34.2637 19.3706ZM39.4575 13.6387C39.0984 13.709 37.3837 12.4209 36.7425 11.5978C36.6075 11.7459 36.5194 11.8546 36.51 11.8949C36.3797 12.4574 39.0131 14.5509 39.4687 14.4618C40.2141 14.3165 43.5816 11.2715 43.6275 10.6284C43.6378 10.4934 43.5675 10.3303 43.4512 10.1568C42.7519 11.1806 40.1081 13.5131 39.4575 13.6387ZM42.6553 7.04713C42.4987 7.14838 42.3956 7.229 42.3853 7.274C42.2541 7.8365 44.5819 9.83338 45.0375 9.74432C45.7828 9.59994 48.8353 7.10807 48.8803 6.464C48.8934 6.30182 48.8212 6.14619 48.6966 6.00088C48.0206 6.93088 45.6769 8.78994 45.0356 8.91463C44.6878 8.98213 43.2619 7.84494 42.6553 7.04713ZM12.9609 37.9415C12.2962 37.814 10.7316 35.8659 10.2403 34.9096C10.1691 35.0596 10.1287 35.1881 10.1325 35.2809C10.1578 35.8593 12.2222 38.5771 13.0078 38.7271C13.575 38.8368 16.605 35.8012 16.5703 34.829C16.5666 34.7212 16.5197 34.5674 16.4456 34.3893C15.9759 35.5884 13.4728 38.0399 12.9609 37.9415ZM55.7662 17.2809C55.7119 18.524 55.425 19.8374 54.8053 20.4618C54.6806 20.5884 53.9953 19.4193 53.7919 18.7349C53.7534 18.9164 53.7355 19.1016 53.7384 19.2871C53.7703 19.8534 54.6647 21.4359 54.81 21.2915C55.5694 20.5256 55.8281 18.7209 55.7662 17.2809ZM50.5819 27.119C50.2903 27.2062 49.3069 25.7278 48.99 24.7378C48.9638 24.7793 48.9415 24.8233 48.9234 24.869C48.6797 25.5515 50.2191 28.0518 50.5931 27.9393C51.1969 27.7593 53.55 25.0031 53.7516 23.6981C53.7778 23.5265 53.7609 23.2809 53.7131 23.0071C53.3859 24.3571 51.1659 26.9418 50.5819 27.119ZM44.4731 31.1634C44.0409 31.0378 43.6106 30.3871 43.4006 29.8115C43.3322 29.9118 43.2844 29.9962 43.2872 30.0478C43.3059 30.6421 43.8994 31.8037 44.4919 31.9781C44.9831 32.1224 48.72 30.2803 49.0584 29.7843C49.1306 29.6765 49.095 29.384 48.9956 29.0174C48.4762 29.5734 44.9494 31.3049 44.4731 31.1634ZM39.4969 34.2187C39.0544 34.2984 38.4628 33.6824 38.1928 33.1021C38.1216 33.1903 38.0756 33.2596 38.0719 33.2999C38.0053 33.914 38.91 35.1356 39.5212 35.0287C39.8831 34.9649 42.7706 33.2493 42.9497 32.7862C43.0172 32.6109 42.9759 32.3484 42.8728 32.0624C42.4406 32.6203 39.8391 34.1587 39.4969 34.2187ZM35.91 39.2653C35.5725 39.4959 34.4831 38.7487 34.0706 38.0896C33.9937 38.234 33.9441 38.3503 33.9394 38.4215C33.9047 39.1049 35.5181 40.3556 35.9409 40.0668C36.33 39.8006 38.2153 36.5287 38.1469 36.194C38.1143 36.0685 38.0551 35.9515 37.9734 35.8509C37.5291 36.8503 36.2269 39.0478 35.91 39.2653ZM35.3587 41.7881C35.0344 43.0715 33.96 45.9093 33.6337 46.2281C33.2512 46.6021 31.5628 45.7865 31.0622 45.0309C30.9928 45.2362 30.9525 45.4021 30.9628 45.4912C31.0631 46.3068 33.2325 47.4524 33.6722 47.024C34.0772 46.6293 35.6259 42.3684 35.4759 41.9859C35.4456 41.9152 35.4062 41.8487 35.3587 41.7881ZM28.8825 52.0509C28.4044 52.2656 27.0909 51.2418 26.6475 50.3971C26.5984 50.4693 26.5643 50.5506 26.5472 50.6362C26.4712 51.479 28.3378 53.1018 28.9284 52.8384C29.4712 52.5984 32.7309 49.5937 32.6522 49.1596C32.6115 48.9983 32.5409 48.8459 32.444 48.7106C31.7869 49.6274 29.3466 51.8446 28.8825 52.0509ZM22.0781 54.4462C21.7069 54.4396 20.9109 53.8312 20.5247 53.2265C20.4159 53.309 20.3512 53.3878 20.3569 53.4553C20.4141 54.1649 21.6412 55.2206 22.1306 55.2271C22.8197 55.2374 27.0178 54.1696 26.8875 53.789C26.8359 53.6418 26.7075 53.459 26.5341 53.2649C25.5759 53.7337 22.6444 54.4546 22.0781 54.4462ZM15.7969 54.0712C15.3084 54.1631 14.9541 54.2728 14.9634 54.4106C15.0094 54.9918 20.3869 55.6312 20.28 55.3218C20.2153 55.1334 20.0391 54.8746 19.8216 54.6224C18.9694 54.6262 16.9669 54.3824 15.7969 54.0712ZM17.04 52.6462C17.0466 52.5074 16.9247 52.3265 16.7316 52.1371C15.9112 52.5712 13.2975 52.6921 12.3544 52.0415C12.1387 52.2693 12.0581 52.5009 12.2616 52.7024C13.1812 53.6203 17.01 53.3071 17.04 52.6462ZM18.915 52.4043C19.3416 52.604 22.9669 51.5653 22.9069 50.7224C22.8994 50.6174 22.8122 50.4684 22.6781 50.3024C21.9553 51.0487 19.23 51.7949 18.8634 51.6234C18.6516 51.5259 16.9716 50.3737 16.2759 49.7709C16.0997 49.9556 16.0012 50.1159 16.0266 50.2274C16.0912 50.5115 18.6516 52.2824 18.915 52.4043ZM32.3494 40.1699C32.3934 40.0771 32.3034 39.9065 32.1356 39.7012C31.5544 40.7362 29.7637 43.8065 29.5181 43.8628C29.0512 43.9706 26.9794 42.4106 26.3334 41.6146C26.2674 41.7479 26.2156 41.8877 26.1787 42.0318C26.0887 42.4856 28.9941 44.7862 29.5575 44.6559C29.8425 44.5903 32.2256 40.4324 32.3494 40.1699ZM32.6841 38.0934C32.9691 38.0296 35.3109 34.4015 35.4347 34.1362C35.4881 34.0246 35.4169 33.8118 35.2716 33.5653C34.7437 34.424 32.9034 37.2356 32.6531 37.2937C32.2012 37.3978 30.6244 36.3234 30.0591 35.6578C29.9836 35.7833 29.9258 35.9186 29.8875 36.0599C29.7994 36.5146 32.1197 38.2237 32.6841 38.0934ZM40.7278 29.414C40.7784 29.3081 40.7034 29.0737 40.5497 28.7821C39.8719 29.4637 37.2281 31.6762 36.975 31.7334C36.5297 31.8356 35.1712 30.8034 34.6547 30.1378C34.5581 30.2915 34.4944 30.4209 34.4775 30.5118C34.3884 30.9656 36.4359 32.6728 36.9994 32.5424C37.2853 32.4778 40.6041 29.6774 40.7278 29.414ZM42.3544 28.4774C42.6384 28.4109 46.5431 25.5103 46.6669 25.2478C46.7147 25.1465 46.6397 24.9037 46.4906 24.5981C45.7369 25.2787 42.5916 27.6037 42.3366 27.6628C41.8884 27.7659 40.5478 26.294 40.0556 25.4549C39.9675 25.5843 39.9066 25.6959 39.8906 25.7784C39.8016 26.2312 41.7891 28.6068 42.3544 28.4774ZM48.2044 23.5556C48.4903 23.489 51.8569 19.8815 51.9806 19.6171C52.0266 19.5178 51.9581 19.2862 51.8184 18.9946C51.1397 19.8121 48.4481 22.6734 48.195 22.7315C47.7394 22.8374 46.2862 21.1528 45.7884 20.2565C45.7186 20.3646 45.6652 20.4824 45.63 20.6062C45.54 21.0599 47.64 23.6859 48.2044 23.5556ZM50.5219 14.6718C50.4375 14.8284 50.3812 14.9596 50.3616 15.0534C50.2734 15.5071 52.275 17.8274 52.8403 17.6981C53.1253 17.6315 54.8494 13.9809 54.9731 13.7174C55.0322 13.5881 55.0125 13.3049 54.9328 12.9712C54.6375 13.5946 53.1047 16.8065 52.8375 16.8674C52.3828 16.9724 50.9981 15.4912 50.5219 14.6718ZM28.7353 46.0218C28.7287 45.9281 28.6603 45.8071 28.5553 45.6684C27.9347 46.8224 25.4006 49.0978 24.705 49.0687C24.2044 49.0481 22.1044 47.5124 21.4434 46.5881C21.3375 46.7634 21.2775 46.9059 21.2944 46.9912C21.4462 47.7749 24.1706 49.8309 24.7509 49.8571C25.5516 49.8909 28.7944 46.8628 28.7353 46.0218ZM13.1906 49.6724C13.1681 49.5553 13.0912 49.4006 12.9797 49.2262C12.4837 49.8149 10.9678 50.7299 10.5075 50.6249C10.2562 50.5659 9.0178 49.2937 8.64374 48.8109C8.56968 49.0987 8.54812 49.3331 8.59874 49.439C8.72249 49.7034 10.2806 51.3337 10.5656 51.3984C11.13 51.5315 13.2787 50.1271 13.1906 49.6724ZM14.3662 49.0199C15.1228 49.1803 17.6522 47.2078 17.5284 46.2065C17.5045 46.0826 17.4625 45.9629 17.4037 45.8512C16.98 46.8965 14.9728 48.3796 14.3128 48.239C13.9687 48.1668 11.5894 45.7349 11.0091 44.9981C10.9153 45.2653 10.8816 45.4818 10.935 45.5981C11.0953 45.9506 13.9856 48.9384 14.3662 49.0199ZM27.2072 36.2568C27.1737 36.1946 27.1344 36.1356 27.09 36.0806C26.67 37.2599 25.0941 39.4518 24.0403 39.4349C23.1356 39.4209 20.3259 36.7574 19.7325 35.4009C19.6762 35.5509 19.6444 35.6943 19.6575 35.8181C19.7587 36.9684 23.0822 40.2121 24.0797 40.2281C25.3819 40.2506 27.4819 36.8962 27.2072 36.2568ZM31.7344 30.6243C31.7212 30.5756 31.6519 30.4743 31.5516 30.3431C31.0237 31.3987 29.3372 33.5174 28.4447 33.6665C27.7322 33.7846 25.9762 32.2078 25.5047 31.139C25.4606 31.2265 25.4309 31.3205 25.4166 31.4174C25.3256 32.3737 27.6356 34.6068 28.4756 34.4662C29.5734 34.2843 31.8684 31.1249 31.7344 30.6243ZM33.4828 29.474C34.6744 29.1974 37.3678 25.6415 37.26 25.1156C37.2487 25.0612 37.1775 24.9496 37.0687 24.8062C36.4687 25.9481 34.4484 28.4353 33.4575 28.6649C32.6916 28.8421 30.9441 27.3037 30.4987 26.1918C30.4612 26.2753 30.435 26.3531 30.4228 26.4224C30.2559 27.4565 32.5725 29.684 33.4828 29.474ZM42.6581 20.5462C42.675 20.3934 42.6347 20.2096 42.5559 20.0118C42.015 21.2278 39.1537 23.6334 38.4234 23.6512C38.0812 23.6578 36.2737 21.8006 35.7 21.0412C35.5791 21.2849 35.5153 21.4762 35.5397 21.5728C35.6241 21.9196 38.0409 24.4753 38.4403 24.4659C39.2344 24.4471 42.5353 21.6178 42.6581 20.5462ZM48.1716 14.9399C48.1761 14.7698 48.1451 14.6006 48.0806 14.4431C47.58 15.7828 44.9287 18.6421 44.1675 18.6243C43.8056 18.6178 41.3972 16.1371 40.6744 15.2193C40.5281 15.4518 40.4503 15.6365 40.4794 15.7378C40.5853 16.1043 43.7587 19.439 44.1759 19.4474C45.0084 19.4671 48.0937 16.0565 48.1716 14.9399ZM46.4634 10.604C46.3031 10.8262 46.2141 10.9968 46.2309 11.0821C46.2862 11.3624 48.51 13.7296 48.8381 13.7024C49.4878 13.6518 52.1841 10.7306 52.3331 9.84744C52.3612 9.67963 52.3237 9.48557 52.2394 9.284C51.735 10.3771 49.4316 12.8249 48.8362 12.8718C48.569 12.8943 47.0531 11.3399 46.4634 10.604ZM19.4203 44.4599C18.6028 44.4356 15.4734 41.1749 14.7506 39.9562C14.67 40.1418 14.6269 40.2993 14.6437 40.4053C14.7609 41.1609 18.5569 45.2174 19.4672 45.2456C20.3531 45.2728 23.0072 42.7612 22.8581 41.5893C22.8385 41.4778 22.8042 41.3693 22.7559 41.2668C22.3556 42.5334 20.2012 44.4834 19.4203 44.4599Z" fill="#F8F8F8"/>
        </svg>
      </div>
      Arachidi
    </div>
    @if(in_array('frutta secca', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M30 10V5M12.5 25V35C12.5004 38.8922 13.7976 42.6733 16.1867 45.746C18.5758 48.8187 21.9205 51.0078 25.6925 51.9675C26.7225 52.2275 27.6975 52.6975 28.4475 53.4475L30 55L31.5525 53.4475C32.3025 52.6975 33.2775 52.2275 34.3075 51.9675C38.0797 51.0082 41.4247 48.8192 43.8138 45.7464C46.203 42.6736 47.5 38.8923 47.5 35V25" stroke="#F8F8F8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M30 10C20 10 11.25 15 10 20C9.3925 22.425 7.7025 24.88 5 27.5C8.275 27.295 9.93 26.775 12.5 25C13.85 27.3 14.955 28.39 17.5 30C21.13 28.3825 22.385 27.255 23.75 25C25.2375 27.4875 26.6275 28.5675 30 30C33.275 28.4475 34.655 27.355 36.25 25C37.8225 27.4425 39.155 28.5575 42.5 30C45.5225 28.63 46.7 27.5825 47.5 25C50.08 27.29 51.7075 27.8925 55 27.5C51.7575 24.91 50.605 22.425 50 20C48.75 15 40 10 30 10Z" stroke="#F8F8F8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      Frutta secca
    </div>
    @if(in_array('pesce', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_100_378)">
        <path d="M39.3891 17.7984C39.3891 18.3547 39.2241 18.8984 38.9151 19.3609C38.606 19.8235 38.1668 20.1839 37.6529 20.3968C37.1389 20.6097 36.5734 20.6654 36.0279 20.5569C35.4823 20.4483 34.9812 20.1805 34.5878 19.7871C34.1945 19.3938 33.9266 18.8927 33.8181 18.3471C33.7096 17.8015 33.7653 17.236 33.9782 16.7221C34.191 16.2082 34.5515 15.7689 35.014 15.4599C35.4765 15.1509 36.0203 14.9859 36.5766 14.9859C37.3225 14.9859 38.0379 15.2822 38.5653 15.8097C39.0928 16.3371 39.3891 17.0525 39.3891 17.7984ZM48.7336 36.7828C43.868 42.9632 36.1125 46.3312 25.6688 46.807L20.5125 58.8586C20.3681 59.1981 20.1268 59.4876 19.8187 59.6906C19.5106 59.8936 19.1494 60.0012 18.7805 60H18.6609C18.2746 59.9758 17.9052 59.8325 17.6034 59.59C17.3017 59.3474 17.0825 59.0174 16.9758 58.6453L13.5047 46.4929L1.35938 43.0148C0.986184 42.91 0.654651 42.6921 0.410408 42.3911C0.166166 42.0901 0.0212203 41.7208 -0.00447946 41.334C-0.0301792 40.9472 0.0646304 40.562 0.2669 40.2313C0.46917 39.9006 0.768958 39.6407 1.125 39.4875L13.1789 34.3312C13.6477 23.8851 17.025 16.1297 23.2078 11.2664C33.3352 3.29762 47.7961 5.91559 50.5922 6.52028C51.2966 6.67248 51.9423 7.02444 52.4519 7.53404C52.9615 8.04364 53.3134 8.68929 53.4656 9.39372C54.0844 12.1875 56.7047 26.6625 48.7336 36.7968V36.7828ZM37.875 40.4554C35.7075 39.6298 33.8198 38.2041 32.4327 36.3451C31.0456 34.4862 30.2165 32.2707 30.0422 29.9578C27.7298 29.7838 25.5148 28.955 23.6562 27.5683C21.7975 26.1816 20.3722 24.2944 19.5469 22.1273C17.9063 25.8445 17.025 30.3562 16.8984 35.632C16.8897 35.9912 16.7779 36.3404 16.5764 36.6379C16.3748 36.9354 16.0921 37.1687 15.7617 37.3101L7.4625 40.8609L15.5391 43.1742C15.8451 43.2618 16.1239 43.4259 16.349 43.651C16.5741 43.8761 16.7382 44.1548 16.8258 44.4609L19.132 52.5375L22.6898 44.2382C22.8317 43.9068 23.0661 43.6233 23.365 43.4217C23.6639 43.2201 24.0146 43.1089 24.375 43.1015C29.6438 42.9773 34.1555 42.0914 37.875 40.4554ZM49.8117 10.1882C47.3039 9.6445 34.343 7.28434 25.5375 14.2148C24.4276 15.0895 23.419 16.0855 22.5305 17.1843C22.4405 18.4095 22.6192 19.6396 23.054 20.7885C23.4887 21.9375 24.1692 22.9776 25.0477 23.8363C25.9262 24.6949 26.9817 25.3514 28.1403 25.7598C29.2989 26.1682 30.5327 26.3187 31.7555 26.2007C32.0304 26.1747 32.3076 26.2096 32.5674 26.3031C32.8272 26.3966 33.0632 26.5463 33.2584 26.7415C33.4537 26.9368 33.6034 27.1727 33.6969 27.4326C33.7904 27.6924 33.8253 27.9696 33.7992 28.2445C33.6812 29.4677 33.8317 30.702 34.2404 31.8609C34.6491 33.0199 35.306 34.0756 36.1652 34.9542C37.0244 35.8328 38.0651 36.5131 39.2147 36.9476C40.3642 37.3821 41.5948 37.5602 42.8203 37.4695C43.9176 36.5825 44.912 35.5755 45.7852 34.4672C52.7156 25.6617 50.3555 12.6984 49.8117 10.1882Z" fill="#F8F8F8"/>
        </g>
        <defs>
        <clipPath id="clip0_100_378">
        <rect width="60" height="60" fill="white"/>
        </clipPath>
        </defs>
        </svg>
      </div>
      Pesce
    </div>
    @if(in_array('crostacei', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.25 21.25C6.25 15 7.5 2.49996 21.25 7.49996C22.4325 12.2275 18.75 21.25 6.25 21.25ZM53.75 21.25C53.75 15 52.5 2.49996 38.75 7.49996C37.5675 12.2275 41.25 21.25 53.75 21.25Z" stroke="#F8F8F8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M37.5 27.5H22.5C15.5964 27.5 10 33.0964 10 40C10 46.9036 15.5964 52.5 22.5 52.5H37.5C44.4036 52.5 50 46.9036 50 40C50 33.0964 44.4036 27.5 37.5 27.5Z" stroke="#F8F8F8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M33.75 27.5V22.5M26.25 27.5V22.5M53.75 21.25C55 25 55 32.5 50 36.25M6.25 21.25C5 25 6.25 31.25 10 36.25M37.5 52.5H55L50 41.25M22.5 52.5H5L10 41.25" stroke="#F8F8F8" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      Crostacei
    </div>
    @if(in_array('nessuna', $intolleranze))
    <div class="select-item selected">
    @else
    <div class="select-item">
    @endif
      <div>
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_85_281)">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 54.375C34.2791 54.3813 38.4838 53.2557 42.1875 51.1125V43.125C42.1875 40.8872 41.2985 38.7411 39.7162 37.1588C38.1339 35.5765 35.9878 34.6875 33.75 34.6875H26.25C24.0122 34.6875 21.8661 35.5765 20.2838 37.1588C18.7014 38.7411 17.8125 40.8872 17.8125 43.125V51.1125C21.5162 53.2557 25.7209 54.3813 30 54.375ZM47.8125 43.125V46.6388C51.0551 43.1674 53.2128 38.8242 54.0203 34.1431C54.8277 29.462 54.2498 24.6469 52.3575 20.2898C50.4652 15.9328 47.341 12.2235 43.369 9.61816C39.397 7.01278 34.7503 5.62478 30 5.62478C25.2497 5.62478 20.603 7.01278 16.631 9.61816C12.659 12.2235 9.53479 15.9328 7.6425 20.2898C5.75021 24.6469 5.17227 29.462 5.97973 34.1431C6.78719 38.8242 8.94486 43.1674 12.1875 46.6388V43.125C12.1875 40.2258 13.0831 37.3974 14.7518 35.0265C16.4205 32.6557 18.7808 30.8582 21.51 29.88C20.094 28.2512 19.1763 26.2495 18.8665 24.1136C18.5567 21.9777 18.8678 19.7978 19.7628 17.8338C20.6577 15.8699 22.0987 14.2048 23.9139 13.0372C25.729 11.8696 27.8417 11.2488 30 11.2488C32.1583 11.2488 34.271 11.8696 36.0861 13.0372C37.9013 14.2048 39.3423 15.8699 40.2372 17.8338C41.1322 19.7978 41.4433 21.9777 41.1335 24.1136C40.8237 26.2495 39.906 28.2512 38.49 29.88C41.2192 30.8582 43.5795 32.6557 45.2482 35.0265C46.9169 37.3974 47.8125 40.2258 47.8125 43.125ZM30 60C37.9565 60 45.5871 56.8393 51.2132 51.2132C56.8393 45.5871 60 37.9565 60 30C60 22.0435 56.8393 14.4129 51.2132 8.7868C45.5871 3.16071 37.9565 0 30 0C22.0435 0 14.4129 3.16071 8.7868 8.7868C3.16071 14.4129 0 22.0435 0 30C0 37.9565 3.16071 45.5871 8.7868 51.2132C14.4129 56.8393 22.0435 60 30 60ZM35.625 22.5C35.625 23.9918 35.0324 25.4226 33.9775 26.4775C32.9226 27.5324 31.4918 28.125 30 28.125C28.5082 28.125 27.0774 27.5324 26.0225 26.4775C24.9676 25.4226 24.375 23.9918 24.375 22.5C24.375 21.0082 24.9676 19.5774 26.0225 18.5225C27.0774 17.4676 28.5082 16.875 30 16.875C31.4918 16.875 32.9226 17.4676 33.9775 18.5225C35.0324 19.5774 35.625 21.0082 35.625 22.5Z" fill="#D27C2C"/>
        </g>
        <defs>
        <clipPath id="clip0_85_281">
        <rect width="60" height="60" fill="white"/>
        </clipPath>
        </defs>
        </svg>
      </div>
      Nessuna
    </div>
  </div>
  <form action="{{route('intollerances.store')}}" method="post" id = "myForm">
    @csrf
    <select name="intollerances[]" class="custom-select" multiple>
      @if(in_array('glutine', $intolleranze))
      <option value="glutine" selected>glutine</option>
      @else
      <option value="glutine">glutine</option>
      @endif

      @if(in_array('latticini', $intolleranze))
      <option value="latticini" selected>latticini</option>
      @else
      <option value="latticini">latticini</option>
      @endif

      @if(in_array('soia', $intolleranze))
      <option value="soia" selected>soia</option>
      @else
      <option value="soia">soia</option>
      @endif

      @if(in_array('uova', $intolleranze))
      <option value="uova" selected>uova</option>
      @else
      <option value="uova">uova</option>
      @endif

      @if(in_array('arachidi', $intolleranze))
      <option value="arachidi" selected>arachidi</option>
      @else
      <option value="arachidi">arachidi</option>
      @endif

      @if(in_array('frutta secca', $intolleranze))
      <option value="frutta secca" selected>frutta secca</option>
      @else
      <option value="frutta secca">frutta secca</option>
      @endif

      @if(in_array('pesce', $intolleranze))
      <option value="pesce" selected>pesce</option>
      @else
      <option value="pesce">pesce</option>
      @endif

      @if(in_array('crostacei', $intolleranze))
      <option value="crostacei" selected>crostacei</option>
      @else
      <option value="crostacei">crostacei</option>
      @endif

      @if(in_array('nessuna', $intolleranze))
      <option value="nessuna" selected>nessuna</option>
      @else
      <option value="nessuna">nessuna</option>
      @endif
    </select>
    <button class="back-to-diets" type="submit"  data-value="diets.create">INDIETRO</button>
    <button class="confirm-button" type="submit"  data-value="impostazioniPasto">AVANTI</button>
    <input type="hidden" name="redirect" id="redirect" value="" readonly>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
        // Al click di un bottone submit
        $(".back-to-diets, .confirm-button").click(function(e) {
            e.preventDefault(); // Previeni l'invio del form

            // Ottieni il valore personalizzato associato al bottone cliccato
            var valoreCampoVariabile = $(this).data("value");
            console.log(valoreCampoVariabile);

            // Imposta il valore del campo di input con il valore ottenuto
            $("#redirect").val(valoreCampoVariabile);

            // Invia il form manualmente
            $("#myForm").submit();
        });
    });
</script>
</div>
@endsection