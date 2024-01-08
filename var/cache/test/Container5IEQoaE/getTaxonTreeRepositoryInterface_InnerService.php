<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxonTreeRepositoryInterface_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\TaxonomyBundle\Repository\TaxonTreeRepositoryInterface.inner' shared service.
     *
     * @return \Gedmo\Tree\Entity\Repository\NestedTreeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Tree/RepositoryUtilsInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Tree/RepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Tree/Entity/Repository/AbstractTreeRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Tree/Entity/Repository/NestedTreeRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['Sylius\\Bundle\\TaxonomyBundle\\Repository\\TaxonTreeRepositoryInterface.inner'])) {
            return $container->privates['Sylius\\Bundle\\TaxonomyBundle\\Repository\\TaxonTreeRepositoryInterface.inner'];
        }

        return $container->privates['Sylius\\Bundle\\TaxonomyBundle\\Repository\\TaxonTreeRepositoryInterface.inner'] = new \Gedmo\Tree\Entity\Repository\NestedTreeRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\Taxon'));
    }
}
