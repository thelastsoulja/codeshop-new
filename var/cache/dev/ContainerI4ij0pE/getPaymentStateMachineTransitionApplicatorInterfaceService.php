<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentStateMachineTransitionApplicatorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Applicator\PaymentStateMachineTransitionApplicatorInterface' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Applicator\PaymentStateMachineTransitionApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Applicator/PaymentStateMachineTransitionApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Applicator/PaymentStateMachineTransitionApplicator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Applicator\\PaymentStateMachineTransitionApplicatorInterface'] = new \Sylius\Bundle\ApiBundle\Applicator\PaymentStateMachineTransitionApplicator(($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()));
    }
}
