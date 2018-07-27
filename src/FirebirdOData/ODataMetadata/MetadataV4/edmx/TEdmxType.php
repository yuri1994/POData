<?php

namespace FirebirdOData\ODataMetadata\MetadataV4\edmx;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV4\edm\Schema;

/**
 * Class representing TEdmxType.
 *
 * XSD Type: TEdmx
 */
class TEdmxType extends IsOK
{

    /**
     * @property float $version
     */
    private $version = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV4\edmx\TReferenceType[] $reference
     */
    private $reference = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV4\edm\Schema[] $dataServices
     */
    private $dataServices = null;

    /**
     * Gets as version.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param  float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as reference.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV4\edmx\TReferenceType $reference
     * @return self
     */
    public function addToReference(TReferenceType $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV4\edmx\TReferenceType[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV4\edmx\TReferenceType[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Adds as schema.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV4\edm\Schema $schema
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
     * @param  int  $index
     * @return bool
     */
    public function issetDataServices($index)
    {
        return isset($this->dataServices[$index]);
    }

    /**
     * unset dataServices.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetDataServices($index)
    {
        unset($this->dataServices[$index]);
    }

    /**
     * Gets as dataServices.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV4\edm\Schema[]
     */
    public function getDataServices()
    {
        return $this->dataServices;
    }

    /**
     * Sets a new dataServices.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV4\edm\Schema[] $dataServices
     * @return self
     */
    public function setDataServices(array $dataServices)
    {
        $this->dataServices = $dataServices;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (null === $this->version) {
            $msg = 'Edmx version can not be null';
            return false;
        }
        if (is_float($this->version)) {
            if (!$this->isValidArray($this->dataServices, '\FirebirdOData\ODataMetadata\MetadataV4\edm\Schema', 1)) {
                $msg = 'Edmx dataservice definition contains invalid enteries.';
                return false;
            }
        }
        if (!$this->isValidArray($this->reference, '\FirebirdOData\ODataMetadata\MetadataV4\edmx\TReferenceType')) {
            $msg = 'Edmx references contains invalid elements';
            return false;
        }
        if (!$this->isChildArrayOK($this->dataServices, $msg)) {
            return false;
        }
        if (!$this->isChildArrayOK($this->reference, $msg)) {
            return false;
        }
        return true;
    }
}
