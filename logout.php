<?php

    require_once("templates/header.php");

    $userDAO = new UserDAO($conn, $BASE_URL);


    if($userDAO){
        $userDAO->destroyToken();

    }
  