<?php

namespace Firebird\ODataMetadata\MetadataV3\mapping\cs;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TAssociationSetModificationFunctionMappingType.
 *
 * Type for AssociationSetMapping/ModificationFunctionMapping element
 *
 * XSD Type: TAssociationSetModificationFunctionMapping
 */
class TAssociationSetModificationFunctionMappingType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\mapping\cs\TAssociationSetModificationFunctionType
     * $deleteFunction
     */
    private $deleteFunction = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\mapping\cs\TAssociationSetModificationFunctionType
     * $insertFunction
     */
    private $insertFunction = null;

    /**
     * Gets as deleteFunction.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\mapping\cs\TAssociationSetModificationFunctionType
     */
    public function getDeleteFunction()
    {
        return $this->deleteFunction;
    }

    /**
     * Sets a new deleteFunction.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TAssociationSetModificationFunctionType
     * $deleteFunction
     * @return self
     */
    public function setDeleteFunction(TAssociationSetModificationFunctionType $deleteFunction)
    {
        $msg = null;
        if (!$deleteFunction->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->deleteFunction = $deleteFunction;
        return $this;
    }

    /**
     * Gets as insertFunction.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\mapping\cs\TAssociationSetModificationFunctionType
     */
    public function getInsertFunction()
    {
        return $this->insertFunction;
    }

    /**
     * Sets a new insertFunction.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TAssociationSetModificationFunctionType
     * $insertFunction
     * @return self
     */
    public function setInsertFunction(TAssociationSetModificationFunctionType $insertFunction)
    {
        $msg = null;
        if (!$insertFunction->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->insertFunction = $insertFunction;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (null != $this->deleteFunction && !$this->deleteFunction->isOK($msg)) {
            return false;
        }
        if (null != $this->insertFunction && !$this->insertFunction->isOK($msg)) {
            return false;
        }
        return true;
    }
}
