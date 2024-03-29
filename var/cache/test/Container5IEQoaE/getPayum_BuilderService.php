<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_BuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'payum.builder' shared service.
     *
     * @return \Payum\Core\PayumBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/PayumBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/Builder/HttpRequestVerifierBuilder.php';

        $container->privates['payum.builder'] = $instance = new \Payum\Core\PayumBuilder();

        $instance->setMainRegistry(($container->services['payum.static_registry'] ?? $container->load('getPayum_StaticRegistryService')));
        $instance->setHttpRequestVerifier(($container->privates['payum.http_request_verifier_builder'] ?? ($container->privates['payum.http_request_verifier_builder'] = new \Payum\Core\Bridge\Symfony\Builder\HttpRequestVerifierBuilder())));
        $instance->setTokenFactory(($container->privates['payum.token_factory_builder'] ?? $container->load('getPayum_TokenFactoryBuilderService')));
        $instance->setTokenStorage(($container->services['payum.security.token_storage'] ?? $container->load('getPayum_Security_TokenStorageService')));
        $instance->setGenericTokenFactoryPaths(['capture' => 'payum_capture_do', 'notify' => 'payum_notify_do', 'authorize' => 'payum_authorize_do', 'refund' => 'payum_refund_do', 'cancel' => 'payum_cancel_do', 'payout' => 'payum_payout_do']);
        $instance->setCoreGatewayFactory(($container->privates['payum.core_gateway_factory_builder'] ?? $container->load('getPayum_CoreGatewayFactoryBuilderService')));
        $instance->addCoreGatewayFactoryConfig(['payum.template.layout' => '@PayumCore\\layout.html.twig', 'payum.template.obtain_credit_card' => '@PayumSymfonyBridge\\obtainCreditCard.html.twig', 'payum.paths' => ['PayumSymfonyBridge' => (\dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/Resources/views')], 'payum.action.get_http_request' => ($container->services['payum.action.get_http_request'] ?? $container->load('getPayum_Action_GetHttpRequestService')), 'payum.action.obtain_credit_card' => ($container->services['payum.action.obtain_credit_card_builder'] ?? $container->load('getPayum_Action_ObtainCreditCardBuilderService'))]);
        $instance->addGateway('offline', ['factory' => 'offline']);
        $instance->setGatewayConfigStorage(($container->services['payum.dynamic_gateways.config_storage'] ?? $container->load('getPayum_DynamicGateways_ConfigStorageService')));
        $instance->addCoreGatewayFactoryConfig(['twig.env' => ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService())]);
        $instance->addCoreGatewayFactoryConfig(['payum.action.sylius.authorize_payment' => '@sylius.payum_action.authorize_payment', 'payum.action.sylius.capture_payment' => '@sylius.payum_action.capture_payment', 'payum.action.sylius.payum_action.execute_same_request_with_payment_details' => '@sylius.payum_action.execute_same_request_with_payment_details', 'payum.action.sylius.resolve_next_route' => '@sylius.payum_action.resolve_next_route', 'payum.extension.psr_logger' => '@payum.extension.logger', 'payum.extension.log_executed_actions' => '@payum.extension.log_executed_actions', 'payum.extension.profile_collector' => '@payum.profiler.payum_collector', 'payum.prepend_extensions' => [0 => 'payum.extension.profile_collector', 1 => 'payum.extension.sylius.payum_extension.update_payment_state'], 'payum.extension.payum.extension.storage.sylius_component_core_model_order' => '@payum.extension.storage.sylius_component_core_model_order', 'payum.extension.payum.extension.storage.sylius_component_core_model_payment' => '@payum.extension.storage.sylius_component_core_model_payment', 'payum.extension.sylius.payum_extension.update_payment_state' => '@sylius.payum_extension.update_payment_state']);
        $instance->addGatewayFactoryConfig('paypal_express_checkout', ['payum.action.sylius.paypal_express_checkout.convert_payment' => '@sylius.payum_action.paypal_express_checkout.convert_payment']);
        $instance->addGatewayFactoryConfig('offline', ['payum.action.sylius.offline.convert_payment' => '@sylius.payum_action.offline.convert_payment', 'payum.action.sylius.offline.status' => '@sylius.payum_action.offline.status', 'payum.action.sylius.offline.resolve_next_route' => '@sylius.payum_action.offline.resolve_next_route']);

        return $instance;
    }
}
