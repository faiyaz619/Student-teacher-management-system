<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\SubjectController;



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

Route::get('/', [WebController::class,'index'])->name('home');
Route::get('/courses', [WebController::class,'course'])->name('all.courses');
Route::get('/course-detail/{id}', [WebController::class,'courseDetail'])->name('detail-course');
Route::get('/enroll-now/{id}', [WebController::class, 'enroll'])->name('enroll-now');
Route::post('/new-enroll/{id}', [WebController::class, 'newEnroll'])->name('new-enroll');

Route::get('/user-register', [AuthController::class,'register'])->name('register.user');
Route::post('/new-register', [AuthController::class, 'newRegister'])->name('register.new');
Route::get('/user-login', [AuthController::class,'login'])->name('login.user');
Route::post('/new-login',[AuthController::class,'newLogin'])->name('login.new');
Route::post('/user-logout',[AuthController::class,'logout'])->name('user-logout');
Route::post('/student-logout',[AuthController::class,'studentLogout'])->name('student-logout');

Route::get('/teacher-dashboard',[TeacherDashboardController::class,'index'])->name('teacher-dashboard');
Route::middleware(['student'])->group(function (){
    Route::get('/student-dashboard', [StudentDashboardController::class, 'index'])->name('student-dashboard');
    Route::get('/student-profile', [StudentDashboardController::class, 'profile'])->name('student-profile');
    Route::post('/update-student-profileupdate-student-profile/{id}', [StudentDashboardController::class, 'updateProfile'])->name('update-student-profile');
    Route::get('/change-password', [StudentDashboardController::class, 'changePassword'])->name('change-password');
    Route::post('/update-student-password/{id}', [StudentDashboardController::class, 'updatePassword'])->name('update-student-password');
    Route::get('/course-payment', [StudentDashboardController::class, 'coursePayment'])->name('course.payment');
    Route::post('/make-course-payment/{id}', [StudentDashboardController::class, 'makePayment'])->name('make.course.payment');
});

Route::get('/add-subject', [SubjectController::class, 'index'])->name('subject.add');
Route::post('/new-subject', [SubjectController::class, 'create'])->name('subject.new');
Route::get('/manage-subject', [SubjectController::class, 'manage'])->name('subject.manage');
Route::get('/edit-subject/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
Route::post('/update-subject/{id}', [SubjectController::class, 'update'])->name('subject.update');
Route::get('/delete-subject/{id}', [SubjectController::class, 'delete'])->name('subject.delete');




Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified'])->group(function ()
{
     Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

     Route::get('/add-teacher', [TeacherController::class, 'index'])->name('teacher.add');
     Route::get('/manage-teacher',[TeacherController::class, 'manage'])->name('teacher.manage');
     Route::post('/new-teacher',[TeacherController::class, 'create'])->name('teacher.new');
     Route::get('/edit-teacher/{id}',[TeacherController::class, 'edit'])->name('teacher.edit');
     Route::post('/update-teacher/{id}',[TeacherController::class, 'update'])->name('teacher.update');
     Route::get('/delete-teacher/{id}',[TeacherController::class, 'delete'])->name('teacher.delete');

    Route::get('/manage-course', [AdminCourseController::class, 'manage'])->name('manage-course');
    Route::get('/view-detail/{id}',[AdminCourseController::class, 'detail'])->name('view-detail');
    Route::get('/update-status/{id}',[AdminCourseController::class, 'updateStatus'])->name('update-status');

    Route::get('/manage-student',[AdminStudentController::class, 'manageStudent'])->name('manage-student');
    Route::get('/manage-student-course',[AdminStudentController::class, 'manageStudentCourse'])->name('manage-student-course');
    Route::get('/student-status/{id}',[AdminStudentController::class, 'updateStatus'])->name('student-status');
    Route::get('/update-enroll-status/{id}',[AdminStudentController::class, 'updateEnrollStatus'])->name('update-enroll-status');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified' , 'superAdmin'])->group(function ()
{
    Route::get('/add-user', [UserController::class,'index'])->name('user.add');
    Route::post('/new-user', [UserController::class,'createUser'])->name('user.new');
    Route::get('/manage-user', [UserController::class,'manageUser'])->name('user.manage');
    Route::get('/edit-user/{id}', [UserController::class,'editUser'])->name('user.edit');
    Route::post('/update-user/{id}', [UserController::class,'update'])->name('user.update');
    Route::get('/delete-user/{id}', [UserController::class,'deleteUser'])->name('user.delete');

});
