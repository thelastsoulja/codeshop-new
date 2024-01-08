<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerDebugService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/DebugCommand.php';

        $container->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['sylius.command_bus' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\ApplyCatalogPromotionsOnVariants' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\ApplyCatalogPromotionsOnVariantsHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\DisableCatalogPromotion' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\DisableCatalogPromotionHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\RemoveCatalogPromotion' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\RemoveCatalogPromotionHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\RemoveInactiveCatalogPromotion' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\RemoveInactiveCatalogPromotionHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Command\\UpdateCatalogPromotionState' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\UpdateCatalogPromotionStateHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\RequestResetPasswordEmail' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\RequestResetPasswordEmailHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\ResetPassword' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\ResetPasswordHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\SendResetPasswordEmail' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\SendResetPasswordEmailHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\CoreBundle\\PriceHistory\\Command\\ApplyLowestPriceOnChannelPricings' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\PriceHistory\\CommandHandler\\ApplyLowestPriceOnChannelPricingsHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\AdminBundle\\Message\\CreateAdminUser' => [0 => [0 => 'Sylius\\Bundle\\AdminBundle\\MessageHandler\\CreateAdminUserHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\RegisterShopUser' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\RegisterShopUserHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\PickupCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\PickupCartHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\AddItemToCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\AddItemToCartHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\RemoveItemFromCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\RemoveItemFromCartHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\InformAboutCartRecalculation' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\InformAboutCartRecalculationHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\UpdateCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\UpdateCartHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ChooseShippingMethod' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChooseShippingMethodHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ChoosePaymentMethod' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChoosePaymentMethodHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\CompleteOrder' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\CompleteOrderHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ShipShipment' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ShipShipmentHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ChangePaymentMethod' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ChangePaymentMethodHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\ChangeItemQuantityInCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\ChangeItemQuantityInCartHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Catalog\\AddProductReview' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Catalog\\AddProductReviewHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\BlameCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\BlameCartHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ChangeShopUserPassword' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ChangeShopUserPasswordHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\RequestResetPasswordToken' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\RequestResetPasswordTokenHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResendVerificationEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ResendVerificationEmailHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResetPassword' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ResetPasswordHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendAccountRegistrationEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendAccountRegistrationEmailHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendAccountVerificationEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendAccountVerificationEmailHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\SendOrderConfirmation' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\SendOrderConfirmationHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendResetPasswordEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendResetPasswordEmailHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\SendShipmentConfirmationEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\SendShipmentConfirmationEmailHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyCustomerAccount' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\VerifyCustomerAccountHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\SendContactRequest' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\SendContactRequestHandler', 1 => ['bus' => 'sylius.command_bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Promotion\\GeneratePromotionCoupon' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Promotion\\GeneratePromotionCouponHandler', 1 => ['bus' => 'sylius.command_bus']]]], 'sylius.query_bus' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]], 'Sylius\\Bundle\\ApiBundle\\Query\\GetCustomerStatistics' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\QueryHandler\\GetCustomerStatisticsHandler', 1 => ['bus' => 'sylius.query_bus']]], 'Sylius\\Bundle\\ApiBundle\\Query\\GetAddressLogEntryCollection' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\QueryHandler\\GetAddressLogEntryCollectionHandler', 1 => ['bus' => 'sylius.query_bus']]]], 'sylius.event_bus' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionCreated' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionCreatedListener', 1 => ['bus' => 'sylius.event_bus']], 1 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionStateChangedListener', 1 => ['bus' => 'sylius.event_bus']]], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionUpdated' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionUpdatedListener', 1 => ['bus' => 'sylius.event_bus']], 1 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionStateChangedListener', 1 => ['bus' => 'sylius.event_bus']]], 'Sylius\\Component\\Promotion\\Event\\CatalogPromotionEnded' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionEndedListener', 1 => ['bus' => 'sylius.event_bus']], 1 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionStateChangedListener', 1 => ['bus' => 'sylius.event_bus']]], 'Sylius\\Component\\Core\\Event\\ProductCreated' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductCreatedListener', 1 => ['bus' => 'sylius.event_bus']]], 'Sylius\\Component\\Core\\Event\\ProductUpdated' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductUpdatedListener', 1 => ['bus' => 'sylius.event_bus']]], 'Sylius\\Component\\Core\\Event\\ProductVariantCreated' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductVariantCreatedListener', 1 => ['bus' => 'sylius.event_bus']]], 'Sylius\\Component\\Core\\Event\\ProductVariantUpdated' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductVariantUpdatedListener', 1 => ['bus' => 'sylius.event_bus']]], 'Sylius\\Bundle\\ApiBundle\\Event\\OrderCompleted' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\EventHandler\\OrderCompletedHandler', 1 => ['bus' => 'sylius.event_bus']]]], 'sylius_default.bus' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]], 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\RequestResetPasswordEmail' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\RequestResetPasswordEmailHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\ResetPassword' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\ResetPasswordHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\CoreBundle\\Message\\Admin\\Account\\SendResetPasswordEmail' => [0 => [0 => 'Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\SendResetPasswordEmailHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\AdminBundle\\Message\\CreateAdminUser' => [0 => [0 => 'Sylius\\Bundle\\AdminBundle\\MessageHandler\\CreateAdminUserHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\RegisterShopUser' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\RegisterShopUserHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\PickupCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\PickupCartHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\AddItemToCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\AddItemToCartHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\RemoveItemFromCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\RemoveItemFromCartHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\InformAboutCartRecalculation' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\InformAboutCartRecalculationHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\UpdateCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\UpdateCartHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ChooseShippingMethod' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChooseShippingMethodHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ChoosePaymentMethod' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChoosePaymentMethodHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\CompleteOrder' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\CompleteOrderHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ShipShipment' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ShipShipmentHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ChangePaymentMethod' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ChangePaymentMethodHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\ChangeItemQuantityInCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\ChangeItemQuantityInCartHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Catalog\\AddProductReview' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Catalog\\AddProductReviewHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\BlameCart' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Cart\\BlameCartHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ChangeShopUserPassword' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ChangeShopUserPasswordHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\RequestResetPasswordToken' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\RequestResetPasswordTokenHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResendVerificationEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ResendVerificationEmailHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ResetPassword' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ResetPasswordHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendAccountRegistrationEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendAccountRegistrationEmailHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendAccountVerificationEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendAccountVerificationEmailHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\SendOrderConfirmation' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\SendOrderConfirmationHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\SendResetPasswordEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendResetPasswordEmailHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\SendShipmentConfirmationEmail' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\SendShipmentConfirmationEmailHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\VerifyCustomerAccount' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\VerifyCustomerAccountHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\SendContactRequest' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\SendContactRequestHandler', 1 => ['bus' => 'sylius_default.bus']]], 'Sylius\\Bundle\\ApiBundle\\Command\\Promotion\\GeneratePromotionCoupon' => [0 => [0 => 'Sylius\\Bundle\\ApiBundle\\CommandHandler\\Promotion\\GeneratePromotionCouponHandler', 1 => ['bus' => 'sylius_default.bus']]]], 'sylius_event.bus' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]]]]);

        $instance->setName('debug:messenger');
        $instance->setDescription('List messages you can dispatch using the message buses');

        return $instance;
    }
}
