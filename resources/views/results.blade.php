@extends('layouts.app')
@section('title', 'Search Results')

@section('content')
<div>
    <style>
        ol.gradient-list > li, ol.gradient-list > li::before {
box-shadow: 0.25rem 0.25rem 0.6rem rgba(0, 0, 0, 0.05), 0 0.5rem 1.125rem rgba(75, 0, 0, 0.05);
}



ol.gradient-list {
counter-reset: gradient-counter;
list-style: none;
margin: 1.75rem 0;
padding-left: 1rem;
}
ol.gradient-list > li {
background: white;
border-radius: 0 0.5rem 0.5rem 0.5rem;
counter-increment: gradient-counter;
margin-top: 1rem;
min-height: 3rem;
padding: 1rem 1rem 1rem 3rem;
position: relative;
}
ol.gradient-list > li::before, ol.gradient-list > li::after {
background: linear-gradient(135deg, #f12711 0%, #f5af19 100%);
border-radius: 1rem 1rem 0 1rem;
content: '';
height: 3rem;
left: -1rem;
overflow: hidden;
position: absolute;
top: -1rem;
width: 3rem;
}
ol.gradient-list > li::before {
align-items: flex-end;
content: counter(gradient-counter);
color: #1d1f20;
display: flex;
font: 900 1.5em/1 'Montserrat';
justify-content: flex-end;
padding: 0.125em 0.25em;
z-index: 1;
}

ol.gradient-list > li + li {
margin-top: 2rem;
}
    </style>

    <section id="about-a" class="text-center py-3">
        <div class="container" style="min-height: 57vh">
          <h2 class="section-subject">Results</h2>
          <div class="bottom-line"></div>
          @if(!$elements)
        <h2 class="section-subject">No Results were found</h2>
        @else
        <ol class="gradient-list">
        @foreach($elements as $element)

          <li>
            <h4>{{$element->subject}}</h4>
            <p>
              {{$element->content}}
            </p>
        </li>
        @endforeach
        </ol>
        @endif
        </div>
      </section>
</div>
@endsection
