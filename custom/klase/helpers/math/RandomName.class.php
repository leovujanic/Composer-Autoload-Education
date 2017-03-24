<?php

/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 07:36
 */

namespace klase\helpers\math;

/**
 * Class RandomName
 */
class RandomName {
    
    
    /**
     * @return string
     */
    public function name() {
        return get_called_class() . ' - ' . $this->generateRandomString();
    }
    
    
    /**
     * @param int $length
     * @return string
     */
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        return $randomString;
    }
    
}