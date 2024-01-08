<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_JsonLogin_NewApiShopUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.json_login.new_api_shop_user' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/JsonLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationFailureHandler.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.authenticator.json_login.new_api_shop_user'])) {
            return $container->privates['security.authenticator.json_login.new_api_shop_user'];
        }
        $b = ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService'));

        if (isset($container->privates['security.authenticator.json_login.new_api_shop_user'])) {
            return $container->privates['security.authenticator.json_login.new_api_shop_user'];
        }
        $c = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['security.authenticator.json_login.new_api_shop_user'])) {
            return $container->privates['security.authenticator.json_login.new_api_shop_user'];
        }
        $d = ($container->services['translator'] ?? $container->getTranslatorService());

        $container->privates['security.authenticator.json_login.new_api_shop_user'] = $instance = new \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator($a, ($container->privates['sylius.shop_user_provider.email_or_name_based'] ?? $container->load('getSylius_ShopUserProvider_EmailOrNameBasedService')), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler($b, $c, [], true), [], 'new_api_shop_user'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler($c, $d), []), ['check_path' => '/api/v2/shop/authentication-token', 'username_path' => 'email', 'password_path' => 'password', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login'], ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));

        if ($container->has('translator')) {
            $instance->setTranslator($d);
        }

        return $instance;
    }
}
