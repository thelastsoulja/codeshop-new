<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPercentageDiscountActionValidatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\PercentageDiscountActionValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\PercentageDiscountActionValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Validator/CatalogPromotionAction/ActionValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/CatalogPromotion/PercentageDiscountActionValidator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\CatalogPromotion\\PercentageDiscountActionValidator'] = new \Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\PercentageDiscountActionValidator(($container->services['sylius.section_resolver.uri_based_section_resolver'] ?? $container->getSylius_SectionResolver_UriBasedSectionResolverService()));
    }
}
