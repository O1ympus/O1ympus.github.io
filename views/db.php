<?php
require "libs/rb-mysql.php";
R::setup('mysql:host=localhost; dbname=mydb', 'root', 'root');
$connect = mysqli_connect('localhost', 'root', 'root', 'mydb');