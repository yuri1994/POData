<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\mapping\cs;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TAssociationSetModificationFunctionMappingType.
 *
 * XSD Type: TAssociationSetModificationFunctionMapping
 */
class TAssociationSetModificationFunctionMappingType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetModificationFunctionType
     * $deleteFunction
     */
    private $deleteFunction = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetModificationFunctionType
     * $insertFunction
     */
    private $insertFunction = null;

    /**
     * Gets as deleteFunction.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetModificationFunctionType
     */
    public function getDeleteFunction()
    {
        return $this->deleteFunction;
    }

    /**
     * Sets a new deleteFunction.
     *
     * @param  \FirebirdOData\OData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetModificationFunctionType
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
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetModificationFunctionType
     */
    public function getInsertFunction()
    {
        return $this->insertFunction;
    }

    /**
     * Sets a new insertFunction.
     *
     * @param  \FirebirdOData\OData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetModificationFunctionType
     * $insertFunction
     * @return self
     */
    public function setInsertFunction(TAssociationSetModificationFunctionType $insertFunction)
    {
        $this->insertFunction = $insertFunction;
        return $this;
    }
}
