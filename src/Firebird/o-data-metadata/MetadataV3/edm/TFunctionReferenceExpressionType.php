<?php

namespace Firebird\ODataMetadata\MetadataV3\edm;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits\TQualifiedNameTrait;

/**
 * Class representing TFunctionReferenceExpressionType.
 *
 * XSD Type: TFunctionReferenceExpression
 */
class TFunctionReferenceExpressionType extends IsOK
{
    use IsOKToolboxTrait, TQualifiedNameTrait;
    /**
     * @property string $function
     */
    private $function = null;

    /**
     * @property
     * \Firebird\ODataMetadata\MetadataV3\edm\TFunctionReferenceExpressionType\ParameterAnonymousType[]
     * $parameter
     */
    private $parameter = [];

    /**
     * Gets as function.
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function.
     *
     * @param  string $function
     * @return self
     */
    public function setFunction($function)
    {
        if (!$this->isTQualifiedNameValid($function)) {
            $msg = 'Function must be a valid TQualifiedName';
            throw new \InvalidArgumentException($msg);
        }
        $this->function = $function;
        return $this;
    }

    /**
     * Adds as parameter.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TFunctionReferenceExpressionType\ParameterAnonymousType
     * $parameter
     * @return self
     */
    public function addToParameter(TFunctionReferenceExpressionType\ParameterAnonymousType $parameter)
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
     * @param  scalar $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter.
     *
     * @return
     * \Firebird\ODataMetadata\MetadataV3\edm\TFunctionReferenceExpressionType\ParameterAnonymousType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TFunctionReferenceExpressionType\ParameterAnonymousType[]
     * $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        if (!$this->isValidArrayOK(
            $parameter,
            '\Firebird\ODataMetadata\MetadataV3\edm\TFunctionReferenceExpressionType\ParameterAnonymousType',
            $msg,
            1
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->parameter = $parameter;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isTQualifiedNameValid($this->function)) {
            $msg = 'Function must be a valid TQualifiedName';
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->function,
            '\Firebird\ODataMetadata\MetadataV3\edm\TFunctionReferenceExpressionType\ParameterAnonymousType',
            $msg,
            1
        )
        ) {
            return false;
        }
        return true;
    }
}