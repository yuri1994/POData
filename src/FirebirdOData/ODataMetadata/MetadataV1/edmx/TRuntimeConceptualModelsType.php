<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\edmx;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV1\edm\Schema;

/**
 * Class representing TRuntimeConceptualModelsType.
 *
 * XSD Type: TRuntimeConceptualModels
 */
class TRuntimeConceptualModelsType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\Schema $schema
     */
    private $schema = null;

    /**
     * Gets as schema.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\Schema
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Sets a new schema.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\Schema $schema
     * @return self
     */
    public function setSchema(Schema $schema)
    {
        $this->schema = $schema;
        return $this;
    }
}
