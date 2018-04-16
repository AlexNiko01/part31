<?php

/**
 * Class Quadrilateral
 */
abstract class Quadrilateral implements GeometricFigure
{
    use Nomination;
    use Width;
    use Height;

    /**
     * @return float
     */
    public function calculateSquare(): float
    {
        $square = $this->width * $this->height;
        return $square;
    }

}
