<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\AdminBundle\Action\Account\ResetPasswordAction' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Action\Account\ResetPasswordAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Action/Account/ResetPasswordAction.php';

        return $container->services['Sylius\\Bundle\\AdminBundle\\Action\\Account\\ResetPasswordAction'] = new \Sylius\Bundle\AdminBundle\Action\Account\ResetPasswordAction(($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()), ($container->services['Sylius\\Bundle\\CoreBundle\\MessageDispatcher\\ResetPasswordDispatcher'] ?? $container->load('getResetPasswordDispatcherService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}
