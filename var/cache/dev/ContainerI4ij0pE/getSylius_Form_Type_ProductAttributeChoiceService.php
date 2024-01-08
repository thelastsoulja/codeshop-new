<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductAttributeChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product_attribute_choice' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductAttributeChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AttributeBundle/Form/Type/AttributeChoiceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Form/Type/ProductAttributeChoiceType.php';

        $a = ($container->services['sylius.repository.product_attribute'] ?? $container->load('getSylius_Repository_ProductAttributeService'));

        if (isset($container->services['sylius.form.type.product_attribute_choice'])) {
            return $container->services['sylius.form.type.product_attribute_choice'];
        }

        return $container->services['sylius.form.type.product_attribute_choice'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductAttributeChoiceType($a);
    }
}
