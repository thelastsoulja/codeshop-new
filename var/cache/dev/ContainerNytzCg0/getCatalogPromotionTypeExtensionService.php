<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionTypeExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\Form\Extension\CatalogPromotionTypeExtension' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Extension\CatalogPromotionTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Extension/CatalogPromotionTypeExtension.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\Form\\Extension\\CatalogPromotionTypeExtension'] = new \Sylius\Bundle\CoreBundle\Form\Extension\CatalogPromotionTypeExtension();
    }
}
