@extends('layouts.include.bars')
@section('main-content')
<div class="bgc-white p-20 bd">
    <h2 class="c-grey-900">Edit CV</h2>
    <div class="mT-30">
        {!! Form::open(['route' => ['cv.update',$cv->id]]) !!}
        <div class="form-group">
            <label>Lead</label>
            {{Form::text('lead', $cv->lead, ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
        </div>
        <div class="form-group">
            <label>Description:</label>
            {{Form::textarea('description', $cv->description, ['class' => 'form-control', 'placeholder' => 'Enter Lead', 'rows' => 4])}}
        </div>
        <hr>
        <div>
            <div class="row">
                <div class="col-md-9">
                    <h2>Skills</h2>
                </div>
            </div>
            <div class="box-body" id="box-body">
                @foreach($skills as $key => $skill)
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label>Skill</label>
                            {{Form::text('skill[]', $skill->name, ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Skill'])}}
                        </div>
                        <div class="form-group">
                            <label>Percent</label>
                            {{Form::number('percent[]', $skill->percent, ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Percent'])}}
                        </div>
                    </div>
                    @if($key > 0)
                    <div class="col-sm-2" style="margin: auto">
                        <button type="button" class="btn btn-block btn-danger remove-button" style="margin-top: 25px">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </div>
                    @else
                    <div class="col-sm-2" style="margin: auto">
                        <button type="button" class="btn btn-block btn-success" style="margin-top: 25px" id="add-button">
                            <i class="fa fa-plus"></i> Add
                        </button>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>


        <hr>
        <div class="box-body1" id="box-body1">
            <h2>Events</h2>
            @foreach($events as $key => $event)
            <div class="row">
                <div class="col-md-10">
                    <label>Event</label>
                    {{Form::text('event[]', $event->description, ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
                </div>
                @if($key > 0)
                <div class="col-sm-2" style="margin: auto">
                    <button type="button" class="btn btn-block btn-danger remove-button" style="margin-top: 25px">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </div>
                @else
                <div class="col-sm-2" style="margin: auto">
                    <button type="button" class="btn btn-block btn-success" style="margin-top: 25px" id="add-button1">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </div>
                @endif
            </div>
            @endforeach
        </div>
        <div class="form-group" style="margin-top: 25px">
            {{Form::hidden('_method', 'PUT')}}

            {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>

</div>

<script>
    $(document).ready(function(){
      $("#add-button").click(function(){
        $(".box-body").append(`
        <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label>Skill</label>
                            {{Form::text('skill[]','', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Skill'])}}
                        </div>
                        <div class="form-group">
                            <label>Percent</label>
                            {{Form::number('percent[]', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Percent'])}}
                        </div>
                    </div>
                    <div class="col-sm-2" style="margin: auto">
                        <button type="button" class="btn btn-block btn-danger remove-button" style="margin-top: 25px">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
                  `);
      });


      $("#box-body").on("click", ".remove-button", function(){
        console.log($(this).offsetParent()[0].parentElement);
        var t = $(this).offsetParent()[0].parentElement;
        t.remove();
        });
      });

      $(document).ready(function(){
      $("#add-button1").click(function(){
        $(".box-body1").append(`
        <div class="row">
                <div class="col-md-10">
                    <label>Event</label>
                    {{Form::text('event[]', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Event'])}}
                </div>
                @if($key > 0)
                <div class="col-sm-2" style="margin: auto">
                    <button type="button" class="btn btn-block btn-danger remove-button" style="margin-top: 25px">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </div>
                @endif
            </div>
                  `);
      });
      $("#box-body1").on("click", ".remove-button", function(){
        console.log($(this).offsetParent()[0].parentElement);
        var t = $(this).offsetParent()[0].parentElement;
        t.remove();
        });
      });
  </script>


@endsection
