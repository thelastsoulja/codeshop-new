<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusApi'.\DIRECTORY_SEPARATOR.'FilterEagerLoadingExtensionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusApiConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enabled;
    private $legacyErrorHandling;
    private $orderStatesToFilterOut;
    private $productImagePrefix;
    private $filterEagerLoadingExtension;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function legacyErrorHandling($value): self
    {
        $this->_usedProperties['legacyErrorHandling'] = true;
        $this->legacyErrorHandling = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function orderStatesToFilterOut($value): self
    {
        $this->_usedProperties['orderStatesToFilterOut'] = true;
        $this->orderStatesToFilterOut = $value;

        return $this;
    }

    /**
     * @default 'media/image'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function productImagePrefix($value = 'media/image'): self
    {
        $this->_usedProperties['productImagePrefix'] = true;
        $this->productImagePrefix = $value;

        return $this;
    }

    public function filterEagerLoadingExtension(array $value = []): \Symfony\Config\SyliusApi\FilterEagerLoadingExtensionConfig
    {
        if (null === $this->filterEagerLoadingExtension) {
            $this->_usedProperties['filterEagerLoadingExtension'] = true;
            $this->filterEagerLoadingExtension = new \Symfony\Config\SyliusApi\FilterEagerLoadingExtensionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "filterEagerLoadingExtension()" has already been initialized. You cannot pass values the second time you call filterEagerLoadingExtension().');
        }

        return $this->filterEagerLoadingExtension;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_api';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('legacy_error_handling', $value)) {
            $this->_usedProperties['legacyErrorHandling'] = true;
            $this->legacyErrorHandling = $value['legacy_error_handling'];
            unset($value['legacy_error_handling']);
        }

        if (array_key_exists('order_states_to_filter_out', $value)) {
            $this->_usedProperties['orderStatesToFilterOut'] = true;
            $this->orderStatesToFilterOut = $value['order_states_to_filter_out'];
            unset($value['order_states_to_filter_out']);
        }

        if (array_key_exists('product_image_prefix', $value)) {
            $this->_usedProperties['productImagePrefix'] = true;
            $this->productImagePrefix = $value['product_image_prefix'];
            unset($value['product_image_prefix']);
        }

        if (array_key_exists('filter_eager_loading_extension', $value)) {
            $this->_usedProperties['filterEagerLoadingExtension'] = true;
            $this->filterEagerLoadingExtension = new \Symfony\Config\SyliusApi\FilterEagerLoadingExtensionConfig($value['filter_eager_loading_extension']);
            unset($value['filter_eager_loading_extension']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['legacyErrorHandling'])) {
            $output['legacy_error_handling'] = $this->legacyErrorHandling;
        }
        if (isset($this->_usedProperties['orderStatesToFilterOut'])) {
            $output['order_states_to_filter_out'] = $this->orderStatesToFilterOut;
        }
        if (isset($this->_usedProperties['productImagePrefix'])) {
            $output['product_image_prefix'] = $this->productImagePrefix;
        }
        if (isset($this->_usedProperties['filterEagerLoadingExtension'])) {
            $output['filter_eager_loading_extension'] = $this->filterEagerLoadingExtension->toArray();
        }

        return $output;
    }

}
