<?php
require_once './includes/head.php';

$users = $query->selectAll('users');

require './includes/header.php';
require './views/index.view.php';