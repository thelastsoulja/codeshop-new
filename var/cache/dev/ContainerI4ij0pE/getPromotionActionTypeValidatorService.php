<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionActionTypeValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\PromotionBundle\Validator\PromotionActionTypeValidator' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Validator\PromotionActionTypeValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Validator/PromotionActionTypeValidator.php';

        return $container->services['Sylius\\Bundle\\PromotionBundle\\Validator\\PromotionActionTypeValidator'] = new \Sylius\Bundle\PromotionBundle\Validator\PromotionActionTypeValidator($container->parameters['sylius.promotion_actions']);
    }
}
