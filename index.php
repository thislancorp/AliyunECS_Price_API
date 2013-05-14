<?php
require_once "ecs.price.class.php";
// Deom price for http://buy.aliyun.com/?data=eyJjcHUiOiIyIiwibWVtb3J5IjoiMjU2MCIsImRpc2siOiIyMzAiLCJiYW5kd2lkdGgiOiI1Iiwib3MiOiJudWxsIn0=
$price=new ecsPrice(2,2560,230,5,null);
echo $price->getPrice();
?>
