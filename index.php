<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12.04.18
 * Time: 17:44
 */
require('GeometricFigure.php');
require('Nomination.php');
require('Width.php');
require('Height.php');
require('Size.php');
require('Quadrilateral.php');
require('Rectangle.php');
require('Parallelogram.php');
require('Rhombus.php');
require('Triangle.php');
require('Circle.php');
require('Square.php');
require('Trapeze.php');
require('FigureFactory.php');

$allFiguresArr = [
    'triangle',
    'parallelogram',
    'rhombus',
    'rectangle',
    'square',
    'trapeze',
    'circle'
];
$repository = new FigureFactory();


$figuresObjectsList = $repository->getFiguresList($allFiguresArr); ?>
    <table style="text-align: left">
        <tr>
            <th>Name</th>
            <th>Square</th>
        </tr>
        <?php
        foreach ($figuresObjectsList as $item) {
            ; ?>
            <tr>
                <?php
                echo '<td>' . $item->getName() . '</td>';
                echo '<td>' . $item->calculateSquare() . '</td>'; ?>
            </tr>
            <?php

        }; ?>
    </table>
<?php
