<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PromotionAction_CollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.promotion_action.collection' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Form\Type\PromotionActionCollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Form/Type/Core/AbstractConfigurationCollectionType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Form/Type/PromotionActionCollectionType.php';

        return $container->services['sylius.form.type.promotion_action.collection'] = new \Sylius\Bundle\PromotionBundle\Form\Type\PromotionActionCollectionType(($container->services['sylius.registry_promotion_action'] ?? $container->load('getSylius_RegistryPromotionActionService')));
    }
}
