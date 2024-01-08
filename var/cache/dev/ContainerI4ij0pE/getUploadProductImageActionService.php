<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploadProductImageActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Controller\UploadProductImageAction' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Controller\UploadProductImageAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Controller/UploadProductImageAction.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Creator/ImageCreatorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Creator/ProductImageCreator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Controller\\UploadProductImageAction'] = new \Sylius\Bundle\ApiBundle\Controller\UploadProductImageAction(new \Sylius\Bundle\ApiBundle\Creator\ProductImageCreator(($container->services['sylius.factory.product_image'] ?? ($container->services['sylius.factory.product_image'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\ProductImage'))), ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->services['sylius.image_uploader'] ?? $container->load('getSylius_ImageUploaderService')), ($container->privates['api_platform.symfony.iri_converter'] ?? $container->getApiPlatform_Symfony_IriConverterService())));
    }
}
