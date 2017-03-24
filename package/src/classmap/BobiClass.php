<?php

/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 23/03/2017
 * Time: 22:52
 */

/**
 * Class BobiClass
 */
class BobiClass {
    
    /**
     * @return string
     */
    public static function name() {
        return get_called_class();
    }
    
}