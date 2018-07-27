<?php

namespace AlgoWeb\ODataMetadata\MetadataV1\edmx;

use AlgoWeb\ODataMetadata\IsOK;

/**
 * Class representing TAssociationConnectorType.
 *
 * XSD Type: TAssociationConnector
 */
class TAssociationConnectorType extends IsOK
{

    /**
     * @property string $association
     */
    private $association = null;

    /**
     * @property bool $manuallyRouted
     */
    private $manuallyRouted = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV1\edmx\TConnectorPointType[] $connectorPoint
     */
    private $connectorPoint = array();

    /**
     * Gets as association.
     *
     * @return string
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Sets a new association.
     *
     * @param  string $association
     * @return self
     */
    public function setAssociation($association)
    {
        $this->association = $association;
        return $this;
    }

    /**
     * Gets as manuallyRouted.
     *
     * @return bool
     */
    public function getManuallyRouted()
    {
        return $this->manuallyRouted;
    }

    /**
     * Sets a new manuallyRouted.
     *
     * @param  bool $manuallyRouted
     * @return self
     */
    public function setManuallyRouted($manuallyRouted)
    {
        $this->manuallyRouted = $manuallyRouted;
        return $this;
    }

    /**
     * Adds as connectorPoint.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV1\edmx\TConnectorPointType $connectorPoint
     * @return self
     */
    public function addToConnectorPoint(TConnectorPointType $connectorPoint)
    {
        $this->connectorPoint[] = $connectorPoint;
        return $this;
    }

    /**
     * isset connectorPoint.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetConnectorPoint($index)
    {
        return isset($this->connectorPoint[$index]);
    }

    /**
     * unset connectorPoint.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetConnectorPoint($index)
    {
        unset($this->connectorPoint[$index]);
    }

    /**
     * Gets as connectorPoint.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV1\edmx\TConnectorPointType[]
     */
    public function getConnectorPoint()
    {
        return $this->connectorPoint;
    }

    /**
     * Sets a new connectorPoint.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV1\edmx\TConnectorPointType[] $connectorPoint
     * @return self
     */
    public function setConnectorPoint(array $connectorPoint)
    {
        $this->connectorPoint = $connectorPoint;
        return $this;
    }
}
