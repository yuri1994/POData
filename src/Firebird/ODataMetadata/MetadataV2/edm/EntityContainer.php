<?php

namespace Firebird\ODataMetadata\MetadataV2\edm;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType;
use Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\EntitySetAnonymousType;
use Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\FunctionImportAnonymousType;

/**
 * Class representing EntityContainer.
 */
class EntityContainer extends IsOK
{

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
     * @property \Firebird\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\FunctionImportAnonymousType[]
     * $functionImport
     */
    private $functionImport = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\EntitySetAnonymousType[] $entitySet
     */
    private $entitySet = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType[]
     * $associationSet
     */
    private $associationSet = array();

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
        $this->lazyLoadingEnabled = $lazyLoadingEnabled;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as functionImport.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\FunctionImportAnonymousType
     * $functionImport
     * @return self
     */
    public function addToFunctionImport(FunctionImportAnonymousType $functionImport)
    {
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
     * @return \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\FunctionImportAnonymousType[]
     */
    public function getFunctionImport()
    {
        return $this->functionImport;
    }

    /**
     * Sets a new functionImport.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\FunctionImportAnonymousType[]
     * $functionImport
     * @return self
     */
    public function setFunctionImport(array $functionImport)
    {
        $this->functionImport = $functionImport;
        return $this;
    }

    /**
     * Adds as entitySet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\EntitySetAnonymousType $entitySet
     * @return self
     */
    public function addToEntitySet(EntitySetAnonymousType $entitySet)
    {
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
     * @return \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\EntitySetAnonymousType[]
     */
    public function getEntitySet()
    {
        return $this->entitySet;
    }

    /**
     * Sets a new entitySet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\EntitySetAnonymousType[] $entitySet
     * @return self
     */
    public function setEntitySet(array $entitySet)
    {
        $this->entitySet = $entitySet;
        return $this;
    }

    /**
     * Adds as associationSet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType
     * $associationSet
     * @return self
     */
    public function addToAssociationSet(AssociationSetAnonymousType $associationSet)
    {
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
     * @return \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType[]
     */
    public function getAssociationSet()
    {
        return $this->associationSet;
    }

    /**
     * Sets a new associationSet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType[]
     * $associationSet
     * @return self
     */
    public function setAssociationSet(array $associationSet)
    {
        $this->associationSet = $associationSet;
        return $this;
    }
}
