<?php

use CreationalDesignPatterns\FactoryMethod\ProductFactory\MilkCreator;
use CreationalDesignPatterns\FactoryMethod\Shape\ShapeFactory;

require_once __DIR__ . '/../autoloader.php';


$shapeFactory = new ShapeFactory();

$shape1 = $shapeFactory->getShape('Circle');
echo $shape1->draw() . PHP_EOL;

$shape2 = $shapeFactory->getShape('Rectangle');
echo $shape2->draw(). PHP_EOL;

// Milk Example
$productCreator = new MilkCreator();
echo $productCreator->createProduct()->getName();