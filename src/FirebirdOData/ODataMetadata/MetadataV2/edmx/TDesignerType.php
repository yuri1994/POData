<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\edmx;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TDesignerType.
 *
 * XSD Type: TDesigner
 */
class TDesignerType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edmx\TConnectionType $connection
     */
    private $connection = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edmx\TOptionsType $options
     */
    private $options = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edmx\TDiagramType[] $diagrams
     */
    private $diagrams = null;

    /**
     * Gets as connection.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edmx\TConnectionType
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Sets a new connection.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edmx\TConnectionType $connection
     * @return self
     */
    public function setConnection(TConnectionType $connection)
    {
        $this->connection = $connection;
        return $this;
    }

    /**
     * Gets as options.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edmx\TOptionsType
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets a new options.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edmx\TOptionsType $options
     * @return self
     */
    public function setOptions(TOptionsType $options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Adds as diagram.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edmx\TDiagramType $diagram
     * @return self
     */
    public function addToDiagrams(TDiagramType $diagram)
    {
        $this->diagrams[] = $diagram;
        return $this;
    }

    /**
     * isset diagrams.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetDiagrams($index)
    {
        return isset($this->diagrams[$index]);
    }

    /**
     * unset diagrams.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetDiagrams($index)
    {
        unset($this->diagrams[$index]);
    }

    /**
     * Gets as diagrams.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edmx\TDiagramType[]
     */
    public function getDiagrams()
    {
        return $this->diagrams;
    }

    /**
     * Sets a new diagrams.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edmx\TDiagramType[] $diagrams
     * @return self
     */
    public function setDiagrams(array $diagrams)
    {
        $this->diagrams = $diagrams;
        return $this;
    }
}
