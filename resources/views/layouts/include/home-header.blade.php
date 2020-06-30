<header id="header-home">
    <div class="wrap">
      <div id="arrow-left" class="arrow"></div>
      <div id="slider">
        <div class="slide slide1"></div>
        <div class="slide slide2"></div>
        <div class="slide slide3"></div>
      </div>
      <div id="arrow-right" class="arrow"></div>
    </div>
    <div class="landing">
      <div class="container">
        <nav id="main-nav">
          <img src="{{ '/images/logo.png' }}" alt="My Logo" id="logo" />
          <div class="menu-wrap mobile">
            <input type="checkbox" class="hide toggler" />
            <div class="hamburger hide"><div></div></div>
            @include('layouts.include.menu')
          </div>
        </nav>
        @include('layouts.include.search')
      </div>
      <div class="header-content">
        <h1>
          We, Xdebuugers <br />
          Are The Best
          <span
            class="txt-type"
            data-wait="2000"
            data-words='["Programmers", "Developers", "Desginers"]'
          >
          </span>
        </h1>
        <p class="lead">
          We specilized in System dwvelopments Lorem ipsum dolor sit amet
          consectetur adipisicing elit.
        </p>
        <a href="{{route('projects')}}" class="btn-dark">See Our Projects</a>
      </div>
    </div>
  </header>
