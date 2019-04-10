<?php

$authTableData = [
    'table' => 'users',
    'idfield' => 'login',
    'cfield' => 'mdp',
    'uidfield' => 'uid',
    'rfield' => 'role',
];

$pathFor = [
    "login"  => "/Projet/login.php",
    "logout" => "/Projet/logout.php",
    "adduser" => "/Projet/adduser.php",
    "root"   => "/Projet",
];

const SKEY = '_Redirect';