<?php

/**
 * Class Square
 */
class Square implements GeometricFigure
{
    use Nomination;
    use Size;

    /**
     * @return float
     */
    public function calculateSquare(): float
    {
        $square = pow($this->size, 2);
        return $square;
    }
}