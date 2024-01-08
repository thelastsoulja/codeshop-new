<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ShippingMethodTranslationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.shipping_method_translation' shared service.
     *
     * @return \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodTranslationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShippingBundle/Form/Type/ShippingMethodTranslationType.php';

        return $container->services['sylius.form.type.shipping_method_translation'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodTranslationType('Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation', $container->parameters['sylius.form.type.shipping_method_translation.validation_groups']);
    }
}
