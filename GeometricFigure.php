<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 10:25
 */

interface GeometricFigure
{
    /**
     * returns figures name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * calculate figures square
     *
     * @return float
     */
    public function calculateSquare(): float;
}
