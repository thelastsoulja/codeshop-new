<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_GatewayConfigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.gateway_config' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.gateway_config'])) {
            return $container->services['sylius.repository.gateway_config'];
        }

        return $container->services['sylius.repository.gateway_config'] = $a->getRepository('Sylius\\Bundle\\PayumBundle\\Model\\GatewayConfig');
    }
}
