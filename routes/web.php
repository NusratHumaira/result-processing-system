<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('layouts.main');
});
Route::get('/t', function (){
	return view('teacher.teacherdashboard');
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/addcourse','DashboardController@submit')->middleware(['auth','can:access-teacher']);
//Route::get('/addcourse2','DashboardController@addcourse2')->name('addcourse2');
Route::get('/dashboard/student', 'DashboardController@student')->middleware(['auth','can:access-student']);
Route::get('/dashboard/teacher', 'DashboardController@teacher')->middleware(['auth','can:access-teacher']);

Route::get('/dashboard/teacher/addcourse','DashboardController@teacheraddcourse');

Route::post('/dashboard/teacher/addcourse','SubjectController@store');

Route::get('/dashboard/teacher/result','DashboardController@result');

Route::get('/dashboard/teacher/result/{subject}','DashboardController@teacherResultSubject');

Route::get('/dashboard/teacher/result/edit/{mark}','DashboardController@teacherResultMarkEdit');
Route::post('/dashboard/teacher/result/edit/{mark}','DashboardController@teacherResultMarkStore');

Route::post('/dashboard/teacher/unregister','SubjectController@unregister');

Route::get('/dashboard/student/result','DashboardController@studentresult');

Route::get('/dashboard/student/addcourse','DashboardController@studentaddcourse');

Route::get('/dashboard/student/unregister/{subject}','DashboardController@studentunregister');

Route::get('/dashboard/student/register/{subject}','DashboardController@studentregister');

 // admin



Route::get('/admin','AdminController@dashboard');
Route::get('/admin/login','AdminController@login')->name('adminlogin');
Route::post('/admin/login','AdminController@loginpost');

Route::resource('/admin/departments','DepartmentController');
Route::resource('/admin/courses','CourseController');
Route::resource('/admin/students','StudentController');
Route::resource('/admin/teachers','TeacherController');
// Route::resource('s','DepartmentController');