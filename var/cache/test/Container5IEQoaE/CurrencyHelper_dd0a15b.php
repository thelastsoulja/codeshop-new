<?php

namespace Container5IEQoaE;
include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CurrencyBundle/Templating/Helper/CurrencyHelperInterface.php';
include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CurrencyBundle/Templating/Helper/CurrencyHelper.php';

class CurrencyHelper_dd0a15b extends \Sylius\Bundle\CurrencyBundle\Templating\Helper\CurrencyHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sylius\Bundle\CurrencyBundle\Templating\Helper\CurrencyHelper|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdfe5e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbd7be = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5f2bf = [
        
    ];

    public function convertCurrencyCodeToSymbol(string $code) : string
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'convertCurrencyCodeToSymbol', array('code' => $code), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->convertCurrencyCodeToSymbol($code);
    }

    public function getName() : string
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getName', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getName();
    }

    public function setCharset(string $charset)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'setCharset', array('charset' => $charset), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getCharset', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getCharset();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->charset);

        $instance->initializerbd7be = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderdfe5e) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');
            $this->valueHolderdfe5e = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        }
    }

    public function & __get($name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__get', ['name' => $name], $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        if (isset(self::$publicProperties5f2bf[$name])) {
            return $this->valueHolderdfe5e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfe5e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdfe5e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfe5e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdfe5e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__isset', array('name' => $name), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfe5e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdfe5e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__unset', array('name' => $name), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfe5e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdfe5e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__clone', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        $this->valueHolderdfe5e = clone $this->valueHolderdfe5e;
    }

    public function __sleep()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__sleep', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return array('valueHolderdfe5e');
    }

    public function __wakeup()
    {
        unset($this->charset);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd7be = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd7be;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'initializeProxy', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdfe5e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdfe5e;
    }
}

if (!\class_exists('CurrencyHelper_dd0a15b', false)) {
    \class_alias(__NAMESPACE__.'\\CurrencyHelper_dd0a15b', 'CurrencyHelper_dd0a15b', false);
}
