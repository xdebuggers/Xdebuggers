@extends('layouts.app')
@section('title', 'Our Experiences')

@section('content')
<section id="experiences-a" class="text-center py-2">
    <div class="container">
      <h2 class="section-subject">I specilize in</h2>
      <div class="bottom-line"></div>
      <p class="lead">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora,
        iure sunt officia incidunt ratione iste.
      </p>
      <div class="specials">
        <div>
          <i class="fas fa-file-alt fa-2x"></i>
          <h3>Concepting</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Obcaecati debitis accusamus facere, nesciunt dolorem culpa tenetur
            provident blanditiis numquam commodi?
          </p>
        </div>
        <div>
          <i class="fas fa-desktop fa-2x"></i>
          <h3>Ui/UX</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Obcaecati debitis accusamus facere, nesciunt dolorem culpa tenetur
            provident blanditiis numquam commodi?
          </p>
        </div>
        <div>
          <i class="fas fa-object-ungroup fa-2x"></i>
          <h3>Visual design</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Obcaecati debitis accusamus facere, nesciunt dolorem culpa tenetur
            provident blanditiis numquam commodi?
          </p>
        </div>
        <div>
          <i class="fas fa-thumbs-up fa-2x"></i>
          <h3>Interaction</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Obcaecati debitis accusamus facere, nesciunt dolorem culpa tenetur
            provident blanditiis numquam commodi?
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="experiences-b" class="text-center py-2">
    <div class="container">
      <video controls autoplay loop>
        <source src="./img/exp/video.mp4" type="video/mp4" />
      </video>
    </div>
  </section>
  <section id="experiences-c" class="text-center py-2">
    <div class="container">
      <h2 class="section-subject">
        My Creative Proccess
      </h2>
      <div class="bottom-line"></div>
      <p class="lead">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora,
        iure sunt officia incidunt ratione iste.
      </p>
      <div class="process">
        <div>
          <i class="fas fa-file-alt fa-4x process-icon my-2">
            <div class="process-step">1</div>
          </i>

          <h3>Discuss the project</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Provident fugiat delectus, pariatur necessitatibus minima facere.
          </p>
        </div>
        <div>
          <i class="fas fa-desktop fa-4x process-icon my-2">
            <div class="process-step">2</div>
          </i>

          <h3>Test</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Provident fugiat delectus, pariatur necessitatibus minima facere.
          </p>
        </div>
        <div>
          <i class="fas fa-object-ungroup fa-4x process-icon my-2">
            <div class="process-step">3</div>
          </i>

          <h3>UI/UX Planning</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Provident fugiat delectus, pariatur necessitatibus minima facere.
          </p>
        </div>
        <div>
          <i class="fas fa-thumbs-up fa-4x process-icon my-2">
            <div class="process-step">4</div>
          </i>

          <h3>Brainstroming ^ Concepts</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Provident fugiat delectus, pariatur necessitatibus minima facere.
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
