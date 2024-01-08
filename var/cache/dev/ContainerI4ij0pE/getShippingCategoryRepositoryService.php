<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingCategoryRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\Doctrine\ORM\ShippingCategoryRepository' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ShippingCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Repository/ShippingCategoryRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ShippingCategoryRepository.php';

        return $container->privates['Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingCategoryRepository'] = $container->get('sylius.repository.shipping_category');
    }
}
