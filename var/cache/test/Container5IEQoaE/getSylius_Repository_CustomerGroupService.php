<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_CustomerGroupService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.repository.customer_group' shared service.
     *
     * @return \Sylius\Bundle\CustomerBundle\Doctrine\ORM\CustomerGroupRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Customer/Repository/CustomerGroupRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CustomerBundle/Doctrine/ORM/CustomerGroupRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.customer_group'])) {
            return $container->services['sylius.repository.customer_group'];
        }

        return $container->services['sylius.repository.customer_group'] = new \Sylius\Bundle\CustomerBundle\Doctrine\ORM\CustomerGroupRepository($a, $a->getClassMetadata('Sylius\\Component\\Customer\\Model\\CustomerGroup'));
    }
}
