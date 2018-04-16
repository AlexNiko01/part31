<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.04.18
 * Time: 10:53
 */

/**
 * Trait Height, sets figure height
 */
trait Height
{
    /**
     * @var integer
     */
    protected $height;

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}