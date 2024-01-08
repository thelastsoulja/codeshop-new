<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRequestPasswordResetTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\AdminBundle\Form\RequestPasswordResetType' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Form\RequestPasswordResetType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Form/RequestPasswordResetType.php';

        return $container->privates['Sylius\\Bundle\\AdminBundle\\Form\\RequestPasswordResetType'] = new \Sylius\Bundle\AdminBundle\Form\RequestPasswordResetType($container->parameters['sylius.form.type.admin.password_reset_request.validation_groups']);
    }
}
