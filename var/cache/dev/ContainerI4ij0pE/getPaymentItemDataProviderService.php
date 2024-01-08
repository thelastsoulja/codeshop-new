<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentItemDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\DataProvider\PaymentItemDataProvider' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\PaymentItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/DataProvider/PaymentItemDataProvider.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\DataProvider\\PaymentItemDataProvider'] = new \Sylius\Bundle\ApiBundle\DataProvider\PaymentItemDataProvider(($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')), ($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? $container->getUserContextInterfaceService()));
    }
}
