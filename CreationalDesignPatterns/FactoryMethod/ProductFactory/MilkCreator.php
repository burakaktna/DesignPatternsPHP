<?php

namespace CreationalDesignPatterns\FactoryMethod\ProductFactory;

use CreationalDesignPatterns\FactoryMethod\Product\MilkProduct;

final class MilkCreator extends ProductCreator
{
    public function createProduct(): MilkProduct
    {
        return new MilkProduct();
    }
}