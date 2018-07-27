<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\Groups;

use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TDocumentationType;

trait GEmptyElementExtensibilityTrait
{
    use IsOKToolboxTrait;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * Gets as documentation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $msg = null;
        if (!$documentation->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->documentation = $documentation;
        return $this;
    }

    public function isExtensibilityElementOK(&$msg = null)
    {
        if (!$this->isObjectNullOrOK($this->documentation, $msg)) {
            return false;
        }
        return true;
    }
}
