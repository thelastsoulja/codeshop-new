<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_ShippingCategoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.shipping_category' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ShippingCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Repository/ShippingCategoryRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ShippingCategoryRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.shipping_category'])) {
            return $container->services['sylius.repository.shipping_category'];
        }

        return $container->services['sylius.repository.shipping_category'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\ShippingCategoryRepository($a, $a->getClassMetadata('Sylius\\Component\\Shipping\\Model\\ShippingCategory'));
    }
}
