<?php

/**
 * Trait Width, sets width
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