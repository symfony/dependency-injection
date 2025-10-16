<?php

use Symfony\Component\DependencyInjection\Tests\Fixtures\AcmeConfig;

if ('prod' !== $env) {
    return;
}

return [
    'imports' => [
        'nested_config_builder.php',
    ],
    new AcmeConfig(['color' => 'blue']),
];
