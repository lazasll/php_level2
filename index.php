<?php
require 'Clothes.php';
require 'Women.php';

$Clothes1 = new Clothes("Short ", ' 524');
$Clothes1->about();

$Clothes2 = new Clothes("Jemper ", ' 1501');
$Clothes2->about();

$Clothes3 = new Clothes("T-Short ", ' 700');
$Clothes3->about();

//Придумать наследников класса из п.1. Чем они будут отличаться?

$Clothes4 = new Women("Dress ", ' 1700', '54');
$Clothes4->about();