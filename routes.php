<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'validation' => 'app/Controllers/validationController.php'
]);