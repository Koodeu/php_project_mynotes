<?php

declare(strict_types=1);

namespace App;


require_once('src/view.php');


$action = $_GET['action'] ?? null;

$view = new View;
$view->render($action);







