<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\edm\ssdl;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TPropertyRefType.
 *
 * XSD Type: TPropertyRef
 */
class TPropertyRefType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\ssdl\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }
}
