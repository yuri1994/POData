<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\mapping\cs;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TEntityContainerMappingType.
 *
 * XSD Type: TEntityContainerMapping
 */
class TEntityContainerMappingType extends IsOK
{

    /**
     * @property string $cdmEntityContainer
     */
    private $cdmEntityContainer = null;

    /**
     * @property string $storageEntityContainer
     */
    private $storageEntityContainer = null;

    /**
     * @property bool $generateUpdateViews
     */
    private $generateUpdateViews = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TEntitySetMappingType[] $entitySetMapping
     */
    private $entitySetMapping = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetMappingType[]
     * $associationSetMapping
     */
    private $associationSetMapping = array();

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportMappingType[]
     * $functionImportMapping
     */
    private $functionImportMapping = array();

    /**
     * Gets as cdmEntityContainer.
     *
     * @return string
     */
    public function getCdmEntityContainer()
    {
        return $this->cdmEntityContainer;
    }

    /**
     * Sets a new cdmEntityContainer.
     *
     * @param  string $cdmEntityContainer
     * @return self
     */
    public function setCdmEntityContainer($cdmEntityContainer)
    {
        $this->cdmEntityContainer = $cdmEntityContainer;
        return $this;
    }

    /**
     * Gets as storageEntityContainer.
     *
     * @return string
     */
    public function getStorageEntityContainer()
    {
        return $this->storageEntityContainer;
    }

    /**
     * Sets a new storageEntityContainer.
     *
     * @param  string $storageEntityContainer
     * @return self
     */
    public function setStorageEntityContainer($storageEntityContainer)
    {
        $this->storageEntityContainer = $storageEntityContainer;
        return $this;
    }

    /**
     * Gets as generateUpdateViews.
     *
     * @return bool
     */
    public function getGenerateUpdateViews()
    {
        return $this->generateUpdateViews;
    }

    /**
     * Sets a new generateUpdateViews.
     *
     * @param  bool $generateUpdateViews
     * @return self
     */
    public function setGenerateUpdateViews($generateUpdateViews)
    {
        $this->generateUpdateViews = $generateUpdateViews;
        return $this;
    }

    /**
     * Adds as entitySetMapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TEntitySetMappingType $entitySetMapping
     * @return self
     */
    public function addToEntitySetMapping(TEntitySetMappingType $entitySetMapping)
    {
        $this->entitySetMapping[] = $entitySetMapping;
        return $this;
    }

    /**
     * isset entitySetMapping.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEntitySetMapping($index)
    {
        return isset($this->entitySetMapping[$index]);
    }

    /**
     * unset entitySetMapping.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEntitySetMapping($index)
    {
        unset($this->entitySetMapping[$index]);
    }

    /**
     * Gets as entitySetMapping.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TEntitySetMappingType[]
     */
    public function getEntitySetMapping()
    {
        return $this->entitySetMapping;
    }

    /**
     * Sets a new entitySetMapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TEntitySetMappingType[] $entitySetMapping
     * @return self
     */
    public function setEntitySetMapping(array $entitySetMapping)
    {
        $this->entitySetMapping = $entitySetMapping;
        return $this;
    }

    /**
     * Adds as associationSetMapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetMappingType $associationSetMapping
     * @return self
     */
    public function addToAssociationSetMapping(TAssociationSetMappingType $associationSetMapping)
    {
        $this->associationSetMapping[] = $associationSetMapping;
        return $this;
    }

    /**
     * isset associationSetMapping.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetAssociationSetMapping($index)
    {
        return isset($this->associationSetMapping[$index]);
    }

    /**
     * unset associationSetMapping.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetAssociationSetMapping($index)
    {
        unset($this->associationSetMapping[$index]);
    }

    /**
     * Gets as associationSetMapping.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetMappingType[]
     */
    public function getAssociationSetMapping()
    {
        return $this->associationSetMapping;
    }

    /**
     * Sets a new associationSetMapping.
     *
     * @param  \FirebirdOData\OData\ODataMetadata\MetadataV2\mapping\cs\TAssociationSetMappingType[]
     * $associationSetMapping
     * @return self
     */
    public function setAssociationSetMapping(array $associationSetMapping)
    {
        $this->associationSetMapping = $associationSetMapping;
        return $this;
    }

    /**
     * Adds as functionImportMapping.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportMappingType $functionImportMapping
     * @return self
     */
    public function addToFunctionImportMapping(TFunctionImportMappingType $functionImportMapping)
    {
        $this->functionImportMapping[] = $functionImportMapping;
        return $this;
    }

    /**
     * isset functionImportMapping.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetFunctionImportMapping($index)
    {
        return isset($this->functionImportMapping[$index]);
    }

    /**
     * unset functionImportMapping.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetFunctionImportMapping($index)
    {
        unset($this->functionImportMapping[$index]);
    }

    /**
     * Gets as functionImportMapping.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportMappingType[]
     */
    public function getFunctionImportMapping()
    {
        return $this->functionImportMapping;
    }

    /**
     * Sets a new functionImportMapping.
     *
     * @param  \FirebirdOData\OData\ODataMetadata\MetadataV2\mapping\cs\TFunctionImportMappingType[]
     * $functionImportMapping
     * @return self
     */
    public function setFunctionImportMapping(array $functionImportMapping)
    {
        $this->functionImportMapping = $functionImportMapping;
        return $this;
    }
}
