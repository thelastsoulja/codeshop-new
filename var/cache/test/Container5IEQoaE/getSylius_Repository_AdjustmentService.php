<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_AdjustmentService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.repository.adjustment' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.adjustment'])) {
            return $container->services['sylius.repository.adjustment'];
        }

        return $container->services['sylius.repository.adjustment'] = $a->getRepository('Sylius\\Component\\Core\\Model\\Adjustment');
    }
}
