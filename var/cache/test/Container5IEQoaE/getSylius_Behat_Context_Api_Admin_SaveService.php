<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Api_Admin_SaveService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.api.admin.save' shared service.
     *
     * @return \Sylius\Behat\Context\Api\Common\SaveContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Api/Common/SaveContext.php';

        return $container->services['sylius.behat.context.api.admin.save'] = new \Sylius\Behat\Context\Api\Common\SaveContext(($container->privates['sylius.behat.api_platform_client.admin'] ?? $container->load('getSylius_Behat_ApiPlatformClient_AdminService')));
    }
}