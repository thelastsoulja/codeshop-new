<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddProductReviewHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Catalog\AddProductReviewHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Catalog\AddProductReviewHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Catalog/AddProductReviewHandler.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Catalog\\AddProductReviewHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Catalog\AddProductReviewHandler(($container->services['sylius.factory.product_review'] ?? $container->load('getSylius_Factory_ProductReviewService')), ($container->services['sylius.repository.product_review'] ?? $container->load('getSylius_Repository_ProductReviewService')), ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->services['Sylius\\Bundle\\CoreBundle\\Resolver\\CustomerResolverInterface'] ?? $container->load('getCustomerResolverInterfaceService')));
    }
}
