<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductOptionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product_option' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductOptionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Form/Type/ProductOptionType.php';

        return $container->services['sylius.form.type.product_option'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductOptionType('Sylius\\Component\\Product\\Model\\ProductOption', $container->parameters['sylius.form.type.product_option.validation_groups']);
    }
}
