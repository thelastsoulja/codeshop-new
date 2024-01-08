<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccountVerificationTokenEligibilityValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\AccountVerificationTokenEligibilityValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\AccountVerificationTokenEligibilityValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/Constraints/AccountVerificationTokenEligibilityValidator.php';

        $a = ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\AccountVerificationTokenEligibilityValidator'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\AccountVerificationTokenEligibilityValidator'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\AccountVerificationTokenEligibilityValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\AccountVerificationTokenEligibilityValidator($a);
    }
}
