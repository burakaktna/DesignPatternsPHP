<?php

namespace CreationalDesignPatterns\FactoryMethod\Shape;

final class ShapeFactory
{
    private const SHAPES = [
        'circle' => Circle::class,
        'rectangle' => Rectangle::class
    ];

    public function getShape(string $shape): Shape|string
    {
        $shape = strtolower($shape);
        if (!array_key_exists($shape, self::SHAPES)){
            return 'Shape not found!';
        }

        return new self::SHAPES[$shape];
    }
}