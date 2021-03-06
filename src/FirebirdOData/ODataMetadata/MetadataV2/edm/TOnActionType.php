<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\edm;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TOnActionType.
 *
 * XSD Type: TOnAction
 */
class TOnActionType extends IsOK
{

    /**
     * @property string $action
     */
    private $action = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
     */
    private $documentation = null;

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
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }
}
