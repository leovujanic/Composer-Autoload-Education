<?php

/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 07:29
 */


/**
 * Class TestClass
 */
class TestClass {
    
    /**
     * @return string
     */
    public function name() {
        return get_called_class();
    }
    
}