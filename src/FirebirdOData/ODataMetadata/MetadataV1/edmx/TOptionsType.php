<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\edmx;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TOptionsType.
 *
 * XSD Type: TOptions
 */
class TOptionsType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edmx\TDesignerPropertyType[] $designerInfoPropertySet
     */
    private $designerInfoPropertySet = null;

    /**
     * Adds as designerProperty.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edmx\TDesignerPropertyType $designerProperty
     * @return self
     */
    public function addToDesignerInfoPropertySet(TDesignerPropertyType $designerProperty)
    {
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
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edmx\TDesignerPropertyType[]
     */
    public function getDesignerInfoPropertySet()
    {
        return $this->designerInfoPropertySet;
    }

    /**
     * Sets a new designerInfoPropertySet.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edmx\TDesignerPropertyType[] $designerInfoPropertySet
     * @return self
     */
    public function setDesignerInfoPropertySet(array $designerInfoPropertySet)
    {
        $this->designerInfoPropertySet = $designerInfoPropertySet;
        return $this;
    }
}
