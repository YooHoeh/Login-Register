<?php
require "include/Smarty.class.php";
require 'include/captcha.class.php';
$index = new Smarty();

$index->assign('code','ddd');
$index->display('index.tpl');
$index->assign('codean',$_SESSION['an']);
echo "<script> alert(".$_SESSION['an'].") </script>";






?>
 
