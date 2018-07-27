<?php

namespace Firebird\ODataMetadata\MetadataV1\edmx;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV1\mapping\cs\Mapping;

/**
 * Class representing TRuntimeMappingsType.
 *
 * XSD Type: TRuntimeMappings
 */
class TRuntimeMappingsType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\Mapping $mapping
     */
    private $mapping = null;

    /**
     * Gets as mapping.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\Mapping
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Sets a new mapping.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\Mapping $mapping
     * @return self
     */
    public function setMapping(Mapping $mapping)
    {
        $this->mapping = $mapping;
        return $this;
    }
}
