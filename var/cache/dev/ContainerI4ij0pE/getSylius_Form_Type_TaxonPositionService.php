<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_TaxonPositionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.taxon_position' shared service.
     *
     * @return \Sylius\Bundle\TaxonomyBundle\Form\Type\TaxonPositionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/TaxonomyBundle/Form/Type/TaxonPositionType.php';

        return $container->services['sylius.form.type.taxon_position'] = new \Sylius\Bundle\TaxonomyBundle\Form\Type\TaxonPositionType('Sylius\\Component\\Core\\Model\\Taxon', $container->parameters['sylius.form.type.taxon_position.validation_groups']);
    }
}
