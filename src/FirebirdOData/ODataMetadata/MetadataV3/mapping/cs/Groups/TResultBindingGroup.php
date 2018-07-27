<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\Groups;

use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TResultBindingType;

trait TResultBindingGroup
{
    //Grouping for result bindings in function mappings
    use IsOKToolboxTrait;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TResultBindingType[] $resultBinding
     */
    private $resultBinding = [];

    /*
     * Adds as resultBinding
     *
     * @return self
     * @param \FirebirdOData\OData\ODataMetadata\MetadataV3\mapping\cs\TResultBindingType $resultBinding
     */
    public function addToResultBinding(TResultBindingType $resultBinding)
    {
        $msg = null;
        if (!$resultBinding->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->resultBinding[] = $resultBinding;
        return $this;
    }

    /**
     * isset resultBinding.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetResultBinding($index)
    {
        return isset($this->resultBinding[$index]);
    }

    /**
     * unset resultBinding.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetResultBinding($index)
    {
        unset($this->resultBinding[$index]);
    }

    /**
     * Gets as resultBinding.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TResultBindingType[]
     */
    public function getResultBinding()
    {
        return $this->resultBinding;
    }

    /**
     * Sets a new resultBinding.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TResultBindingType[] $resultBinding
     * @return self
     */
    public function setResultBinding(array $resultBinding)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $resultBinding,
            '\FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TResultBindingType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->resultBinding = $resultBinding;
        return $this;
    }

    public function isResultBindingGroupOK(&$msg = null)
    {
        if (!$this->isValidArray(
            $this->resultBinding,
            '\FirebirdOData\ODataMetadata\MetadataV3\mapping\cs\TScalarPropertyType'
        )
        ) {
            $msg = 'Scalar property array not a valid array';
            return false;
        }
        if (!$this->isChildArrayOK($this->resultBinding, $msg)) {
            return false;
        }

        return true;
    }
}
