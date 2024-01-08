<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CustomFactory_ProductVariant_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.custom_factory.product_variant.inner' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\TranslatableFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Factory/TranslatableFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Factory/TranslatableFactory.php';

        return $container->privates['sylius.custom_factory.product_variant.inner'] = new \Sylius\Component\Resource\Factory\TranslatableFactory(new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\ProductVariant'), ($container->services['sylius.translation_locale_provider.admin'] ?? $container->getSylius_TranslationLocaleProvider_AdminService()));
    }
}
