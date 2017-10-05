<?php
require '../db/db.php';
$data = $_POST;
if (!empty($data['login']) || !empty($data['email']) || !empty($data['password']) ) {
    //registration
    $errors = array();
    if (trim($data['login']) == '') {
        $errors[] = 'Enter login';
        echo 'Enter login. <br>';
    }
    if ($data['email'] == '') {
        $errors[] = 'Enter email';
        echo 'Enter email. <br>';
    }
    if ($data['password'] == '') {
        $errors[] = 'Enter password';
        echo 'Enter password. <br>';
    }
    if (R::count('users', "login = ?", array($data['login'])) > 0) {
        $errors[] = 'Such login already exists';
        echo 'Such login already exists ';
    }
    if (R::count('users', "email = ?", array($data['login'])) > 0) {
        $errors[] = 'Such email already exists';
        echo 'Such email already exists ';
    }
    if (empty($errors)) {
        //all good, registration
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
        $_SESSION['logged_user'] = $user;

        echo 'Success, go to main <a href="/">page!</a>';
    }
}else
    echo 'Fill in all the fields';


