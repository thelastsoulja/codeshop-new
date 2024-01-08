<?php

namespace Container5IEQoaE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getConnection', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getMetadataFactory', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getExpressionBuilder', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'beginTransaction', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getCache', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'transactional', array('func' => $func), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'commit', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->commit();
    }

    public function rollback()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'rollback', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getClassMetadata', array('className' => $className), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'createQuery', array('dql' => $dql), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'createNamedQuery', array('name' => $name), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'createQueryBuilder', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'flush', array('entity' => $entity), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'clear', array('entityName' => $entityName), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->clear($entityName);
    }

    public function close()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'close', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->close();
    }

    public function persist($entity)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'persist', array('entity' => $entity), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'remove', array('entity' => $entity), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'detach', array('entity' => $entity), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'merge', array('entity' => $entity), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'contains', array('entity' => $entity), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getEventManager', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getConfiguration', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'isOpen', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getUnitOfWork', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getProxyFactory', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'initializeObject', array('obj' => $obj), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'getFilters', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'isFiltersStateClean', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, 'hasFilters', array(), $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        return $this->valueHolderdfe5e->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbd7be = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderdfe5e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdfe5e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdfe5e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbd7be && ($this->initializerbd7be->__invoke($valueHolderdfe5e, $this, '__get', ['name' => $name], $this->initializerbd7be) || 1) && $this->valueHolderdfe5e = $valueHolderdfe5e;

        if (isset(self::$publicProperties5f2bf[$name])) {
            return $this->valueHolderdfe5e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
