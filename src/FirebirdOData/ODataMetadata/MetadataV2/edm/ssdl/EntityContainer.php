<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\AssociationSetAnonymousType;
use FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\EntitySetAnonymousType;

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
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\EntitySetAnonymousType[]
     * $entitySet
     */
    private $entitySet = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\AssociationSetAnonymousType[]
     * $associationSet
     */
    private $associationSet = [];

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
     * Gets as documentation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as entitySet.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\EntitySetAnonymousType $entitySet
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
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\EntitySetAnonymousType[]
     */
    public function getEntitySet()
    {
        return $this->entitySet;
    }

    /**
     * Sets a new entitySet.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\EntitySetAnonymousType[] $entitySet
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
     * @param  \FirebirdOData\OData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\AssociationSetAnonymousType
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
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\AssociationSetAnonymousType[]
     */
    public function getAssociationSet()
    {
        return $this->associationSet;
    }

    /**
     * Sets a new associationSet.
     *
     * @param  \FirebirdOData\OData\ODataMetadata\MetadataV2\edm\ssdl\EntityContainer\AssociationSetAnonymousType[]
     * $associationSet
     * @return self
     */
    public function setAssociationSet(array $associationSet)
    {
        $this->associationSet = $associationSet;
        return $this;
    }
}
