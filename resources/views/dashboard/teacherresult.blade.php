@extends('layouts.teacher')
@section('content')
    <div class="container">
    	 <table class="table" style="width:800px;">
            <thead class="thead-dark">
    <tr>
        <th scope="col">Course</th>
        <th scope="col">Year</th>
    </tr>
    </thead>
    <tbody>

        @foreach($subjects as $subject)
        <tr>
        <td><div><a href="/dashboard/teacher/result/{{$subject->id}}">{{$subject->course->name}}</a>
        </div></td>
        <td>{{$subject->year}}</td>
        @endforeach
    	</tr>
        </tbody>
        </table>
    </div>

@endsection