<?php
/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 07:27
 */


require_once __DIR__ . '/functions/helpers.php';

//spl_autoload_register


$includePath = get_include_path();

//var_dump($includePath);



set_include_path($includePath . PATH_SEPARATOR . 'klase');

spl_autoload_extensions('.class.php');

spl_autoload_register();


require_once __DIR__ . '/core/ini.php';




$db = new Database();

echo $db->name();


echo spacer();



use klase\helpers\math\RandomName;

$random = new RandomName();

echo $random->name();


echo spacer();


$test = new TestClass();

echo $test->name();