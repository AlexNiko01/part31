<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.04.18
 * Time: 9:56
 */

class Circle implements GeometricFigure
{
    use Nomination;
    use Size;

    public function calculateSquare(): float
    {
        $square = pow($this->size, 2) * 3.14;
        return $square;
    }

}