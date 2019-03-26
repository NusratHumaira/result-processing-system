@extends('layouts.admin')
@section('content')
    <div class="container">
        
        <form action ="" >
          <div class="form-row">
            <div class="col">
              <!--<input type="text" class="form-control" placeholder="Year" name="year">-->
              <select class="form-control" name="year">
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <!--<input type="text" class="form-control" placeholder="Semester" name="semester">-->
               <select class="form-control" name="semester">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <select name="department" class="form-control" >
                @foreach(\App\Department::all() as $d)
                    <option value="{{$d->id}}">{{$d->name}}</option>

                @endforeach  
              </select>
            </div>
          </div>
           <div class="form-row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Check Courses</button>
            </div>
          </div>

        </form>
    </div>
@endsection