<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 18:29
 */

trait Options
{
    protected $width;
    protected $height;

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
}