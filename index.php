<?php
//Создать галерею изображений, состоящую из двух страниц:
// а) Просмотр всех фотографий (уменьшенных копий);
// б) Просмотр конкретной фотографии (изображение оригинального размера)
// в) Все страницы вывода на экран - это twig-шаблоны. Вся логика - на бэкенде

require 'vendor/autoload.php';

$images = [
    [
        'id' => 1,
        'title' => 'Img 1',
        'filename' => '1.jpg',
    ],
    [
        'id' => 2,
        'title' => 'Img 2',
        'filename' => '2.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Img 3',
        'filename' => '3.jpg',
    ],
    
];

$one = null;
if (isset($_GET['id'])){
    foreach ($images as $image){
        if ($image['id'] === (int) $_GET['id']){
            $one = $image;
        }
    }
}

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
 
echo $twig->render('index.twig',[
    'images' => $images,
    'one' => $one,
]);
