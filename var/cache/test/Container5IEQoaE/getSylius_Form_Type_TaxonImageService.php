<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_TaxonImageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.taxon_image' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Taxon\TaxonImageType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Type/ImageType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Type/Taxon/TaxonImageType.php';

        return $container->services['sylius.form.type.taxon_image'] = new \Sylius\Bundle\CoreBundle\Form\Type\Taxon\TaxonImageType('Sylius\\Component\\Core\\Model\\TaxonImage');
    }
}
