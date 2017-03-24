<?php
/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 00:10
 */

namespace degordian\frontend;


/**
 * Class Developer
 *
 * @package degordian\frontend
 */
class Developer {
    
    /**
     * @return string
     */
    public static function name() {
        return get_called_class();
    }
    
}