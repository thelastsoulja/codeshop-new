<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_PromotionTranslationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.promotion_translation' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.promotion_translation'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Promotion\\Model\\PromotionTranslation');
    }
}
