<?php

namespace AlgoWeb\ODataMetadata\MetadataV2\edm;

use AlgoWeb\ODataMetadata\IsOK;

/**
 * Class representing TEntityPropertyType.
 *
 * XSD Type: TEntityProperty
 */
class TEntityPropertyType extends IsOK
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
     * @property bool $fixedLength
     */
    private $fixedLength = null;

    /**
     * @property int $precision
     */
    private $precision = null;

    /**
     * @property int $scale
     */
    private $scale = null;

    /**
     * @property bool $unicode
     */
    private $unicode = null;

    /**
     * @property string $collation
     */
    private $collation = null;

    /**
     * @property string $concurrencyMode
     */
    private $concurrencyMode = null;

    /**
     * @property string $setterAccess
     */
    private $setterAccess = null;

    /**
     * @property string $getterAccess
     */
    private $getterAccess = null;

    /**
     * @property string $storeGeneratedPattern
     */
    private $storeGeneratedPattern = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
     */
    private $documentation = null;

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
     * Gets as fixedLength.
     *
     * @return bool
     */
    public function getFixedLength()
    {
        return $this->fixedLength;
    }

    /**
     * Sets a new fixedLength.
     *
     * @param  bool $fixedLength
     * @return self
     */
    public function setFixedLength($fixedLength)
    {
        $this->fixedLength = $fixedLength;
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
     * @return int
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Sets a new scale.
     *
     * @param  int  $scale
     * @return self
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
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
     * Gets as collation.
     *
     * @return string
     */
    public function getCollation()
    {
        return $this->collation;
    }

    /**
     * Sets a new collation.
     *
     * @param  string $collation
     * @return self
     */
    public function setCollation($collation)
    {
        $this->collation = $collation;
        return $this;
    }

    /**
     * Gets as concurrencyMode.
     *
     * @return string
     */
    public function getConcurrencyMode()
    {
        return $this->concurrencyMode;
    }

    /**
     * Sets a new concurrencyMode.
     *
     * @param  string $concurrencyMode
     * @return self
     */
    public function setConcurrencyMode($concurrencyMode)
    {
        $this->concurrencyMode = $concurrencyMode;
        return $this;
    }

    /**
     * Gets as setterAccess.
     *
     * @return string
     */
    public function getSetterAccess()
    {
        return $this->setterAccess;
    }

    /**
     * Sets a new setterAccess.
     *
     * @param  string $setterAccess
     * @return self
     */
    public function setSetterAccess($setterAccess)
    {
        $this->setterAccess = $setterAccess;
        return $this;
    }

    /**
     * Gets as getterAccess.
     *
     * @return string
     */
    public function getGetterAccess()
    {
        return $this->getterAccess;
    }

    /**
     * Sets a new getterAccess.
     *
     * @param  string $getterAccess
     * @return self
     */
    public function setGetterAccess($getterAccess)
    {
        $this->getterAccess = $getterAccess;
        return $this;
    }

    /**
     * Gets as storeGeneratedPattern.
     *
     * @return string
     */
    public function getStoreGeneratedPattern()
    {
        return $this->storeGeneratedPattern;
    }

    /**
     * Sets a new storeGeneratedPattern.
     *
     * @param  string $storeGeneratedPattern
     * @return self
     */
    public function setStoreGeneratedPattern($storeGeneratedPattern)
    {
        $this->storeGeneratedPattern = $storeGeneratedPattern;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV2\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }
}
