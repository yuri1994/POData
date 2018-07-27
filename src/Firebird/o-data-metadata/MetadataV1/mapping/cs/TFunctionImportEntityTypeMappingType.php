<?php

namespace Firebird\ODataMetadata\MetadataV1\mapping\cs;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TFunctionImportEntityTypeMappingType.
 *
 * XSD Type: TFunctionImportEntityTypeMapping
 */
class TFunctionImportEntityTypeMappingType extends IsOK
{

    /**
     * @property string $typeName
     */
    private $typeName = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionImportConditionType[] $condition
     */
    private $condition = array(
        
    );

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
     * Adds as condition.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionImportConditionType $condition
     * @return self
     */
    public function addToCondition(TFunctionImportConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionImportConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\TFunctionImportConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }
}
