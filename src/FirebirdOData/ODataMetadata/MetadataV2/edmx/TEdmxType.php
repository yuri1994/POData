<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\edmx;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV2\edm\Schema;

/**
 * Class representing TEdmxType.
 *
 * XSD Type: TEdmx
 */
class TEdmxType extends IsOK
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edmx\TDesignerType $designer
     */
    private $designer = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edmx\TRuntimeType $runtime
     */
    private $runtime = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\Schema[] $dataServices
     */
    private $dataServices = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param  string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as designer.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edmx\TDesignerType
     */
    public function getDesigner()
    {
        return $this->designer;
    }

    /**
     * Sets a new designer.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edmx\TDesignerType $designer
     * @return self
     */
    public function setDesigner(TDesignerType $designer)
    {
        $this->designer = $designer;
        return $this;
    }

    /**
     * Gets as runtime.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edmx\TRuntimeType
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Sets a new runtime.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edmx\TRuntimeType $runtime
     * @return self
     */
    public function setRuntime(TRuntimeType $runtime)
    {
        $this->runtime = $runtime;
        return $this;
    }

    /**
     * Adds as schema.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\Schema $schema
     * @return self
     */
    public function addToDataServices(Schema $schema)
    {
        $this->dataServices[] = $schema;
        return $this;
    }

    /**
     * isset dataServices.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetDataServices($index)
    {
        return isset($this->dataServices[$index]);
    }

    /**
     * unset dataServices.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetDataServices($index)
    {
        unset($this->dataServices[$index]);
    }

    /**
     * Gets as dataServices.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\Schema[]
     */
    public function getDataServices()
    {
        return $this->dataServices;
    }

    /**
     * Sets a new dataServices.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\Schema[] $dataServices
     * @return self
     */
    public function setDataServices(array $dataServices)
    {
        $this->dataServices = $dataServices;
        return $this;
    }
}
