<?php

namespace AlgoWeb\ODataMetadata\MetadataV2\mapping\cs;

use AlgoWeb\ODataMetadata\IsOK;

/**
 * Class representing TEndPropertyType.
 *
 * XSD Type: TEndProperty
 */
class TEndPropertyType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType[] $scalarProperty
     */
    private $scalarProperty = array();

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
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as scalarProperty.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType $scalarProperty
     * @return self
     */
    public function addToScalarProperty(TScalarPropertyType $scalarProperty)
    {
        $this->scalarProperty[] = $scalarProperty;
        return $this;
    }

    /**
     * isset scalarProperty.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetScalarProperty($index)
    {
        return isset($this->scalarProperty[$index]);
    }

    /**
     * unset scalarProperty.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetScalarProperty($index)
    {
        unset($this->scalarProperty[$index]);
    }

    /**
     * Gets as scalarProperty.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType[]
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\mapping\cs\TScalarPropertyType[] $scalarProperty
     * @return self
     */
    public function setScalarProperty(array $scalarProperty)
    {
        $this->scalarProperty = $scalarProperty;
        return $this;
    }
}
