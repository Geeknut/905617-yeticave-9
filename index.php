<?php
require_once 'bootstrap.php';
$connection = db_connect($config['db']);

$categories = get_categories($connection);

$lots = get_lots($connection);

$title = 'Главная';

$page_content = include_template('index.php',[
    'lots' => $lots,
    'categories' => $categories
]);

$layout_content = include_template('layout.php',[
    'content' => $page_content,
    'categories' => $categories,
    'title' => $title,
    'is_auth' => $is_auth,
    'user_name' => $user_name
]);

print($layout_content);
