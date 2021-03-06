<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\mapping\cs;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TComplexPropertyType.
 *
 * XSD Type: TComplexProperty
 */
class TComplexPropertyType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $typeName
     */
    private $typeName = null;

    /**
     * @property bool $isPartial
     */
    private $isPartial = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType[] $scalarProperty
     */
    private $scalarProperty = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexPropertyType[] $complexProperty
     */
    private $complexProperty = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexTypeMappingType[] $complexTypeMapping
     */
    private $complexTypeMapping = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TConditionType[] $condition
     */
    private $condition = array();

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
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * Gets as isPartial.
     *
     * @return bool
     */
    public function getIsPartial()
    {
        return $this->isPartial;
    }

    /**
     * Sets a new isPartial.
     *
     * @param  bool $isPartial
     * @return self
     */
    public function setIsPartial($isPartial)
    {
        $this->isPartial = $isPartial;
        return $this;
    }

    /**
     * Adds as scalarProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType $scalarProperty
     * @return self
     */
    public function addToScalarProperty(TScalarPropertyType $scalarProperty)
    {
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
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType[]
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType[] $scalarProperty
     * @return self
     */
    public function setScalarProperty(array $scalarProperty)
    {
        $this->scalarProperty = $scalarProperty;
        return $this;
    }

    /**
     * Adds as complexProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexPropertyType $complexProperty
     * @return self
     */
    public function addToComplexProperty(TComplexPropertyType $complexProperty)
    {
        $this->complexProperty[] = $complexProperty;
        return $this;
    }

    /**
     * isset complexProperty.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetComplexProperty($index)
    {
        return isset($this->complexProperty[$index]);
    }

    /**
     * unset complexProperty.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetComplexProperty($index)
    {
        unset($this->complexProperty[$index]);
    }

    /**
     * Gets as complexProperty.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexPropertyType[]
     */
    public function getComplexProperty()
    {
        return $this->complexProperty;
    }

    /**
     * Sets a new complexProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexPropertyType[] $complexProperty
     * @return self
     */
    public function setComplexProperty(array $complexProperty)
    {
        $this->complexProperty = $complexProperty;
        return $this;
    }

    /**
     * Adds as complexTypeMapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexTypeMappingType $complexTypeMapping
     * @return self
     */
    public function addToComplexTypeMapping(TComplexTypeMappingType $complexTypeMapping)
    {
        $this->complexTypeMapping[] = $complexTypeMapping;
        return $this;
    }

    /**
     * isset complexTypeMapping.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetComplexTypeMapping($index)
    {
        return isset($this->complexTypeMapping[$index]);
    }

    /**
     * unset complexTypeMapping.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetComplexTypeMapping($index)
    {
        unset($this->complexTypeMapping[$index]);
    }

    /**
     * Gets as complexTypeMapping.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexTypeMappingType[]
     */
    public function getComplexTypeMapping()
    {
        return $this->complexTypeMapping;
    }

    /**
     * Sets a new complexTypeMapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexTypeMappingType[] $complexTypeMapping
     * @return self
     */
    public function setComplexTypeMapping(array $complexTypeMapping)
    {
        $this->complexTypeMapping = $complexTypeMapping;
        return $this;
    }

    /**
     * Adds as condition.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TConditionType $condition
     * @return self
     */
    public function addToCondition(TConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }
}
