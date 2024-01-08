<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_BrowserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.browser' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\BrowserContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/BrowserContext.php';

        return $container->services['sylius.behat.context.ui.browser'] = new \Sylius\Behat\Context\Ui\BrowserContext(($container->privates['sylius.behat.element.browser'] ?? $container->load('getSylius_Behat_Element_BrowserService')));
    }
}