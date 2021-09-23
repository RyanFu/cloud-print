<?php
require 'vendor/autoload.php';

$printer = \whereof\cloudPrint\Factory::Printcenter([
    'key' => '',
])->printer;

//打印内容
$printer->print([
    'deviceNo'     => '',
    'printContent' => '',
]);

//查询打印机的状态
$printer->status([
    'deviceNo' => '',
]);
//查询订单是否打印成功
$printer->orderState([
    'deviceNo'   => '',
    'orderindex' => '',
]);