<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\TAnonymousFunctionExpressionType;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType;

/**
 * Class representing ParametersAnonymousType.
 */
class ParametersAnonymousType extends IsOK
{
    use IsOKToolboxTrait;
    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType[] $parameter
     */
    private $parameter = [];

    /**
     * Adds as parameter.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType $parameter
     * @return self
     */
    public function addToParameter(TFunctionParameterType $parameter)
    {
        $msg = null;
        if (!$parameter->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $parameter,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        };
        $this->parameter = $parameter;
        return $this;
    }
    
    public function isOK(&$msg = null)
    {
        return !$this->isValidArrayOK(
            $this->parameter,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType',
            $msg
        );
    }
}
