<?php

namespace Firebird\ODataMetadata\MetadataV1\mapping\cs;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TEntityTypeMappingType.
 *
 * XSD Type: TEntityTypeMapping
 */
class TEntityTypeMappingType extends IsOK
{

    /**
     * @property string $typeName
     */
    private $typeName = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\TMappingFragmentType[] $mappingFragment
     */
    private $mappingFragment = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\mapping\cs\TEntityTypeModificationFunctionMappingType
     * $modificationFunctionMapping
     */
    private $modificationFunctionMapping = null;

    /**
     * Gets as typeName.
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Sets a new typeName.
     *
     * @param  string $typeName
     * @return self
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * Adds as mappingFragment.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\TMappingFragmentType $mappingFragment
     * @return self
     */
    public function addToMappingFragment(TMappingFragmentType $mappingFragment)
    {
        $this->mappingFragment[] = $mappingFragment;
        return $this;
    }

    /**
     * isset mappingFragment.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetMappingFragment($index)
    {
        return isset($this->mappingFragment[$index]);
    }

    /**
     * unset mappingFragment.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetMappingFragment($index)
    {
        unset($this->mappingFragment[$index]);
    }

    /**
     * Gets as mappingFragment.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\TMappingFragmentType[]
     */
    public function getMappingFragment()
    {
        return $this->mappingFragment;
    }

    /**
     * Sets a new mappingFragment.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\mapping\cs\TMappingFragmentType[] $mappingFragment
     * @return self
     */
    public function setMappingFragment(array $mappingFragment)
    {
        $this->mappingFragment = $mappingFragment;
        return $this;
    }

    /**
     * Gets as modificationFunctionMapping.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\mapping\cs\TEntityTypeModificationFunctionMappingType
     */
    public function getModificationFunctionMapping()
    {
        return $this->modificationFunctionMapping;
    }

    /**
     * Sets a new modificationFunctionMapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\mapping\cs\TEntityTypeModificationFunctionMappingType
     * $modificationFunctionMapping
     * @return self
     */
    public function setModificationFunctionMapping(TEntityTypeModificationFunctionMappingType $modificationFunctionMapping)
    {
        $this->modificationFunctionMapping = $modificationFunctionMapping;
        return $this;
    }
}
