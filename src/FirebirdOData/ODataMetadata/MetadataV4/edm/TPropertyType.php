<?php

namespace FirebirdOData\ODataMetadata\MetadataV4\edm;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TPropertyType.
 *
 * XSD Type: TProperty
 */
class TPropertyType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property bool $nullable
     */
    private $nullable = null;

    /**
     * @property string $defaultValue
     */
    private $defaultValue = null;

    /**
     * @property string $maxLength
     */
    private $maxLength = null;

    /**
     * @property int $precision
     */
    private $precision = null;

    /**
     * @property string $scale
     */
    private $scale = null;

    /**
     * @property string $sRID
     */
    private $sRID = null;

    /**
     * @property bool $unicode
     */
    private $unicode = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV4\edm\Annotation[] $annotation
     */
    private $annotation = array();

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
     * Gets as type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type.
     *
     * @param  string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as nullable.
     *
     * @return bool
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * Sets a new nullable.
     *
     * @param  bool $nullable
     * @return self
     */
    public function setNullable($nullable)
    {
        $this->nullable = $nullable;
        return $this;
    }

    /**
     * Gets as defaultValue.
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue.
     *
     * @param  string $defaultValue
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * Gets as maxLength.
     *
     * @return string
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Sets a new maxLength.
     *
     * @param  string $maxLength
     * @return self
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * Gets as precision.
     *
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Sets a new precision.
     *
     * @param  int  $precision
     * @return self
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Gets as scale.
     *
     * @return string
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Sets a new scale.
     *
     * @param  string $scale
     * @return self
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * Gets as sRID.
     *
     * @return string
     */
    public function getSRID()
    {
        return $this->sRID;
    }

    /**
     * Sets a new sRID.
     *
     * @param  string $sRID
     * @return self
     */
    public function setSRID($sRID)
    {
        $this->sRID = $sRID;
        return $this;
    }

    /**
     * Gets as unicode.
     *
     * @return bool
     */
    public function getUnicode()
    {
        return $this->unicode;
    }

    /**
     * Sets a new unicode.
     *
     * @param  bool $unicode
     * @return self
     */
    public function setUnicode($unicode)
    {
        $this->unicode = $unicode;
        return $this;
    }

    /**
     * Adds as annotation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV4\edm\Annotation $annotation
     * @return self
     */
    public function addToAnnotation(Annotation $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV4\edm\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV4\edm\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }
}
