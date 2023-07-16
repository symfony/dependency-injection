<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class Symfony_DI_PhpDumper_Service_Wither_Lazy_Non_Shared extends Container
{
    protected $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'wither' => 'getWitherService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\Foo' => true,
        ];
    }

    protected function createProxy($class, \Closure $factory)
    {
        return $factory();
    }

    /**
     * Gets the public 'wither' autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Compiler\Wither
     */
    protected static function getWitherService($container, $lazyLoad = true)
    {
        $container->factories['wither'] ??= fn () => self::getWitherService($container);

        if (true === $lazyLoad) {
            return $container->createProxy('WitherProxyDd381be', static fn () => \WitherProxyDd381be::createLazyProxy(static fn () => self::getWitherService($container, false)));
        }

        $instance = new \Symfony\Component\DependencyInjection\Tests\Compiler\Wither();

        $a = ($container->privates['Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\Foo'] ??= new \Symfony\Component\DependencyInjection\Tests\Compiler\Foo());

        $instance = $instance->withFoo1($a);
        $instance = $instance->withFoo2($a);
        $instance->setFoo($a);

        return $instance;
    }
}

class WitherProxyDd381be extends \Symfony\Component\DependencyInjection\Tests\Compiler\Wither implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        'foo' => [parent::class, 'foo', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);
