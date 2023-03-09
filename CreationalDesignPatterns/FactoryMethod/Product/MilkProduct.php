<?php

namespace CreationalDesignPatterns\FactoryMethod\Product;

final class MilkProduct implements Product
{
    /**
     * @var string
     */
    private const NAME = 'Milk';

    public function getName(): string
    {
        return self::NAME;
    }
}