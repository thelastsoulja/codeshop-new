<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArchivingShippingMethodApplicatorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Applicator\ArchivingShippingMethodApplicatorInterface' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Applicator\ArchivingShippingMethodApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Applicator/ArchivingShippingMethodApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Applicator/ArchivingShippingMethodApplicator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Applicator\\ArchivingShippingMethodApplicatorInterface'] = new \Sylius\Bundle\ApiBundle\Applicator\ArchivingShippingMethodApplicator(($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] ?? ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] = new \Sylius\Calendar\Provider\Calendar())));
    }
}
