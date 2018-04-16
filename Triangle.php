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
    use Width;
    use Height;

    public function calculateSquare(): float
    {
        return ($this->width * $this->height) / 2;
    }

}