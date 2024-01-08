<?php

namespace ContainerI4ij0pE;
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Provider/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Provider/AbstractUserProvider.php';
include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Provider/UsernameOrEmailProvider.php';

class UsernameOrEmailProvider_3eaa26a extends \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider|null wrapped object, if the proxy is initialized
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

    public function loadUserByUsername($username) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'loadUserByUsername', array('username' => $username), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->loadUserByUsername($username);
    }

    public function loadUserByIdentifier(string $identifier) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'loadUserByIdentifier', array('identifier' => $identifier), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->loadUserByIdentifier($identifier);
    }

    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $user) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'refreshUser', array('user' => $user), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->refreshUser($user);
    }

    public function supportsClass($class) : bool
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'supportsClass', array('class' => $class), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->supportsClass($class);
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

        unset($instance->supportedUserClass, $instance->userRepository, $instance->canonicalizer);

        $instance->initializerbd7be = $initializer;

        return $instance;
    }

    public function __construct(string $supportedUserClass, \Sylius\Component\User\Repository\UserRepositoryInterface $userRepository, \Sylius\Component\User\Canonicalizer\CanonicalizerInterface $canonicalizer)
    {
        static $reflection;

        if (! $this->valueHolderdfe5e) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');
            $this->valueHolderdfe5e = $reflection->newInstanceWithoutConstructor();
        unset($this->supportedUserClass, $this->userRepository, $this->canonicalizer);

        }

        $this->valueHolderdfe5e->__construct($supportedUserClass, $userRepository, $canonicalizer);
    }

    public function & __get($name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__get', ['name' => $name], $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        if (isset(self::$publicProperties5f2bf[$name])) {
            return $this->valueHolderdfe5e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');

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

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');

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
        unset($this->supportedUserClass, $this->userRepository, $this->canonicalizer);
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

if (!\class_exists('UsernameOrEmailProvider_3eaa26a', false)) {
    \class_alias(__NAMESPACE__.'\\UsernameOrEmailProvider_3eaa26a', 'UsernameOrEmailProvider_3eaa26a', false);
}
