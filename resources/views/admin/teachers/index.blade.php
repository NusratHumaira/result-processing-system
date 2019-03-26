@extends('layouts.admin')
@section('content')
    @foreach($teachers as $teacher)
    <div>{{$teacher->id}} &nbsp;{{$teacher->user->name}}&nbsp;{{$teacher->phone}} &nbsp; 
        @if($teacher->approved)
        <a href="/admin/teachers/block/{{$teacher->id}}">block</a>
        @else
            <a href="/admin/teachers/approve/{{$teacher->id}}">approve</a>
        @endif
        <form method="post" style="display: inline;" action="/admin/teachers/{{$teacher->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">delete</button>
        </form>

    </div>
    @endforeach
 @endsection