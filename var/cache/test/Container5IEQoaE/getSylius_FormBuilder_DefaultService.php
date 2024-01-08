<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_FormBuilder_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.form_builder.default' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Doctrine\ORM\Form\Builder\DefaultFormBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Builder/DefaultFormBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Doctrine/ORM/Form/Builder/DefaultFormBuilder.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['sylius.form_builder.default'])) {
            return $container->privates['sylius.form_builder.default'];
        }

        return $container->privates['sylius.form_builder.default'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\Form\Builder\DefaultFormBuilder($a);
    }
}
