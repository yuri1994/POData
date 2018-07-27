<?php

namespace Firebird\ODataMetadata\MetadataV3\edmx;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TDiagramType.
 *
 * XSD Type: TDiagram
 */
class TDiagramType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $diagramId
     */
    private $diagramId = null;

    /**
     * @property int $zoomLevel
     */
    private $zoomLevel = null;

    /**
     * @property bool $showGrid
     */
    private $showGrid = null;

    /**
     * @property bool $snapToGrid
     */
    private $snapToGrid = null;

    /**
     * @property bool $displayType
     */
    private $displayType = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edmx\TEntityTypeShapeType[] $entityTypeShape
     */
    private $entityTypeShape = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edmx\TAssociationConnectorType[] $associationConnector
     */
    private $associationConnector = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edmx\TInheritanceConnectorType[] $inheritanceConnector
     */
    private $inheritanceConnector = [];

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        if (!$this->isStringNotNullOrEmpty($name)) {
            $msg = 'Name cannot be null or empty';
            throw new \InvalidArgumentException($msg);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as diagramId.
     *
     * @return string
     */
    public function getDiagramId()
    {
        return $this->diagramId;
    }

    /**
     * Sets a new diagramId.
     *
     * @param  string $diagramId
     * @return self
     */
    public function setDiagramId($diagramId)
    {
        if (null != $diagramId && !$this->isStringNotNullOrEmpty($diagramId)) {
            $msg = 'Diagram ID cannot be empty';
            throw new \InvalidArgumentException($msg);
        }
        $this->diagramId = $diagramId;
        return $this;
    }

    /**
     * Gets as zoomLevel.
     *
     * @return int
     */
    public function getZoomLevel()
    {
        return $this->zoomLevel;
    }

    /**
     * Sets a new zoomLevel.
     *
     * @param  int  $zoomLevel
     * @return self
     */
    public function setZoomLevel($zoomLevel)
    {
        if (null != $zoomLevel && !is_integer($zoomLevel)) {
            $msg = 'Zoom level must be integral';
            throw new \InvalidArgumentException($msg);
        }
        $this->zoomLevel = $zoomLevel;
        return $this;
    }

    /**
     * Gets as showGrid.
     *
     * @return bool
     */
    public function getShowGrid()
    {
        return $this->showGrid;
    }

    /**
     * Sets a new showGrid.
     *
     * @param  bool $showGrid
     * @return self
     */
    public function setShowGrid($showGrid)
    {
        $this->showGrid = $showGrid;
        return $this;
    }

    /**
     * Gets as snapToGrid.
     *
     * @return bool
     */
    public function getSnapToGrid()
    {
        return $this->snapToGrid;
    }

    /**
     * Sets a new snapToGrid.
     *
     * @param  bool $snapToGrid
     * @return self
     */
    public function setSnapToGrid($snapToGrid)
    {
        $this->snapToGrid = $snapToGrid;
        return $this;
    }

    /**
     * Gets as displayType.
     *
     * @return bool
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * Sets a new displayType.
     *
     * @param  bool $displayType
     * @return self
     */
    public function setDisplayType($displayType)
    {
        $this->displayType = $displayType;
        return $this;
    }

    /**
     * Adds as entityTypeShape.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edmx\TEntityTypeShapeType $entityTypeShape
     * @return self
     */
    public function addToEntityTypeShape(TEntityTypeShapeType $entityTypeShape)
    {
        $msg = null;
        if (!$entityTypeShape->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->entityTypeShape[] = $entityTypeShape;
        return $this;
    }

    /**
     * isset entityTypeShape.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEntityTypeShape($index)
    {
        return isset($this->entityTypeShape[$index]);
    }

    /**
     * unset entityTypeShape.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEntityTypeShape($index)
    {
        unset($this->entityTypeShape[$index]);
    }

    /**
     * Gets as entityTypeShape.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edmx\TEntityTypeShapeType[]
     */
    public function getEntityTypeShape()
    {
        return $this->entityTypeShape;
    }

    /**
     * Sets a new entityTypeShape.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edmx\TEntityTypeShapeType[] $entityTypeShape
     * @return self
     */
    public function setEntityTypeShape(array $entityTypeShape)
    {
        if (!$this->isValidArrayOK(
            $entityTypeShape,
            '\Firebird\ODataMetadata\MetadataV3\edmx\TEntityTypeShapeType'
        )
        ) {
            $msg = 'Entity type shape array not a valid array';
            throw new \InvalidArgumentException($msg);
        }
        $this->entityTypeShape = $entityTypeShape;
        return $this;
    }

    /**
     * Adds as associationConnector.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edmx\TAssociationConnectorType $associationConnector
     * @return self
     */
    public function addToAssociationConnector(TAssociationConnectorType $associationConnector)
    {
        $msg = null;
        if (!$associationConnector->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->associationConnector[] = $associationConnector;
        return $this;
    }

    /**
     * isset associationConnector.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetAssociationConnector($index)
    {
        return isset($this->associationConnector[$index]);
    }

    /**
     * unset associationConnector.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetAssociationConnector($index)
    {
        unset($this->associationConnector[$index]);
    }

    /**
     * Gets as associationConnector.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edmx\TAssociationConnectorType[]
     */
    public function getAssociationConnector()
    {
        return $this->associationConnector;
    }

    /**
     * Sets a new associationConnector.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edmx\TAssociationConnectorType[] $associationConnector
     * @return self
     */
    public function setAssociationConnector(array $associationConnector)
    {
        if (!$this->isValidArrayOK(
            $associationConnector,
            '\Firebird\ODataMetadata\MetadataV3\edmx\TAssociationConnectorType'
        )
        ) {
            $msg = 'Association connector array not a valid array';
            throw new \InvalidArgumentException($msg);
        }
        $this->associationConnector = $associationConnector;
        return $this;
    }

    /**
     * Adds as inheritanceConnector.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edmx\TInheritanceConnectorType $inheritanceConnector
     * @return self
     */
    public function addToInheritanceConnector(TInheritanceConnectorType $inheritanceConnector)
    {
        $msg = null;
        if (!$inheritanceConnector->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->inheritanceConnector[] = $inheritanceConnector;
        return $this;
    }

    /**
     * isset inheritanceConnector.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetInheritanceConnector($index)
    {
        return isset($this->inheritanceConnector[$index]);
    }

    /**
     * unset inheritanceConnector.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetInheritanceConnector($index)
    {
        unset($this->inheritanceConnector[$index]);
    }

    /**
     * Gets as inheritanceConnector.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edmx\TInheritanceConnectorType[]
     */
    public function getInheritanceConnector()
    {
        return $this->inheritanceConnector;
    }

    /**
     * Sets a new inheritanceConnector.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edmx\TInheritanceConnectorType[] $inheritanceConnector
     * @return self
     */
    public function setInheritanceConnector(array $inheritanceConnector)
    {
        if (!$this->isValidArrayOK(
            $inheritanceConnector,
            '\Firebird\ODataMetadata\MetadataV3\edmx\TInheritanceConnectorType'
        )
        ) {
            $msg = 'Inheritance connector array not a valid array';
            throw new \InvalidArgumentException($msg);
        }
        $this->inheritanceConnector = $inheritanceConnector;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isStringNotNullOrEmpty($this->name)) {
            $msg = 'Name cannot be null or empty';
            return false;
        }

        if (null != $this->diagramId && !$this->isStringNotNullOrEmpty($this->diagramId)) {
            $msg = 'Diagram ID cannot be empty';
            return false;
        }
        if (null != $this->zoomLevel && !is_integer($this->zoomLevel)) {
            $msg = 'Zoom level must be integral';
            return false;
        }
        if (!$this->isValidArray(
            $this->entityTypeShape,
            '\Firebird\ODataMetadata\MetadataV3\edmx\TEntityTypeShapeType'
        )
        ) {
            $msg = 'Entity type shape array not a valid array';
            return false;
        }
        if (!$this->isChildArrayOK($this->entityTypeShape, $msg)) {
            return false;
        }
        if (!$this->isValidArray(
            $this->associationConnector,
            '\Firebird\ODataMetadata\MetadataV3\edmx\TAssociationConnectorType'
        )
        ) {
            $msg = 'Association connector array not a valid array';
            return false;
        }
        if (!$this->isChildArrayOK($this->associationConnector, $msg)) {
            return false;
        }
        if (!$this->isValidArray(
            $this->inheritanceConnector,
            '\Firebird\ODataMetadata\MetadataV3\edmx\TInheritanceConnectorType'
        )
        ) {
            $msg = 'Inheritance connector array not a valid array';
            return false;
        }
        if (!$this->isChildArrayOK($this->inheritanceConnector, $msg)) {
            return false;
        }

        return true;
    }
}