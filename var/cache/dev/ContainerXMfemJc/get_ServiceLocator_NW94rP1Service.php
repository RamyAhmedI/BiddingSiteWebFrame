<?php

namespace ContainerXMfemJc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NW94rP1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NW94rP1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NW94rP1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'makeComment' => ['privates', '.errored..service_locator.NW94rP1.App\\Entity\\MakeComment', NULL, 'Cannot autowire service ".service_locator.NW94rP1": it needs an instance of "App\\Entity\\MakeComment" but this type has been excluded in "config/services.yaml".'],
        ], [
            'makeComment' => 'App\\Entity\\MakeComment',
        ]);
    }
}
