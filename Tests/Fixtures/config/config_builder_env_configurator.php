<?php

use Symfony\Component\DependencyInjection\Tests\Fixtures\AcmeConfig;
use function Symfony\Component\DependencyInjection\Loader\Configurator\env;

return function () {
    return new AcmeConfig(['color' => env('COLOR')]);
};
