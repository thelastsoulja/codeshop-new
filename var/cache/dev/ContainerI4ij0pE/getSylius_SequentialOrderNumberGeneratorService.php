<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_SequentialOrderNumberGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.sequential_order_number_generator' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Order\NumberGenerator\SequentialOrderNumberGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/OrderBundle/NumberGenerator/OrderNumberGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Order/NumberGenerator/SequentialOrderNumberGenerator.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.sequential_order_number_generator'])) {
            return $container->services['sylius.sequential_order_number_generator'];
        }

        return $container->services['sylius.sequential_order_number_generator'] = new \Sylius\Bundle\CoreBundle\Order\NumberGenerator\SequentialOrderNumberGenerator(($container->services['sylius.repository.order_sequence'] ?? $container->load('getSylius_Repository_OrderSequenceService')), ($container->services['sylius.factory.order_sequence'] ?? ($container->services['sylius.factory.order_sequence'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\OrderSequence'))), $a);
    }
}
