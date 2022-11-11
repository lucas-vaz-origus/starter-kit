<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright">
    <div class="container">
      <span>&copy; 2022 <a target="_blank" class="white-text">GMUP</a> Todos os direitos reservados.
      </span>
      <span class="right hide-on-small-only valign-wrapper">
        Desenvolvido por <a class="white-text" href="https://origus.com.br/"><img class="responsive-img" width="95px" height="auto" src="/images/logo/logo-origus.png"></a>
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer-->
