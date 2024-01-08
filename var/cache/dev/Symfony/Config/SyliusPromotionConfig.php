<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPromotion'.\DIRECTORY_SEPARATOR.'PromotionActionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPromotion'.\DIRECTORY_SEPARATOR.'PromotionRuleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPromotion'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusPromotionConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $promotionAction;
    private $promotionRule;
    private $driver;
    private $resources;
    private $_usedProperties = [];

    public function promotionAction(array $value = []): \Symfony\Config\SyliusPromotion\PromotionActionConfig
    {
        if (null === $this->promotionAction) {
            $this->_usedProperties['promotionAction'] = true;
            $this->promotionAction = new \Symfony\Config\SyliusPromotion\PromotionActionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "promotionAction()" has already been initialized. You cannot pass values the second time you call promotionAction().');
        }

        return $this->promotionAction;
    }

    public function promotionRule(array $value = []): \Symfony\Config\SyliusPromotion\PromotionRuleConfig
    {
        if (null === $this->promotionRule) {
            $this->_usedProperties['promotionRule'] = true;
            $this->promotionRule = new \Symfony\Config\SyliusPromotion\PromotionRuleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "promotionRule()" has already been initialized. You cannot pass values the second time you call promotionRule().');
        }

        return $this->promotionRule;
    }

    /**
     * @default 'doctrine/orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function driver($value): self
    {
        $this->_usedProperties['driver'] = true;
        $this->driver = $value;

        return $this;
    }

    public function resources(array $value = []): \Symfony\Config\SyliusPromotion\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPromotion\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_promotion';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('promotion_action', $value)) {
            $this->_usedProperties['promotionAction'] = true;
            $this->promotionAction = new \Symfony\Config\SyliusPromotion\PromotionActionConfig($value['promotion_action']);
            unset($value['promotion_action']);
        }

        if (array_key_exists('promotion_rule', $value)) {
            $this->_usedProperties['promotionRule'] = true;
            $this->promotionRule = new \Symfony\Config\SyliusPromotion\PromotionRuleConfig($value['promotion_rule']);
            unset($value['promotion_rule']);
        }

        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPromotion\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['promotionAction'])) {
            $output['promotion_action'] = $this->promotionAction->toArray();
        }
        if (isset($this->_usedProperties['promotionRule'])) {
            $output['promotion_rule'] = $this->promotionRule->toArray();
        }
        if (isset($this->_usedProperties['driver'])) {
            $output['driver'] = $this->driver;
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }

        return $output;
    }

}
