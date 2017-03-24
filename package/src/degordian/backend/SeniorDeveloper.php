<?php
/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 00:09
 */

namespace degordian\backend;


/**
 * Class SeniorDeveloper
 *
 * @package degordian\backend
 */
class SeniorDeveloper {
    
    /**
     * @return string
     */
    public static function name() {
        return get_called_class();
    }
    
}