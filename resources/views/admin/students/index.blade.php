@extends('layouts.admin')
@section('content')
    @foreach($students as $student)
    <div>{{$student->id}} &nbsp; {{$student->user->name}} &nbsp;{{$student->reg_no}} &nbsp;{{$student->session}} &nbsp; 
        <form method="post" style="display: inline;" action="/admin/students/{{$student->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">delete</button>
        </form>
 
    </div>
    @endforeach
@endsection