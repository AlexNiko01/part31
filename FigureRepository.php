<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 10:38
 */

class FigureRepository
{
    private function registerFigure($figureClassName)
    {
        if ($figureClassName) {
            $figureObject = new $figureClassName;
            return $figureObject;
        } else {
            return false;
        }
    }

    public function getFiguresList($figures)
    {
        $figuresObjectsList = [];
        foreach ($figures as $figure) {
            $figureObject = $this->registerFigure($figure);
            if ($figureObject != false) {
                array_push($figuresObjectsList, $figureObject);
            }
        }
        return $figuresObjectsList;
    }

    public function getFiguresData($figuresObjectsList)
    {
        $figures = [];
        foreach ($figuresObjectsList as $figureObject) {
            $figure = [];
            $name = $figureObject->getName();
            $square = $figureObject->calculateSquare();
            $figure['name'] = $name;
            $figure['square'] = $square;
            $figures[] = $figure;
        }
        return $figures;
    }
}
