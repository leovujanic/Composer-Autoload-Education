<?php
/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 23/03/2017
 * Time: 22:41
 */


use degordian\backend\Developer;
use degordian\frontend\Developer as FrontendDeveloper;

use Aura\Web\Response\Status;

require_once __DIR__ . '/vendor/autoload.php';

// file autoload
echo hellWorld();

echo spacer();


// class map

echo BobiClass::name();
echo spacer();

echo RudiClass::name();

echo spacer();

echo StupidVendor::name();

echo spacer();

echo BobiIRudiClass::name();

echo spacer();


// psr-0




// psr-4


echo Developer::name();

echo spacer();

echo FrontendDeveloper::name();

echo spacer();
//
//
echo Status::name();

echo spacer();


