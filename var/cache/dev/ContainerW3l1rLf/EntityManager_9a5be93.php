<?php

namespace ContainerW3l1rLf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86384 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9fe56 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties06d2d = [
        
    ];

    public function getConnection()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getConnection', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getMetadataFactory', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getExpressionBuilder', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'beginTransaction', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getCache', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'transactional', array('func' => $func), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'commit', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->commit();
    }

    public function rollback()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'rollback', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getClassMetadata', array('className' => $className), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'createQuery', array('dql' => $dql), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'createNamedQuery', array('name' => $name), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'createQueryBuilder', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'flush', array('entity' => $entity), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'clear', array('entityName' => $entityName), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->clear($entityName);
    }

    public function close()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'close', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->close();
    }

    public function persist($entity)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'persist', array('entity' => $entity), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'remove', array('entity' => $entity), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'refresh', array('entity' => $entity), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'detach', array('entity' => $entity), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'merge', array('entity' => $entity), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'contains', array('entity' => $entity), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getEventManager', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getConfiguration', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'isOpen', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getUnitOfWork', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getProxyFactory', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'initializeObject', array('obj' => $obj), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'getFilters', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'isFiltersStateClean', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'hasFilters', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return $this->valueHolder86384->hasFilters();
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

        $instance->initializer9fe56 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder86384) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder86384 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder86384->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, '__get', ['name' => $name], $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        if (isset(self::$publicProperties06d2d[$name])) {
            return $this->valueHolder86384->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86384;

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

        $targetObject = $this->valueHolder86384;
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
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86384;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86384;
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
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, '__isset', array('name' => $name), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86384;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86384;
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
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, '__unset', array('name' => $name), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86384;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86384;
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
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, '__clone', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        $this->valueHolder86384 = clone $this->valueHolder86384;
    }

    public function __sleep()
    {
        $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, '__sleep', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;

        return array('valueHolder86384');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9fe56 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9fe56;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9fe56 && ($this->initializer9fe56->__invoke($valueHolder86384, $this, 'initializeProxy', array(), $this->initializer9fe56) || 1) && $this->valueHolder86384 = $valueHolder86384;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86384;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86384;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
