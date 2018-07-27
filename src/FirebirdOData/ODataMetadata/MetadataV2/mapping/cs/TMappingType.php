<?php

namespace Firebird\ODataMetadata\MetadataV2\mapping\cs;

/**
 * Class representing TMappingType.
 *
 * XSD Type: TMapping
 */
class TMappingType extends IsOK
{

    /**
     * @property string $space
     */
    private $space = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\mapping\cs\TAliasType[] $alias
     */
    private $alias = array(
        
    );

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityContainerMappingType
     * $entityContainerMapping
     */
    private $entityContainerMapping = null;

    /**
     * Gets as space.
     *
     * @return string
     */
    public function getSpace()
    {
        return $this->space;
    }

    /**
     * Sets a new space.
     *
     * @param  string $space
     * @return self
     */
    public function setSpace($space)
    {
        $this->space = $space;
        return $this;
    }

    /**
     * Adds as alias.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\mapping\cs\TAliasType $alias
     * @return self
     */
    public function addToAlias(TAliasType $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * isset alias.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetAlias($index)
    {
        return isset($this->alias[$index]);
    }

    /**
     * unset alias.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetAlias($index)
    {
        unset($this->alias[$index]);
    }

    /**
     * Gets as alias.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\mapping\cs\TAliasType[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\mapping\cs\TAliasType[] $alias
     * @return self
     */
    public function setAlias(array $alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Gets as entityContainerMapping.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\mapping\cs\TEntityContainerMappingType
     */
    public function getEntityContainerMapping()
    {
        return $this->entityContainerMapping;
    }

    /**
     * Sets a new entityContainerMapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TEntityContainerMappingType
     * $entityContainerMapping
     * @return self
     */
    public function setEntityContainerMapping(TEntityContainerMappingType $entityContainerMapping)
    {
        $this->entityContainerMapping = $entityContainerMapping;
        return $this;
    }
}
