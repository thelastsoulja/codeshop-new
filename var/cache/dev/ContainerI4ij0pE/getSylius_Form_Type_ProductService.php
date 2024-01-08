<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Form/Type/ProductType.php';

        return $container->services['sylius.form.type.product'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductType('Sylius\\Component\\Core\\Model\\Product', $container->parameters['sylius.form.type.product.validation_groups'], ($container->services['Sylius\\Component\\Product\\Resolver\\ProductVariantResolverInterface'] ?? $container->getProductVariantResolverInterfaceService()), ($container->services['sylius.factory.product_attribute_value'] ?? ($container->services['sylius.factory.product_attribute_value'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Product\\Model\\ProductAttributeValue'))), ($container->services['sylius.translation_locale_provider.admin'] ?? $container->getSylius_TranslationLocaleProvider_AdminService()));
    }
}
