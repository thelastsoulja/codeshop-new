<?php

namespace Symfony\Config\SyliusShipping;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ShippingMethodRuleConfig 
{
    private $validationGroups;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function validationGroups(string $name, $value): self
    {
        $this->_usedProperties['validationGroups'] = true;
        $this->validationGroups[$name] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('validation_groups', $value)) {
            $this->_usedProperties['validationGroups'] = true;
            $this->validationGroups = $value['validation_groups'];
            unset($value['validation_groups']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['validationGroups'])) {
            $output['validation_groups'] = $this->validationGroups;
        }

        return $output;
    }

}
