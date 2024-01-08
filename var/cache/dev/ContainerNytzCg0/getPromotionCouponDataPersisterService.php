<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionCouponDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataPersister\PromotionCouponDataPersister' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataPersister\PromotionCouponDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/DataPersister/PromotionCouponDataPersister.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataPersister\\PromotionCouponDataPersister'] = new \Sylius\Bundle\ApiBundle\DataPersister\PromotionCouponDataPersister(($container->privates['api_platform.doctrine.orm.data_persister'] ?? $container->load('getApiPlatform_Doctrine_Orm_DataPersisterService')));
    }
}
