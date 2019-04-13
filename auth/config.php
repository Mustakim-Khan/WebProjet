<?php

$authTableData = [
    'table' => 'users',
    'idfield' => 'login',
    'cfield' => 'mdp',
    'uidfield' => 'uid',
    'rfield' => 'role',
];

$pathFor = [
    "login"  => "/ProjetWeb/login.php",
    "logout" => "/ProjetWeb/logout.php",
    "adduser" => "/ProjetWeb/adduser.php",
    "root"   => "/ProjetWeb",
];

const SKEY = '_Redirect';