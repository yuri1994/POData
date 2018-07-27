<?php

namespace Firebird\ODataMetadata\MetadataV1\edm;

use Firebird\ODataMetadata\IsOK;

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
     * @property \Firebird\ODataMetadata\MetadataV1\edm\TUsingType[] $using
     */
    private $using = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\edm\TAssociationType[] $association
     */
    private $association = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\edm\TComplexTypeType[] $complexType
     */
    private $complexType = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\edm\TEntityTypeType[] $entityType
     */
    private $entityType = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\edm\EntityContainer[] $entityContainer
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
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\TUsingType $using
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
     * @return \Firebird\ODataMetadata\MetadataV1\edm\TUsingType[]
     */
    public function getUsing()
    {
        return $this->using;
    }

    /**
     * Sets a new using.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\TUsingType[] $using
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
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\TAssociationType $association
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
     * @return \Firebird\ODataMetadata\MetadataV1\edm\TAssociationType[]
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Sets a new association.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\TAssociationType[] $association
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
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\TComplexTypeType $complexType
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
     * @return \Firebird\ODataMetadata\MetadataV1\edm\TComplexTypeType[]
     */
    public function getComplexType()
    {
        return $this->complexType;
    }

    /**
     * Sets a new complexType.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\TComplexTypeType[] $complexType
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
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\TEntityTypeType $entityType
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
     * @return \Firebird\ODataMetadata\MetadataV1\edm\TEntityTypeType[]
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\TEntityTypeType[] $entityType
     * @return self
     */
    public function setEntityType(array $entityType)
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * Adds as entityContainer.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\EntityContainer $entityContainer
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
     * @return \Firebird\ODataMetadata\MetadataV1\edm\EntityContainer[]
     */
    public function getEntityContainer()
    {
        return $this->entityContainer;
    }

    /**
     * Sets a new entityContainer.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edm\EntityContainer[] $entityContainer
     * @return self
     */
    public function setEntityContainer(array $entityContainer)
    {
        $this->entityContainer = $entityContainer;
        return $this;
    }
}
