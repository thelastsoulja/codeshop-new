<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderShopUserItemExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Doctrine\QueryItemExtension\OrderShopUserItemExtension' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Doctrine\QueryItemExtension\OrderShopUserItemExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Doctrine/QueryItemExtension/OrderShopUserItemExtension.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryItemExtension\\OrderShopUserItemExtension'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryItemExtension\OrderShopUserItemExtension(($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? $container->getUserContextInterfaceService()), $container->parameters['sylius.api.doctrine_extension.order_shop_user_item.filter_cart.allowed_non_get_operations']);
    }
}
