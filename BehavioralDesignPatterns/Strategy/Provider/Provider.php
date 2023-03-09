<?php

namespace BehavioralDesignPatterns\Strategy\Provider;

final readonly class Provider
{
    public function __construct(private IProviderStrategy $providerStrategy)
    {
    }

    public function getData(): array
    {
        return $this->providerStrategy->getData();
    }
}
