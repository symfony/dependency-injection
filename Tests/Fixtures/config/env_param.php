<?php

use Symfony\Component\DependencyInjection\Tests\Fixtures\AcmeConfig;

return function (string $env) {
    return new AcmeConfig(['color' => 'prod' === $env ? 'blue' : 'red']);
};
