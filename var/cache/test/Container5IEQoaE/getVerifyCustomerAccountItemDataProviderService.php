<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVerifyCustomerAccountItemDataProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataProvider\VerifyCustomerAccountItemDataProvider' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\VerifyCustomerAccountItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/DataProvider/VerifyCustomerAccountItemDataProvider.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataProvider\\VerifyCustomerAccountItemDataProvider'] = new \Sylius\Bundle\ApiBundle\DataProvider\VerifyCustomerAccountItemDataProvider();
    }
}
