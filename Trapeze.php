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

    public function calculateSquare()
    {
        $square = $this->height * ($this->baseWidth + $this->width) / 2;
        return $square;
    }

    public function setBaseWidth($baseWidth)
    {
        $this->baseWidth = $baseWidth;
    }
}