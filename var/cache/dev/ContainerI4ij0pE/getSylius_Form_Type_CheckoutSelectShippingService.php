<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CheckoutSelectShippingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.checkout_select_shipping' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Checkout\SelectShippingType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Type/Checkout/SelectShippingType.php';

        return $container->services['sylius.form.type.checkout_select_shipping'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\SelectShippingType('Sylius\\Component\\Core\\Model\\Order', $container->parameters['sylius.form.type.checkout_select_shipping.validation_groups']);
    }
}
