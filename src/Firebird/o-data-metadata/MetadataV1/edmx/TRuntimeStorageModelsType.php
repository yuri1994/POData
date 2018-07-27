<?php

namespace Firebird\ODataMetadata\MetadataV1\edmx;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV1\edm\ssdl\Schema;

/**
 * Class representing TRuntimeStorageModelsType.
 *
 * XSD Type: TRuntimeStorageModels
 */
class TRuntimeStorageModelsType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\edm\ssdl\Schema $schema
     */
    private $schema = null;

    /**
     * Gets as schema.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\edm\ssdl\Schema
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Sets a new schema.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\ssdl\Schema $schema
     * @return self
     */
    public function setSchema(Schema $schema)
    {
        $this->schema = $schema;
        return $this;
    }
}
