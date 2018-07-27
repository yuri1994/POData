<?php

namespace Firebird\ODataMetadata\MetadataV1\mapping\cs;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TEntityTypeModificationFunctionType.
 *
 * XSD Type: TEntityTypeModificationFunction
 */
class TEntityTypeModificationFunctionType extends IsOK
{

    /**
     * @property string $functionName
     */
    private $functionName = null;

    /**
     * @property string $rowsAffectedParameter
     */
    private $rowsAffectedParameter = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingScalarPropertyType
     * $scalarProperty
     */
    private $scalarProperty = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingAssociationEndType
     * $associationEnd
     */
    private $associationEnd = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingComplexPropertyType
     * $complexProperty
     */
    private $complexProperty = null;

    /**
     * Gets as functionName.
     *
     * @return string
     */
    public function getFunctionName()
    {
        return $this->functionName;
    }

    /**
     * Sets a new functionName.
     *
     * @param  string $functionName
     * @return self
     */
    public function setFunctionName($functionName)
    {
        $this->functionName = $functionName;
        return $this;
    }

    /**
     * Gets as rowsAffectedParameter.
     *
     * @return string
     */
    public function getRowsAffectedParameter()
    {
        return $this->rowsAffectedParameter;
    }

    /**
     * Sets a new rowsAffectedParameter.
     *
     * @param  string $rowsAffectedParameter
     * @return self
     */
    public function setRowsAffectedParameter($rowsAffectedParameter)
    {
        $this->rowsAffectedParameter = $rowsAffectedParameter;
        return $this;
    }

    /**
     * Gets as scalarProperty.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingScalarPropertyType
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingScalarPropertyType $scalarProperty
     * @return self
     */
    public function setScalarProperty(TFunctionMappingScalarPropertyType $scalarProperty)
    {
        $this->scalarProperty = $scalarProperty;
        return $this;
    }

    /**
     * Gets as associationEnd.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingAssociationEndType
     */
    public function getAssociationEnd()
    {
        return $this->associationEnd;
    }

    /**
     * Sets a new associationEnd.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingAssociationEndType $associationEnd
     * @return self
     */
    public function setAssociationEnd(TFunctionMappingAssociationEndType $associationEnd)
    {
        $this->associationEnd = $associationEnd;
        return $this;
    }

    /**
     * Gets as complexProperty.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingComplexPropertyType
     */
    public function getComplexProperty()
    {
        return $this->complexProperty;
    }

    /**
     * Sets a new complexProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingComplexPropertyType
     * $complexProperty
     * @return self
     */
    public function setComplexProperty(TFunctionMappingComplexPropertyType $complexProperty)
    {
        $this->complexProperty = $complexProperty;
        return $this;
    }
}
