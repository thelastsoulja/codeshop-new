<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_ProductVariantService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.product_variant' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductVariantRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Product/Repository/ProductVariantRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Doctrine/ORM/ProductVariantRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Repository/ProductVariantRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ProductVariantRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.product_variant'])) {
            return $container->services['sylius.repository.product_variant'];
        }

        return $container->services['sylius.repository.product_variant'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductVariantRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\ProductVariant'));
    }
}
