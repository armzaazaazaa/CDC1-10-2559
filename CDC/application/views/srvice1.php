<?php 
	//echo date('d/m/y H:i:s');
	//print_r($_POST);
$arrStudent = $arrItem = array();//php
for($i=1;$i<=5;$i++){
//$arrStudent =[];
$arrStudent['code'] = '12'.$i;
$arrStudent['name'] = 'dssdsd'.$i;
$arrStudent['sname'] = 'sdsdsd'.$i;
$arrStudent['age'] = 25+$i;
$arrStudent['year'] = $i;
$arrStudent['gendr'] = 'M';

array_push($arrItem,$arrStudent);}


echo json_encode($arrItem);
/*
echo '<pre>';
print_r($arrItem);
echo '</pre>';
 ?>*/
