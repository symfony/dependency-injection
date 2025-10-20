<?php

use Symfony\Component\DependencyInjection\Tests\Fixtures\Bar;
use Symfony\Config\ParametersConfig;
use Symfony\Config\ServicesConfig;

return [
    new ParametersConfig([
        'foo' => 'bar',
    ]),
    new ServicesConfig([
        '_defaults' => [
            'public' => true,
        ],
        Bar::class => null,
        'my_service' => [
            'class' => Bar::class,
            'arguments' => ['%foo%'],
        ],
    ]),
];
