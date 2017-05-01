<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apply', function() {
  return view('apply');
});

Route::post('/apply', 'ApplyCtrl@apply');

Route::get('/courses', function() {
  return view('courses');
});

Route::get('/contact', function() {
  return view('contact');
});

Route::get('/blog', function() {
  return view('blog');
});

Route::get('/send', function(){
  SMSProvider::createSubscription('+254729543970', '22384', 'lifecode');
});
