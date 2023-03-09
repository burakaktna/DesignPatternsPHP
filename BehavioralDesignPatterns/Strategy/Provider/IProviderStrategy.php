<?php

namespace BehavioralDesignPatterns\Strategy\Provider;

interface IProviderStrategy
{
    public function getData(): array;

    public function getKeyMatches(): array;
}