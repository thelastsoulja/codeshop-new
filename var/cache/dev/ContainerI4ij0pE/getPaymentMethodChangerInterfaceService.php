<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentMethodChangerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ApiBundle\Changer\PaymentMethodChangerInterface' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Changer\PaymentMethodChanger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Changer/PaymentMethodChangerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Changer/PaymentMethodChanger.php';

        return $container->privates['Sylius\\Bundle\\ApiBundle\\Changer\\PaymentMethodChangerInterface'] = new \Sylius\Bundle\ApiBundle\Changer\PaymentMethodChanger(($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')), ($container->services['sylius.repository.payment_method'] ?? $container->getSylius_Repository_PaymentMethodService()));
    }
}
