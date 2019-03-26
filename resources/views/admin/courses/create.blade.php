@extends('layouts.admin')
@section('content')
    <form action="/admin/courses" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="code" placeholder="code">
        <input type="text" name="semester" placeholder="semester">
        <input type="text" name="department_id" placeholder="department_id">
        <button type="submit">Create</button>
    </form>
 @endsection