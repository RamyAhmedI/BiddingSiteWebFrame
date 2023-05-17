<?php

namespace ContainerXMfemJc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_Maker_Factory_FactoryClassMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.maker.factory.factory_class_map' shared service.
     *
     * @return \Zenstruck\Foundry\Bundle\Maker\Factory\FactoryClassMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'FactoryClassMap.php';

        return $container->privates['.zenstruck_foundry.maker.factory.factory_class_map'] = new \Zenstruck\Foundry\Bundle\Maker\Factory\FactoryClassMap(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Factory\\MakeCommentFactory'] ??= new \App\Factory\MakeCommentFactory());
            yield 1 => ($container->privates['App\\Factory\\ProductFactory'] ??= new \App\Factory\ProductFactory());
            yield 2 => ($container->privates['App\\Factory\\ShippingDetailsFactory'] ??= new \App\Factory\ShippingDetailsFactory());
            yield 3 => ($container->privates['App\\Factory\\UserFactory'] ?? $container->load('getUserFactoryService'));
        }, 4));
    }
}
