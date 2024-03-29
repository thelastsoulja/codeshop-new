<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMeHandler_AdminService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.remember_me_handler.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/RememberMeHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/AbstractRememberMeHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/SignatureRememberMeHandler.php';

        return $container->privates['security.authenticator.remember_me_handler.admin'] = new \Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler(($container->privates['security.authenticator.remember_me_signature_hasher.admin'] ?? $container->load('getSecurity_Authenticator_RememberMeSignatureHasher_AdminService')), ($container->privates['sylius.admin_user_provider.email_or_name_based'] ?? $container->load('getSylius_AdminUserProvider_EmailOrNameBasedService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ['secret' => $container->getEnv('APP_SECRET'), 'path' => '/'.$container->getEnv('string:resolve:SYLIUS_ADMIN_ROUTING_PATH_NAME'), 'name' => 'APP_ADMIN_REMEMBER_ME', 'lifetime' => 31536000, 'remember_me_parameter' => '_remember_me', 'user_providers' => [], 'catch_exceptions' => true, 'signature_properties' => [0 => 'password'], 'domain' => NULL, 'secure' => false, 'httponly' => true, 'samesite' => NULL, 'always_remember_me' => false], ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
    }
}
