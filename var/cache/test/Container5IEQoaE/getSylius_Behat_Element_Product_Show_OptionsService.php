<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Element_Product_Show_OptionsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.element.product.show.options' shared service.
     *
     * @return \Sylius\Behat\Element\Product\ShowPage\OptionsElement
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Element/Element.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Element/Product/ShowPage/OptionsElementInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Element/Product/ShowPage/OptionsElement.php';

        return $container->privates['sylius.behat.element.product.show.options'] = new \Sylius\Behat\Element\Product\ShowPage\OptionsElement(($container->services['behat.mink.default_session'] ?? $container->load('getBehat_Mink_DefaultSessionService')), ($container->services['behat.mink.parameters'] ?? $container->load('getBehat_Mink_ParametersService')));
    }
}
