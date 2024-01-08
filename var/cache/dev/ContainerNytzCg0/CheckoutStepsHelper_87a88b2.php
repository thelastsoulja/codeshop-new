<?php

namespace ContainerNytzCg0;
include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Templating/Helper/CheckoutStepsHelper.php';

class CheckoutStepsHelper_87a88b2 extends \Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99a5c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55bb9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties36d4d = [
        
    ];

    public function isShippingRequired(\Sylius\Component\Core\Model\OrderInterface $order) : bool
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, 'isShippingRequired', array('order' => $order), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        return $this->valueHolder99a5c->isShippingRequired($order);
    }

    public function isPaymentRequired(\Sylius\Component\Core\Model\OrderInterface $order) : bool
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, 'isPaymentRequired', array('order' => $order), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        return $this->valueHolder99a5c->isPaymentRequired($order);
    }

    public function getName() : string
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, 'getName', array(), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        return $this->valueHolder99a5c->getName();
    }

    public function setCharset(string $charset)
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, 'setCharset', array('charset' => $charset), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        return $this->valueHolder99a5c->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, 'getCharset', array(), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        return $this->valueHolder99a5c->getCharset();
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

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $instance, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($instance);

        $instance->initializer55bb9 = $initializer;

        return $instance;
    }

    public function __construct(\Sylius\Component\Core\Checker\OrderPaymentMethodSelectionRequirementCheckerInterface $orderPaymentMethodSelectionRequirementChecker, \Sylius\Component\Core\Checker\OrderShippingMethodSelectionRequirementCheckerInterface $orderShippingMethodSelectionRequirementChecker)
    {
        static $reflection;

        if (! $this->valueHolder99a5c) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper');
            $this->valueHolder99a5c = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($this);

        }

        $this->valueHolder99a5c->__construct($orderPaymentMethodSelectionRequirementChecker, $orderShippingMethodSelectionRequirementChecker);
    }

    public function & __get($name)
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, '__get', ['name' => $name], $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        if (isset(self::$publicProperties36d4d[$name])) {
            return $this->valueHolder99a5c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99a5c;

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

        $targetObject = $this->valueHolder99a5c;
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
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99a5c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99a5c;
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
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, '__isset', array('name' => $name), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99a5c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99a5c;
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
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, '__unset', array('name' => $name), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99a5c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99a5c;
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
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, '__clone', array(), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        $this->valueHolder99a5c = clone $this->valueHolder99a5c;
    }

    public function __sleep()
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, '__sleep', array(), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        return array('valueHolder99a5c');
    }

    public function __wakeup()
    {
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55bb9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55bb9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, 'initializeProxy', array(), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99a5c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99a5c;
    }
}

if (!\class_exists('CheckoutStepsHelper_87a88b2', false)) {
    \class_alias(__NAMESPACE__.'\\CheckoutStepsHelper_87a88b2', 'CheckoutStepsHelper_87a88b2', false);
}
