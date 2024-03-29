<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_PromotionCouponOrderFilterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.api.promotion_coupon_order_filter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/Filter/OrderFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/Filter/OrderFilterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/OrderFilter.php';

        return $container->services['sylius.api.promotion_coupon_order_filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), NULL, 'order', ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ['code' => '', 'expiresAt' => '', 'usageLimit' => '', 'perCustomerUsageLimit' => '', 'used' => ''], ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()));
    }
}
