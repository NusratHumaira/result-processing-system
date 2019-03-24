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
            <li><a href="#" class=""><h4>Result</h4></li>
        </ul>
    </aside>


    <div class="container">
        
        @foreach($courses as $course)
        <div><a href="">{{$course->code}}</a>

    
             <?php
             $a = 0;
             $b =0;
             if(App\Subject::where('course_id',$course->id)->where('year',$year)->exists())
             {
                $subject = App\Subject::where('course_id',$course->id)->where('year',$year)->first();
                if($subject->teacher_id == Auth::user()->userable->id)
                {
                    $a = 1;
                }
                else
                 {
                    $b = 1;
                 }
            }
               
            ?>
             @if($a)
                    <form method="post" action="/dashboard/teacher/unregister">
                        @csrf
                         <input type="hidden" name="year" value="{{$year}}">
                         <input type="hidden" name="course_id" value="{{$course->id}}">
                        <button type="submit" class="btn">Unregister</button>
                    </form>

            @elseif($b)
                    <p style="display:inline;">registered</p>
            @else
                    <form method="post" action="">
                        @csrf
                        <input type="hidden" name="year" value="{{$year}}">
                         <input type="hidden" name="course_id" value="{{$course->id}}">
                        <button type="submit"class="btn">Register</button>
                    </form>
                    
            @endif
         </div>
            
        @endforeach

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