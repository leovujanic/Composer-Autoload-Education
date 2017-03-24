<?php

/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 00:08
 */

namespace degordian\backend;


/**
 * Class Developer
 *
 * @package degordian\backend
 */
class Developer {
    
    /**
     * @return string
     */
    public static function name() {
        return get_called_class();
    }
    
}