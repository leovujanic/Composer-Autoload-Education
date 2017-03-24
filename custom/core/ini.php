<?php
/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 07:28
 */


spl_autoload_register(function($class) {
    require_once(__DIR__ . '/../classes/' . $class . '.php');
});


require_once __DIR__ . '/../functions/helpers.php';

