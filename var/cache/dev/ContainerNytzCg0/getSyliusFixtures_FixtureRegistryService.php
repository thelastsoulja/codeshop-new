<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSyliusFixtures_FixtureRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius_fixtures.fixture_registry' shared service.
     *
     * @return \Sylius\Bundle\FixturesBundle\Fixture\FixtureRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureRegistry.php';

        $container->services['sylius_fixtures.fixture_registry'] = $instance = new \Sylius\Bundle\FixturesBundle\Fixture\FixtureRegistry();

        $instance->addFixture(($container->services['sylius.fixture.locale'] ?? $container->load('getSylius_Fixture_LocaleService')));
        $instance->addFixture(($container->services['sylius.fixture.currency'] ?? $container->load('getSylius_Fixture_CurrencyService')));
        $instance->addFixture(($container->services['sylius.fixture.geographical'] ?? $container->load('getSylius_Fixture_GeographicalService')));
        $instance->addFixture(($container->services['sylius.fixture.payment_method'] ?? $container->load('getSylius_Fixture_PaymentMethodService')));
        $instance->addFixture(($container->services['sylius.fixture.shipping_category'] ?? $container->load('getSylius_Fixture_ShippingCategoryService')));
        $instance->addFixture(($container->services['sylius.fixture.shipping_method'] ?? $container->load('getSylius_Fixture_ShippingMethodService')));
        $instance->addFixture(($container->services['Sylius\\Bundle\\CoreBundle\\Fixture\\CatalogPromotionFixture'] ?? $container->load('getCatalogPromotionFixtureService')));
        $instance->addFixture(($container->services['sylius.fixture.channel'] ?? $container->load('getSylius_Fixture_ChannelService')));
        $instance->addFixture(($container->services['sylius.fixture.customer_group'] ?? $container->load('getSylius_Fixture_CustomerGroupService')));
        $instance->addFixture(($container->services['sylius.fixture.shop_user'] ?? $container->load('getSylius_Fixture_ShopUserService')));
        $instance->addFixture(($container->services['sylius.fixture.admin_user'] ?? $container->load('getSylius_Fixture_AdminUserService')));
        $instance->addFixture(($container->services['sylius.fixture.product_association_type'] ?? $container->load('getSylius_Fixture_ProductAssociationTypeService')));
        $instance->addFixture(($container->services['sylius.fixture.product_association'] ?? $container->load('getSylius_Fixture_ProductAssociationService')));
        $instance->addFixture(($container->services['sylius.fixture.similar_product_association'] ?? $container->load('getSylius_Fixture_SimilarProductAssociationService')));
        $instance->addFixture(($container->services['sylius.fixture.product_option'] ?? $container->load('getSylius_Fixture_ProductOptionService')));
        $instance->addFixture(($container->services['sylius.fixture.product_attribute'] ?? $container->load('getSylius_Fixture_ProductAttributeService')));
        $instance->addFixture(($container->services['sylius.fixture.product_review'] ?? $container->load('getSylius_Fixture_ProductReviewService')));
        $instance->addFixture(($container->services['sylius.fixture.tax_category'] ?? $container->load('getSylius_Fixture_TaxCategoryService')));
        $instance->addFixture(($container->services['sylius.fixture.tax_rate'] ?? $container->load('getSylius_Fixture_TaxRateService')));
        $instance->addFixture(($container->services['sylius.fixture.promotion'] ?? $container->load('getSylius_Fixture_PromotionService')));
        $instance->addFixture(($container->services['sylius.fixture.taxon'] ?? $container->load('getSylius_Fixture_TaxonService')));
        $instance->addFixture(($container->services['sylius.fixture.product'] ?? $container->load('getSylius_Fixture_ProductService')));
        $instance->addFixture(($container->services['sylius.fixture.mug_product'] ?? $container->load('getSylius_Fixture_MugProductService')));
        $instance->addFixture(($container->services['sylius.fixture.sticker_product'] ?? $container->load('getSylius_Fixture_StickerProductService')));
        $instance->addFixture(($container->services['sylius.fixture.book_product'] ?? $container->load('getSylius_Fixture_BookProductService')));
        $instance->addFixture(($container->services['sylius.fixture.tshirt_product'] ?? $container->load('getSylius_Fixture_TshirtProductService')));
        $instance->addFixture(($container->services['sylius.fixture.order'] ?? $container->load('getSylius_Fixture_OrderService')));
        $instance->addFixture(($container->services['sylius.fixture.address'] ?? $container->load('getSylius_Fixture_AddressService')));
        $instance->addFixture(($container->services['Sylius\\Bundle\\CoreBundle\\Fixture\\PaymentFixture'] ?? $container->load('getPaymentFixtureService')));

        return $instance;
    }
}
