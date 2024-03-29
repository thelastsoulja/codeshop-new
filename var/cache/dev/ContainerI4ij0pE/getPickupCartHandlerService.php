<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPickupCartHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Cart\PickupCartHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Cart\PickupCartHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Cart/PickupCartHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGenerator.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\PickupCartHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\PickupCartHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\PickupCartHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Cart\PickupCartHandler(($container->services['sylius.custom_factory.order'] ?? $container->getSylius_CustomFactory_OrderService()), ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()), $a, ($container->services['sylius.random_generator'] ?? ($container->services['sylius.random_generator'] = new \Sylius\Component\Resource\Generator\RandomnessGenerator())), ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')));
    }
}
