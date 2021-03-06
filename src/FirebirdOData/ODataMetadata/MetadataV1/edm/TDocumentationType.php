<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\edm;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TDocumentationType.
 *
 * The Documentation element is used to provide documentation of comments on the
 * contents of the XML file. It is valid under Schema, Type, Index and Relationship
 * elements.
 * XSD Type: TDocumentation
 */
class TDocumentationType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\TTextType $summary
     */
    private $summary = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\TTextType $longDescription
     */
    private $longDescription = null;

    /**
     * Gets as summary.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\TTextType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\TTextType $summary
     * @return self
     */
    public function setSummary(TTextType $summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as longDescription.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\TTextType
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\TTextType $longDescription
     * @return self
     */
    public function setLongDescription(TTextType $longDescription)
    {
        $this->longDescription = $longDescription;
        return $this;
    }
}
