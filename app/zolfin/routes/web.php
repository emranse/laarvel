<?php



Route::get('/',function(){
  return view('pages.home');
});

Route::get('/home-2', function(){
  return view('home-2');
});

Route::get('/about', function(){
  return view('about');
});

Route::get('/contact', function(){
  return view('contact');
});

Route::get('/blog', function(){
  return view('blog');
});

Route::get('/blog-details', function(){
  return view('blog-details');
});

Route::get('/portfolio', function(){
  return view('portfolio');
});

Route::get('/portfolio-details', function(){
  return view('portfolio-details');
});

Route::get('/service', function(){
  return view('service');
});

Route::get('/service-details', function(){
  return view('service-details');
});



 ?>
