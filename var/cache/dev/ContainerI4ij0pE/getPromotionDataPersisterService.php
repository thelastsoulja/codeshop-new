<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataPersister\PromotionDataPersister' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataPersister\PromotionDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/DataPersister/PromotionDataPersister.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataPersister\\PromotionDataPersister'] = new \Sylius\Bundle\ApiBundle\DataPersister\PromotionDataPersister(($container->privates['api_platform.doctrine.orm.data_persister'] ?? $container->load('getApiPlatform_Doctrine_Orm_DataPersisterService')));
    }
}
