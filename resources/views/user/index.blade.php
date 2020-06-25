@extends('layouts.include.bars')
@section('main-content')
<a class="btn cur-p btn-success pull-right" style="margin: 10px" href="{{route('user.create')}}">Add</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">
                First Name
            </th>
            <th scope="col">
                Last Name
            </th>
            <th scope="col">
                Email Address
            </th>
            <th scope="col">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->firstname}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{ route('user.edit', $user->id)}}" class="btn btn-sm btn-info">
                    <i class="fa fa-pencil"></i>
                </a>
                {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'POST', 'class' => 'pull-left']) !!}
                {{ Form::hidden('_method', 'DELETE')}}
                {{Form::button("<i class='fa fa-trash'></i>", ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'])}}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


