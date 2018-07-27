<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl;

use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;

trait TOperations
{
    use IsOKToolboxTrait;
    
    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TOnActionType[] $onDelete
     */
    private $onDelete = [];

    /**
     * Adds as onDelete.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TOnActionType $onDelete
     * @return self
     */
    public function addToOnDelete(TOnActionType $onDelete)
    {
        $msg = null;
        if (!$onDelete->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->onDelete[] = $onDelete;
        return $this;
    }

    /**
     * isset onDelete.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetOnDelete($index)
    {
        return isset($this->onDelete[$index]);
    }

    /**
     * unset onDelete.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetOnDelete($index)
    {
        unset($this->onDelete[$index]);
    }

    /**
     * Gets as onDelete.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TOnActionType[]
     */
    public function getOnDelete()
    {
        return $this->onDelete;
    }

    /**
     * Sets a new onDelete.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TOnActionType[] $onDelete
     * @return self
     */
    public function setOnDelete(array $onDelete)
    {
        if (!$this->isValidArrayOK($onDelete, '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TOnActionType', $msg)) {
            return false;
        }
        $this->onDelete = $onDelete;
        return $this;
    }
    
    public function isOperationsGroupOK(&$msg = null)
    {
        if (!$this->isValidArrayOK($this->onDelete, '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TOnActionType', $msg)) {
            return false;
        }
        return true;
    }
}
