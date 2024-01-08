<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_TaxonSlugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.taxon_slug' shared service.
     *
     * @return \Sylius\Bundle\TaxonomyBundle\Controller\TaxonSlugController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/TaxonomyBundle/Controller/TaxonSlugController.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Taxonomy/Generator/TaxonSlugGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Taxonomy/Generator/TaxonSlugGenerator.php';

        return $container->services['sylius.controller.taxon_slug'] = new \Sylius\Bundle\TaxonomyBundle\Controller\TaxonSlugController(($container->services['sylius.generator.taxon_slug'] ?? ($container->services['sylius.generator.taxon_slug'] = new \Sylius\Component\Taxonomy\Generator\TaxonSlugGenerator())), ($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService')), ($container->services['Sylius\\Component\\Taxonomy\\Factory\\TaxonFactoryInterface'] ?? $container->load('getTaxonFactoryInterfaceService')));
    }
}
