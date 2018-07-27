<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\edmx;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TRuntimeType.
 *
 * XSD Type: TRuntime
 */
class TRuntimeType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeStorageModelsType $storageModels
     */
    private $storageModels = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeConceptualModelsType $conceptualModels
     */
    private $conceptualModels = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeMappingsType $mappings
     */
    private $mappings = null;

    /**
     * Gets as storageModels.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeStorageModelsType
     */
    public function getStorageModels()
    {
        return $this->storageModels;
    }

    /**
     * Sets a new storageModels.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeStorageModelsType $storageModels
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
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeConceptualModelsType
     */
    public function getConceptualModels()
    {
        return $this->conceptualModels;
    }

    /**
     * Sets a new conceptualModels.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeConceptualModelsType $conceptualModels
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
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeMappingsType
     */
    public function getMappings()
    {
        return $this->mappings;
    }

    /**
     * Sets a new mappings.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edmx\TRuntimeMappingsType $mappings
     * @return self
     */
    public function setMappings(TRuntimeMappingsType $mappings)
    {
        $this->mappings = $mappings;
        return $this;
    }
}
