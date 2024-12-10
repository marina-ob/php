<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
print '私の名前は、'.$name.'<br>';
$set = htmlspecialchars($_POST['set'],ENT_QUOTES);
print 'ご注文の商品は、'.$set.'<br>';
$number = htmlspecialchars($_POST['number'],ENT_QUOTES);
print '注文数は、'.$number;
