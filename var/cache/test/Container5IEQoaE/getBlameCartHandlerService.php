<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlameCartHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Cart\BlameCartHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Cart\BlameCartHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Cart/BlameCartHandler.php';

        $a = ($container->services['sylius.order_processing.order_processor'] ?? $container->load('getSylius_OrderProcessing_OrderProcessorService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\BlameCartHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\BlameCartHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\BlameCartHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Cart\BlameCartHandler(($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')), ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), $a);
    }
}
