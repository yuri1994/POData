<?php

namespace Firebird\ODataMetadata\MetadataV3\edm;

use Firebird\ODataMetadata\CodeGeneration\AccessTypeTraits;
use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\AssociationSetAnonymousType;
use Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\EntitySetAnonymousType;
use Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\FunctionImportAnonymousType;
use Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits\TSimpleIdentifierTrait;

/**
 * Class representing EntityContainer.
 */
class EntityContainer extends IsOK
{
    use IsOKToolboxTrait, TSimpleIdentifierTrait, AccessTypeTraits;
    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $extends
     */
    private $extends = null;

    /**
     * @property string $typeAccess
     */
    private $typeAccess = null;

    /**
     * @property bool $lazyLoadingEnabled
     */
    private $lazyLoadingEnabled = null;

    /**
     * @property bool $isDefaultEntityContainer
     */
    private $isDefaultEntityContainer = false;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\FunctionImportAnonymousType[]
     * $functionImport
     */
    private $functionImport = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\EntitySetAnonymousType[] $entitySet
     */
    private $entitySet = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\AssociationSetAnonymousType[]
     * $associationSet
     */
    private $associationSet = [];

    public function __construct($name = 'DefaultContainer')
    {
        $this->setName($name);
    }

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        if (!$this->isTSimpleIdentifierValid($name)) {
            $msg = 'Name(' . $name . ') must be a valid TSimpleIdentifier';
            throw new \InvalidArgumentException($msg);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as extends.
     *
     * @return string
     */
    public function getExtends()
    {
        return $this->extends;
    }

    /**
     * Sets a new extends.
     *
     * @param  string $extends
     * @return self
     */
    public function setExtends($extends)
    {
        if (null != $extends && !$this->isTSimpleIdentifierValid($extends)) {
            $msg = 'Extends must be a valid TSimpleIdentifier';
            throw new \InvalidArgumentException($msg);
        }
        $this->extends = $extends;
        return $this;
    }

    /**
     * Gets as typeAccess.
     *
     * @return string
     */
    public function getTypeAccess()
    {
        return $this->typeAccess;
    }

    /**
     * Sets a new typeAccess.
     *
     * @param  string $typeAccess
     * @return self
     */
    public function setTypeAccess($typeAccess)
    {
        if (null != $typeAccess && !($this->isTPublicOrInternalAccessOK($typeAccess))) {
            $msg = 'Type access must be Public or Internal';
            throw new \InvalidArgumentException($msg);
        }
        $this->typeAccess = $typeAccess;
        return $this;
    }

    /**
     * Gets as lazyLoadingEnabled.
     *
     * @return bool
     */
    public function getLazyLoadingEnabled()
    {
        return $this->lazyLoadingEnabled;
    }

    /**
     * Sets a new lazyLoadingEnabled.
     *
     * @param  bool $lazyLoadingEnabled
     * @return self
     */
    public function setLazyLoadingEnabled($lazyLoadingEnabled)
    {
        $this->lazyLoadingEnabled = boolval($lazyLoadingEnabled);
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Gets as lazyLoadingEnabled.
     *
     * @return bool
     */
    public function getIsDefaultEntityContainer()
    {
        return boolval($this->isDefaultEntityContainer);
    }

    /**
     * Sets a new isDefaultEntityContainer.
     *
     * @param  bool $isDefaultEntityContainer
     * @return self
     */
    public function setIsDefaultEntityContainer($isDefaultEntityContainer)
    {
        $this->isDefaultEntityContainer = boolval($isDefaultEntityContainer);
        return $this;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $msg = null;
        if (!$documentation->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as functionImport.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\FunctionImportAnonymousType
     * $functionImport
     * @return self
     */
    public function addToFunctionImport(FunctionImportAnonymousType $functionImport)
    {
        $msg = null;
        if (!$functionImport->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->functionImport[] = $functionImport;
        return $this;
    }

    /**
     * isset functionImport.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetFunctionImport($index)
    {
        return isset($this->functionImport[$index]);
    }

    /**
     * unset functionImport.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetFunctionImport($index)
    {
        unset($this->functionImport[$index]);
    }

    /**
     * Gets as functionImport.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\FunctionImportAnonymousType[]
     */
    public function getFunctionImport()
    {
        return $this->functionImport;
    }

    /**
     * Sets a new functionImport.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\FunctionImportAnonymousType[]
     * $functionImport
     * @return self
     */
    public function setFunctionImport(array $functionImport)
    {
        if (!$this->isValidArrayOK(
            $functionImport,
            '\Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\FunctionImportAnonymousType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->functionImport = $functionImport;
        return $this;
    }

    /**
     * Adds as entitySet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\EntitySetAnonymousType $entitySet
     * @return self
     */
    public function addToEntitySet(EntitySetAnonymousType $entitySet)
    {
        $msg = null;
        if (!$entitySet->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->entitySet[] = $entitySet;
        return $this;
    }

    /**
     * isset entitySet.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEntitySet($index)
    {
        return isset($this->entitySet[$index]);
    }

    /**
     * unset entitySet.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEntitySet($index)
    {
        unset($this->entitySet[$index]);
    }

    /**
     * Gets as entitySet.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\EntitySetAnonymousType[]
     */
    public function getEntitySet()
    {
        return $this->entitySet;
    }

    /**
     * Sets a new entitySet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\EntitySetAnonymousType[] $entitySet
     * @return self
     */
    public function setEntitySet(array $entitySet)
    {
        if (!$this->isValidArrayOK(
            $entitySet,
            '\Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\EntitySetAnonymousType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->entitySet = $entitySet;
        return $this;
    }

    /**
     * Adds as associationSet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\AssociationSetAnonymousType
     * $associationSet
     * @return self
     */
    public function addToAssociationSet(AssociationSetAnonymousType $associationSet)
    {
        $msg = null;
        if (!$associationSet->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->associationSet[] = $associationSet;
        return $this;
    }

    /**
     * isset associationSet.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetAssociationSet($index)
    {
        return isset($this->associationSet[$index]);
    }

    /**
     * unset associationSet.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetAssociationSet($index)
    {
        unset($this->associationSet[$index]);
    }

    /**
     * Gets as associationSet.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\AssociationSetAnonymousType[]
     */
    public function getAssociationSet()
    {
        return $this->associationSet;
    }

    /**
     * Sets a new associationSet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\AssociationSetAnonymousType[]
     * $associationSet
     * @return self
     */
    public function setAssociationSet(array $associationSet)
    {
        if (!$this->isValidArrayOK(
            $associationSet,
            '\Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\AssociationSetAnonymousType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->associationSet = $associationSet;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isTSimpleIdentifierValid($this->name)) {
            $msg = 'Name(' . $this->name . ') must be a valid TSimpleIdentifier ' . __FILE__ . ':' . __LINE__;
            return false;
        }

        if (null != $this->extends && !$this->isTSimpleIdentifierValid($this->extends)) {
            $msg = 'Extends must be a valid TSimpleIdentifier';
            return false;
        }

        if (null != $this->typeAccess && !($this->isTPublicOrInternalAccessOK($this->typeAccess))) {
            $msg = 'Type access must be Public or Internal';
            return false;
        }
        
        if (!$this->isObjectNullOrOK($this->documentation, $msg)) {
            return false;
        }

        if (!$this->isValidArrayOK(
            $this->functionImport,
            '\Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\FunctionImportAnonymousType',
            $msg
        )
        ) {
            return false;
        }

        if (!$this->isValidArrayOK(
            $this->entitySet,
            '\Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\EntitySetAnonymousType',
            $msg
        )
        ) {
            return false;
        }

        if (!$this->isValidArrayOK(
            $this->associationSet,
            '\Firebird\ODataMetadata\MetadataV3\edm\EntityContainer\AssociationSetAnonymousType',
            $msg
        )
        ) {
            return false;
        }

        return $this->isStructureOK($msg);
    }

    public function isStructureOK(&$msg = null)
    {
        $entityNames = [];
        foreach ($this->entitySet as $entitySet) {
            $entityNames[] = $entitySet->getName();
        }
        foreach ($this->associationSet as $assocationSet) {
            if (!in_array($assocationSet->getEnd()[0]->getEntitySet(), $entityNames)) {
                $msg = 'The entitysets for assocations must have a valid entity set. ' . $assocationSet->getName() . ' Does not';
                return false;
            }
        }
        return true;
    }
}
