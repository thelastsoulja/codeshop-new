<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_NotificationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.notification' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\NotificationContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/NotificationContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Helper/JavaScriptTestHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Helper/JavaScriptTestHelper.php';

        return $container->services['sylius.behat.context.ui.admin.notification'] = new \Sylius\Behat\Context\Ui\Admin\NotificationContext(($container->privates['sylius.behat.notification_checker'] ?? $container->load('getSylius_Behat_NotificationCheckerService')), ($container->services['sylius.behat.java_script_test_helper'] ?? ($container->services['sylius.behat.java_script_test_helper'] = new \Sylius\Behat\Service\Helper\JavaScriptTestHelper(1000000, 7))));
    }
}
