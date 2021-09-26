<?php
session_start();
include_once 'db/config.php';
include('class/Route.php');


Route::add('/', function () {
    include 'pages/home.php';
});


Route::add('/register', function () {
    include 'pages/register.php';
});


Route::add('/add/user', function () {
    include 'actions/register.php';
}, 'post');


Route::add('/update/user', function () {
    include 'actions/update_user.php';
}, 'post');


Route::add('/auth/login', function () {
    include 'actions/login.php';
}, 'post');


Route::add('/user/dashboard', function () {
    include 'pages/dashboard.php';
});


Route::run('/');
