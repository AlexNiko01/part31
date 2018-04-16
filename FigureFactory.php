<?php

/**
 * Class FigureFactory
 */
class FigureFactory
{
    /**
     * @param string|null $figureClassName
     * @return object|bool
     */
    private function registerFigure(string $figureClassName): object
    {
        $width = mt_rand(1, 5);
        $height = mt_rand(1, 5);
        $size = mt_rand(1, 5);
        $baseWidth = mt_rand(1, 5);
        if (class_exists($figureClassName)) {
            $figureObject = new $figureClassName;
            switch ($figureClassName){
                case ('Parallelogram'):
                    $figureObject->setWidth($width);
                    $figureObject->setHeight($height);
                    break;
                case ('Rhombus'):
                    $figureObject->setWidth($width);
                    $figureObject->setHeight($height);
                    break;
                case ('Rectangle'):
                    $figureObject->setWidth($width);
                    $figureObject->setHeight($height);
                    break;
                case ('Trapeze'):
                    $figureObject->setWidth($width);
                    $figureObject->setHeight($height);
                    $figureObject->setBaseWidth($baseWidth);
                    break;
                case ('Circle'):
                    $figureObject->setSize($size);
                    break;
                case ('Square'):
                    $figureObject->setSize($size);
                    break;

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
            $figureObject = $this->registerFigure(ucfirst($figure));
            if ($figureObject != false) {
                array_push($figuresObjectsList, $figureObject);
            }
        }
        return $figuresObjectsList;
    }
}
