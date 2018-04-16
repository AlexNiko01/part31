<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.04.18
 * Time: 9:54
 */

/**
 * Trait Size, sets figure main parameter value
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