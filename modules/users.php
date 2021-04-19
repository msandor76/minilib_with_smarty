<?php

$tpl = "users";


$sql = "SELECT * FROM user";
$queryArr = DB::query($sql);

$smarty->assign("title","Users");
$smarty->assign("queryArr",$queryArr);


?>
