@extends('layouts.include.bars')
@section('main-content')
<div class="bgc-white p-20 bd">
    <h6 class="c-grey-900">Create CV</h6>
    <div class="mT-30">
        {!! Form::open(['route' => 'cv.store']) !!}

        <div class="form-group">
            <label>Lead</label>
            {{Form::text('lead', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
        </div>
        <div class="form-group">
            <label>Description:</label>
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Enter Description', 'rows' => 4])}}
        </div>
        <hr>
        <div>

            <div class="row">
                <div class="col-md-9">
                    <h2>Skills</h2>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-success" style="margin-top: 25px" id="add-button">
                        <i class="fa fa-plus"></i> Ekle
                    </button>
                </div>

            </div>
            <div class="box-body" id="box-body">
                <div class="form-group">
                    <div class="form-group">
                        <label>Skill</label>
                        {{Form::text('skill[]', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Skill'])}}
                    </div>
                    <div class="form-group">
                        <label>Percent</label>
                        {{Form::number('percent[]', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Percent'])}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="box-body1" id="box-body1">
            <h2>Events</h2>
            <div>
                <button type="button" class="btn btn-block btn-success" style="margin-top: 25px" id="add-button1">
                    <i class="fa fa-plus"></i> Ekle
                </button>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label>Event</label>
                    {{Form::text('event[]', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Event'])}}
                </div>
            </div>
        </div>
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}


    </>
</div>

<script>
    $(document).ready(function(){
      $("#add-button").click(function(){
        $(".box-body").append(`
        <div class="form-group">
                    <div class="form-group">
                        <label>Skill</label>
                        {{Form::text('skill[]', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
                    </div>
                    <div class="form-group">
                        <label>Percent</label>
                        {{Form::number('percent[]', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
                    </div>
                    <div class="col-sm-2">
                    <button type="button" class="btn btn-block btn-danger remove-button" style="margin-top: 25px">
                        <i class="fa fa-trash"></i> Kaldır
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
        <div class="form-group">
                <div class="form-group">
                    <label>Event</label>
                    {{Form::text('event[]', '', ['class' => 'form-control', 'id' => 'lead', 'placeholder' => 'Enter Lead'])}}
                </div>
                <div class="col-sm-2">
            <button type="button" class="btn btn-block btn-danger remove-button" style="margin-top: 25px">
                <i class="fa fa-trash"></i> Kaldır
            </button>
        </div>
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
