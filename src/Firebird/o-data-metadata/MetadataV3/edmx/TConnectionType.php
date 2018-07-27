<?php

namespace Firebird\ODataMetadata\MetadataV3\edmx;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TConnectionType.
 *
 * XSD Type: TConnection
 */
class TConnectionType extends IsOK
{

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edmx\TDesignerPropertyType[] $designerInfoPropertySet
     */
    private $designerInfoPropertySet = [];

    /**
     * Adds as designerProperty.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edmx\TDesignerPropertyType $designerProperty
     * @return self
     */
    public function addToDesignerInfoPropertySet(TDesignerPropertyType $designerProperty)
    {
        $msg = null;
        if (!$designerProperty->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->designerInfoPropertySet[] = $designerProperty;
        return $this;
    }

    /**
     * isset designerInfoPropertySet.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetDesignerInfoPropertySet($index)
    {
        return isset($this->designerInfoPropertySet[$index]);
    }

    /**
     * unset designerInfoPropertySet.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetDesignerInfoPropertySet($index)
    {
        unset($this->designerInfoPropertySet[$index]);
    }

    /**
     * Gets as designerInfoPropertySet.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edmx\TDesignerPropertyType[]
     */
    public function getDesignerInfoPropertySet()
    {
        return $this->designerInfoPropertySet;
    }

    /**
     * Sets a new designerInfoPropertySet.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edmx\TDesignerPropertyType[] $designerInfoPropertySet
     * @return self
     */
    public function setDesignerInfoPropertySet(array $designerInfoPropertySet)
    {
        if (!$this->isValidArrayOK(
            $designerInfoPropertySet,
            '\Firebird\ODataMetadata\MetadataV3\edmx\TDesignerPropertyType'
        )
        ) {
            $msg = 'Designer info property set not a valid array';
            throw new \InvalidArgumentException($msg);
        }
        $this->designerInfoPropertySet = $designerInfoPropertySet;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isValidArray(
            $this->designerInfoPropertySet,
            '\Firebird\ODataMetadata\MetadataV3\edmx\TDesignerPropertyType'
        )
        ) {
            $msg = 'Designer info property set not a valid array';
            return false;
        }
        if (!$this->isChildArrayOK($this->designerInfoPropertySet, $msg)) {
            return false;
        }
        return true;
    }
}
