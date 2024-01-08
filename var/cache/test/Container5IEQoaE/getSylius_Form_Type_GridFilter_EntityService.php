<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_GridFilter_EntityService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.grid_filter.entity' shared service.
     *
     * @return \Sylius\Bundle\GridBundle\Form\Type\Filter\EntityFilterType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Bundle/Form/Type/Filter/EntityFilterType.php';

        return $container->services['sylius.form.type.grid_filter.entity'] = new \Sylius\Bundle\GridBundle\Form\Type\Filter\EntityFilterType();
    }
}
