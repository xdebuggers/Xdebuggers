@extends('layouts.app')
@section('title', 'Xdebuggers | We Solve Your Problems')

@section('content')
    <section id="home-a" class="text-center py-2">
      <div class="container">
        <h2 class="section-subject">Latest News</h2>
        <div class="bottom-line"></div>
        <p class="lead">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora,
          iure sunt officia incidunt ratione iste.
        </p>
        <div class="news">
          <div>
            <div class="img-1"></div>
            <h3>
              The top reasons to adopt a modern messaging platform
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Obcaecati debitis.....
            </p>
          </div>
          <div>
            <div class="img-2"></div>
            <h3>Challenges to effective DevOps collaboration</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Obcaecati debitis.....
            </p>
          </div>
          <div>
            <div class="img-3"></div>
            <h3>AI for software development is already here</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Obcaecati debitis.....
            </p>
          </div>
          <div>
            <div class="img-4"></div>
            <h3>How AI is Having a Big Impact in Software Development</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Obcaecati debitis.....
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="home-b" class="text-center py-2">
      <div class="stats">
        <div>
          <ul>
            <li><i class="fas fa-users fa-3x"></i></li>
            <li class="stats-title">Clients</li>
            <li class="stats-number">100</li>
          </ul>
        </div>
        <div>
          <ul>
            <li><i class="fas fa-award fa-3x"></i></li>
            <li class="stats-title">Awards</li>
            <li class="stats-number">3</li>
          </ul>
        </div>
        <div>
          <ul>
            <li><i class="fas fa-hourglass-start fa-3x"></i></li>
            <li class="stats-title">Hours Worked</li>
            <li class="stats-number">1000</li>
          </ul>
        </div>
        <div>
          <ul>
            <li><i class="fas fa-code-branch fa-3x"></i></li>
            <li class="stats-title">Projects completed</li>
            <li class="stats-number">100</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="home-c" class="text-center py-2">
      <div class="container">
        <h2 class="section-subject">
          Announcement For The Week
        </h2>
        <div class="bottom-line"></div>
        <p class="lead">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora,
          iure sunt officia incidunt ratione iste.
        </p>
        <div class="announcement">
        @foreach($anns as $ann)
          <div>
            <div class="img-2"></div>

            <h3>{{$ann->subject}}</h3>
            <p>
              {{$ann->content}}
            </p>
          </div>
        @endforeach
        </div>
      </div>
    </section>
    <script src="js/scrollBtn.js"></script>
    <script src="js/typewriter.js"></script>
    <script>
      let sliderImages = document.querySelectorAll(".slide"),
        arrowLeft = document.querySelector("#arrow-left"),
        arrowRight = document.querySelector("#arrow-right"),
        current = 0;

      // Clear all images
      function reset() {
        for (let i = 0; i < sliderImages.length; i++) {
          sliderImages[i].style.display = "none";
        }
      }

      // Init slider
      function startSlide() {
        reset();
        sliderImages[0].style.display = "block";
      }

      // Show prev
      function slideLeft() {
        reset();
        sliderImages[current - 1].style.display = "block";
        current--;
      }

      // Show next
      function slideRight() {
        reset();
        sliderImages[current + 1].style.display = "block";
        current++;
      }

      // Left arrow click
      arrowLeft.addEventListener("click", function() {
        if (current === 0) {
          current = sliderImages.length;
        }
        slideLeft();
      });

      // Right arrow click
      arrowRight.addEventListener("click", function() {
        if (current === sliderImages.length - 1) {
          current = -1;
        }
        slideRight();
      });

      startSlide();
    </script>
@endsection
