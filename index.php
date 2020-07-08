<?php
require __DIR__ . "/vendor/autoload.php";
use App\Views\View;
use App\Home\Home;
$a = new View();
$a->viewS();
$b = new Home();
$b->homeS();