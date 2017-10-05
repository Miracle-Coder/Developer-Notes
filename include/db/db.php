<?php
    require 'rb/rb.php';
    $connect = R::setup( 'mysql:host=localhost;dbname=develope_db',
        'develope_db', '6482913hjvfirf' );
    if ( !R::testConnection())
    {
        exit('нет подключения к базке данных!');
    }

    session_start();

