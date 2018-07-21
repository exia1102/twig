<?php 


require_once './base.php';

$categories=$db->getAllCategories();

$result=array();
if($_GET&&array_key_exists('bid',$_GET)){
	$bookInfo=$db->getBook($_GET['bid']);
	$cid=$db->getCategory($_GET['bid']);
	foreach($cid as $value){
		foreach($categories as $a){
			if($value['cid']==$a['cid']){
				$result[]=$a['cname'];
			}
		}
	}

}else{
	$bookInfo=null;
	$result=null;
}







echo $twig->render('book.html.twig', //templete file
	array(//data array
		"categories"=>$categories,
		"bookInfo"=>$bookInfo,
		"category"=>$result,
	)
);



 ?>