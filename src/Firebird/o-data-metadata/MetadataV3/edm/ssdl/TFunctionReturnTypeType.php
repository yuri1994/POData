<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\ssdl;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TFunctionReturnTypeType.
 *
 * XSD Type: TFunctionReturnType
 */
class TFunctionReturnTypeType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TCollectionTypeType $collectionType
     */
    private $collectionType = null;

    /**
     * Gets as collectionType.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TCollectionTypeType
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TCollectionTypeType $collectionType
     * @return self
     */
    public function setCollectionType(TCollectionTypeType $collectionType)
    {
        $msg = null;
        if (!$collectionType->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->collectionType = $collectionType;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isObjectNullOrOK($this->collectionType, $msg)) {
            return false;
        }
        return true;
    }
}
