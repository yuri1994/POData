<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\edm;

use AlgoWeb\ODataMetadata\IsOK;
use AlgoWeb\ODataMetadata\MetadataV3\edm\Groups\GBaseExpressionTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\Groups\GExpressionTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\Groups\TFacetAttributesTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\IsOKTraits\TQualifiedNameTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\IsOKTraits\TSimpleIdentifierTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\IsOKTraits\TWrappedFunctionTypeTrait;

/**
 * Class representing TValueTermType.
 *
 * XSD Type: TValueTerm
 */
class TValueTermType extends IsOK
{
    use TFacetAttributesTrait,
        GBaseExpressionTrait,
        GExpressionTrait,
        TQualifiedNameTrait,
        TSimpleIdentifierTrait,
        TWrappedFunctionTypeTrait {
        TSimpleIdentifierTrait::isNCName insteadof TQualifiedNameTrait, TWrappedFunctionTypeTrait;
        TSimpleIdentifierTrait::matchesRegexPattern insteadof TQualifiedNameTrait, TWrappedFunctionTypeTrait;
        TSimpleIdentifierTrait::isName insteadof TQualifiedNameTrait, TWrappedFunctionTypeTrait;
        TFacetAttributesTrait::normaliseString insteadof GExpressionTrait;
        TFacetAttributesTrait::preserveString insteadof GExpressionTrait;
        TFacetAttributesTrait::replaceString insteadof GExpressionTrait;
        TFacetAttributesTrait::collapseString insteadof GExpressionTrait;
        TFacetAttributesTrait::token insteadof GExpressionTrait;
        TFacetAttributesTrait::string insteadof GExpressionTrait;
        TFacetAttributesTrait::integer insteadof GExpressionTrait;
        TFacetAttributesTrait::nonNegativeInteger insteadof GExpressionTrait;
        TFacetAttributesTrait::decimal insteadof GExpressionTrait;
        TFacetAttributesTrait::double insteadof GExpressionTrait;
        TFacetAttributesTrait::dateTime insteadof GExpressionTrait;
        TFacetAttributesTrait::hexBinary insteadof GExpressionTrait;
        TFacetAttributesTrait::isStringNotNullOrEmpty insteadof GExpressionTrait;
        TFacetAttributesTrait::isStringNotNull insteadof GExpressionTrait;
        TFacetAttributesTrait::isNotNullInstanceOf insteadof GExpressionTrait;
        TFacetAttributesTrait::isNullInstanceOf insteadof GExpressionTrait;
        TFacetAttributesTrait::isURLValid insteadof GExpressionTrait;
        TFacetAttributesTrait::isObjectNullOrOK insteadof GExpressionTrait;
        TFacetAttributesTrait::isObjectNullOrType insteadof GExpressionTrait;
        TFacetAttributesTrait::isValidArrayOK insteadof GExpressionTrait;
        TFacetAttributesTrait::isValidArray insteadof GExpressionTrait;
        TFacetAttributesTrait::isChildArrayOK insteadof GExpressionTrait;
        TQualifiedNameTrait::isTQualifiedNameValid insteadof GExpressionTrait, TWrappedFunctionTypeTrait;
    }

    public function __construct()
    {
        $this->gExpressionMaximum = 1;
        $this->gExpressionMinimum = 1;
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
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\TCollectionTypeType $collectionType
     */
    private $collectionType = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferenceTypeType $referenceType
     */
    private $referenceType = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\TPropertyType[] $rowType
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
     * Gets as documentation.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
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
     * Gets as collectionType.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\TCollectionTypeType
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\TCollectionTypeType $collectionType
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
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferenceTypeType
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }

    /**
     * Sets a new referenceType.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\TReferenceTypeType $referenceType
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
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\TPropertyType $property
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
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\TPropertyType[]
     */
    public function getRowType()
    {
        return $this->rowType;
    }

    /**
     * Sets a new rowType.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\TPropertyType[] $rowType
     * @return self
     */
    public function setRowType(array $rowType)
    {
        if (!$this->isValidArrayOK(
            $rowType,
            '\AlgoWeb\ODataMetadata\MetadataV3\edm\TPropertyType',
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

        if (!$this->isObjectNullOrType(
            '\AlgoWeb\ODataMetadata\MetadataV3\edm\TDocumentationType',
            $this->documentation,
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isObjectNullOrType(
            '\AlgoWeb\ODataMetadata\MetadataV3\edm\TCollectionTypeType',
            $this->collectionType,
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isObjectNullOrType(
            '\AlgoWeb\ODataMetadata\MetadataV3\edm\TReferenceTypeType',
            $this->referenceType,
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->rowType,
            '\AlgoWeb\ODataMetadata\MetadataV3\edm\TPropertyType',
            $msg
        )
        ) {
            return false;
        }

        $count = (isset($this->collectionType) ? 1 : 0)
                 + (isset($this->referenceType) ? 1 : 0)
                 + (isset($this->documentation) ? 1 : 0)
                 + (0 < count($this->rowType) ? 1 : 0);
        if (1 < $count) {
            $msg = 'At most one of documentation, collection type, reference type and row type can be set/nonempty';
            return false;
        }

        if (!$this->isTFacetAttributesTraitValid($msg)) {
            return false;
        }
        return true;
    }
}
