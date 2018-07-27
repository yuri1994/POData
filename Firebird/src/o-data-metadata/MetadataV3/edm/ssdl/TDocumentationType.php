<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl;

use AlgoWeb\ODataMetadata\IsOK;

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
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TTextType $summary
     */
    private $summary = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TTextType $longDescription
     */
    private $longDescription = null;

    /**
     * Gets as summary.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TTextType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TTextType $summary
     * @return self
     */
    public function setSummary(TTextType $summary)
    {
        $msg = null;
        if (!$summary->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as longDescription.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TTextType
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TTextType $longDescription
     * @return self
     */
    public function setLongDescription(TTextType $longDescription)
    {
        $msg = null;
        if (!$longDescription->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->longDescription = $longDescription;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isObjectNullOrOK($this->summary, $msg)) {
            return false;
        }
        if (!$this->isObjectNullOrOK($this->longDescription, $msg)) {
            return false;
        }
        return true;
    }
}
