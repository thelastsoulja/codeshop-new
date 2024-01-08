<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Setup_ProductService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.setup.product' shared service.
     *
     * @return \Sylius\Behat\Context\Setup\ProductContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Setup/ProductContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Product/Generator/SlugGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Product/Generator/SlugGenerator.php';

        return $container->services['sylius.behat.context.setup.product'] = new \Sylius\Behat\Context\Setup\ProductContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->services['Sylius\\Component\\Product\\Factory\\ProductFactoryInterface'] ?? $container->load('getProductFactoryInterfaceService')), ($container->services['sylius.factory.product_translation'] ?? ($container->services['sylius.factory.product_translation'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\ProductTranslation'))), ($container->services['Sylius\\Component\\Product\\Factory\\ProductVariantFactoryInterface'] ?? $container->load('getProductVariantFactoryInterfaceService')), ($container->services['sylius.factory.product_variant_translation'] ?? ($container->services['sylius.factory.product_variant_translation'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Product\\Model\\ProductVariantTranslation'))), ($container->services['sylius.factory.channel_pricing'] ?? ($container->services['sylius.factory.channel_pricing'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\ChannelPricing'))), ($container->services['sylius.factory.product_option'] ?? $container->load('getSylius_Factory_ProductOptionService')), ($container->services['sylius.factory.product_option_value'] ?? $container->load('getSylius_Factory_ProductOptionValueService')), ($container->services['sylius.factory.product_image'] ?? ($container->services['sylius.factory.product_image'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\ProductImage'))), ($container->services['sylius.factory.product_taxon'] ?? ($container->services['sylius.factory.product_taxon'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\ProductTaxon'))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.generator.product_variant'] ?? $container->load('getSylius_Generator_ProductVariantService')), ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')), ($container->services['Sylius\\Component\\Product\\Resolver\\ProductVariantResolverInterface'] ?? $container->getProductVariantResolverInterfaceService()), ($container->services['sylius.image_uploader'] ?? $container->load('getSylius_ImageUploaderService')), ($container->services['sylius.generator.slug'] ?? ($container->services['sylius.generator.slug'] = new \Sylius\Component\Product\Generator\SlugGenerator())), ($container->services['behat.mink.parameters'] ?? $container->load('getBehat_Mink_ParametersService')), ($container->privates['debug.traced.sylius.event_bus'] ?? $container->getDebug_Traced_Sylius_EventBusService()), ($container->services['sylius.behat.context.setup.product_taxon'] ?? $container->load('getSylius_Behat_Context_Setup_ProductTaxonService')));
    }
}