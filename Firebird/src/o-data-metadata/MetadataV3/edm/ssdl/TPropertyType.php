<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl;

use AlgoWeb\ODataMetadata\IsOK;
use AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\Groups\GEmptyElementExtensibilityTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits\TPropertyTypeTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits\TSimpleIdentifierTrait;

/**
 * Class representing TPropertyType.
 *
 * XSD Type: TProperty
 */
class TPropertyType extends IsOK
{
    use TSimpleIdentifierTrait, TPropertyTypeTrait, GEmptyElementExtensibilityTrait;
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
    private $nullable = true;

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
     * @property string $sRID
     */
    private $sRID = null;

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
        if (!$this->isTSimpleIdentifierValid($name)) {
            $msg = 'Name must be valid TSimpleIdentifier';
            throw new \InvalidArgumentException($msg);
        }
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
        if (!$this->isStringNotNullOrEmpty($type)) {
            $msg = 'Type cannot be null or empty';
            throw new \InvalidArgumentException($msg);
        }
        if (!$this->isTPropertyTypeValid($type)) {
            $msg = 'Type must be valid TPropertyType';
            throw new \InvalidArgumentException($msg);
        }
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
        $this->nullable = boolval($nullable);
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
        if (null != $defaultValue && !$this->isStringNotNullOrEmpty($defaultValue)) {
            $msg = 'Default value cannot be empty';
            throw new \InvalidArgumentException($msg);
        }
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * Gets as maxLength.
     *
     * @return int|float|string
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Sets a new maxLength.
     *
     * @param  int|float|string $maxLength
     * @return self
     */
    public function setMaxLength($maxLength)
    {
        if (null != $maxLength && !(is_numeric($maxLength) && 0 <= $maxLength)) {
            $msg = 'Max length must be numeric and non-negative';
            throw new \InvalidArgumentException($msg);
        }
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
        $this->fixedLength = boolval($fixedLength);
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
        if (null != $precision && !(is_numeric($precision) && 0 <= $precision)) {
            $msg = 'Precision must be numeric and non-negative';
            throw new \InvalidArgumentException($msg);
        }
        $this->precision = $precision;
        return $this;
    }

    /**
     * Gets as scale.
     *
     * @return int|float|string
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Sets a new scale.
     *
     * @param  int|float|string $scale
     * @return self
     */
    public function setScale($scale)
    {
        if (null != $scale && !(is_numeric($scale) && 0 <= $scale)) {
            $msg = 'Scale must be numeric and non-negative';
            throw new \InvalidArgumentException($msg);
        }
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
        if (null != $collation && !$this->isStringNotNullOrEmpty($collation)) {
            $msg = 'Collation value cannot be empty';
            throw new \InvalidArgumentException($msg);
        }
        $this->collation = $collation;
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
        if (null != $sRID && !$this->isStringNotNullOrEmpty($sRID)) {
            $msg = 'SRID value cannot be empty';
            throw new \InvalidArgumentException($msg);
        }
        $this->sRID = $sRID;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isStringNotNullOrEmpty($this->name)) {
            $msg = 'Name cannot be null or empty';
            return false;
        }
        if (!$this->isStringNotNullOrEmpty($this->type)) {
            $msg = 'Type cannot be null or empty';
            return false;
        }
        if (null != $this->defaultValue && !$this->isStringNotNullOrEmpty($this->defaultValue)) {
            $msg = 'Default value cannot be empty';
            return false;
        }
        if (null != $this->sRID && !$this->isStringNotNullOrEmpty($this->sRID)) {
            $msg = 'SRID value cannot be empty';
            return false;
        }
        if (null != $this->collation && !$this->isStringNotNullOrEmpty($this->collation)) {
            $msg = 'Collation value cannot be empty';
            return false;
        }
        if (null != $this->maxLength && !(is_numeric($this->maxLength) && 0 <= $this->maxLength)) {
            $msg = 'Max length must be numeric and non-negative';
            return false;
        }
        if (null != $this->precision && !(is_numeric($this->precision) && 0 <= $this->precision)) {
            $msg = 'Precision must be numeric and non-negative';
            return false;
        }
        if (null != $this->scale && !(is_numeric($this->scale) && 0 <= $this->scale)) {
            $msg = 'Scale must be numeric and non-negative';
            return false;
        }
        if (!$this->isTSimpleIdentifierValid($this->name)) {
            $msg = 'Name must be valid TSimpleIdentifier';
            return false;
        }
        if (!$this->isTPropertyTypeValid($this->type)) {
            $msg = 'Type must be valid TPropertyType';
            return false;
        }
        if (!$this->isExtensibilityElementOK($msg)) {
            return false;
        }
        return true;
    }
}
