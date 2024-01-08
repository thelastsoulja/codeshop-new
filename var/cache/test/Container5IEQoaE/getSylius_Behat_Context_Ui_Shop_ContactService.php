<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Shop_ContactService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.shop.contact' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Shop\ContactContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Shop/ContactContext.php';

        return $container->services['sylius.behat.context.ui.shop.contact'] = new \Sylius\Behat\Context\Ui\Shop\ContactContext(($container->privates['sylius.behat.page.shop.contact'] ?? $container->load('getSylius_Behat_Page_Shop_ContactService')), ($container->privates['sylius.behat.notification_checker'] ?? $container->load('getSylius_Behat_NotificationCheckerService')));
    }
}