<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\Groups\TFacetAttributesTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits\TSimpleIdentifierTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits\TWrappedFunctionTypeTrait;

/**
 * Class representing TPropertyType.
 *
 * XSD Type: TProperty
 */
class TPropertyType extends IsOK
{
    use TFacetAttributesTrait, TSimpleIdentifierTrait, TWrappedFunctionTypeTrait {
        TSimpleIdentifierTrait::isNCName insteadof TWrappedFunctionTypeTrait;
        TSimpleIdentifierTrait::matchesRegexPattern insteadof TWrappedFunctionTypeTrait;
        TSimpleIdentifierTrait::isName insteadof TWrappedFunctionTypeTrait;
    }

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType $collectionType
     */
    private $collectionType = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType $referenceType
     */
    private $referenceType = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TPropertyType[] $rowType
     */
    private $rowType = [];

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
            $msg = 'Name must be a valid TSimpleIdentifier';
            throw new \InvalidArgumentException($msg);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type.
     *
     * @param  string $type
     * @return self
     */
    public function setType($type)
    {
        if (null != $type && !$this->isTWrappedFunctionTypeValid($type)) {
            $msg = 'Type must be a valid TWrappedFunctionType';
            throw new \InvalidArgumentException($msg);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as collectionType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType $collectionType
     * @return self
     */
    public function setCollectionType(TCollectionTypeType $collectionType)
    {
        $msg = null;
        if (!$collectionType->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->collectionType = $collectionType;
        return $this;
    }

    /**
     * Gets as referenceType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }

    /**
     * Sets a new referenceType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType $referenceType
     * @return self
     */
    public function setReferenceType(TReferenceTypeType $referenceType)
    {
        $msg = null;
        if (!$referenceType->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->referenceType = $referenceType;
        return $this;
    }

    /**
     * Adds as property.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TPropertyType $property
     * @return self
     */
    public function addToRowType(TPropertyType $property)
    {
        $msg = null;
        if (!$property->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->rowType[] = $property;
        return $this;
    }

    /**
     * isset rowType.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetRowType($index)
    {
        return isset($this->rowType[$index]);
    }

    /**
     * unset rowType.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetRowType($index)
    {
        unset($this->rowType[$index]);
    }

    /**
     * Gets as rowType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TPropertyType[]
     */
    public function getRowType()
    {
        return $this->rowType;
    }

    /**
     * Sets a new rowType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TPropertyType[] $rowType
     * @return self
     */
    public function setRowType(array $rowType)
    {
        if (!$this->isValidArrayOK(
            $rowType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TPropertyType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->rowType = $rowType;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isTSimpleIdentifierValid($this->name)) {
            $msg = 'Name must be a valid TSimpleIdentifier';
            return false;
        }
        if (null != $this->type && !$this->isTWrappedFunctionTypeValid($this->type)) {
            $msg = 'Type must be a valid TWrappedFunctionType';
            return false;
        }
        if (!$this->isTFacetAttributesTraitValid($msg)) {
            return false;
        }
        if (!$this->isObjectNullOrType(
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType',
            $this->collectionType,
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isObjectNullOrType(
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType',
            $this->referenceType,
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->rowType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TPropertyType',
            $msg
        )
        ) {
            return false;
        }

        $count = (isset($this->collectionType) ? 1 : 0)
                 + (isset($this->referenceType) ? 1 : 0)
                 + (0 < count($this->rowType) ? 1 : 0);
        if (1 < $count) {
            $msg = 'At most one of collection type, reference type and row type can be set/nonempty';
            return false;
        }

        return true;
    }
}
