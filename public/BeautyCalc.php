<?php
require "../src/autoload.php";
use App\Calc\Calc;
$obj = new Calc();
echo $obj->{$_POST["choose"]}($_POST["a"], $_POST["b"]);