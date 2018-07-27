<?php

namespace Firebird\ODataMetadata\MetadataV3\mapping\cs\Groups;

use Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingEndPropertyType;

trait TAssociationSetModificationFunctionMappingPropertyGroup
{
    //Grouping for entity type function mappings

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingEndPropertyType
     * $endProperty
     */
    private $endProperty = null;

    /**
     * Gets as endProperty.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingEndPropertyType
     */
    public function getEndProperty()
    {
        return $this->endProperty;
    }

    /**
     * Sets a new endProperty.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingEndPropertyType
     * $endProperty
     * @return self
     */
    public function setEndProperty(TModificationFunctionMappingEndPropertyType $endProperty)
    {
        $msg = null;
        if (!$endProperty->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->endProperty = $endProperty;
        return $this;
    }

    public function isAssociationSetModificationFunctionMappingOK(&$msg = null)
    {
        if (null != $this->endProperty && !$this->endProperty->isOK($msg)) {
            return false;
        }
        return true;
    }
}
