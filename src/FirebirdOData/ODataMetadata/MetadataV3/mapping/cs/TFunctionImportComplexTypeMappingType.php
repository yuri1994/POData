<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\mapping\cs;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TFunctionImportComplexTypeMappingType.
 *
 * Type for FunctionImportMapping/ComplexTypeMapping element
 *
 * XSD Type: TFunctionImportComplexTypeMapping
 */
class TFunctionImportComplexTypeMappingType extends IsOK
{

    /**
     * @property string $typeName
     */
    private $typeName = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType[] $scalarProperty
     */
    private $scalarProperty = [];

    /**
     * Gets as typeName.
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Sets a new typeName.
     *
     * @param  string $typeName
     * @return self
     */
    public function setTypeName($typeName)
    {
        if (!$this->isStringNotNullOrEmpty($typeName)) {
            $msg = 'Type name cannot be null or empty';
            throw new \InvalidArgumentException($msg);
        }
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * Adds as scalarProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType $scalarProperty
     * @return self
     */
    public function addToScalarProperty(TScalarPropertyType $scalarProperty)
    {
        $msg = null;
        if (!$scalarProperty->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->scalarProperty[] = $scalarProperty;
        return $this;
    }

    /**
     * isset scalarProperty.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetScalarProperty($index)
    {
        return isset($this->scalarProperty[$index]);
    }

    /**
     * unset scalarProperty.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetScalarProperty($index)
    {
        unset($this->scalarProperty[$index]);
    }

    /**
     * Gets as scalarProperty.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType[]
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType[] $scalarProperty
     * @return self
     */
    public function setScalarProperty(array $scalarProperty)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $scalarProperty,
            '\FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->scalarProperty = $scalarProperty;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isStringNotNullOrEmpty($this->typeName)) {
            $msg = 'Type name cannot be null or empty';
            return false;
        }
        if (!$this->isValidArray(
            $this->scalarProperty,
            '\FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType'
        )
        ) {
            $msg = 'Scalar property array not a valid array';
            return false;
        }
        if (!$this->isChildArrayOK($this->scalarProperty, $msg)) {
            return false;
        }
        return true;
    }
}
