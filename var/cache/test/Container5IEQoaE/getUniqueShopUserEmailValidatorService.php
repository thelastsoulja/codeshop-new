<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUniqueShopUserEmailValidatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\UniqueShopUserEmailValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\UniqueShopUserEmailValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/Constraints/UniqueShopUserEmailValidator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\UniqueShopUserEmailValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\UniqueShopUserEmailValidator(($container->services['sylius.canonicalizer'] ?? ($container->services['sylius.canonicalizer'] = new \Sylius\Component\User\Canonicalizer\Canonicalizer())), ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')));
    }
}
