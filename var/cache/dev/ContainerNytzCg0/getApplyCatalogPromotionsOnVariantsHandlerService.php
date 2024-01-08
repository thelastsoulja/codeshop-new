<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplyCatalogPromotionsOnVariantsHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\ApplyCatalogPromotionsOnVariantsHandler' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\ApplyCatalogPromotionsOnVariantsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/CommandHandler/ApplyCatalogPromotionsOnVariantsHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/CatalogPromotionClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/CatalogPromotionClearer.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Applicator\\CatalogPromotionApplicatorInterface'] ?? $container->load('getCatalogPromotionApplicatorInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\ApplyCatalogPromotionsOnVariantsHandler'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\ApplyCatalogPromotionsOnVariantsHandler'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\ApplyCatalogPromotionsOnVariantsHandler'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\CommandHandler\ApplyCatalogPromotionsOnVariantsHandler(($container->services['Sylius\\Bundle\\PromotionBundle\\Provider\\EligibleCatalogPromotionsProviderInterface'] ?? $container->load('getEligibleCatalogPromotionsProviderInterfaceService')), $a, ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')), ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\CatalogPromotionClearerInterface'] ?? ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\CatalogPromotionClearerInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\CatalogPromotionClearer())));
    }
}
