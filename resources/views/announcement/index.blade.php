@extends('layouts.include.bars')
@section('main-content')
@if(auth()->user()->getRole() == 'admin')
<a class="btn cur-p btn-success pull-right" style="margin: 10px" href="{{route('announcement.create')}}">Add</a>
@endif
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">
                Subject
            </th>
            <th scope="col">
                Content
            </th>
            <th scope="col">
                Date
            </th>
            <th scope="col">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($announcements as $announcement)
        <tr>
            <th scope="row">{{$announcement->id}}</th>
            <td>{{$announcement->subject}}</td>
            <td>{{$announcement->content}}</td>
            <td>{{$announcement->created_at}}</td>
            @if(auth()->user()->getRole() == 'admin')
            <td>
                <a href="{{ route('announcement.edit', $announcement->id)}}" class="btn btn-sm btn-info">
                    <i class="fa fa-pencil"></i>
                </a>
                {!! Form::open(['route' => ['announcement.destroy', $announcement->id], 'method' => 'POST', 'class' => 'pull-left']) !!}
                {{ Form::hidden('_method', 'DELETE')}}
                {{Form::button("<i class='fa fa-trash'></i>", ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'])}}
                {!! Form::close() !!}
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


