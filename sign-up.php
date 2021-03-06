<?php
require_once 'bootstrap.php';
require_once 'functions/validators/sign-up.php';

$title = 'Регистрация пользователя';

$connection = db_connect($config['db']);
$categories = get_categories($connection);

$user_data = getUserData($_POST);

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $errors = validate_sign_up($user_data, $connection);

    if (!$errors) {
        $user_id = add_user($connection, $user_data);
        header("Location: /login.php");

    } else {
        $page_content = include_template('sign-up.php', [
            'categories' => $categories,
            'user_data' => $user_data,
            'errors' => $errors
        ]);

    }

} else {
    $page_content = include_template('sign-up.php', ['categories' => $categories]);
}

$layout_content = include_template('layout.php',[
    'content' => $page_content,
    'categories' => $categories,
    'title' => $title,
    'is_auth' => $is_auth,
    'user_name' => $user_name
]);

print($layout_content);