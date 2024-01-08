<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayum'.\DIRECTORY_SEPARATOR.'GatewayConfigConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayum'.\DIRECTORY_SEPARATOR.'TemplateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayum'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusPayumConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $gatewayConfig;
    private $driver;
    private $template;
    private $resources;
    private $_usedProperties = [];

    public function gatewayConfig(array $value = []): \Symfony\Config\SyliusPayum\GatewayConfigConfig
    {
        if (null === $this->gatewayConfig) {
            $this->_usedProperties['gatewayConfig'] = true;
            $this->gatewayConfig = new \Symfony\Config\SyliusPayum\GatewayConfigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gatewayConfig()" has already been initialized. You cannot pass values the second time you call gatewayConfig().');
        }

        return $this->gatewayConfig;
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

    public function template(array $value = []): \Symfony\Config\SyliusPayum\TemplateConfig
    {
        if (null === $this->template) {
            $this->_usedProperties['template'] = true;
            $this->template = new \Symfony\Config\SyliusPayum\TemplateConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "template()" has already been initialized. You cannot pass values the second time you call template().');
        }

        return $this->template;
    }

    public function resources(array $value = []): \Symfony\Config\SyliusPayum\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPayum\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_payum';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('gateway_config', $value)) {
            $this->_usedProperties['gatewayConfig'] = true;
            $this->gatewayConfig = new \Symfony\Config\SyliusPayum\GatewayConfigConfig($value['gateway_config']);
            unset($value['gateway_config']);
        }

        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('template', $value)) {
            $this->_usedProperties['template'] = true;
            $this->template = new \Symfony\Config\SyliusPayum\TemplateConfig($value['template']);
            unset($value['template']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPayum\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['gatewayConfig'])) {
            $output['gateway_config'] = $this->gatewayConfig->toArray();
        }
        if (isset($this->_usedProperties['driver'])) {
            $output['driver'] = $this->driver;
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template->toArray();
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }

        return $output;
    }

}
