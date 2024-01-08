<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionRuleChecker_TotalOfItemsFromTaxonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_rule_checker.total_of_items_from_taxon' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Checker\Rule\TotalOfItemsFromTaxonRuleChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Checker/Rule/RuleCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Checker/Rule/TotalOfItemsFromTaxonRuleChecker.php';

        $a = ($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService'));

        if (isset($container->services['sylius.promotion_rule_checker.total_of_items_from_taxon'])) {
            return $container->services['sylius.promotion_rule_checker.total_of_items_from_taxon'];
        }

        return $container->services['sylius.promotion_rule_checker.total_of_items_from_taxon'] = new \Sylius\Component\Core\Promotion\Checker\Rule\TotalOfItemsFromTaxonRuleChecker($a);
    }
}
