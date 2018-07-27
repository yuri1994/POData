<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\TAnonymousFunctionExpressionType;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use Firebird\ODataMetadata\MetadataV3\edm\TFunctionParameterType;

/**
 * Class representing ParametersAnonymousType.
 */
class ParametersAnonymousType extends IsOK
{
    use IsOKToolboxTrait;
    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\TFunctionParameterType[] $parameter
     */
    private $parameter = [];

    /**
     * Adds as parameter.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TFunctionParameterType $parameter
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
     * @return \Firebird\ODataMetadata\MetadataV3\edm\TFunctionParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TFunctionParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $parameter,
            '\Firebird\ODataMetadata\MetadataV3\edm\TFunctionParameterType',
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
            '\Firebird\ODataMetadata\MetadataV3\edm\TFunctionParameterType',
            $msg
        );
    }
}
