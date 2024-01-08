<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.default' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Type\DefaultResourceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/DefaultResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Builder/DefaultFormBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Doctrine/ORM/Form/Builder/DefaultFormBuilder.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.form.type.default'])) {
            return $container->services['sylius.form.type.default'];
        }
        $b = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Bundle\\ResourceBundle\\Form\\Builder\\DefaultFormBuilderInterface', 'form builder');
        $b->register('doctrine/orm', new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\Form\Builder\DefaultFormBuilder($a));

        return $container->services['sylius.form.type.default'] = new \Sylius\Bundle\ResourceBundle\Form\Type\DefaultResourceType(($container->privates['sylius.resource_registry'] ?? $container->getSylius_ResourceRegistryService()), $b);
    }
}
