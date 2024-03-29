<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Extension_Type_CollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.extension.type.collection' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Extension\CollectionTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Extension/CollectionTypeExtension.php';

        return $container->services['sylius.form.extension.type.collection'] = new \Sylius\Bundle\ResourceBundle\Form\Extension\CollectionTypeExtension();
    }
}
