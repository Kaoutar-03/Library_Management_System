<!DOCTYPE html>
<html lang="en">

  <head>

    @include('home.css')
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

    @include('home.header')
    @include('home.main_banner')
    @include('home.category')
    @include('home.book')
    @include('home.footer')

 

 
  </body>
</html>