<?php

/**
 * Trait Nomination, returns name
 */
trait Nomination
{
    /**
     * @return string
     */
    public function getName(): string
    {
        $className = strtolower(get_class($this));
        if(strripos($className, '/') != false){
            $className = explode('/', $className)[count(explode('/', $className) - 1)];
        }
        return $className;
    }
}
