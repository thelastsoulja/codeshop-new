<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PromotionAction_Filter_TaxonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.promotion_action.filter.taxon' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Promotion\Filter\TaxonFilterConfigurationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Type/Promotion/Filter/TaxonFilterConfigurationType.php';

        return $container->services['sylius.form.type.promotion_action.filter.taxon'] = new \Sylius\Bundle\CoreBundle\Form\Type\Promotion\Filter\TaxonFilterConfigurationType(($container->services['sylius.form.type.data_transformer.taxons_to_codes'] ?? $container->load('getSylius_Form_Type_DataTransformer_TaxonsToCodesService')));
    }
}
