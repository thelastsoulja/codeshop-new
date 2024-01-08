<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_SuccessHandler_NewApiShopUser_JsonLoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authentication.success_handler.new_api_shop_user.json_login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationSuccessHandler.php';

        $a = ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService'));

        if (isset($container->privates['security.authentication.success_handler.new_api_shop_user.json_login'])) {
            return $container->privates['security.authentication.success_handler.new_api_shop_user.json_login'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['security.authentication.success_handler.new_api_shop_user.json_login'])) {
            return $container->privates['security.authentication.success_handler.new_api_shop_user.json_login'];
        }

        return $container->privates['security.authentication.success_handler.new_api_shop_user.json_login'] = new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler($a, $b, [], true), [], 'new_api_shop_user');
    }
}
