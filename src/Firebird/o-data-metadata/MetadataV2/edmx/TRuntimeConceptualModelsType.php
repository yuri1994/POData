<?php

namespace Firebird\ODataMetadata\MetadataV2\edmx;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV2\edm\Schema;

/**
 * Class representing TRuntimeConceptualModelsType.
 *
 * XSD Type: TRuntimeConceptualModels
 */
class TRuntimeConceptualModelsType extends IsOK
{

    /**
     * @property Schema $schema
     */
    private $schema = null;

    /**
     * Gets as schema.
     *
     * @return Schema
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Sets a new schema.
     *
     * @param  Schema $schema
     * @return self
     */
    public function setSchema(Schema $schema)
    {
        $this->schema = $schema;
        return $this;
    }
}
