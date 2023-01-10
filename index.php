<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/webpsb-beta";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];
    require_once 'app/views/head/index.php';

    switch ($request) {
        case $me.'/' :
            require "app/views/home/index.php";
            break;
        case $me.'/about' :
            require "app/views/home/about.php";
            break;
        case $me.'/contact' :
            require "app/views/home/contact.php";
            break;
        case $me.'/daftar-taud' :
            require "app/views/form/form-taud.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }

    require_once 'app/views/footer/index.php';
