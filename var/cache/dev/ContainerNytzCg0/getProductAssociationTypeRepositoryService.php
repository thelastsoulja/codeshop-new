<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductAssociationTypeRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ProductBundle\Doctrine\ORM\ProductAssociationTypeRepository' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Doctrine\ORM\ProductAssociationTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Product/Repository/ProductAssociationTypeRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Doctrine/ORM/ProductAssociationTypeRepository.php';

        return $container->privates['Sylius\\Bundle\\ProductBundle\\Doctrine\\ORM\\ProductAssociationTypeRepository'] = $container->get('sylius.repository.product_association_type');
    }
}