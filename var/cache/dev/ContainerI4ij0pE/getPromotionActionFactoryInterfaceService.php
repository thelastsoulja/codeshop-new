<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionActionFactoryInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Core\Factory\PromotionActionFactoryInterface' shared service.
     *
     * @return \Sylius\Component\Core\Factory\PromotionActionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/PromotionActionFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/PromotionActionFactory.php';

        return $container->services['Sylius\\Component\\Core\\Factory\\PromotionActionFactoryInterface'] = new \Sylius\Component\Core\Factory\PromotionActionFactory(new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Promotion\\Model\\PromotionAction'));
    }
}
