<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 18:29
 */

/**
 * Trait Width, sets figure width
 */
trait Width
{
    /**
     * @var integer
     */
    protected $width;

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }


}