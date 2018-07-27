<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\mapping\cs;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TFunctionMappingEndPropertyType.
 *
 * XSD Type: TFunctionMappingEndProperty
 */
class TFunctionMappingEndPropertyType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingScalarPropertyType
     * $scalarProperty
     */
    private $scalarProperty = null;

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
     * Gets as scalarProperty.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingScalarPropertyType
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\mapping\cs\TFunctionMappingScalarPropertyType $scalarProperty
     * @return self
     */
    public function setScalarProperty(TFunctionMappingScalarPropertyType $scalarProperty)
    {
        $this->scalarProperty = $scalarProperty;
        return $this;
    }
}
