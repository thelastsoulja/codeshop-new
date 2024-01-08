<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Hook_SessionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.hook.session' shared service.
     *
     * @return \Sylius\Behat\Context\Hook\SessionContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Hook/SessionContext.php';

        return $container->services['sylius.behat.context.hook.session'] = new \Sylius\Behat\Context\Hook\SessionContext(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['session.factory'] ?? $container->load('getSession_FactoryService')));
    }
}