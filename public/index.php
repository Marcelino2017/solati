<?php

use App\Models\Courses;

require __DIR__ . '/../vendor/autoload.php';
require_once('../database/Connection.php');
//require_once('/../src/Models/Curses.php');
//use App\Models\Course;
 
    //require_once('/');

    $var = Connection::connection();
    //$course = new Courses();

    var_dump($var);
?>