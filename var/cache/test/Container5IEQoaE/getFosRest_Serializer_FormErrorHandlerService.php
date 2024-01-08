<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Serializer_FormErrorHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'fos_rest.serializer.form_error_handler' shared service.
     *
     * @return \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Serializer/Normalizer/FormErrorHandler.php';

        return $container->privates['fos_rest.serializer.form_error_handler'] = new \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler(($container->privates['fos_rest.serializer.form_error_handler.inner'] ?? $container->load('getFosRest_Serializer_FormErrorHandler_InnerService')));
    }
}
