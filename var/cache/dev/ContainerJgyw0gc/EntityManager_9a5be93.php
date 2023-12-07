<?php

namespace ContainerJgyw0gc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder51e47 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer776cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseb556 = [
        
    ];

    public function getConnection()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getConnection', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getMetadataFactory', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getExpressionBuilder', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'beginTransaction', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getCache', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getCache();
    }

    public function transactional($func)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'transactional', array('func' => $func), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'wrapInTransaction', array('func' => $func), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'commit', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->commit();
    }

    public function rollback()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'rollback', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getClassMetadata', array('className' => $className), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'createQuery', array('dql' => $dql), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'createNamedQuery', array('name' => $name), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'createQueryBuilder', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'flush', array('entity' => $entity), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'clear', array('entityName' => $entityName), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->clear($entityName);
    }

    public function close()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'close', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->close();
    }

    public function persist($entity)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'persist', array('entity' => $entity), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'remove', array('entity' => $entity), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'detach', array('entity' => $entity), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'merge', array('entity' => $entity), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getRepository', array('entityName' => $entityName), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'contains', array('entity' => $entity), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getEventManager', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getConfiguration', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'isOpen', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getUnitOfWork', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getProxyFactory', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'initializeObject', array('obj' => $obj), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'getFilters', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'isFiltersStateClean', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'hasFilters', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return $this->valueHolder51e47->hasFilters();
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

        $instance->initializer776cd = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder51e47) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder51e47 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder51e47->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, '__get', ['name' => $name], $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        if (isset(self::$publicPropertieseb556[$name])) {
            return $this->valueHolder51e47->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51e47;

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

        $targetObject = $this->valueHolder51e47;
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
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51e47;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder51e47;
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
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, '__isset', array('name' => $name), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51e47;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder51e47;
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
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, '__unset', array('name' => $name), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51e47;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder51e47;
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
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, '__clone', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        $this->valueHolder51e47 = clone $this->valueHolder51e47;
    }

    public function __sleep()
    {
        $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, '__sleep', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;

        return array('valueHolder51e47');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer776cd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer776cd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer776cd && ($this->initializer776cd->__invoke($valueHolder51e47, $this, 'initializeProxy', array(), $this->initializer776cd) || 1) && $this->valueHolder51e47 = $valueHolder51e47;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder51e47;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder51e47;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
