@extends('layouts.teacher')
@section('content')
    <div class="container">
        <table class="table" style="width:1020px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Reg No</th>
      <th scope="col">Term Test1</th>
      <th scope="col">Term Test2</th>
      <th scope="col">Term Test3</th>
      <th scope="col">Total Term Test</th>
      <th scope="col">Part A</th>
      <th scope="col">Part B</th>
      <th scope="col">Attendance</th>
      <th scope="col">Total</th>
      <th scope="col">Gpa</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($marks as $mark)
    <tr>
      <th scope="row">1</th>
      <td>{{$mark->student->reg_no}}</td>
      <td>{{$mark->tt1}}</td>
      <td>{{$mark->tt2}}</td>
      <td>{{$mark->tt3}}</td>
      <td>{{$mark->ttt}}</td>
      <td>{{$mark->part_a}}</td>
      <td>{{$mark->part_b}}</td>
      <td>{{$mark->attendance}}</td>
      <td>{{$mark->total}}</td>
      <td>{{$mark->gpa}}</td>
      <td>
        <a href="/dashboard/teacher/result/edit/{{$mark->id}}" class="btn btn-primary" role ="button">Edit</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
@endsection