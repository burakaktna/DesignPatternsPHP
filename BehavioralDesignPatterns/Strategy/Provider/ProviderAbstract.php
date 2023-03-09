<?php

namespace BehavioralDesignPatterns\Strategy\Provider;

abstract class ProviderAbstract implements IProviderStrategy
{
    protected array $data = [];
    protected array $formattedData = [];

    public function __construct()
    {
       $this->formatData($this->getKeyMatches());
    }

    protected function formatData(array $keys): void{
        foreach ($keys as $key => $value){
            $this->formattedData[$key] = $this->data[$value];
        }
    }
}