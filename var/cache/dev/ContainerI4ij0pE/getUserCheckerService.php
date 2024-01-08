<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'SyliusLabs\Polyfill\Symfony\Security\Core\User\UserChecker' shared service.
     *
     * @return \SyliusLabs\Polyfill\Symfony\Security\Core\User\UserChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius-labs/polyfill-symfony-security/src/Core/User/UserChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/InMemoryUserChecker.php';

        return $container->privates['SyliusLabs\\Polyfill\\Symfony\\Security\\Core\\User\\UserChecker'] = new \SyliusLabs\Polyfill\Symfony\Security\Core\User\UserChecker(new \Symfony\Component\Security\Core\User\InMemoryUserChecker());
    }
}
