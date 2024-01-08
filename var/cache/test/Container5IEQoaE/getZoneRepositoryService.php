<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getZoneRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\AddressingBundle\Repository\ZoneRepository' shared service.
     *
     * @return \Sylius\Bundle\AddressingBundle\Repository\ZoneRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Sylius\\Bundle\\AddressingBundle\\Repository\\ZoneRepository'] = $container->get('sylius.repository.zone');
    }
}
