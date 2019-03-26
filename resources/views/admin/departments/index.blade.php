@extends('layouts.admin')
@section('content')
    @foreach($departments as $department)
    <div>{{$department->id}} &nbsp;{{$department->name}} &nbsp;{{$department->code}} &nbsp; 
        <form method="post" style="display: inline;" action="/admin/departments/{{$department->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">delete</button>
        </form>

    </div>
    @endforeach
    <form action="/admin/departments/create">
        <button class="btn btn-primary">Create </button>
    </form>
  @endsection