<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\mapping\cs;

/**
 * Class representing TMappingFragmentType.
 *
 * XSD Type: TMappingFragment
 */
class TMappingFragmentType extends IsOK
{

    /**
     * @property string $storeEntitySet
     */
    private $storeEntitySet = null;

    /**
     * @property bool $makeColumnsDistinct
     */
    private $makeColumnsDistinct = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexPropertyType $complexProperty
     */
    private $complexProperty = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType $scalarProperty
     */
    private $scalarProperty = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TConditionType $condition
     */
    private $condition = null;

    /**
     * Gets as storeEntitySet.
     *
     * @return string
     */
    public function getStoreEntitySet()
    {
        return $this->storeEntitySet;
    }

    /**
     * Sets a new storeEntitySet.
     *
     * @param  string $storeEntitySet
     * @return self
     */
    public function setStoreEntitySet($storeEntitySet)
    {
        $this->storeEntitySet = $storeEntitySet;
        return $this;
    }

    /**
     * Gets as makeColumnsDistinct.
     *
     * @return bool
     */
    public function getMakeColumnsDistinct()
    {
        return $this->makeColumnsDistinct;
    }

    /**
     * Sets a new makeColumnsDistinct.
     *
     * @param  bool $makeColumnsDistinct
     * @return self
     */
    public function setMakeColumnsDistinct($makeColumnsDistinct)
    {
        $this->makeColumnsDistinct = $makeColumnsDistinct;
        return $this;
    }

    /**
     * Gets as complexProperty.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexPropertyType
     */
    public function getComplexProperty()
    {
        return $this->complexProperty;
    }

    /**
     * Sets a new complexProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TComplexPropertyType $complexProperty
     * @return self
     */
    public function setComplexProperty(TComplexPropertyType $complexProperty)
    {
        $this->complexProperty = $complexProperty;
        return $this;
    }

    /**
     * Gets as scalarProperty.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType $scalarProperty
     * @return self
     */
    public function setScalarProperty(TScalarPropertyType $scalarProperty)
    {
        $this->scalarProperty = $scalarProperty;
        return $this;
    }

    /**
     * Gets as condition.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TConditionType $condition
     * @return self
     */
    public function setCondition(TConditionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }
}
