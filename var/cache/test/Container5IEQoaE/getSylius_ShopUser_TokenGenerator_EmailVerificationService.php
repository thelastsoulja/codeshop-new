<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ShopUser_TokenGenerator_EmailVerificationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.shop_user.token_generator.email_verification' shared service.
     *
     * @return \Sylius\Component\User\Security\Generator\UniqueTokenGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/User/Security/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/User/Security/Generator/UniqueTokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGenerator.php';

        return $container->services['sylius.shop_user.token_generator.email_verification'] = new \Sylius\Component\User\Security\Generator\UniqueTokenGenerator(($container->services['sylius.random_generator'] ?? ($container->services['sylius.random_generator'] = new \Sylius\Component\Resource\Generator\RandomnessGenerator())), ($container->privates['sylius.shop_user.token_uniqueness_checker.email_verification'] ?? $container->load('getSylius_ShopUser_TokenUniquenessChecker_EmailVerificationService')), 16);
    }
}
