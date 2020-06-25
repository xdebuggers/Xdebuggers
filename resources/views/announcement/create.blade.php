@extends('layouts.include.bars')
@section('main-content')
<div class="bgc-white p-20 bd">
    <h6 class="c-grey-900">Create a new announcement</h6>
    <div class="mT-30">
        {!! Form::open(['route' => 'announcement.store']) !!}
        <div class="form-group">
            <label>Subject</label>
            {{Form::text('subject', '', ['class' => 'form-control', 'id' => 'firstname', 'placeholder' => 'Enter subject'])}}
        </div>
            <div class="form-group">
            <label>Content</label>
            {{Form::textarea('content', '', ['class' => 'form-control','placeholder' => 'Enter content'])}}
        </div>
            {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection
