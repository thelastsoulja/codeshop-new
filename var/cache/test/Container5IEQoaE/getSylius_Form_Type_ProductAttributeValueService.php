<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductAttributeValueService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product_attribute_value' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductAttributeValueType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AttributeBundle/Form/Type/AttributeValueType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Form/Type/ProductAttributeValueType.php';

        return $container->services['sylius.form.type.product_attribute_value'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductAttributeValueType('Sylius\\Component\\Product\\Model\\ProductAttributeValue', $container->parameters['sylius.form.type.product_attribute_value.validation_groups'], 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeChoiceType', ($container->services['sylius.repository.product_attribute'] ?? $container->load('getSylius_Repository_ProductAttributeService')), ($container->services['sylius.repository.locale'] ?? $container->getSylius_Repository_LocaleService()), ($container->services['sylius.form_registry.attribute_type'] ?? $container->load('getSylius_FormRegistry_AttributeTypeService')));
    }
}
