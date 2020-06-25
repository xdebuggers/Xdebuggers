@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
<section id="contact-a" class="text-center py-3">
    <div class="container">
      <h2 class="section-subject">Contact Me</h2>
      <div class="bottom-line"></div>
      <p class="lead">Here is how you can reach me</p>
        {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="text-fields">
            {{Form::text('firstname', $user->firstname, ['class' => 'text-input first-name-input', 'id' => 'firstname', 'placeholder' => 'First Name','required' => 'required'])}}
            {{Form::text('lastname', $user->lastname, ['class' => 'text-input last-name-input','placeholder' => 'Last Name','required' => 'required'])}}
            {{Form::date('birthday', $user->birthday, ['class' => 'text-input date-input','placeholder' => 'Birthday','required' => 'required'])}}
            {{Form::email('email', $user->email, ['class' => 'text-input email-input','placeholder' => 'Email Address','required' => 'required'])}}
            {{Form::text('phone', $user->phone, ['class' => 'text-input phone-input','placeholder' => 'Phone Number','required' => 'required'])}}
            {{Form::text('subject', '', ['class' => 'text-input subject-input','placeholder' => 'Subject','required' => 'required'])}}
            {{Form::textarea('message', '', ['class' => 'text-input message-input','placeholder' => 'Enter Message','required' => 'required'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn-dark'])}}
        {!! Form::close() !!}
    </div>
  </section>

  <!-- Section B: Contact Info -->
  <section id="contact-b" class="py-3 bg-secondary">
    <div class="container">
      <div class="contact-info">
        <div>
          <i class="fas fa-envelope fa-2x"></i>
          <h3>Email</h3>
          <p>
            <a href="mailto:xdebuggers@gmail.com" target="_top"
              >xdebuggers@gmail.com</a
            >
          </p>
        </div>
        <div>
          <i class="fas fa-phone fa-2x"></i>
          <h3>Phone</h3>
          <p>0531 886 12 90</p>
        </div>
        <div>
          <i class="fas fa-address-card fa-2x"></i>
          <h3>Address</h3>
          <p>Istanbul, Turkey</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section C: Tagline -->
  <section id="contact-c" class="bg-primary py-4">
    <div class="container">
      <h1>Let's Start Your Next Project</h1>
    </div>
  </section>
@endsection
