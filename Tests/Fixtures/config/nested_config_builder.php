<?php

use Symfony\Component\DependencyInjection\Tests\Fixtures\AcmeConfig;

if ('prod' !== $env) {
    return;
}

return new AcmeConfig(['color' => 'red']);
