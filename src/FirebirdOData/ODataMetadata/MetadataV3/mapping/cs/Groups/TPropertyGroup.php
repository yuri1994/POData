<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\Groups;

use FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TComplexPropertyType;
use FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TConditionType;
use FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType;

trait TPropertyGroup
{
    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TComplexPropertyType $complexProperty
     */
    private $complexProperty = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType $scalarProperty
     */
    private $scalarProperty = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TConditionType $condition
     */
    private $condition = null;

    /**
     * Gets as complexProperty.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TComplexPropertyType
     */
    public function getComplexProperty()
    {
        return $this->complexProperty;
    }

    /**
     * Sets a new complexProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TComplexPropertyType $complexProperty
     * @return self
     */
    public function setComplexProperty(TComplexPropertyType $complexProperty)
    {
        $msg = null;
        if (!$complexProperty->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->complexProperty = $complexProperty;
        return $this;
    }

    /**
     * Gets as scalarProperty.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType $scalarProperty
     * @return self
     */
    public function setScalarProperty(TScalarPropertyType $scalarProperty)
    {
        $msg = null;
        if (!$scalarProperty->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->scalarProperty = $scalarProperty;
        return $this;
    }

    /**
     * Gets as condition.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TConditionType $condition
     * @return self
     */
    public function setCondition(TConditionType $condition)
    {
        $msg = null;
        if (!$condition->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->condition = $condition;
        return $this;
    }

    public function isPropertyGroupOK(&$msg = null)
    {
        if (null != $this->scalarProperty && !$this->scalarProperty->isOK($msg)) {
            return false;
        }
        if (null != $this->complexProperty && !$this->complexProperty->isOK($msg)) {
            return false;
        }
        if (null != $this->condition && !$this->condition->isOK($msg)) {
            return false;
        }
        return true;
    }
}
