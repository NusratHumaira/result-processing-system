@extends('layouts.admin')
@section('content')
    <div class="container">
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <th scope="row">Default</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-primary">
      <th scope="row">Primary</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-secondary">
      <th scope="row">Secondary</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-success">
      <th scope="row">Success</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-danger">
      <th scope="row">Danger</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-warning">
      <th scope="row">Warning</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-info">
      <th scope="row">Info</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-light">
      <th scope="row">Light</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Dark</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  </tbody>
</table> 
      <table class="table" style="width:1000px;">
    <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      @foreach($courses as $course)
      <th scope="col">{{$course->code}}</th>
      @endforeach
      <th scope="col">Gpa</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($arr as $a => $v)
      <tr>
        <td scope="col">1</td>
        @foreach($courses as $course)
          @foreach($marks as $mark)
            @if($mark->student_id==$a && $mark->subject->course_id==$course->id)
            
            <td scope="col">{{$mark->total}}</td> 

            @endif
          @endforeach
        @endforeach
        </tr>
      @endforeach
  </tbody>
</table>
    </div>
 @endsection