<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerGroupRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CustomerBundle\Doctrine\ORM\CustomerGroupRepository' shared service.
     *
     * @return \Sylius\Bundle\CustomerBundle\Doctrine\ORM\CustomerGroupRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Customer/Repository/CustomerGroupRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CustomerBundle/Doctrine/ORM/CustomerGroupRepository.php';

        return $container->privates['Sylius\\Bundle\\CustomerBundle\\Doctrine\\ORM\\CustomerGroupRepository'] = $container->get('sylius.repository.customer_group');
    }
}
