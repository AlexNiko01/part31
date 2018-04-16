<?php

/**
 * Class Trapeze
 */
class Trapeze implements GeometricFigure
{
    use Nomination;
    use Width;
    use Height;
    /**
     * @var
     */
    protected $baseWidth;

    /**
     * @return float
     */
    public function calculateSquare(): float
    {
        $square = $this->height * ($this->baseWidth + $this->width) / 2;
        return $square;
    }

    /**
     * @param int $baseWidth
     */
    public function setBaseWidth(int $baseWidth): void
    {
        $this->baseWidth = $baseWidth;
    }
}