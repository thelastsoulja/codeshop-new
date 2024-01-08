<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShipmentRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\Doctrine\ORM\ShipmentRepository' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ShipmentRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShipmentRepository'] = $container->get('sylius.repository.shipment');
    }
}
