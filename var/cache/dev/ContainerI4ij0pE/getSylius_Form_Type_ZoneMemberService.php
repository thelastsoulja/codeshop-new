<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ZoneMemberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.zone_member' shared service.
     *
     * @return \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AddressingBundle/Form/Type/ZoneMemberType.php';

        return $container->services['sylius.form.type.zone_member'] = new \Sylius\Bundle\AddressingBundle\Form\Type\ZoneMemberType('Sylius\\Component\\Addressing\\Model\\ZoneMember', $container->parameters['sylius.form.type.zone_member.validation_groups']);
    }
}
