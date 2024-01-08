<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForVariantsScopeValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\ForVariantsScopeValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\ForVariantsScopeValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Validator/CatalogPromotionScope/ScopeValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/CatalogPromotion/ForVariantsScopeValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Validator/CatalogPromotionScope/ForVariantsScopeValidator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\CatalogPromotion\\ForVariantsScopeValidator'] = new \Sylius\Bundle\ApiBundle\Validator\CatalogPromotion\ForVariantsScopeValidator(new \Sylius\Bundle\CoreBundle\CatalogPromotion\Validator\CatalogPromotionScope\ForVariantsScopeValidator(($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService'))), ($container->services['sylius.section_resolver.uri_based_section_resolver'] ?? $container->getSylius_SectionResolver_UriBasedSectionResolverService()));
    }
}