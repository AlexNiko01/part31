<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 14:14
 */

abstract class Quadrilateral implements GeometricFigure
{
    use Nomination;
    protected $width;
    protected $height;


    public function calculateSquare()
    {
        $square = $this->width * $this->height;
        return $square;
    }

}
