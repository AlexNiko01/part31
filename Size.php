<?php

/**
 * Trait Size, sets main parameter value
 */
trait Size
{
    /**
     * main dimension parameter of the figure for calculating the square
     *
     * @var integer
     */
    protected $size;

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}