<?php

namespace BehavioralDesignPatterns\Strategy\Provider;

class ProviderTR extends ProviderAbstract
{
    protected array $data = [
        'zorluk' => 1,
        'sure' => 2,
        'fiyat' => 3
    ];

    private array $keyMatches = [
        'difficulty' => 'zorluk',
        'duration' => 'sure',
        'price' => 'fiyat'
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