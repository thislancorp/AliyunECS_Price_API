AliyunECS_Price_API
===================

阿里云价格API

配置 --> 价格


使用方法：

<?php

require_once "ecs.price.class.php";

$price=new ecsPrice(2,2560,230,5,null); //从左到右: CPU（核）/内存（Mb）/数据盘（Gb）/带宽（mbps）/系统编号（目前没多大用）

echo $price->getPrice();
?>

授权：
MIT自由使用协议。但这是个人项目，使用者自负风险。
