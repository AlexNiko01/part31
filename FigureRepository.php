<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.04.18
 * Time: 10:38
 */

/**
 * Class FigureRepository
 */
class FigureRepository
{
    /**
     * @param string|null $figureClassName
     * @return bool
     */
    private function registerFigure(string $figureClassName): object
    {
        $width = mt_rand(1, 5);
        $height = mt_rand(1, 5);
        $size = mt_rand(1, 5);
        $baseWidth = mt_rand(1, 5);
        if (class_exists($figureClassName)) {
            $figureObject = new $figureClassName;
            if (property_exists($figureObject, 'width')) {
                $figureObject->setWidth($width);
            }
            if (property_exists($figureObject, 'height')) {
                $figureObject->setHeight($height);
            }
            if (property_exists($figureObject, 'size')) {
                $figureObject->setSize($size);
            }
            if (property_exists($figureObject, 'baseWidth')) {
                $figureObject->setBaseWidth($baseWidth);
            }
            return $figureObject;
        } else {
            return false;
        }

    }

    /**
     * @param array $figures
     * @return array
     */
    public function getFiguresList(array $figures): array
    {
        $figuresObjectsList = [];
        $randFiguresQuantity = mt_rand(3, 10);

        for ($i = 0 ; $i < $randFiguresQuantity; $i++) {
            $randKey = mt_rand(0, count($figures) - 1);
            $figure = $figures[$randKey];
            $figureObject = $this->registerFigure($figure);
            if ($figureObject != false) {
                array_push($figuresObjectsList, $figureObject);
            }
        }
        return $figuresObjectsList;
    }
}
