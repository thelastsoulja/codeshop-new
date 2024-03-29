<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Registry_ResourceRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.registry.resource_repository' shared service.
     *
     * @return \Sylius\Component\Registry\ServiceRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sylius.registry.resource_repository'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Resource\\Repository\\RepositoryInterface', 'resource repository');

        $instance->register('sylius.adjustment', ($container->services['sylius.repository.adjustment'] ?? $container->load('getSylius_Repository_AdjustmentService')));
        $instance->register('sylius.order', ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()));
        $instance->register('sylius.order_item', ($container->services['sylius.repository.order_item'] ?? $container->load('getSylius_Repository_OrderItemService')));
        $instance->register('sylius.order_item_unit', ($container->services['sylius.repository.order_item_unit'] ?? $container->load('getSylius_Repository_OrderItemUnitService')));
        $instance->register('sylius.order_sequence', ($container->services['sylius.repository.order_sequence'] ?? $container->load('getSylius_Repository_OrderSequenceService')));
        $instance->register('sylius.currency', ($container->services['sylius.repository.currency'] ?? $container->load('getSylius_Repository_CurrencyService')));
        $instance->register('sylius.exchange_rate', ($container->services['sylius.repository.exchange_rate'] ?? $container->getSylius_Repository_ExchangeRateService()));
        $instance->register('sylius.locale', ($container->services['sylius.repository.locale'] ?? $container->getSylius_Repository_LocaleService()));
        $instance->register('sylius.product', ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
        $instance->register('sylius.product_translation', ($container->services['sylius.repository.product_translation'] ?? $container->load('getSylius_Repository_ProductTranslationService')));
        $instance->register('sylius.product_variant', ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')));
        $instance->register('sylius.product_variant_translation', ($container->services['sylius.repository.product_variant_translation'] ?? $container->load('getSylius_Repository_ProductVariantTranslationService')));
        $instance->register('sylius.product_option', ($container->services['sylius.repository.product_option'] ?? $container->load('getSylius_Repository_ProductOptionService')));
        $instance->register('sylius.product_option_translation', ($container->services['sylius.repository.product_option_translation'] ?? $container->load('getSylius_Repository_ProductOptionTranslationService')));
        $instance->register('sylius.product_association', ($container->services['sylius.repository.product_association'] ?? $container->load('getSylius_Repository_ProductAssociationService')));
        $instance->register('sylius.product_association_type', ($container->services['sylius.repository.product_association_type'] ?? $container->load('getSylius_Repository_ProductAssociationTypeService')));
        $instance->register('sylius.product_association_type_translation', ($container->services['sylius.repository.product_association_type_translation'] ?? $container->load('getSylius_Repository_ProductAssociationTypeTranslationService')));
        $instance->register('sylius.product_option_value', ($container->services['sylius.repository.product_option_value'] ?? $container->load('getSylius_Repository_ProductOptionValueService')));
        $instance->register('sylius.product_option_value_translation', ($container->services['sylius.repository.product_option_value_translation'] ?? $container->load('getSylius_Repository_ProductOptionValueTranslationService')));
        $instance->register('sylius.channel', ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()));
        $instance->register('sylius.product_attribute', ($container->services['sylius.repository.product_attribute'] ?? $container->load('getSylius_Repository_ProductAttributeService')));
        $instance->register('sylius.product_attribute_translation', ($container->services['sylius.repository.product_attribute_translation'] ?? $container->load('getSylius_Repository_ProductAttributeTranslationService')));
        $instance->register('sylius.product_attribute_value', ($container->services['sylius.repository.product_attribute_value'] ?? $container->load('getSylius_Repository_ProductAttributeValueService')));
        $instance->register('sylius.tax_rate', ($container->services['sylius.repository.tax_rate'] ?? $container->load('getSylius_Repository_TaxRateService')));
        $instance->register('sylius.tax_category', ($container->services['sylius.repository.tax_category'] ?? $container->load('getSylius_Repository_TaxCategoryService')));
        $instance->register('sylius.shipment', ($container->services['sylius.repository.shipment'] ?? $container->getSylius_Repository_ShipmentService()));
        $instance->register('sylius.shipment_unit', ($container->services['sylius.repository.shipment_unit'] ?? $container->load('getSylius_Repository_ShipmentUnitService')));
        $instance->register('sylius.shipping_method', ($container->services['sylius.repository.shipping_method'] ?? $container->getSylius_Repository_ShippingMethodService()));
        $instance->register('sylius.shipping_method_translation', ($container->services['sylius.repository.shipping_method_translation'] ?? $container->load('getSylius_Repository_ShippingMethodTranslationService')));
        $instance->register('sylius.shipping_category', ($container->services['sylius.repository.shipping_category'] ?? $container->load('getSylius_Repository_ShippingCategoryService')));
        $instance->register('sylius.shipping_method_rule', ($container->services['sylius.repository.shipping_method_rule'] ?? $container->load('getSylius_Repository_ShippingMethodRuleService')));
        $instance->register('sylius.payment', ($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')));
        $instance->register('sylius.payment_method', ($container->services['sylius.repository.payment_method'] ?? $container->getSylius_Repository_PaymentMethodService()));
        $instance->register('sylius.payment_method_translation', ($container->services['sylius.repository.payment_method_translation'] ?? $container->load('getSylius_Repository_PaymentMethodTranslationService')));
        $instance->register('sylius.catalog_promotion', ($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService')));
        $instance->register('sylius.catalog_promotion_translation', ($container->services['sylius.repository.catalog_promotion_translation'] ?? $container->load('getSylius_Repository_CatalogPromotionTranslationService')));
        $instance->register('sylius.catalog_promotion_scope', ($container->services['sylius.repository.catalog_promotion_scope'] ?? $container->load('getSylius_Repository_CatalogPromotionScopeService')));
        $instance->register('sylius.promotion_subject', ($container->services['sylius.repository.promotion_subject'] ?? $container->load('getSylius_Repository_PromotionSubjectService')));
        $instance->register('sylius.promotion', ($container->services['sylius.repository.promotion'] ?? $container->load('getSylius_Repository_PromotionService')));
        $instance->register('sylius.promotion_translation', ($container->services['sylius.repository.promotion_translation'] ?? $container->load('getSylius_Repository_PromotionTranslationService')));
        $instance->register('sylius.promotion_coupon', ($container->services['sylius.repository.promotion_coupon'] ?? $container->load('getSylius_Repository_PromotionCouponService')));
        $instance->register('sylius.catalog_promotion_action', ($container->services['sylius.repository.catalog_promotion_action'] ?? $container->load('getSylius_Repository_CatalogPromotionActionService')));
        $instance->register('sylius.promotion_rule', ($container->services['sylius.repository.promotion_rule'] ?? $container->load('getSylius_Repository_PromotionRuleService')));
        $instance->register('sylius.promotion_action', ($container->services['sylius.repository.promotion_action'] ?? $container->load('getSylius_Repository_PromotionActionService')));
        $instance->register('sylius.address', ($container->services['sylius.repository.address'] ?? $container->load('getSylius_Repository_AddressService')));
        $instance->register('sylius.address_log_entry', ($container->services['sylius.repository.address_log_entry'] ?? $container->load('getSylius_Repository_AddressLogEntryService')));
        $instance->register('sylius.country', ($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')));
        $instance->register('sylius.province', ($container->services['sylius.repository.province'] ?? $container->getSylius_Repository_ProvinceService()));
        $instance->register('sylius.zone', ($container->services['sylius.repository.zone'] ?? $container->getSylius_Repository_ZoneService()));
        $instance->register('sylius.zone_member', ($container->services['sylius.repository.zone_member'] ?? $container->load('getSylius_Repository_ZoneMemberService')));
        $instance->register('sylius.inventory_unit', ($container->services['sylius.repository.inventory_unit'] ?? $container->load('getSylius_Repository_InventoryUnitService')));
        $instance->register('sylius.taxon', ($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService')));
        $instance->register('sylius.taxon_translation', ($container->services['sylius.repository.taxon_translation'] ?? $container->load('getSylius_Repository_TaxonTranslationService')));
        $instance->register('sylius.admin_user', ($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService')));
        $instance->register('sylius.shop_user', ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')));
        $instance->register('sylius.oauth_user', ($container->services['sylius.repository.oauth_user'] ?? $container->load('getSylius_Repository_OauthUserService')));
        $instance->register('sylius.customer', ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')));
        $instance->register('sylius.customer_group', ($container->services['sylius.repository.customer_group'] ?? $container->load('getSylius_Repository_CustomerGroupService')));
        $instance->register('sylius.product_review', ($container->services['sylius.repository.product_review'] ?? $container->load('getSylius_Repository_ProductReviewService')));
        $instance->register('sylius.product_reviewer', ($container->services['sylius.repository.product_reviewer'] ?? $container->load('getSylius_Repository_ProductReviewerService')));
        $instance->register('sylius.product_taxon', ($container->services['sylius.repository.product_taxon'] ?? $container->load('getSylius_Repository_ProductTaxonService')));
        $instance->register('sylius.product_image', ($container->services['sylius.repository.product_image'] ?? $container->load('getSylius_Repository_ProductImageService')));
        $instance->register('sylius.avatar_image', ($container->services['sylius.repository.avatar_image'] ?? $container->load('getSylius_Repository_AvatarImageService')));
        $instance->register('sylius.taxon_image', ($container->services['sylius.repository.taxon_image'] ?? $container->load('getSylius_Repository_TaxonImageService')));
        $instance->register('sylius.channel_pricing', ($container->services['sylius.repository.channel_pricing'] ?? $container->load('getSylius_Repository_ChannelPricingService')));
        $instance->register('sylius.channel_pricing_log_entry', ($container->services['sylius.repository.channel_pricing_log_entry'] ?? $container->load('getSylius_Repository_ChannelPricingLogEntryService')));
        $instance->register('sylius.shop_billing_data', ($container->services['sylius.repository.shop_billing_data'] ?? $container->load('getSylius_Repository_ShopBillingDataService')));
        $instance->register('sylius.channel_price_history_config', ($container->services['sylius.repository.channel_price_history_config'] ?? $container->load('getSylius_Repository_ChannelPriceHistoryConfigService')));
        $instance->register('sylius.payment_security_token', ($container->services['sylius.repository.payment_security_token'] ?? $container->load('getSylius_Repository_PaymentSecurityTokenService')));
        $instance->register('sylius.gateway_config', ($container->services['sylius.repository.gateway_config'] ?? $container->load('getSylius_Repository_GatewayConfigService')));

        return $instance;
    }
}
