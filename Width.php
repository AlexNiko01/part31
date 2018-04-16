<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 18:29
 */

trait Width
{
    protected $width;


    public function setWidth(int $width): void
    {
        $this->width = $width;
    }


}