<?php

namespace Firebird\ODataMetadata\MetadataV1\edmx;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TDesignerType.
 *
 * XSD Type: TDesigner
 */
class TDesignerType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\edmx\TConnectionType $connection
     */
    private $connection = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\edmx\TOptionsType $options
     */
    private $options = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV1\edmx\TDiagramType[] $diagrams
     */
    private $diagrams = null;

    /**
     * Gets as connection.
     *
     * @return \Firebird\ODataMetadata\MetadataV1\edmx\TConnectionType
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Sets a new connection.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edmx\TConnectionType $connection
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
     * @return \Firebird\ODataMetadata\MetadataV1\edmx\TOptionsType
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets a new options.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edmx\TOptionsType $options
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
     * @param  \Firebird\ODataMetadata\MetadataV1\edmx\TDiagramType $diagram
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
     * @return \Firebird\ODataMetadata\MetadataV1\edmx\TDiagramType[]
     */
    public function getDiagrams()
    {
        return $this->diagrams;
    }

    /**
     * Sets a new diagrams.
     *
     * @param  \Firebird\ODataMetadata\MetadataV1\edmx\TDiagramType[] $diagrams
     * @return self
     */
    public function setDiagrams(array $diagrams)
    {
        $this->diagrams = $diagrams;
        return $this;
    }
}
