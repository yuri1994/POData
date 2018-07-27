<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\Groups;

use AlgoWeb\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType;

trait GEmptyElementExtensibilityTrait
{
    use IsOKToolboxTrait;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * Gets as documentation.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
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
