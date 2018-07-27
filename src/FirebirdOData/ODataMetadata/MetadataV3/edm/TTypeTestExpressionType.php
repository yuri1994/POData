<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV3\edm\Groups\TFacetAttributesTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits\TWrappedFunctionTypeTrait;

/**
 * Class representing TTypeTestExpressionType.
 *
 * XSD Type: TTypeTestExpression
 */
class TTypeTestExpressionType extends IsOK
{
    use TFacetAttributesTrait, TWrappedFunctionTypeTrait;
    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TOperandType[] $operand
     */
    private $operand = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType[] $collectionType
     */
    private $collectionType = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType[] $referenceType
     */
    private $referenceType = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TPropertyType[] $rowType
     */
    private $rowType = [];

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
     * Adds as operand.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TOperandType $operand
     * @return self
     */
    public function addToOperand(TOperandType $operand)
    {
        $msg = null;
        if (!$operand->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->operand[] = $operand;
        return $this;
    }

    /**
     * isset operand.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetOperand($index)
    {
        return isset($this->operand[$index]);
    }

    /**
     * unset operand.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetOperand($index)
    {
        unset($this->operand[$index]);
    }

    /**
     * Gets as operand.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TOperandType[]
     */
    public function getOperand()
    {
        return $this->operand;
    }

    /**
     * Sets a new operand.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TOperandType[] $operand
     * @return self
     */
    public function setOperand(array $operand)
    {
        if (!$this->isValidArrayOK(
            $operand,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TOperandType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->operand = $operand;
        return $this;
    }

    /**
     * Adds as collectionType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType $collectionType
     * @return self
     */
    public function addToCollectionType(TCollectionTypeType $collectionType)
    {
        $msg = null;
        if (!$collectionType->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->collectionType[] = $collectionType;
        return $this;
    }

    /**
     * isset collectionType.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetCollectionType($index)
    {
        return isset($this->collectionType[$index]);
    }

    /**
     * unset collectionType.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetCollectionType($index)
    {
        unset($this->collectionType[$index]);
    }

    /**
     * Gets as collectionType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType[]
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType[] $collectionType
     * @return self
     */
    public function setCollectionType(array $collectionType)
    {
        if (!$this->isValidArrayOK(
            $collectionType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->collectionType = $collectionType;
        return $this;
    }

    /**
     * Adds as referenceType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType $referenceType
     * @return self
     */
    public function addToReferenceType(TReferenceTypeType $referenceType)
    {
        $msg = null;
        if (!$referenceType->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->referenceType[] = $referenceType;
        return $this;
    }

    /**
     * isset referenceType.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetReferenceType($index)
    {
        return isset($this->referenceType[$index]);
    }

    /**
     * unset referenceType.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetReferenceType($index)
    {
        unset($this->referenceType[$index]);
    }

    /**
     * Gets as referenceType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType[]
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }

    /**
     * Sets a new referenceType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType[] $referenceType
     * @return self
     */
    public function setReferenceType(array $referenceType)
    {
        if (!$this->isValidArrayOK(
            $referenceType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType',
            $msg
        )
        ) {
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
        if (null != $this->type && !$this->isTWrappedFunctionTypeValid($this->type)) {
            $msg = 'Type must be a valid TWrappedFunctionType';
            return false;
        }
        if (!$this->isTFacetAttributesTraitValid($msg)) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->collectionType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TCollectionTypeType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->referenceType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TReferenceTypeType',
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

        if (!$this->isValidArrayOK(
            $this->operand,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TOperandType',
            $msg
        )
        ) {
            return false;
        }

        $count = 0 < count($this->collectionType) ? 1 : 0
                 + 0 < count($this->referenceType) ? 1 : 0
                 + 0 < count($this->rowType) ? 1 : 0;
        if (1 < $count) {
            $msg = 'At most one of collection type, reference type and row type can be set';
            return false;
        }
        if (0 == $count && 0 == count($this->operand)) {
            $msg = 'If all of collection type, reference type and row type are empty, operand must not be empty';
            return false;
        }

        return true;
    }
}
