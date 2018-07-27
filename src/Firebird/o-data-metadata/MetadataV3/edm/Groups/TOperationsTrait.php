<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\Groups;

use \Firebird\ODataMetadata\MetadataV3\edm\TOnActionType;
use Firebird\ODataMetadata\IsOKTraits\IsOKToolboxTrait;

trait TOperationsTrait
{
    use IsOKToolboxTrait;
    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\TOnActionType[] $onDelete
     */
    private $onDelete = [];

    /**
     * Adds as onDelete.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TOnActionType $onDelete
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
     * @return \Firebird\ODataMetadata\MetadataV3\edm\TOnActionType[]
     */
    public function getOnDelete()
    {
        return $this->onDelete;
    }

    /**
     * Sets a new onDelete.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TOnActionType[] $onDelete
     * @return self
     */
    public function setOnDelete(array $onDelete)
    {
        $msg = null;
        if (!$this->isValidArrayOK($onDelete, '\Firebird\ODataMetadata\MetadataV3\edm\TOnActionType', $msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->onDelete = $onDelete;
        return $this;
    }

    public function isTOperationsOK(&$msg = null)
    {
        if (!$this->isValidArrayOK($this->onDelete, '\Firebird\ODataMetadata\MetadataV3\edm\TOnActionType', $msg)) {
            return false;
        }
        return true;
    }
}
