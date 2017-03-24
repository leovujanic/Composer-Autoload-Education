<?php
/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 07:27
 */


require_once __DIR__ . '/core/ini.php';



$test = new TestClass();

echo $test->name();



echo spacer();

$extensions = [
    'leo',
    'pero',
    'marko',
];

var_dump(spl_autoload_extensions(spl_autoload_extensions() . ',.'. implode(',.', $extensions)));
