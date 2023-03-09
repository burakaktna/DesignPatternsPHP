<?php

namespace BehavioralDesignPatterns\Strategy\Provider;

class ProviderUSA extends ProviderAbstract
{
    protected array $data = [
        'level' => 10,
        'time' => 20,
        'total' => 30
    ];

    private array $keyMatches = [
        'difficulty' => 'level',
        'duration' => 'time',
        'price' => 'total'
    ];

    public function getData(): array
    {
        return $this->formattedData;
    }

    public function getKeyMatches(): array
    {
        return $this->keyMatches;
    }
}