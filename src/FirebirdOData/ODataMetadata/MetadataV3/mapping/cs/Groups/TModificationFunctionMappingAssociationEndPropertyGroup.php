<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\Groups;

use FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType;

trait TModificationFunctionMappingAssociationEndPropertyGroup
{
    //Grouping for property bindings in function mapping end property.

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
     * $scalarProperty
     */
    private $scalarProperty = null;

    /**
     * Gets as scalarProperty.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \FirebirdOData\OData\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
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

    public function isModificationFunctionMappingAssociationOK(&$msg = null)
    {
        if (null != $this->scalarProperty && !$this->scalarProperty->isOK($msg)) {
            return false;
        }
        return true;
    }
}
