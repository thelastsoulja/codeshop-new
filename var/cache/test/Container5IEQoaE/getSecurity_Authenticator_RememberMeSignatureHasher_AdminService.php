<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMeSignatureHasher_AdminService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.remember_me_signature_hasher.admin' shared service.
     *
     * @return \Symfony\Component\Security\Core\Signature\SignatureHasher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Signature/SignatureHasher.php';

        return $container->privates['security.authenticator.remember_me_signature_hasher.admin'] = new \Symfony\Component\Security\Core\Signature\SignatureHasher(($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()), [0 => 'password'], $container->getEnv('APP_SECRET'), NULL, NULL);
    }
}
