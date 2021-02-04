<?php

require 'vendor\autoload.php';
require  'DB.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$limit = 5;
//print_r( DB::getInstance()->getPart(DB::TABLE_GOODS, 0, $limit));
//exit;
if (isset($_GET['from'])){
    $count = DB::getInstance()->getCount(DB::TABLE_GOODS);
    $loaded = $_GET['from'] + $limit;
    $all = $loaded >= $count;//получаем булевое значение

    $goods = DB::getInstance()->getPart(DB::TABLE_GOODS, $_GET['from'], $limit);
    echo $twig->render('goods.twig', [
        'goods' => $goods,
        'all' => $all,
    ]);
    exit;
}

$goods = DB::getInstance()->getALLData(DB::TABLE_GOODS);

echo $twig->render('index.twig', [
    'goods' => $goods,
    'limit' => $limit,
]);