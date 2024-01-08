<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionApplicatorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Applicator\CatalogPromotionApplicatorInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Applicator\CatalogPromotionApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Applicator/CatalogPromotionApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Applicator/CatalogPromotionApplicator.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\ProductVariantForCatalogPromotionEligibilityInterface'] ?? $container->load('getProductVariantForCatalogPromotionEligibilityInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Applicator\\CatalogPromotionApplicatorInterface'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Applicator\\CatalogPromotionApplicatorInterface'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Applicator\\CatalogPromotionApplicatorInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Applicator\CatalogPromotionApplicator(($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Applicator\\ActionBasedDiscountApplicatorInterface'] ?? $container->load('getActionBasedDiscountApplicatorInterfaceService')), $a, ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Checker\\CatalogPromotionEligibilityChecker'] ?? $container->load('getCatalogPromotionEligibilityCheckerService')));
    }
}
