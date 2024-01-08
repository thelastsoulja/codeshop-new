<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionTranslationTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\PromotionBundle\Form\Type\PromotionTranslationType' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Form\Type\PromotionTranslationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Form/Type/PromotionTranslationType.php';

        return $container->services['Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionTranslationType'] = new \Sylius\Bundle\PromotionBundle\Form\Type\PromotionTranslationType('Sylius\\Component\\Promotion\\Model\\PromotionTranslation', $container->parameters['sylius.form.type.promotion_translation.validation_groups']);
    }
}
