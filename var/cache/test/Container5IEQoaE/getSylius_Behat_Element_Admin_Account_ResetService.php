<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Element_Admin_Account_ResetService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.element.admin.account.reset' shared service.
     *
     * @return \Sylius\Behat\Element\Admin\Account\ResetElement
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Element/Element.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Element/Admin/Account/ResetElementInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Element/Admin/Account/ResetElement.php';

        return $container->privates['sylius.behat.element.admin.account.reset'] = new \Sylius\Behat\Element\Admin\Account\ResetElement(($container->services['behat.mink.default_session'] ?? $container->load('getBehat_Mink_DefaultSessionService')), ($container->services['behat.mink.parameters'] ?? $container->load('getBehat_Mink_ParametersService')));
    }
}
