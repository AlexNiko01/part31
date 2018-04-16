<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 14:53
 */

trait Nomination
{
    public function getName(): string
    {
        $className = strtolower(get_class($this));
        if(strripos($className, '/') != false){
            $className = explode('/', $className)[count(explode('/', $className) - 1)];
        }
        return $className;
    }
}
