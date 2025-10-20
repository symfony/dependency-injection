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
 * @psalm-type Imports = list<string|array{
 *   resource: string,
 *   type?: string|null,
 *   ignore_errors?: bool,
 * }>
 */
class ImportsConfig
{
    /**
     * @param Imports $config
     */
    public function __construct(
        public readonly array $config,
    ) {
    }
}
