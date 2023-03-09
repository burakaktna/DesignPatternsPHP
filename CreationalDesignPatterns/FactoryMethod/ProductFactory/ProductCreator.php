<?php

namespace CreationalDesignPatterns\FactoryMethod\ProductFactory;

use CreationalDesignPatterns\FactoryMethod\Product\Product;

abstract class ProductCreator
{
    abstract public function createProduct(): Product;
}
