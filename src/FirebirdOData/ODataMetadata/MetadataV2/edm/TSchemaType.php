<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\edm;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TSchemaType.
 *
 * XSD Type: TSchema
 */
class TSchemaType extends IsOK
{

    /**
     * @property string $namespace
     */
    private $namespace = null;

    /**
     * @property string $alias
     */
    private $alias = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\TUsingType[] $using
     */
    private $using = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\TAssociationType[] $association
     */
    private $association = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\TComplexTypeType[] $complexType
     */
    private $complexType = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\TEntityTypeType[] $entityType
     */
    private $entityType = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\TFunctionType[] $function
     */
    private $function = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\EntityContainer[] $entityContainer
     */
    private $entityContainer = array();

    /**
     * Gets as namespace.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace.
     *
     * @param  string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as alias.
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias.
     *
     * @param  string $alias
     * @return self
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Adds as using.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TUsingType $using
     * @return self
     */
    public function addToUsing(TUsingType $using)
    {
        $this->using[] = $using;
        return $this;
    }

    /**
     * isset using.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetUsing($index)
    {
        return isset($this->using[$index]);
    }

    /**
     * unset using.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetUsing($index)
    {
        unset($this->using[$index]);
    }

    /**
     * Gets as using.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\TUsingType[]
     */
    public function getUsing()
    {
        return $this->using;
    }

    /**
     * Sets a new using.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TUsingType[] $using
     * @return self
     */
    public function setUsing(array $using)
    {
        $this->using = $using;
        return $this;
    }

    /**
     * Adds as association.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TAssociationType $association
     * @return self
     */
    public function addToAssociation(TAssociationType $association)
    {
        $this->association[] = $association;
        return $this;
    }

    /**
     * isset association.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetAssociation($index)
    {
        return isset($this->association[$index]);
    }

    /**
     * unset association.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetAssociation($index)
    {
        unset($this->association[$index]);
    }

    /**
     * Gets as association.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\TAssociationType[]
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Sets a new association.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TAssociationType[] $association
     * @return self
     */
    public function setAssociation(array $association)
    {
        $this->association = $association;
        return $this;
    }

    /**
     * Adds as complexType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TComplexTypeType $complexType
     * @return self
     */
    public function addToComplexType(TComplexTypeType $complexType)
    {
        $this->complexType[] = $complexType;
        return $this;
    }

    /**
     * isset complexType.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetComplexType($index)
    {
        return isset($this->complexType[$index]);
    }

    /**
     * unset complexType.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetComplexType($index)
    {
        unset($this->complexType[$index]);
    }

    /**
     * Gets as complexType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\TComplexTypeType[]
     */
    public function getComplexType()
    {
        return $this->complexType;
    }

    /**
     * Sets a new complexType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TComplexTypeType[] $complexType
     * @return self
     */
    public function setComplexType(array $complexType)
    {
        $this->complexType = $complexType;
        return $this;
    }

    /**
     * Adds as entityType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TEntityTypeType $entityType
     * @return self
     */
    public function addToEntityType(TEntityTypeType $entityType)
    {
        $this->entityType[] = $entityType;
        return $this;
    }

    /**
     * isset entityType.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEntityType($index)
    {
        return isset($this->entityType[$index]);
    }

    /**
     * unset entityType.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEntityType($index)
    {
        unset($this->entityType[$index]);
    }

    /**
     * Gets as entityType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\TEntityTypeType[]
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TEntityTypeType[] $entityType
     * @return self
     */
    public function setEntityType(array $entityType)
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * Adds as function.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TFunctionType $function
     * @return self
     */
    public function addToFunction(TFunctionType $function)
    {
        $this->function[] = $function;
        return $this;
    }

    /**
     * isset function.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetFunction($index)
    {
        return isset($this->function[$index]);
    }

    /**
     * unset function.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetFunction($index)
    {
        unset($this->function[$index]);
    }

    /**
     * Gets as function.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\TFunctionType[]
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TFunctionType[] $function
     * @return self
     */
    public function setFunction(array $function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Adds as entityContainer.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\EntityContainer $entityContainer
     * @return self
     */
    public function addToEntityContainer(EntityContainer $entityContainer)
    {
        $this->entityContainer[] = $entityContainer;
        return $this;
    }

    /**
     * isset entityContainer.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEntityContainer($index)
    {
        return isset($this->entityContainer[$index]);
    }

    /**
     * unset entityContainer.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEntityContainer($index)
    {
        unset($this->entityContainer[$index]);
    }

    /**
     * Gets as entityContainer.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\EntityContainer[]
     */
    public function getEntityContainer()
    {
        return $this->entityContainer;
    }

    /**
     * Sets a new entityContainer.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\EntityContainer[] $entityContainer
     * @return self
     */
    public function setEntityContainer(array $entityContainer)
    {
        $this->entityContainer = $entityContainer;
        return $this;
    }
}
