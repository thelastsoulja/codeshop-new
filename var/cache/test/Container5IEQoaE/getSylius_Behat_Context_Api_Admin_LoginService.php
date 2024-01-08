<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Api_Admin_LoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.api.admin.login' shared service.
     *
     * @return \Sylius\Behat\Context\Api\Admin\LoginContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Api/Admin/LoginContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.api.admin.login'] = new \Sylius\Behat\Context\Api\Admin\LoginContext(($container->privates['sylius.behat.client.admin_api_platform_security_client'] ?? $container->load('getSylius_Behat_Client_AdminApiPlatformSecurityClientService')), ($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())));
    }
}
