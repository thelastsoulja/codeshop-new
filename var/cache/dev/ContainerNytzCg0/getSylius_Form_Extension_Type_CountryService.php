<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Extension_Type_CountryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.extension.type.country' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Extension\CountryTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Extension/CountryTypeExtension.php';

        return $container->services['sylius.form.extension.type.country'] = new \Sylius\Bundle\CoreBundle\Form\Extension\CountryTypeExtension(($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')));
    }
}
