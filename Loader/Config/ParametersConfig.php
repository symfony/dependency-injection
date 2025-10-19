<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Config;

/**
 * @psalm-type Parameters = array<string, scalar|\UnitEnum|array<scalar|\UnitEnum|array|null>|null>
 */
class ParametersConfig
{
    /**
     * @param Parameters $config
     */
    public function __construct(
        public readonly array $config,
    ) {
    }
}
