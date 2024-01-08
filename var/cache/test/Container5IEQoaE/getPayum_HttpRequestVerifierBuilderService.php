<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_HttpRequestVerifierBuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'payum.http_request_verifier_builder' shared service.
     *
     * @return \Payum\Core\Bridge\Symfony\Builder\HttpRequestVerifierBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/Builder/HttpRequestVerifierBuilder.php';

        return $container->privates['payum.http_request_verifier_builder'] = new \Payum\Core\Bridge\Symfony\Builder\HttpRequestVerifierBuilder();
    }
}
