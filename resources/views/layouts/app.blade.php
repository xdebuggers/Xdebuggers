<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="{{ asset('images/logo-ico.png') }}" type="image/icon type" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/d8e60bc0b5.js"
      crossorigin="anonymous"
    ></script>

    <title>@yield('title')</title>
  </head>
  <body>
    @include('sweetalert::alert')
    @if(Request::is('/'))
    @include('layouts.include.home-header')
    @else
    @include('layouts.include.header')
    @endif
    @yield('header')
    @yield('content')
    <footer id="main-footer">
      <div class="footer-content container">
        <div class="personal-info">
          <p>Muhammed Bedavi</p>
          <p>Information Systems Engineering</p>
        </div>
        <div class="contact-info">
          <p>Email: mhd.b96@gmail.com</p>
          <p>Phone: 0531 886 12 90</p>
          <p>Address: Istanbul, Turkey</p>
        </div>
        <div class="social">
          <a href="https://twitter.com/mhd_b96" target="_blank"
            ><i class="fab fa-twitter"></i
          ></a>

          <a href="https://www.facebook.com/Mhd.b96" target="_blank"
            ><i class="fab fa-facebook"></i
          ></a>
          <a href="https://www.instagram.com/mhd_b96/" target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="https://www.linkedin.com/in/mhdb96/" target="_blank"
            ><i class="fab fa-linkedin"></i
          ></a>
        </div>
      </div>
      <p class="copy-right">Copyright &copy; 2020. All right Reserved</p>
    </footer>
    <button id="topBtn">
      <i class="fas fa-arrow-up fa-2x"></i>
    </button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/scrollBtn.js"></script>
  </body>
</html>
