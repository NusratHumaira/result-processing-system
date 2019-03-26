@extends('layouts.teacher')
@section('content')
    <h3><a href="/dashboard/teacher/result/{{$mark->subject_id}}"> << back to result sheet</a></h3>
    <div class="container">




        <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>





       <div>{{$mark->student->reg_no}}</div> 
        <form action="" method="POST">
            @csrf
            <input type="text" name="tt1" value="{{$mark->tt1}}" placeholder="tt1">
            <input type="text" name="tt2"value="{{$mark->tt2}}" placeholder ="tt2">
            <input type="text" name="tt3"value="{{$mark->tt3}}" placeholder ="tt3">
            <input type="text" name="ttt"value="{{$mark->ttt}}" placeholder ="ttt">
            <input type="text" name="part_a"value="{{$mark->part_a}}" placeholder ="part a">
            <input type="text" name="part_b"value="{{$mark->part_b}}" placeholder ="part b">
            <input type="text" name="attendance"value="{{$mark->attendance}}" placeholder ="attendance">
            <input type="text" name="total"value="{{$mark->total}}" placeholder="total">
            <button type="submit">UPDATE</button>
        </form>

    </div>
  @endsection