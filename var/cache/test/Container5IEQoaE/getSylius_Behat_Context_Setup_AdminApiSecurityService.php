<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Setup_AdminApiSecurityService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.setup.admin_api_security' shared service.
     *
     * @return \Sylius\Behat\Context\Setup\AdminSecurityContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Setup/AdminSecurityContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.setup.admin_api_security'] = new \Sylius\Behat\Context\Setup\AdminSecurityContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->services['sylius.behat.api_security'] ?? $container->load('getSylius_Behat_ApiSecurityService')), ($container->services['sylius.fixture.example_factory.admin_user'] ?? $container->load('getSylius_Fixture_ExampleFactory_AdminUserService')), ($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService')));
    }
}