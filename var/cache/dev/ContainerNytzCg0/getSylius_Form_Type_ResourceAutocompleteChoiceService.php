<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ResourceAutocompleteChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.resource_autocomplete_choice' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Type\ResourceAutocompleteChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/ResourceAutocompleteChoiceType.php';

        $a = ($container->services['sylius.repository.adjustment'] ?? $container->load('getSylius_Repository_AdjustmentService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $b = ($container->services['sylius.repository.order_item_unit'] ?? $container->load('getSylius_Repository_OrderItemUnitService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $c = ($container->services['sylius.repository.order_sequence'] ?? $container->load('getSylius_Repository_OrderSequenceService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $d = ($container->services['sylius.repository.product_translation'] ?? $container->load('getSylius_Repository_ProductTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $e = ($container->services['sylius.repository.product_variant_translation'] ?? $container->load('getSylius_Repository_ProductVariantTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $f = ($container->services['sylius.repository.product_option_translation'] ?? $container->load('getSylius_Repository_ProductOptionTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $g = ($container->services['sylius.repository.product_association'] ?? $container->load('getSylius_Repository_ProductAssociationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $h = ($container->services['sylius.repository.product_association_type_translation'] ?? $container->load('getSylius_Repository_ProductAssociationTypeTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $i = ($container->services['sylius.repository.product_option_value'] ?? $container->load('getSylius_Repository_ProductOptionValueService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $j = ($container->services['sylius.repository.product_option_value_translation'] ?? $container->load('getSylius_Repository_ProductOptionValueTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $k = ($container->services['sylius.repository.product_attribute_translation'] ?? $container->load('getSylius_Repository_ProductAttributeTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $l = ($container->services['sylius.repository.product_attribute_value'] ?? $container->load('getSylius_Repository_ProductAttributeValueService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $m = ($container->services['sylius.repository.tax_category'] ?? $container->load('getSylius_Repository_TaxCategoryService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $n = ($container->services['sylius.repository.shipment'] ?? $container->getSylius_Repository_ShipmentService());

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $o = ($container->services['sylius.repository.shipment_unit'] ?? $container->load('getSylius_Repository_ShipmentUnitService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $p = ($container->services['sylius.repository.shipping_method_translation'] ?? $container->load('getSylius_Repository_ShippingMethodTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $q = ($container->services['sylius.repository.shipping_category'] ?? $container->load('getSylius_Repository_ShippingCategoryService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $r = ($container->services['sylius.repository.shipping_method_rule'] ?? $container->load('getSylius_Repository_ShippingMethodRuleService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $s = ($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $t = ($container->services['sylius.repository.payment_method_translation'] ?? $container->load('getSylius_Repository_PaymentMethodTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $u = ($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $v = ($container->services['sylius.repository.catalog_promotion_translation'] ?? $container->load('getSylius_Repository_CatalogPromotionTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $w = ($container->services['sylius.repository.catalog_promotion_scope'] ?? $container->load('getSylius_Repository_CatalogPromotionScopeService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $x = ($container->services['sylius.repository.promotion_subject'] ?? $container->load('getSylius_Repository_PromotionSubjectService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $y = ($container->services['sylius.repository.promotion_translation'] ?? $container->load('getSylius_Repository_PromotionTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $z = ($container->services['sylius.repository.catalog_promotion_action'] ?? $container->load('getSylius_Repository_CatalogPromotionActionService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $aa = ($container->services['sylius.repository.promotion_rule'] ?? $container->load('getSylius_Repository_PromotionRuleService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ba = ($container->services['sylius.repository.promotion_action'] ?? $container->load('getSylius_Repository_PromotionActionService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ca = ($container->services['sylius.repository.address_log_entry'] ?? $container->load('getSylius_Repository_AddressLogEntryService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $da = ($container->services['sylius.repository.inventory_unit'] ?? $container->load('getSylius_Repository_InventoryUnitService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ea = ($container->services['sylius.repository.taxon_translation'] ?? $container->load('getSylius_Repository_TaxonTranslationService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $fa = ($container->services['sylius.repository.oauth_user'] ?? $container->load('getSylius_Repository_OauthUserService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ga = ($container->services['sylius.repository.product_review'] ?? $container->load('getSylius_Repository_ProductReviewService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ha = ($container->services['sylius.repository.product_reviewer'] ?? $container->load('getSylius_Repository_ProductReviewerService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ia = ($container->services['sylius.repository.product_image'] ?? $container->load('getSylius_Repository_ProductImageService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ja = ($container->services['sylius.repository.avatar_image'] ?? $container->load('getSylius_Repository_AvatarImageService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ka = ($container->services['sylius.repository.taxon_image'] ?? $container->load('getSylius_Repository_TaxonImageService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $la = ($container->services['sylius.repository.channel_pricing_log_entry'] ?? $container->load('getSylius_Repository_ChannelPricingLogEntryService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $ma = ($container->services['sylius.repository.shop_billing_data'] ?? $container->load('getSylius_Repository_ShopBillingDataService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $na = ($container->services['sylius.repository.channel_price_history_config'] ?? $container->load('getSylius_Repository_ChannelPriceHistoryConfigService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $oa = ($container->services['sylius.repository.payment_security_token'] ?? $container->load('getSylius_Repository_PaymentSecurityTokenService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $pa = ($container->services['sylius.repository.gateway_config'] ?? $container->load('getSylius_Repository_GatewayConfigService'));

        if (isset($container->services['sylius.form.type.resource_autocomplete_choice'])) {
            return $container->services['sylius.form.type.resource_autocomplete_choice'];
        }
        $qa = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Resource\\Repository\\RepositoryInterface', 'resource repository');
        $qa->register('sylius.adjustment', $a);
        $qa->register('sylius.order', ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()));
        $qa->register('sylius.order_item', ($container->services['sylius.repository.order_item'] ?? $container->load('getSylius_Repository_OrderItemService')));
        $qa->register('sylius.order_item_unit', $b);
        $qa->register('sylius.order_sequence', $c);
        $qa->register('sylius.currency', ($container->services['sylius.repository.currency'] ?? $container->load('getSylius_Repository_CurrencyService')));
        $qa->register('sylius.exchange_rate', ($container->services['sylius.repository.exchange_rate'] ?? $container->getSylius_Repository_ExchangeRateService()));
        $qa->register('sylius.locale', ($container->services['sylius.repository.locale'] ?? $container->getSylius_Repository_LocaleService()));
        $qa->register('sylius.product', ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
        $qa->register('sylius.product_translation', $d);
        $qa->register('sylius.product_variant', ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')));
        $qa->register('sylius.product_variant_translation', $e);
        $qa->register('sylius.product_option', ($container->services['sylius.repository.product_option'] ?? $container->load('getSylius_Repository_ProductOptionService')));
        $qa->register('sylius.product_option_translation', $f);
        $qa->register('sylius.product_association', $g);
        $qa->register('sylius.product_association_type', ($container->services['sylius.repository.product_association_type'] ?? $container->load('getSylius_Repository_ProductAssociationTypeService')));
        $qa->register('sylius.product_association_type_translation', $h);
        $qa->register('sylius.product_option_value', $i);
        $qa->register('sylius.product_option_value_translation', $j);
        $qa->register('sylius.channel', ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()));
        $qa->register('sylius.product_attribute', ($container->services['sylius.repository.product_attribute'] ?? $container->load('getSylius_Repository_ProductAttributeService')));
        $qa->register('sylius.product_attribute_translation', $k);
        $qa->register('sylius.product_attribute_value', $l);
        $qa->register('sylius.tax_rate', ($container->services['sylius.repository.tax_rate'] ?? $container->load('getSylius_Repository_TaxRateService')));
        $qa->register('sylius.tax_category', $m);
        $qa->register('sylius.shipment', $n);
        $qa->register('sylius.shipment_unit', $o);
        $qa->register('sylius.shipping_method', ($container->services['sylius.repository.shipping_method'] ?? $container->getSylius_Repository_ShippingMethodService()));
        $qa->register('sylius.shipping_method_translation', $p);
        $qa->register('sylius.shipping_category', $q);
        $qa->register('sylius.shipping_method_rule', $r);
        $qa->register('sylius.payment', $s);
        $qa->register('sylius.payment_method', ($container->services['sylius.repository.payment_method'] ?? $container->getSylius_Repository_PaymentMethodService()));
        $qa->register('sylius.payment_method_translation', $t);
        $qa->register('sylius.catalog_promotion', $u);
        $qa->register('sylius.catalog_promotion_translation', $v);
        $qa->register('sylius.catalog_promotion_scope', $w);
        $qa->register('sylius.promotion_subject', $x);
        $qa->register('sylius.promotion', ($container->services['sylius.repository.promotion'] ?? $container->load('getSylius_Repository_PromotionService')));
        $qa->register('sylius.promotion_translation', $y);
        $qa->register('sylius.promotion_coupon', ($container->services['sylius.repository.promotion_coupon'] ?? $container->load('getSylius_Repository_PromotionCouponService')));
        $qa->register('sylius.catalog_promotion_action', $z);
        $qa->register('sylius.promotion_rule', $aa);
        $qa->register('sylius.promotion_action', $ba);
        $qa->register('sylius.address', ($container->services['sylius.repository.address'] ?? $container->load('getSylius_Repository_AddressService')));
        $qa->register('sylius.address_log_entry', $ca);
        $qa->register('sylius.country', ($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')));
        $qa->register('sylius.province', ($container->services['sylius.repository.province'] ?? $container->getSylius_Repository_ProvinceService()));
        $qa->register('sylius.zone', ($container->services['sylius.repository.zone'] ?? $container->getSylius_Repository_ZoneService()));
        $qa->register('sylius.zone_member', ($container->services['sylius.repository.zone_member'] ?? $container->load('getSylius_Repository_ZoneMemberService')));
        $qa->register('sylius.inventory_unit', $da);
        $qa->register('sylius.taxon', ($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService')));
        $qa->register('sylius.taxon_translation', $ea);
        $qa->register('sylius.admin_user', ($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService')));
        $qa->register('sylius.shop_user', ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')));
        $qa->register('sylius.oauth_user', $fa);
        $qa->register('sylius.customer', ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')));
        $qa->register('sylius.customer_group', ($container->services['sylius.repository.customer_group'] ?? $container->load('getSylius_Repository_CustomerGroupService')));
        $qa->register('sylius.product_review', $ga);
        $qa->register('sylius.product_reviewer', $ha);
        $qa->register('sylius.product_taxon', ($container->services['sylius.repository.product_taxon'] ?? $container->load('getSylius_Repository_ProductTaxonService')));
        $qa->register('sylius.product_image', $ia);
        $qa->register('sylius.avatar_image', $ja);
        $qa->register('sylius.taxon_image', $ka);
        $qa->register('sylius.channel_pricing', ($container->services['sylius.repository.channel_pricing'] ?? $container->load('getSylius_Repository_ChannelPricingService')));
        $qa->register('sylius.channel_pricing_log_entry', $la);
        $qa->register('sylius.shop_billing_data', $ma);
        $qa->register('sylius.channel_price_history_config', $na);
        $qa->register('sylius.payment_security_token', $oa);
        $qa->register('sylius.gateway_config', $pa);

        return $container->services['sylius.form.type.resource_autocomplete_choice'] = new \Sylius\Bundle\ResourceBundle\Form\Type\ResourceAutocompleteChoiceType($qa);
    }
}
