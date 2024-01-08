<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\PromotionBundle\Doctrine\ORM\CatalogPromotionRepository' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Doctrine\ORM\CatalogPromotionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Repository/CatalogPromotionRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Doctrine/ORM/CatalogPromotionRepository.php';

        return $container->privates['Sylius\\Bundle\\PromotionBundle\\Doctrine\\ORM\\CatalogPromotionRepository'] = $container->get('sylius.repository.catalog_promotion');
    }
}
