<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Setup_PromotionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.setup.promotion' shared service.
     *
     * @return \Sylius\Behat\Context\Setup\PromotionContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Setup/PromotionContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.setup.promotion'] = new \Sylius\Behat\Context\Setup\PromotionContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->services['Sylius\\Component\\Core\\Factory\\PromotionActionFactoryInterface'] ?? $container->load('getPromotionActionFactoryInterfaceService')), ($container->services['Sylius\\Component\\Promotion\\Factory\\PromotionCouponFactoryInterface'] ?? $container->load('getPromotionCouponFactoryInterfaceService')), ($container->services['Sylius\\Component\\Core\\Factory\\PromotionRuleFactoryInterface'] ?? $container->load('getPromotionRuleFactoryInterfaceService')), ($container->services['sylius.repository.promotion'] ?? $container->load('getSylius_Repository_PromotionService')), ($container->services['sylius.promotion_coupon_generator'] ?? $container->load('getSylius_PromotionCouponGeneratorService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.fixture.example_factory.promotion'] ?? $container->load('getSylius_Fixture_ExampleFactory_PromotionService')));
    }
}
