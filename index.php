<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12.04.18
 * Time: 17:44
 */
require('GeometricFigure.php');
require('Nomination.php');
require('Options.php');
require('Quadrilateral.php');
require('Rectangle.php');
require('Parallelogram.php');
require('Rhombus.php');
require('Triangle.php'  );
require('FigureRepository.php');

$allFiguresArr = [
    'triangle',
    'parallelogram',
    'rhombus',
    'rectangle',
//    'square',
//    'trapeze',
//    'circle'
];
$repository = new FigureRepository();

$figuresObjectsList = $repository->getFiguresList($allFiguresArr);
var_dump($figuresObjectsList);

$figures = $repository->getFiguresData($figuresObjectsList);
var_dump($figures);