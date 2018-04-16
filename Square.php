<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.04.18
 * Time: 10:01
 */

class Square implements GeometricFigure
{
    use Nomination;
    use Size;

    public function calculateSquare()
    {
        $square = pow($this->size, 2);
        return $square;
    }
}