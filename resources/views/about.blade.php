@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<section id="about-a" class="text-center py-3">
    <div class="container">
      <h2 class="section-subject">About Me</h2>
      <div class="bottom-line"></div>
      <p class="lead">
        Let me tell you a little about myself and what I do...
      </p>
      <div class="about-info">
        <div class="bio-image"></div>
        <div class="bio bg-light">
          <h4>Your Project Is In Safe Hands</h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Perspiciatis nostrum, eaque velit ipsam facilis sed, quisquam
            nesciunt unde nihil voluptatum commodi consequuntur molestiae?
            Fugiat, perspiciatis reprehenderit. Architecto delectus vitae
            deserunt!
          </p>
        </div>
        <div class="award-1">
          <i class="fas fa-award fa-3x"></i>
          <h3>Award One</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
            magni!
          </p>
        </div>
        <div class="award-2">
          <i class="fas fa-award fa-3x"></i>
          <h3>Award Two</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
            magni!
          </p>
        </div>
        <div class="award-3">
          <i class="fas fa-award fa-3x"></i>
          <h3>Award Three</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
            magni!
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section B: Progress Bars -->
  <section id="about-b" class="bg-secondary py-3">
    <div class="container">
      <h2 class="section-subject">Technical Skills</h2>
      <div class="bottom-line"></div>
      <h4>Photography:</h4>
      <div class="progress">
        <div style="width:100%"></div>
      </div>
      <h4>Adobe Photoshop:</h4>
      <div class="progress">
        <div style="width:80%"></div>
      </div>
      <h4>Adobe Illustrator:</h4>
      <div class="progress">
        <div style="width:70%"></div>
      </div>
      <h4>HTML & CSS:</h4>
      <div class="progress">
        <div style="width:100%"></div>
      </div>
      <h4>Wordpress:</h4>
      <div class="progress">
        <div style="width:80%"></div>
      </div>
      <h4>Magento:</h4>
      <div class="progress">
        <div style="width:70%"></div>
      </div>
    </div>
  </section>

  <section id="about-c" class="py-4 bg-light">
    <div class="container">
      <h2 class="section-subject">Company Timeline</h2>
      <div class="bottom-line"></div>
      <div class="timeline">
        <p>
          Doggo ipsum long bois lotsa pats blep. What a nice floof ruff super
          chub very good spot, the neighborhood pupper lotsa pats. Borkdrive
          shibe shoober what a nice floof, borking doggo.
        </p>
        <p>
          Shoober shooberino adorable doggo many pats, heckin good boys many
          pats pupper wrinkler, corgo maximum borkdrive. A frighten puggo wow
          very biscit.
        </p>
        <p>
          Big ol h*ck adorable doggo vvv smol borking doggo with a long snoot
          for pats big ol, he made many woofs doing me a frighten puggo wow
          very biscit, ruff fat boi ruff long doggo.
        </p>
        <p>
          Long bois mlem I am bekom fat wrinkler puggo maximum borkdrive big
          ol pupper I am bekom fat, fluffer vvv adorable doggo lotsa pats
          snoot. I am bekom fat ur givin me a spook length boy wow very biscit
          very good spot.
        </p>
        <p>
          Doggo ipsum long bois lotsa pats blep. What a nice floof ruff super
          chub very good spot, the neighborhood pupper lotsa pats. Borkdrive
          shibe shoober what a nice floof, borking doggo.
        </p>
      </div>
    </div>
  </section>

  <!-- <section id="about-d" class="py-4">
    <div class="container">
    </div>
  </section> -->
  <div class="container py-1 text-center">
    <a href="cv.pdf" class="btn-main" id="download" style="width: 20rem;">
      Download
    </a>
  </div>
  @if (auth()->user()->getRole() == 'admin')
  <div class="container py-1 text-center">
    <a href="{{route('cv.edit', 1)}}" class="btn-main" style="width: 20rem;">
      Update
    </a>
  </div>
  @endif
@endsection
