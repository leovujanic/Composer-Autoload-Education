<?php

/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 23/03/2017
 * Time: 22:58
 */

//die('SV');

/**
 * Class StupidVendor
 */
class StupidVendor {
    
    /**
     * @return string
     */
    public static function name() {
        return get_called_class();
    }
    
}