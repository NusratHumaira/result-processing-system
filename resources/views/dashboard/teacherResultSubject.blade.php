<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teacher add-course</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><h3>TEACHER DASHBOARD</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- left side -->
            <!--<ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            <li class="nav-item">
                    <h3><a class="nav-link" href="#">Teacher Dashboard</a></h3>
            </li>
        </ul>-->

            <!-- left side -->
            <!-- right side -->
             
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form  action="{{route('logout') }}" method="POST" style="display:block !important" class="mr-auto">
                        @csrf
                        <button type="submit">logout</button>
                    </form>
                </li>
            </ul>
            <!-- right side -->
        </div>
    </nav>

    <aside style="background:#aabecf; width:250px;height:700px; float:left;">
        <ul>
           <li> <a href="/dashboard/teacher/addcourse" class=""><h4>Add or Remove Courses</h4></a></l1>
        </ul>
        <ul>
            <li><a href="/dashboard/teacher/result" class=""><h4>Result</h4></a></li>
        </ul>
    </aside>
    <div class="container">
        <table class="table" style="width:1000px;">
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
      <td>Otto</td>
      <td>
        <a href="/dashboard/teacher/result/edit/{{$mark->id}}">Edit</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>


    </div>

   <style type="text/css">
        li{
            text-decoration: none;
            list-style: none;
        }
    </style>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>