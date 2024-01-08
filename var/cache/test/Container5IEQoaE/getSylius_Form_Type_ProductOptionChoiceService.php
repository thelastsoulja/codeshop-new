<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ProductOptionChoiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.product_option_choice' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Form\Type\ProductOptionChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Form/Type/ProductOptionChoiceType.php';

        $a = ($container->services['sylius.repository.product_option'] ?? $container->load('getSylius_Repository_ProductOptionService'));

        if (isset($container->services['sylius.form.type.product_option_choice'])) {
            return $container->services['sylius.form.type.product_option_choice'];
        }

        return $container->services['sylius.form.type.product_option_choice'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductOptionChoiceType($a);
    }
}
