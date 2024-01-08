<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductAssociationRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductAssociationRepository' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductAssociationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Repository/ProductAssociationRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ProductAssociationRepository.php';

        return $container->privates['Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductAssociationRepository'] = $container->get('sylius.repository.product_association');
    }
}
