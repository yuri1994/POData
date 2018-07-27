<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\ssdl;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits\TUndottedIdentifierTrait;
use Symfony\Component\Console\Exception\InvalidArgumentException;

/**
 * Class representing TEntityTypeType.
 *
 * XSD Type: TEntityType
 */
class TEntityTypeType extends IsOK
{
    use TUndottedIdentifierTrait;
    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TPropertyRefType[] $key
     */
    private $key = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TEntityPropertyType[] $property
     */
    private $property = [];

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
     * Gets as documentation.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $msg = null;
        if (!$documentation->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as propertyRef.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TPropertyRefType $propertyRef
     * @return self
     */
    public function addToKey(TPropertyRefType $propertyRef)
    {
        $msg = null;
        if (!$propertyRef->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->key[] = $propertyRef;
        return $this;
    }

    /**
     * isset key.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetKey($index)
    {
        return isset($this->key[$index]);
    }

    /**
     * unset key.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetKey($index)
    {
        unset($this->key[$index]);
    }

    /**
     * Gets as key.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TPropertyRefType[]
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TPropertyRefType[] $key
     * @return self
     */
    public function setKey(array $key)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $key,
            '\Firebird\ODataMetadata\MetadataV3\edm\ssdl\TPropertyRefType',
            $msg,
            1
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->key = $key;
        return $this;
    }

    /**
     * Adds as property.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TEntityPropertyType $property
     * @return self
     */
    public function addToProperty(TEntityPropertyType $property)
    {
        $msg = null;
        if (!$property->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TEntityPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TEntityPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $property,
            '\Firebird\ODataMetadata\MetadataV3\edm\ssdl\TEntityPropertyType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->property = $property;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isStringNotNullOrEmpty($this->name)) {
            $msg = 'Name cannot be null or empty';
            return false;
        }
        if (!$this->isObjectNullOrOK($this->documentation, $msg)) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->key,
            '\Firebird\ODataMetadata\MetadataV3\edm\ssdl\TPropertyRefType',
            $msg,
            1
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->property,
            '\Firebird\ODataMetadata\MetadataV3\edm\ssdl\TEntityPropertyType',
            $msg
        )
        ) {
            return false;
        }

        return true;
    }
}
