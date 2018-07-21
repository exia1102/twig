<?php 

require_once './base.php';

$categories=$db->getAllCategories();
$books=$db->getAllBook();


echo $twig->render('main.html.twig', //templete file
	array(//data array
		"categories"=>$categories,
		"books"=>$books,
	)
);


 ?>



