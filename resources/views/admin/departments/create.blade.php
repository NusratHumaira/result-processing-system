@extends('layouts.admin')
@section('content')
    <form action="/admin/departments" method="post">
        
       @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="code" placeholder="code">
        <button type="submit">Create</button>
    </form>
 @endsection