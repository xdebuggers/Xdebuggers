@extends('layouts.include.bars')
@section('main-content')
<div class="bgc-white p-20 bd">
    <h6 class="c-grey-900">Edit CV</h6>
    <div class="mT-30">
        {!! Form::open(['route' => ['cv.update',1]]) !!}



        <div class="form-group">
            <label>Lead</label>
            {{Form::text('subject', $cv->lead, ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
        </div>
        <div class="form-group">
            <label>Description:</label>
            {{Form::textarea('description', $cv->description, ['class' => 'form-control', 'placeholder' => 'Enter Lead', 'rows' => 4])}}
        </div>
        <hr>
        <div class="form-group">
            <label>Skill</label>
            {{Form::text('subject', $cv->lead, ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
        </div>
        <div class="form-group">
            <label>Percent</label>
            {{Form::number('subject', '1', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
        </div>
        <hr>
        <div class="form-group">
            <label>Event</label>
            {{Form::text('subject', $cv->lead, ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
        </div>



        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection
