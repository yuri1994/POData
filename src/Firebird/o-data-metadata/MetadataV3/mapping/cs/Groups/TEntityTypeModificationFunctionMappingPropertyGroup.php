<?php

namespace Firebird\ODataMetadata\MetadataV3\mapping\cs\Groups;

use Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingAssociationEndType;
use Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingComplexPropertyType;
use Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType;

trait TEntityTypeModificationFunctionMappingPropertyGroup
{
    /**
     * @property \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
     * $scalarProperty
     */
    private $scalarProperty = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingAssociationEndType
     * $associationEnd
     */
    private $associationEnd = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingComplexPropertyType
     * $complexProperty
     */
    private $complexProperty = null;

    /**
     * Gets as scalarProperty.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
     * $scalarProperty
     * @return self
     */
    public function setScalarProperty(TModificationFunctionMappingScalarPropertyType $scalarProperty)
    {
        $msg = null;
        if (!$scalarProperty->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->scalarProperty = $scalarProperty;
        return $this;
    }

    /**
     * Gets as associationEnd.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingAssociationEndType
     */
    public function getAssociationEnd()
    {
        return $this->associationEnd;
    }

    /**
     * Sets a new associationEnd.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingAssociationEndType
     * $associationEnd
     * @return self
     */
    public function setAssociationEnd(TModificationFunctionMappingAssociationEndType $associationEnd)
    {
        $msg = null;
        if (!$associationEnd->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->associationEnd = $associationEnd;
        return $this;
    }

    /**
     * Gets as complexProperty.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingComplexPropertyType
     */
    public function getComplexProperty()
    {
        return $this->complexProperty;
    }

    /**
     * Sets a new complexProperty.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingComplexPropertyType
     * $complexProperty
     * @return self
     */
    public function setComplexProperty(TModificationFunctionMappingComplexPropertyType $complexProperty)
    {
        $msg = null;
        if (!$complexProperty->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->complexProperty = $complexProperty;
        return $this;
    }

    public function isMappingPropertyGroupOK(&$msg = null)
    {
        if (null != $this->scalarProperty && !$this->scalarProperty->isOK($msg)) {
            return false;
        }
        if (null != $this->complexProperty && !$this->complexProperty->isOK($msg)) {
            return false;
        }
        if (null != $this->associationEnd && !$this->associationEnd->isOK($msg)) {
            return false;
        }
        return true;
    }
}
