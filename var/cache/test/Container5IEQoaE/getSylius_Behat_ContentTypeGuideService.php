<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_ContentTypeGuideService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.content_type_guide' shared service.
     *
     * @return \Sylius\Behat\Client\ContentTypeGuide
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Client/ContentTypeGuideInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Client/ContentTypeGuide.php';

        return $container->privates['sylius.behat.content_type_guide'] = new \Sylius\Behat\Client\ContentTypeGuide();
    }
}