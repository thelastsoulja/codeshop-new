<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderNumberAssignerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_number_assigner' shared service.
     *
     * @return \Sylius\Bundle\OrderBundle\NumberAssigner\OrderNumberAssigner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/OrderBundle/NumberAssigner/OrderNumberAssignerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/OrderBundle/NumberAssigner/OrderNumberAssigner.php';

        $a = ($container->services['sylius.sequential_order_number_generator'] ?? $container->load('getSylius_SequentialOrderNumberGeneratorService'));

        if (isset($container->services['sylius.order_number_assigner'])) {
            return $container->services['sylius.order_number_assigner'];
        }

        return $container->services['sylius.order_number_assigner'] = new \Sylius\Bundle\OrderBundle\NumberAssigner\OrderNumberAssigner($a);
    }
}