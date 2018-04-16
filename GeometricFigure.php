<?php

interface GeometricFigure
{
    /**
     * returns figures name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * calculate figures square
     *
     * @return float
     */
    public function calculateSquare(): float;
}
