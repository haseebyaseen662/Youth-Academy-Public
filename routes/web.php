<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('showlogin', [AuthController::class, 'showLogin'])->name('showlogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('showregister', [AuthController::class, 'showRegister'])->name('showregister');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('showforget', [AuthController::class, 'showforget'])->name('showforget');
Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('sendOtp');

Route::get('/dashboard', function () {
    return view('dashboards.index');
})->name('dashboard');

Route::get('/student-dashboard', function () {
    return view('students.index');
})->name('dashboard');

Route::get('/all-courses', function () {
    return view('academic.course');
})->name('course');

Route::get('/enrolled-courses', function () {
    return view('academic.enrolled_courses');
})->name('course.enroll');

Route::get('/course-detail', function () {
    return view('academic.course_detail');
})->name('course.detail');

Route::get('/attendence', function () {
    return view('academic.attendence');
})->name('academic.attendence');

Route::get('/syllabus', function () {
    return view('academic.syllabus');
})->name('academic.syllabus');

Route::get('/study-material', function () {
    return view('academic.study_material');
})->name('academic.study_material');

Route::get('/live-session', function () {
    return view('academic.live_session');
})->name('academic.live_session');

// Payment Routes

Route::get('/fee-invoice', function () {
    return view('payments.fee_invoice');
})->name('payments.fee_invoice');

Route::get('/payment-report', function () {
    return view('payments.payment_report');
})->name('payments.payment_report');