<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OauthUser_TokenUniquenessChecker_PasswordResetService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.oauth_user.token_uniqueness_checker.password_reset' shared service.
     *
     * @return \Sylius\Component\User\Security\Checker\TokenUniquenessChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/User/Security/Checker/UniquenessCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/User/Security/Checker/TokenUniquenessChecker.php';

        return $container->privates['sylius.oauth_user.token_uniqueness_checker.password_reset'] = new \Sylius\Component\User\Security\Checker\TokenUniquenessChecker(($container->services['sylius.repository.oauth_user'] ?? $container->load('getSylius_Repository_OauthUserService')), 'passwordResetToken');
    }
}
