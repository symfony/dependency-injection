<?php

use Symfony\Component\DependencyInjection\Tests\Fixtures\Bar;
use Symfony\Config\ParametersConfig;
use Symfony\Config\ServicesConfig;

return [
    'when@prod' => [
        new ParametersConfig([
            'foo_param' => 'bar_value',
        ]),
        new ServicesConfig([
            '_defaults' => [
                'public' => true,
            ],
            Bar::class => null,
            'my_service' => [
                'class' => Bar::class,
                'arguments' => ['%foo_param%'],
            ],
        ]),
    ],
];
