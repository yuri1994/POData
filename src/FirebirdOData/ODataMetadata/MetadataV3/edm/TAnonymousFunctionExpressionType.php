<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\Groups\GExpressionTrait;

/**
 * Class representing TAnonymousFunctionExpressionType.
 *
 * XSD Type: TAnonymousFunctionExpression
 */
class TAnonymousFunctionExpressionType extends IsOK
{
    use GExpressionTrait;
    
    public function __construct()
    {
        $this->gExpressionMaximum = (0 == count($this->parameters)) ? 1 : 0;
    }
    
    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType[] $parameters
     */
    private $parameters = [];

    /**
     * Adds as parameter.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType $parameter
     * @return self
     */
    public function addToParameters(TFunctionParameterType $parameter)
    {
        $msg = null;
        if (!$parameter->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->parameters[] = $parameter;
        return $this;
    }

    /**
     * isset parameters.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetParameters($index)
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType[] $parameters
     * @return self
     */
    public function setParameters(array $parameters)
    {
        if (!$this->isValidArrayOK(
            $parameters,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->parameters = $parameters;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isValidArrayOK(
            $this->parameters,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionParameterType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isGExpressionValid($msg)) {
            return false;
        }
        return true;
    }
}
