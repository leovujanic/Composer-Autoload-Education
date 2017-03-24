<?php

/**
 * Created by PhpStorm.
 * User: leonardvujanic
 * Date: 24/03/2017
 * Time: 00:52
 */

namespace Aura\Web\Response;

class Status {
    /**
     * @return string
     */
    public static function name() {
        return get_called_class();
    }
}