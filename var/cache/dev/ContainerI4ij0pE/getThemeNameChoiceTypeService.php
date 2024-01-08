<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getThemeNameChoiceTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ThemeBundle\Form\Type\ThemeNameChoiceType' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Form\Type\ThemeNameChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/theme-bundle/src/Form/Type/ThemeNameChoiceType.php';

        return $container->privates['Sylius\\Bundle\\ThemeBundle\\Form\\Type\\ThemeNameChoiceType'] = new \Sylius\Bundle\ThemeBundle\Form\Type\ThemeNameChoiceType(($container->privates['Sylius\\Bundle\\ThemeBundle\\Repository\\ThemeRepositoryInterface'] ?? $container->getThemeRepositoryInterfaceService()));
    }
}
