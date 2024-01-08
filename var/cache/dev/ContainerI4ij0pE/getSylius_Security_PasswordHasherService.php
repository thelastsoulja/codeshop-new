<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Security_PasswordHasherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.security.password_hasher' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Security\UserPasswordHasher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/User/Security/UserPasswordHasherInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Security/UserPasswordHasher.php';

        return $container->services['sylius.security.password_hasher'] = new \Sylius\Bundle\UserBundle\Security\UserPasswordHasher(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));
    }
}
