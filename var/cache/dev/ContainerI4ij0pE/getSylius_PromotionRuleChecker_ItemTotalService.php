<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionRuleChecker_ItemTotalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_rule_checker.item_total' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Checker\Rule\ItemTotalRuleChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Checker/Rule/RuleCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Checker/Rule/ItemTotalRuleChecker.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Checker/Rule/ItemTotalRuleChecker.php';

        return $container->services['sylius.promotion_rule_checker.item_total'] = new \Sylius\Component\Core\Promotion\Checker\Rule\ItemTotalRuleChecker(new \Sylius\Component\Promotion\Checker\Rule\ItemTotalRuleChecker());
    }
}