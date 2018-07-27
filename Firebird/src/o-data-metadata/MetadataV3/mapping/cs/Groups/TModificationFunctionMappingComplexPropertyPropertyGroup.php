<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\Groups;

use AlgoWeb\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingComplexPropertyType;
use AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType;

trait TModificationFunctionMappingComplexPropertyPropertyGroup
{
    use IsOKToolboxTrait;
    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
     * $scalarProperty
     */
    private $scalarProperty = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingComplexPropertyType
     * $complexProperty
     */
    private $complexProperty = null;

    /**
     * Gets as scalarProperty.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingScalarPropertyType
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
     * Gets as complexProperty.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingComplexPropertyType
     */
    public function getComplexProperty()
    {
        return $this->complexProperty;
    }

    /**
     * Sets a new complexProperty.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\mapping\cs\TModificationFunctionMappingComplexPropertyType
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

    public function isComplexPropertyPropertyGroupOK(&$msg = null)
    {
        if (null != $this->scalarProperty && !$this->scalarProperty->isOK($msg)) {
            return false;
        }
        if (null != $this->complexProperty && !$this->complexProperty->isOK($msg)) {
            return false;
        }
        return true;
    }
}
