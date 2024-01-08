<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Caller_Chainable_MethodCallWithReferenceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.caller.chainable.method_call_with_reference' shared service.
     *
     * @return \Nelmio\Alice\Generator\Caller\Chainable\MethodCallWithReferenceProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/ChainableCallProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/MethodCallWithReferenceProcessor.php';

        return $container->privates['nelmio_alice.generator.caller.chainable.method_call_with_reference'] = new \Nelmio\Alice\Generator\Caller\Chainable\MethodCallWithReferenceProcessor();
    }
}
