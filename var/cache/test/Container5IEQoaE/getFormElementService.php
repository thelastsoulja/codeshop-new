<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormElementService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Behat\Element\Admin\CatalogPromotion\FormElement' shared service.
     *
     * @return \Sylius\Behat\Element\Admin\CatalogPromotion\FormElement
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Element/Element.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Element/Admin/CatalogPromotion/FormElementInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Element/Admin/CatalogPromotion/FormElement.php';

        return $container->privates['Sylius\\Behat\\Element\\Admin\\CatalogPromotion\\FormElement'] = new \Sylius\Behat\Element\Admin\CatalogPromotion\FormElement(($container->services['behat.mink.default_session'] ?? $container->load('getBehat_Mink_DefaultSessionService')), ($container->services['behat.mink.parameters'] ?? $container->load('getBehat_Mink_ParametersService')));
    }
}