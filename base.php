<?php 

require_once './vendor/autoload.php';
require_once './database.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

$db=new database();


 ?>


