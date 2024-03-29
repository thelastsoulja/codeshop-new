<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfirmResetPasswordValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\ConfirmResetPasswordValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\ConfirmResetPasswordValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/Constraints/ConfirmResetPasswordValidator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\ConfirmResetPasswordValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\ConfirmResetPasswordValidator();
    }
}
