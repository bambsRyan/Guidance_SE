<?php

use Illuminate\Support\Facades\Route;

Route::get('/counselor_appointment', function () {
    return view('Counselor/Appointment');
});
Route::get('/counselor_dashboard', function () {
    return view('Counselor/Dashboard');
});
Route::get('/counselor_events', function () {
    return view('Counselor/events');
});
Route::get('/counselor_history', function () {
    return view('Counselor/History');
});
Route::get('/head_appointment', function () {
    return view('Counselor_Head/appointment');
}); 
Route::get('/head_dashboard', function () {
    return view('Counselor_Head/Dashboard');
});
Route::get('/head_events', function () {
    return view('Counselor_Head/events');
});
Route::get('/head_history', function () {
    return view('Counselor_Head/History');
});
Route::get('/student_Dashboard', function () {
    return view('student/Dashboard');
});
Route::get('/CPI', function () {
    return view('student/CPI');
});
Route::get('/info', function () {
    return view('student/CPI2');
});