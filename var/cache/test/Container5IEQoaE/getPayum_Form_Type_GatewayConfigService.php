<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Form_Type_GatewayConfigService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'payum.form.type.gateway_config' shared service.
     *
     * @return \Payum\Core\Bridge\Symfony\Form\Type\GatewayConfigType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/Form/Type/GatewayConfigType.php';

        $a = ($container->services['payum'] ?? $container->load('getPayumService'));

        if (isset($container->services['payum.form.type.gateway_config'])) {
            return $container->services['payum.form.type.gateway_config'];
        }

        return $container->services['payum.form.type.gateway_config'] = new \Payum\Core\Bridge\Symfony\Form\Type\GatewayConfigType($a);
    }
}
