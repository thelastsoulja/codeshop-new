<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CustomerGroupCodeChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.customer_group_code_choice' shared service.
     *
     * @return \Sylius\Bundle\CustomerBundle\Form\Type\CustomerGroupCodeChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CustomerBundle/Form/Type/CustomerGroupCodeChoiceType.php';

        return $container->services['sylius.form.type.customer_group_code_choice'] = new \Sylius\Bundle\CustomerBundle\Form\Type\CustomerGroupCodeChoiceType(($container->services['sylius.repository.customer_group'] ?? $container->load('getSylius_Repository_CustomerGroupService')));
    }
}
