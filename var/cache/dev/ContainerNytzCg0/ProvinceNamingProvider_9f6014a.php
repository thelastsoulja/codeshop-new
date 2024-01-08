<?php

namespace ContainerNytzCg0;
include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Addressing/Provider/ProvinceNamingProviderInterface.php';
include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Addressing/Provider/ProvinceNamingProvider.php';

class ProvinceNamingProvider_9f6014a extends \Sylius\Component\Addressing\Provider\ProvinceNamingProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sylius\Component\Addressing\Provider\ProvinceNamingProvider|null wrapped object, if the proxy is initialized
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

    public function getName(\Sylius\Component\Addressing\Model\AddressInterface $address) : string
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, 'getName', array('address' => $address), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        return $this->valueHolder99a5c->getName($address);
    }

    public function getAbbreviation(\Sylius\Component\Addressing\Model\AddressInterface $address) : string
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, 'getAbbreviation', array('address' => $address), $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        return $this->valueHolder99a5c->getAbbreviation($address);
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

        \Closure::bind(function (\Sylius\Component\Addressing\Provider\ProvinceNamingProvider $instance) {
            unset($instance->provinceRepository);
        }, $instance, 'Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider')->__invoke($instance);

        $instance->initializer55bb9 = $initializer;

        return $instance;
    }

    public function __construct(\Sylius\Component\Resource\Repository\RepositoryInterface $provinceRepository)
    {
        static $reflection;

        if (! $this->valueHolder99a5c) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider');
            $this->valueHolder99a5c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sylius\Component\Addressing\Provider\ProvinceNamingProvider $instance) {
            unset($instance->provinceRepository);
        }, $this, 'Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider')->__invoke($this);

        }

        $this->valueHolder99a5c->__construct($provinceRepository);
    }

    public function & __get($name)
    {
        $this->initializer55bb9 && ($this->initializer55bb9->__invoke($valueHolder99a5c, $this, '__get', ['name' => $name], $this->initializer55bb9) || 1) && $this->valueHolder99a5c = $valueHolder99a5c;

        if (isset(self::$publicProperties36d4d[$name])) {
            return $this->valueHolder99a5c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider');

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
        \Closure::bind(function (\Sylius\Component\Addressing\Provider\ProvinceNamingProvider $instance) {
            unset($instance->provinceRepository);
        }, $this, 'Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider')->__invoke($this);
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

if (!\class_exists('ProvinceNamingProvider_9f6014a', false)) {
    \class_alias(__NAMESPACE__.'\\ProvinceNamingProvider_9f6014a', 'ProvinceNamingProvider_9f6014a', false);
}
