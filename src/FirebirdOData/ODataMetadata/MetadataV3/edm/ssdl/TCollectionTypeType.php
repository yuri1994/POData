<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TCollectionTypeType.
 *
 * XSD Type: TCollectionType
 */
class TCollectionTypeType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TPropertyType[] $rowType
     */
    private $rowType = [];

    /**
     * Adds as property.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TPropertyType $property
     * @return self
     */
    public function addToRowType(TPropertyType $property)
    {
        $msg = null;
        if (!$property->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->rowType[] = $property;
        return $this;
    }

    /**
     * isset rowType.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetRowType($index)
    {
        return isset($this->rowType[$index]);
    }

    /**
     * unset rowType.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetRowType($index)
    {
        unset($this->rowType[$index]);
    }

    /**
     * Gets as rowType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TPropertyType[]
     */
    public function getRowType()
    {
        return $this->rowType;
    }

    /**
     * Sets a new rowType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TPropertyType[] $rowType
     * @return self
     */
    public function setRowType(array $rowType)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $rowType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TPropertyType',
            $msg,
            1
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->rowType = $rowType;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isValidArrayOK(
            $this->rowType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TPropertyType',
            $msg,
            1
        )
        ) {
            return false;
        }
        return true;
    }
}
