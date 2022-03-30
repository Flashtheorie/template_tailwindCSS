<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);


require 'vendor/autoload.php'; 




Flight::route('/frenchyoutubeAvecTailwind/', function(){
  Flight::render('index.php');
});


Flight::route('/frenchyoutubeAvecTailwind/home', function(){
  Flight::render('index.php');
});

Flight::route('/frenchyoutubeAvecTailwind/faq', function(){
  Flight::render('faq.php');
});
Flight::route('/frenchyoutubeAvecTailwind/login', function(){
  Flight::render('login.php');
});


Flight::map('notFound', function(){
  // Display custom 404 page
  include 'errors/404.php';
});



Flight::start();












