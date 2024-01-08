<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxCategoryRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\TaxationBundle\Doctrine\ORM\TaxCategoryRepository' shared service.
     *
     * @return \Sylius\Bundle\TaxationBundle\Doctrine\ORM\TaxCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Taxation/Repository/TaxCategoryRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/TaxationBundle/Doctrine/ORM/TaxCategoryRepository.php';

        return $container->privates['Sylius\\Bundle\\TaxationBundle\\Doctrine\\ORM\\TaxCategoryRepository'] = $container->get('sylius.repository.tax_category');
    }
}
