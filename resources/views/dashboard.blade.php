@extends('layouts.include.bars')
@section('main-content')
<div class="card">
    <div class="card-header">
      Welcome {{{auth()->user()->firstname.' '.auth()->user()->lastname}}}
    </div>
    <div class="card-body">
      <h5 class="card-title">This your Dashboard!!</h5>
      <p class="card-text">You find your available feature at the left side, Enjoy your control panel!</p>
      <a href="{{route('home')}}" class="btn btn-primary">Discover the site :)</a>
    </div>
  </div>
@endsection

