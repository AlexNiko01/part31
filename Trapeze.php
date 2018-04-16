<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.04.18
 * Time: 10:35
 */

class Trapeze implements GeometricFigure
{
    use Nomination;
    use Width;
    use Height;
    protected $baseWidth;

    public function calculateSquare(): float
    {
        $square = $this->height * ($this->baseWidth + $this->width) / 2;
        return $square;
    }

    public function setBaseWidth(int $baseWidth): void
    {
        $this->baseWidth = $baseWidth;
    }
}