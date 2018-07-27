<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edmx;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TDesignerType.
 *
 * XSD Type: TDesigner
 */
class TDesignerType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edmx\TConnectionType $connection
     */
    private $connection = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edmx\TOptionsType $options
     */
    private $options = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edmx\TDiagramType[] $diagrams
     */
    private $diagrams = [];

    /**
     * Gets as connection.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edmx\TConnectionType
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Sets a new connection.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edmx\TConnectionType $connection
     * @return self
     */
    public function setConnection(TConnectionType $connection)
    {
        $msg = null;
        if (!$connection->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->connection = $connection;
        return $this;
    }

    /**
     * Gets as options.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edmx\TOptionsType
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets a new options.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edmx\TOptionsType $options
     * @return self
     */
    public function setOptions(TOptionsType $options)
    {
        $msg = null;
        if (!$options->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->options = $options;
        return $this;
    }

    /**
     * Adds as diagram.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edmx\TDiagramType $diagram
     * @return self
     */
    public function addToDiagrams(TDiagramType $diagram)
    {
        $msg = null;
        if (!$diagram->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
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
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edmx\TDiagramType[]
     */
    public function getDiagrams()
    {
        return $this->diagrams;
    }

    /**
     * Sets a new diagrams.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edmx\TDiagramType[] $diagrams
     * @return self
     */
    public function setDiagrams(array $diagrams)
    {
        if (!$this->isValidArrayOK(
            $diagrams,
            '\FirebirdOData\ODataMetadata\MetadataV3\edmx\TDiagramType'
        )
        ) {
            $msg = 'Diagrams array not a valid array';
            throw new \InvalidArgumentException($msg);
        }
        $this->diagrams = $diagrams;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (null != $this->connection && !$this->connection->isOK($msg)) {
            return false;
        }
        if (null != $this->options && !$this->options->isOK($msg)) {
            return false;
        }

        if (!$this->isValidArray(
            $this->diagrams,
            '\FirebirdOData\ODataMetadata\MetadataV3\edmx\TDiagramType'
        )
        ) {
            $msg = 'Diagrams array not a valid array';
            return false;
        }
        if (!$this->isChildArrayOK($this->diagrams, $msg)) {
            return false;
        }
        return true;
    }
}
