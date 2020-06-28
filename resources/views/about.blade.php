@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<div id="cv">
    <section id="about-a" class="text-center py-3">
        <div class="container">
          <h2 class="section-subject">About Me</h2>
          <div class="bottom-line"></div>
          <p class="lead">
            {{$cv->lead}}
          </p>
          <div class="about-info">
            <div class="bio-image"></div>
            <div class="bio bg-light">
              <h4>Your Project Is In Safe Hands</h4>
              <p>
                {{$cv->description}}
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
          @foreach($skills as $skill)
          <h4>{{$skill->name}}</h4>
          <div class="progress">
            <div style="width:{{$skill->percent}}%"></div>
          </div>
          @endforeach
        </div>
      </section>

      <section id="about-c" class="py-4 bg-light">
        <div class="container">
          <h2 class="section-subject">Company Timeline</h2>
          <div class="bottom-line"></div>
          <div class="timeline">
            @foreach($events as $event)
            <p>
              {{$event->description}}
            </p>
            @endforeach
          </div>
        </div>
      </section>
</div>


  <!-- <section id="about-d" class="py-4">
    <div class="container">
    </div>
  </section> -->
  <div class="container py-1 text-center">
    <a href="" class="btn-main" id="download" style="width: 20rem;" onclick="downloadCV()">
      Download
    </a>
  </div>
  @if (auth()->user())
  @if (auth()->user()->getRole() == 'admin')
  <div class="container py-1 text-center">
    <a href="{{route('cv.edit', $cv->id)}}" class="btn-main" style="width: 20rem;">
      Update
    </a>
  </div>
  @endif
  @endif
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
  <script>
      function downloadCV() {
        var doc = new jsPDF();
        var elementHTML = $('#cv').html();
        var specialElementHandlers = {
            '#elementH': function (element, renderer) {
                return true;
            }
        };
        doc.fromHTML(elementHTML, 15, 15, {
            'width': 170,
            'elementHandlers': specialElementHandlers
        });

        // Save the PDF
        doc.save('sample-document.pdf');
      }
  </script>
@endsection
