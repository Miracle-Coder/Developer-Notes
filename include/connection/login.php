<?php
require '../db/db.php';

$data = $_POST;

if (!empty($data['login']) || !empty($data['password']))
{

    $user = R::findOne('users', "login = ?", array($data['login']));
    if ($user)
    {
        if (password_verify($data['password'], $user->password))
        {
            $_SESSION['logged_user'] = $user;

            echo 'Success, go to main <a href="/">page!</a>';

        } else

           echo 'Invalid password entered';

    } else

    {
        echo  'User with such login not found';
    }

} else
    echo 'Fill in all the fields';



