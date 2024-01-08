<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Extension_Type_ProductService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.extension.type.product' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Extension\ProductTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Extension/ProductTypeExtension.php';

        return $container->services['sylius.form.extension.type.product'] = new \Sylius\Bundle\CoreBundle\Form\Extension\ProductTypeExtension();
    }
}
