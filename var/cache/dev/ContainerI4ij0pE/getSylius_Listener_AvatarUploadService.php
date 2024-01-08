<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_AvatarUploadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.avatar_upload' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\ImageUploadListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/ImageUploadListener.php';

        return $container->services['sylius.listener.avatar_upload'] = new \Sylius\Bundle\CoreBundle\EventListener\ImageUploadListener(($container->services['sylius.image_uploader'] ?? $container->load('getSylius_ImageUploaderService')));
    }
}
