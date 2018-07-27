<?php

namespace Firebird\ODataMetadata\MetadataV1\mapping\cs;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TAssociationSetModificationFunctionMappingType.
 *
 * XSD Type: TAssociationSetModificationFunctionMapping
 */
class TAssociationSetModificationFunctionMappingType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\TAssociationSetModificationFunctionType
     * $deleteFunction
     */
    private $deleteFunction = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\TAssociationSetModificationFunctionType
     * $insertFunction
     */
    private $insertFunction = null;

    /**
     * Gets as deleteFunction.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\TAssociationSetModificationFunctionType
     */
    public function getDeleteFunction()
    {
        return $this->deleteFunction;
    }

    /**
     * Sets a new deleteFunction.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\TAssociationSetModificationFunctionType
     * $deleteFunction
     * @return self
     */
    public function setDeleteFunction(TAssociationSetModificationFunctionType $deleteFunction)
    {
        $this->deleteFunction = $deleteFunction;
        return $this;
    }

    /**
     * Gets as insertFunction.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\TAssociationSetModificationFunctionType
     */
    public function getInsertFunction()
    {
        return $this->insertFunction;
    }

    /**
     * Sets a new insertFunction.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\TAssociationSetModificationFunctionType
     * $insertFunction
     * @return self
     */
    public function setInsertFunction(TAssociationSetModificationFunctionType $insertFunction)
    {
        $this->insertFunction = $insertFunction;
        return $this;
    }
}
