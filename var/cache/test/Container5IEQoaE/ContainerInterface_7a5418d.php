<?php

namespace Container5IEQoaE;
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerInterface.php';

class ContainerInterface_7a5418d implements \ProxyManager\Proxy\VirtualProxyInterface, \Symfony\Component\DependencyInjection\ContainerInterface
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface|null wrapped object, if the proxy is initialized
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

    public function set(string $id, ?object $service)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'set', array('id' => $id, 'service' => $service), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->set($id, $service);
    }

    public function get(string $id, int $invalidBehavior = 1)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'get', array('id' => $id, 'invalidBehavior' => $invalidBehavior), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->get($id, $invalidBehavior);
    }

    public function has(string $id)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'has', array('id' => $id), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->has($id);
    }

    public function initialized(string $id)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'initialized', array('id' => $id), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->initialized($id);
    }

    public function getParameter(string $name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getParameter', array('name' => $name), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getParameter($name);
    }

    public function hasParameter(string $name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'hasParameter', array('name' => $name), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->hasParameter($name);
    }

    public function setParameter(string $name, $value)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'setParameter', array('name' => $name, 'value' => $value), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->setParameter($name, $value);
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

        $instance->initializerbd7be = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderdfe5e) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');
            $this->valueHolderdfe5e = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__get', ['name' => $name], $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        if (isset(self::$publicProperties5f2bf[$name])) {
            return $this->valueHolderdfe5e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\DependencyInjection\\ContainerInterface');

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

if (!\class_exists('ContainerInterface_7a5418d', false)) {
    \class_alias(__NAMESPACE__.'\\ContainerInterface_7a5418d', 'ContainerInterface_7a5418d', false);
}
