<?php

namespace ContainerPDK5lPe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_CreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.create' shared service.
     *
     * @return \ApiPlatform\State\CreateProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/CreateProvider.php';

        $a = ($container->privates['api_platform.state_provider.locator'] ?? $container->getApiPlatform_StateProvider_LocatorService());

        if (isset($container->privates['api_platform.state_provider.create'])) {
            return $container->privates['api_platform.state_provider.create'];
        }
        $b = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService());

        if (isset($container->privates['api_platform.state_provider.create'])) {
            return $container->privates['api_platform.state_provider.create'];
        }

        return $container->privates['api_platform.state_provider.create'] = new \ApiPlatform\State\CreateProvider($a, $b);
    }
}
