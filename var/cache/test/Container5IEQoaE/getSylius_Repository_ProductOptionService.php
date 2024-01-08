<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_ProductOptionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.repository.product_option' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductOptionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Product/Repository/ProductOptionRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Doctrine/ORM/ProductOptionRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ProductOptionRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.product_option'])) {
            return $container->services['sylius.repository.product_option'];
        }

        return $container->services['sylius.repository.product_option'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductOptionRepository($a, $a->getClassMetadata('Sylius\\Component\\Product\\Model\\ProductOption'));
    }
}
