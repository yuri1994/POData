<?php

namespace Firebird\ODataMetadata\MetadataV2\edmx;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TRuntimeType.
 *
 * XSD Type: TRuntime
 */
class TRuntimeType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeStorageModelsType $storageModels
     */
    private $storageModels = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeConceptualModelsType $conceptualModels
     */
    private $conceptualModels = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeMappingsType $mappings
     */
    private $mappings = null;

    /**
     * Gets as storageModels.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeStorageModelsType
     */
    public function getStorageModels()
    {
        return $this->storageModels;
    }

    /**
     * Sets a new storageModels.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeStorageModelsType $storageModels
     * @return self
     */
    public function setStorageModels(TRuntimeStorageModelsType $storageModels)
    {
        $this->storageModels = $storageModels;
        return $this;
    }

    /**
     * Gets as conceptualModels.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeConceptualModelsType
     */
    public function getConceptualModels()
    {
        return $this->conceptualModels;
    }

    /**
     * Sets a new conceptualModels.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeConceptualModelsType $conceptualModels
     * @return self
     */
    public function setConceptualModels(TRuntimeConceptualModelsType $conceptualModels)
    {
        $this->conceptualModels = $conceptualModels;
        return $this;
    }

    /**
     * Gets as mappings.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeMappingsType
     */
    public function getMappings()
    {
        return $this->mappings;
    }

    /**
     * Sets a new mappings.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edmx\TRuntimeMappingsType $mappings
     * @return self
     */
    public function setMappings(TRuntimeMappingsType $mappings)
    {
        $this->mappings = $mappings;
        return $this;
    }
}
