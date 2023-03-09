<?php

namespace CreationalDesignPatterns\FactoryMethod\Shape;

final class Rectangle implements Shape
{

    public function draw(): string
    {
        return 'Rectangle';
    }
}