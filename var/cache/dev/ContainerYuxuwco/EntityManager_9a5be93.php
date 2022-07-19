<?php

namespace ContainerYuxuwco;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1d49a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6864f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties89a03 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getConnection', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getMetadataFactory', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getExpressionBuilder', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'beginTransaction', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getCache', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'transactional', array('func' => $func), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'commit', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->commit();
    }

    public function rollback()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'rollback', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getClassMetadata', array('className' => $className), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'createQuery', array('dql' => $dql), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'createNamedQuery', array('name' => $name), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'createQueryBuilder', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'flush', array('entity' => $entity), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'clear', array('entityName' => $entityName), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->clear($entityName);
    }

    public function close()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'close', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->close();
    }

    public function persist($entity)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'persist', array('entity' => $entity), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'remove', array('entity' => $entity), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'refresh', array('entity' => $entity), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'detach', array('entity' => $entity), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'merge', array('entity' => $entity), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'contains', array('entity' => $entity), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getEventManager', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getConfiguration', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'isOpen', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getUnitOfWork', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getProxyFactory', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'initializeObject', array('obj' => $obj), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'getFilters', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'isFiltersStateClean', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'hasFilters', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return $this->valueHolder1d49a->hasFilters();
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

        $instance->initializer6864f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1d49a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1d49a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1d49a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, '__get', ['name' => $name], $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        if (isset(self::$publicProperties89a03[$name])) {
            return $this->valueHolder1d49a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d49a;

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

        $targetObject = $this->valueHolder1d49a;
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
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d49a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1d49a;
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
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, '__isset', array('name' => $name), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d49a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1d49a;
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
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, '__unset', array('name' => $name), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d49a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1d49a;
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
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, '__clone', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        $this->valueHolder1d49a = clone $this->valueHolder1d49a;
    }

    public function __sleep()
    {
        $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, '__sleep', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;

        return array('valueHolder1d49a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6864f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6864f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6864f && ($this->initializer6864f->__invoke($valueHolder1d49a, $this, 'initializeProxy', array(), $this->initializer6864f) || 1) && $this->valueHolder1d49a = $valueHolder1d49a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1d49a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1d49a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
