<?php

use BehavioralDesignPatterns\Strategy\Provider\Provider;
use BehavioralDesignPatterns\Strategy\Provider\ProviderTR;
use BehavioralDesignPatterns\Strategy\Provider\ProviderUSA;

require_once 'autoloader.php';

$providerUSA = new Provider(new ProviderUSA());
$providerTR = new Provider(new ProviderTR());
echo 'USA ' . implode(', ', $providerUSA->getData()) . PHP_EOL;
echo 'TR ' . implode(', ', $providerTR->getData()) . PHP_EOL;