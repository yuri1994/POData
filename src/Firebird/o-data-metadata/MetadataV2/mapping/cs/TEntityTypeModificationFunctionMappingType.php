<?php

namespace Firebird\ODataMetadata\MetadataV2\mapping\cs;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TEntityTypeModificationFunctionMappingType.
 *
 * XSD Type: TEntityTypeModificationFunctionMapping
 */
class TEntityTypeModificationFunctionMappingType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionType
     * $deleteFunction
     */
    private $deleteFunction = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionWithResultType
     * $insertFunction
     */
    private $insertFunction = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionWithResultType
     * $updateFunction
     */
    private $updateFunction = null;

    /**
     * Gets as deleteFunction.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionType
     */
    public function getDeleteFunction()
    {
        return $this->deleteFunction;
    }

    /**
     * Sets a new deleteFunction.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionType
     * $deleteFunction
     * @return self
     */
    public function setDeleteFunction(TEntityTypeModificationFunctionType $deleteFunction)
    {
        $this->deleteFunction = $deleteFunction;
        return $this;
    }

    /**
     * Gets as insertFunction.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionWithResultType
     */
    public function getInsertFunction()
    {
        return $this->insertFunction;
    }

    /**
     * Sets a new insertFunction.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionWithResultType
     * $insertFunction
     * @return self
     */
    public function setInsertFunction(TEntityTypeModificationFunctionWithResultType $insertFunction)
    {
        $this->insertFunction = $insertFunction;
        return $this;
    }

    /**
     * Gets as updateFunction.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionWithResultType
     */
    public function getUpdateFunction()
    {
        return $this->updateFunction;
    }

    /**
     * Sets a new updateFunction.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityTypeModificationFunctionWithResultType
     * $updateFunction
     * @return self
     */
    public function setUpdateFunction(TEntityTypeModificationFunctionWithResultType $updateFunction)
    {
        $this->updateFunction = $updateFunction;
        return $this;
    }
}
