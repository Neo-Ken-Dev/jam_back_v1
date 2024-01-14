<?php

namespace ContainerBJWQBxl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMinPriceFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Filter\MinPriceFilter' shared autowired service.
     *
     * @return \App\Filter\MinPriceFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/src/Filter/MinPriceFilter.php';

        return $container->privates['App\\Filter\\MinPriceFilter'] = new \App\Filter\MinPriceFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), 'price');
    }
}
