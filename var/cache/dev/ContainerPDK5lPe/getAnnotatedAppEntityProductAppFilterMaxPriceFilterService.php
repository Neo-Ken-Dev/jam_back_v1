<?php

namespace ContainerPDK5lPe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotatedAppEntityProductAppFilterMaxPriceFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotated_app_entity_product_app_filter_max_price_filter' shared autowired service.
     *
     * @return \App\Filter\MaxPriceFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/src/Filter/MaxPriceFilter.php';

        return $container->privates['annotated_app_entity_product_app_filter_max_price_filter'] = new \App\Filter\MaxPriceFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
