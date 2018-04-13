<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 18:25
 */

class Triangle implements GeometricFigure
{
    use Nomination;
    use Options;

    public function calculateSquare()
    {
        $square = ($this->width * $this->height) / 2;
        return $square;
    }

}