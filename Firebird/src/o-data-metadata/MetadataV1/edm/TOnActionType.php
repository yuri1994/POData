<?php

namespace AlgoWeb\ODataMetadata\MetadataV1\edm;

use AlgoWeb\ODataMetadata\IsOK;

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
     * @property \AlgoWeb\ODataMetadata\MetadataV1\edm\TDocumentationType $documentation
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
     * @return \AlgoWeb\ODataMetadata\MetadataV1\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV1\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }
}
