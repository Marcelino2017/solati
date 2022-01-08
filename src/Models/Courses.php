<?php

namespace App\Models;

use App\Database\Connection;
use mysqli;


class Courses
{
    public function cuerse() {

        $query = "SELECT * FROM courses";
        $connection = Connection::connection();
        return $connection;
        $res = mysqli_select_db($connection, $query);
    }
}