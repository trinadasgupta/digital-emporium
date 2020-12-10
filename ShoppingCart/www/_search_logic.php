<?php

$_GET['q'] = str_replace(",", " ", $_GET['q']);
$_GET['q'] = str_replace("+", " ", $_GET['q']);

$keywords = explode(  " ", trim($_GET['q'])  );

 $sql = "SELECT * FROM `products`,`category` 
         WHERE 
              `products`.`cid` = `category`.`cid`  ";

foreach($keywords as $key) {
	$sql = $sql . "
         AND 
         	 (
         	 	   `products`.`name`    LIKE '%$key%'
         	 	OR `products`.`details` LIKE '%$key%'
         	 	OR `category`.`cname`   LIKE '%$key%'
         	 )
               ";
}

//die($sql);
?>