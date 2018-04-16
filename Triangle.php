<?php

/**
 * Class Triangle
 */
class Triangle implements GeometricFigure
{
    use Nomination;
    use Width;
    use Height;

    /**
     * @return float
     */
    public function calculateSquare(): float
    {
        return ($this->width * $this->height) / 2;
    }

}