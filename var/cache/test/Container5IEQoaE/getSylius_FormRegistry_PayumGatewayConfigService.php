<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_FormRegistry_PayumGatewayConfigService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form_registry.payum_gateway_config' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Registry/FormTypeRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Registry/FormTypeRegistry.php';

        $container->services['sylius.form_registry.payum_gateway_config'] = $instance = new \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry();

        $instance->add('gateway_config', 'paypal_express_checkout', 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\PaypalGatewayConfigurationType');
        $instance->add('gateway_config', 'stripe_checkout', 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\StripeGatewayConfigurationType');

        return $instance;
    }
}
