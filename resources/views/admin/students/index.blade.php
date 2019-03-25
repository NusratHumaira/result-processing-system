<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><h3>ADMIN DASHBOARD</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
             
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
           <li> <a href="/admin/departments" class=""><h4>Departments</h4></a></l1>
        </ul>
        <ul>
            <li><a href="/admin/courses" class=""><h4>Courses</h4></a></li>
        </ul>
        <ul>
           <li> <a href="/admin/students" class=""><h4>Students</h4></a></l1>
        </ul>
        <ul>
           <li> <a href="/admin/teachers" class=""><h4>Teacher</h4></a></l1>
        </ul>
        <ul>
           <li> <a href="" class=""><h4>Results</h4></a></l1>
        </ul>
    </aside>
    @foreach($students as $student)
    <div>{{$student->id}} &nbsp; {{$student->user->name}} &nbsp;{{$student->reg_no}} &nbsp;{{$student->session}} &nbsp; 
        <form method="post" style="display: inline;" action="/admin/students/{{$student->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">delete</button>
        </form>
 
    </div>
    @endforeach
   
   <style type="text/css">
        li{
            text-decoration: none;
            list-style: none;
        }
    </style>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>