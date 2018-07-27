<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\Groups\GEmptyElementExtensibilityTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits\TActionTrait;

/**
 * Class representing TOnActionType.
 *
 * XSD Type: TOnAction
 */
class TOnActionType extends IsOK
{
    use GEmptyElementExtensibilityTrait, TActionTrait;
    /**
     * @property string $action
     */
    private $action = null;

    /**
     * Gets as action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action.
     *
     * @param  string $action
     * @return self
     */
    public function setAction($action)
    {
        if (!$this->isTActionValid($action)) {
            $msg = 'Action must be a valid TAction';
            throw new \InvalidArgumentException($msg);
        }
        $this->action = $action;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isTActionValid($this->action)) {
            $msg = 'Action must be a valid TAction';
            return false;
        }
        if (!$this->isExtensibilityElementOK($msg)) {
            return false;
        }
        return true;
    }
}
