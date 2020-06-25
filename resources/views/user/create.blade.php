@extends('layouts.include.bars')
@section('main-content')
<div class="bgc-white p-20 bd">
    <h6 class="c-grey-900">Create a new user</h6>
    <div class="mT-30">
        {!! Form::open(['route' => 'user.store']) !!}
        <div class="form-group">
            <label>First Name</label>
            {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
        </div>
        <div class="form-group">
            <label>Last Name</label>
            {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
        </div>
        <div class="form-group">
            <label>Birthday</label>
            {{Form::date('birthday', '', ['class' => 'form-control', 'placeholder' => 'Enter Birthday'])}}
        </div>
        <div class="form-group">
            <label>Email Address</label>
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
        </div>
        <div class="form-group">
            <label>Password</label>
            {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password'])}}
        </div>
        <div class="form-group">
            <label>Phone</label>
            {{Form::number('phone', '', ['class' => 'form-control', 'placeholder' => 'Enter Phone'])}}
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                {{Form::radio('role', 'admin',true)}}
                <label class="form-check-label" style="margin: 5px"> Admin</label>
              </div>
              <div class="form-check form-check-inline">
                {{Form::radio('role', 'member')}}
                <label class="form-check-label" style="margin: 5px"> Member</label>
              </div>
              <div class="form-check form-check-inline">
                {{Form::radio('role', 'guest')}}
                <label class="form-check-label" style="margin: 5px"> Guest</label>
              </div>
        </div>
            {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection
