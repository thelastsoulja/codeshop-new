<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_DataTransformer_ProductVariantsToCodesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.data_transformer.product_variants_to_codes' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\DataTransformer\ProductVariantsToCodesTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/DataTransformer/ProductVariantsToCodesTransformer.php';

        return $container->services['sylius.form.type.data_transformer.product_variants_to_codes'] = new \Sylius\Bundle\CoreBundle\Form\DataTransformer\ProductVariantsToCodesTransformer(($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')));
    }
}
