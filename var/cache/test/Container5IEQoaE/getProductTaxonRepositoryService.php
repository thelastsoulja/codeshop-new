<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductTaxonRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductTaxonRepository' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductTaxonRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Repository/ProductTaxonRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ProductTaxonRepository.php';

        return $container->privates['Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ProductTaxonRepository'] = $container->get('sylius.repository.product_taxon');
    }
}
