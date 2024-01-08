<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploadProductImageActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Controller\UploadProductImageAction' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Controller\UploadProductImageAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Controller/UploadProductImageAction.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Controller\\UploadProductImageAction'] = new \Sylius\Bundle\ApiBundle\Controller\UploadProductImageAction(($container->privates['Sylius\\Bundle\\ApiBundle\\Creator\\ProductImageCreator'] ?? $container->load('getProductImageCreatorService')));
    }
}
