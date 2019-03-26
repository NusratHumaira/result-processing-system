@extends('layouts.admin')
@section('content')
    @foreach($courses as $course)
    <div>{{$course->id}} &nbsp;{{$course->name}} &nbsp;{{$course->code}} &nbsp; 
        <form method="post" style="display: inline;" action="/admin/courses/{{$course->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">delete</button>
        </form>

    </div>
    @endforeach
    <form action="/admin/courses/create">
        <button class="btn btn-primary">Create </button>
    </form>
  @endsection