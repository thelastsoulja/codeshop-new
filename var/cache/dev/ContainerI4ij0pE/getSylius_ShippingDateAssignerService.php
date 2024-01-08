<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ShippingDateAssignerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.shipping_date_assigner' shared service.
     *
     * @return \Sylius\Bundle\ShippingBundle\Assigner\ShippingDateAssigner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShippingBundle/Assigner/ShippingDateAssignerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShippingBundle/Assigner/ShippingDateAssigner.php';

        return $container->services['sylius.shipping_date_assigner'] = new \Sylius\Bundle\ShippingBundle\Assigner\ShippingDateAssigner(($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] ?? ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] = new \Sylius\Calendar\Provider\Calendar())));
    }
}
