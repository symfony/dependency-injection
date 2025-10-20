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

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ReferenceConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\ExpressionLanguage\Expression;

require_once __DIR__.\DIRECTORY_SEPARATOR.'functions.php';

/**
 * @psalm-type Arguments = list<mixed>|array<string, mixed>
 * @psalm-type Call = array<string, Arguments>|array{0:string, 1?:Arguments, 2?:bool}|array{method:string, arguments?:Arguments, returns_clone?:bool}
 * @psalm-type Tags = list<string|array<string, array<string, mixed>>>
 * @psalm-type Callback = string|array{0:string|Reference|ReferenceConfigurator,1:string}|\Closure|Reference|ReferenceConfigurator|Expression
 * @psalm-type Deprecation = array{package: string, version: string, message?: string}
 * @psalm-type Defaults = array{
 *   public?: bool,
 *   tags?: Tags,
 *   resource_tags?: Tags,
 *   autowire?: bool,
 *   autoconfigure?: bool,
 *   bind?: array<string, mixed>,
 * }
 * @psalm-type Instanceof = array{
 *   shared?: bool,
 *   lazy?: bool|string,
 *   public?: bool,
 *   properties?: array<string, mixed>,
 *   configurator?: Callback,
 *   calls?: list<Call>,
 *   tags?: Tags,
 *   resource_tags?: Tags,
 *   autowire?: bool,
 *   bind?: array<string, mixed>,
 *   constructor?: string,
 * }
 * @psalm-type Definition = array{
 *   class?: string,
 *   file?: string,
 *   parent?: string,
 *   shared?: bool,
 *   synthetic?: bool,
 *   lazy?: bool|string,
 *   public?: bool,
 *   abstract?: bool,
 *   deprecated?: Deprecation,
 *   factory?: Callback,
 *   configurator?: Callback,
 *   arguments?: Arguments,
 *   properties?: array<string, mixed>,
 *   calls?: list<Call>,
 *   tags?: Tags,
 *   resource_tags?: Tags,
 *   decorates?: string,
 *   decoration_inner_name?: string,
 *   decoration_priority?: int,
 *   decoration_on_invalid?: 'exception'|'ignore'|null|ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE|ContainerInterface::IGNORE_ON_INVALID_REFERENCE|ContainerInterface::NULL_ON_INVALID_REFERENCE,
 *   autowire?: bool,
 *   autoconfigure?: bool,
 *   bind?: array<string, mixed>,
 *   constructor?: string,
 *   from_callable?: mixed,
 * }
 * @psalm-type Alias = string|array{
 *   alias: string,
 *   public?: bool,
 *   deprecated?: Deprecation,
 * }
 * @psalm-type Prototype = array{
 *   resource: string,
 *   namespace?: string,
 *   exclude?: string|list<string>,
 *   parent?: string,
 *   shared?: bool,
 *   lazy?: bool|string,
 *   public?: bool,
 *   abstract?: bool,
 *   deprecated?: Deprecation,
 *   factory?: Callback,
 *   arguments?: Arguments,
 *   properties?: array<string, mixed>,
 *   configurator?: Callback,
 *   calls?: list<Call>,
 *   tags?: Tags,
 *   resource_tags?: Tags,
 *   autowire?: bool,
 *   autoconfigure?: bool,
 *   bind?: array<string, mixed>,
 *   constructor?: string,
 * }
 * @psalm-type Stack = array{
 *   stack: list<Definition|Alias|Prototype|array<class-string, Arguments|null>>,
 *   public?: bool,
 *   deprecated?: Deprecation,
 * }
 * @psalm-type Services = array{
 *   _defaults?: Defaults,
 *   _instanceof?: Instanceof,
 *   ...<string, Definition|Alias|Prototype|Stack|Arguments|null>
 * }
 */
class ServicesConfig
{
    /**
     * @param Services $config
     */
    public function __construct(
        public readonly array $config,
    ) {
    }
}
