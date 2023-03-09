<?php

namespace CreationalDesignPatterns\FactoryMethod\Shape;

final class Circle implements Shape
{

    public function draw(): string
    {
        return 'Circle';
    }
}