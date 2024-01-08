<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxonTreeRepositoryInterfaceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\TaxonomyBundle\Repository\TaxonTreeRepositoryInterface' shared service.
     *
     * @return \Sylius\Bundle\TaxonomyBundle\Repository\TaxonTreeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/TaxonomyBundle/Repository/TaxonTreeRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/TaxonomyBundle/Repository/TaxonTreeRepository.php';

        $a = ($container->privates['Sylius\\Bundle\\TaxonomyBundle\\Repository\\TaxonTreeRepositoryInterface.inner'] ?? $container->load('getTaxonTreeRepositoryInterface_InnerService'));

        if (isset($container->privates['Sylius\\Bundle\\TaxonomyBundle\\Repository\\TaxonTreeRepositoryInterface'])) {
            return $container->privates['Sylius\\Bundle\\TaxonomyBundle\\Repository\\TaxonTreeRepositoryInterface'];
        }

        return $container->privates['Sylius\\Bundle\\TaxonomyBundle\\Repository\\TaxonTreeRepositoryInterface'] = new \Sylius\Bundle\TaxonomyBundle\Repository\TaxonTreeRepository($a);
    }
}
