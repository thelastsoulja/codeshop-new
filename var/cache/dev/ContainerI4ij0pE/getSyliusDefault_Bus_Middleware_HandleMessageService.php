<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSyliusDefault_Bus_Middleware_HandleMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius_default.bus.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/HandleMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocator.php';

        $container->privates['sylius_default.bus.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(new \Symfony\Component\Messenger\Handler\HandlersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.HJBRccX'] ?? $container->load('get_Messenger_HandlerDescriptor_HJBRccXService'));
        }, 1), 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\RequestResetPasswordEmail' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.KGxS2iG'] ?? $container->load('get_Messenger_HandlerDescriptor_KGxS2iGService'));
        }, 1), 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\ResetPassword' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.yGxacTd'] ?? $container->load('get_Messenger_HandlerDescriptor_YGxacTdService'));
        }, 1), 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\SendResetPasswordEmail' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.DIiBN1j'] ?? $container->load('get_Messenger_HandlerDescriptor_DIiBN1jService'));
        }, 1), 'Sylius\\Bundle\\AdminBundle\\Message\\CreateAdminUser' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.1hT_nL4'] ?? $container->load('get_Messenger_HandlerDescriptor_1hTNL4Service'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\RegisterShopUser' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.VzL.Awn'] ?? $container->load('get_Messenger_HandlerDescriptor_VzL_AwnService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\PickupCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.rkXAEXY'] ?? $container->load('get_Messenger_HandlerDescriptor_RkXAEXYService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\AddItemToCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.0v0gciD'] ?? $container->load('get_Messenger_HandlerDescriptor_0v0gciDService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\RemoveItemFromCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.Ys1N1FM'] ?? $container->load('get_Messenger_HandlerDescriptor_Ys1N1FMService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\InformAboutCartRecalculation' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.qSan3b4'] ?? $container->load('get_Messenger_HandlerDescriptor_QSan3b4Service'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\UpdateCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.AnqNy4r'] ?? $container->load('get_Messenger_HandlerDescriptor_AnqNy4rService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ChooseShippingMethod' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.Pelzvzp'] ?? $container->load('get_Messenger_HandlerDescriptor_PelzvzpService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ChoosePaymentMethod' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.eP3Huwm'] ?? $container->load('get_Messenger_HandlerDescriptor_EP3HuwmService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\CompleteOrder' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.HsqKcM6'] ?? $container->load('get_Messenger_HandlerDescriptor_HsqKcM6Service'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ShipShipment' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.X9k3dza'] ?? $container->load('get_Messenger_HandlerDescriptor_X9k3dzaService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ChangePaymentMethod' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.qMaVuAf'] ?? $container->load('get_Messenger_HandlerDescriptor_QMaVuAfService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\ChangeItemQuantityInCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.tYNaVgF'] ?? $container->load('get_Messenger_HandlerDescriptor_TYNaVgFService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Catalog\\AddProductReview' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.xzKBONw'] ?? $container->load('get_Messenger_HandlerDescriptor_XzKBONwService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\BlameCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.sSiefXX'] ?? $container->load('get_Messenger_HandlerDescriptor_SSiefXXService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ChangeShopUserPassword' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.lMZGEsI'] ?? $container->load('get_Messenger_HandlerDescriptor_LMZGEsIService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\RequestResetPasswordToken' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.zAZcSmE'] ?? $container->load('get_Messenger_HandlerDescriptor_ZAZcSmEService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResendVerificationEmail' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.IGmHoX7'] ?? $container->load('get_Messenger_HandlerDescriptor_IGmHoX7Service'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResetPassword' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.8EN27Fu'] ?? $container->load('get_Messenger_HandlerDescriptor_8EN27FuService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendAccountRegistrationEmail' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.zwd377b'] ?? $container->load('get_Messenger_HandlerDescriptor_Zwd377bService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendAccountVerificationEmail' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.gZAgoHw'] ?? $container->load('get_Messenger_HandlerDescriptor_GZAgoHwService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\SendOrderConfirmation' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.ZqR0lRY'] ?? $container->load('get_Messenger_HandlerDescriptor_ZqR0lRYService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendResetPasswordEmail' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.HTI1zZN'] ?? $container->load('get_Messenger_HandlerDescriptor_HTI1zZNService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\SendShipmentConfirmationEmail' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.LkbdGsU'] ?? $container->load('get_Messenger_HandlerDescriptor_LkbdGsUService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyCustomerAccount' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.K9.HfSD'] ?? $container->load('get_Messenger_HandlerDescriptor_K9_HfSDService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\SendContactRequest' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.QpbpswT'] ?? $container->load('get_Messenger_HandlerDescriptor_QpbpswTService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Promotion\\GeneratePromotionCoupon' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.XxJM_8t'] ?? $container->load('get_Messenger_HandlerDescriptor_XxJM8tService'));
        }, 1)]));

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
