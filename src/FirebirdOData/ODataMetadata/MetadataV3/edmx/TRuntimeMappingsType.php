<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edmx;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\Mapping;

/**
 * Class representing TRuntimeMappingsType.
 *
 * XSD Type: TRuntimeMappings
 */
class TRuntimeMappingsType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\Mapping $mapping
     */
    private $mapping = null;

    /**
     * Gets as mapping.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\Mapping
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Sets a new mapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\Mapping $mapping
     * @return self
     */
    public function setMapping(Mapping $mapping)
    {
        $msg = null;
        if (!$mapping->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->mapping = $mapping;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (null != $this->mapping && !$this->mapping->isOK($msg)) {
            return false;
        }

        return true;
    }
}
