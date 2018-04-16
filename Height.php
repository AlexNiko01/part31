<?php

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