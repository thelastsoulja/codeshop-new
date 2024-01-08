<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_TaxCategoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.tax_category' shared service.
     *
     * @return \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/TaxationBundle/Form/Type/TaxCategoryType.php';

        return $container->services['sylius.form.type.tax_category'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryType('Sylius\\Component\\Taxation\\Model\\TaxCategory', $container->parameters['sylius.form.type.tax_category.validation_groups']);
    }
}