<?php

namespace AlgoWeb\ODataMetadata\MetadataV2\mapping\cs;

/**
 * Class representing TFunctionImportMappingResultMappingType.
 *
 * XSD Type: TFunctionImportMappingResultMapping
 */
class TFunctionImportMappingResultMappingType extends IsOK
{

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportEntityTypeMappingType[]
     * $entityTypeMapping
     */
    private $entityTypeMapping = array(
        
    );

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportComplexTypeMappingType[]
     * $complexTypeMapping
     */
    private $complexTypeMapping = array(
        
    );

    /**
     * Adds as entityTypeMapping.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportEntityTypeMappingType
     * $entityTypeMapping
     * @return self
     */
    public function addToEntityTypeMapping(TFunctionImportEntityTypeMappingType $entityTypeMapping)
    {
        $this->entityTypeMapping[] = $entityTypeMapping;
        return $this;
    }

    /**
     * isset entityTypeMapping.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetEntityTypeMapping($index)
    {
        return isset($this->entityTypeMapping[$index]);
    }

    /**
     * unset entityTypeMapping.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetEntityTypeMapping($index)
    {
        unset($this->entityTypeMapping[$index]);
    }

    /**
     * Gets as entityTypeMapping.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportEntityTypeMappingType[]
     */
    public function getEntityTypeMapping()
    {
        return $this->entityTypeMapping;
    }

    /**
     * Sets a new entityTypeMapping.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportEntityTypeMappingType[]
     * $entityTypeMapping
     * @return self
     */
    public function setEntityTypeMapping(array $entityTypeMapping)
    {
        $this->entityTypeMapping = $entityTypeMapping;
        return $this;
    }

    /**
     * Adds as complexTypeMapping.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportComplexTypeMappingType
     * $complexTypeMapping
     * @return self
     */
    public function addToComplexTypeMapping(TFunctionImportComplexTypeMappingType $complexTypeMapping)
    {
        $this->complexTypeMapping[] = $complexTypeMapping;
        return $this;
    }

    /**
     * isset complexTypeMapping.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetComplexTypeMapping($index)
    {
        return isset($this->complexTypeMapping[$index]);
    }

    /**
     * unset complexTypeMapping.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetComplexTypeMapping($index)
    {
        unset($this->complexTypeMapping[$index]);
    }

    /**
     * Gets as complexTypeMapping.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportComplexTypeMappingType[]
     */
    public function getComplexTypeMapping()
    {
        return $this->complexTypeMapping;
    }

    /**
     * Sets a new complexTypeMapping.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportComplexTypeMappingType[]
     * $complexTypeMapping
     * @return self
     */
    public function setComplexTypeMapping(array $complexTypeMapping)
    {
        $this->complexTypeMapping = $complexTypeMapping;
        return $this;
    }
}
