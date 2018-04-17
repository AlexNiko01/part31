<?php
/**
 * Class Circle
 */

class Circle implements GeometricFigure
{
    use Nomination;
    use Size;

    /**
     * @return float
     */
    public function calculateSquare(): float
    {
        $square = round(pow($this->size, 2) * M_PI);
        return $square;
    }

}