@extends('layouts.include.bars')
@section('main-content')
<div class="bgc-white p-20 bd">
    <h6 class="c-grey-900">Edit announcement</h6>
    <div class="mT-30">
        {!! Form::open(['route' => ['announcement.update',$announcement->id]]) !!}
        <div class="form-group">
            <label>Subject</label>
            {{Form::text('subject', $announcement->subject, ['class' => 'form-control', 'id' => 'firstname', 'placeholder' => 'Enter subject'])}}
        </div>
            <div class="form-group">
            <label>Content</label>
            {{Form::textarea('content', $announcement->content, ['class' => 'form-control','placeholder' => 'Enter content'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection
