<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\EntityContainer;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use Firebird\ODataMetadata\MetadataV3\edm\Groups\TEntitySetAttributesTrait;
use Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType;
use Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType;
use Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType;

/**
 * Class representing EntitySetAnonymousType.
 */
class EntitySetAnonymousType extends IsOK
{
    use IsOKToolboxTrait, TEntitySetAttributesTrait;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType[] $documentation
     */
    private $documentation = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType[] $valueAnnotation
     */
    private $valueAnnotation = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType[] $typeAnnotation
     */
    private $typeAnnotation = [];
    
    /**
     * Adds as documentation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType $documentation
     * @return self
     */
    public function addToDocumentation(TDocumentationType $documentation)
    {
        $msg = null;
        if (!$documentation->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * isset documentation.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetDocumentation($index)
    {
        return isset($this->documentation[$index]);
    }

    /**
     * unset documentation.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetDocumentation($index)
    {
        unset($this->documentation[$index]);
    }

    /**
     * Gets as documentation.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType[] $documentation
     * @return self
     */
    public function setDocumentation(array $documentation)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $documentation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType',
            $msg,
            0,
            1
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as valueAnnotation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType $valueAnnotation
     * @return self
     */
    public function addToValueAnnotation(TValueAnnotationType $valueAnnotation)
    {
        $msg = null;
        if (!$valueAnnotation->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->valueAnnotation[] = $valueAnnotation;
        return $this;
    }

    /**
     * isset valueAnnotation.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetValueAnnotation($index)
    {
        return isset($this->valueAnnotation[$index]);
    }

    /**
     * unset valueAnnotation.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetValueAnnotation($index)
    {
        unset($this->valueAnnotation[$index]);
    }

    /**
     * Gets as valueAnnotation.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType[]
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * Sets a new valueAnnotation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType[] $valueAnnotation
     * @return self
     */
    public function setValueAnnotation(array $valueAnnotation)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $valueAnnotation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->valueAnnotation = $valueAnnotation;
        return $this;
    }

    /**
     * Adds as typeAnnotation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType $typeAnnotation
     * @return self
     */
    public function addToTypeAnnotation(TTypeAnnotationType $typeAnnotation)
    {
        $msg = null;
        if (!$typeAnnotation->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->typeAnnotation[] = $typeAnnotation;
        return $this;
    }

    /**
     * isset typeAnnotation.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetTypeAnnotation($index)
    {
        return isset($this->typeAnnotation[$index]);
    }

    /**
     * unset typeAnnotation.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetTypeAnnotation($index)
    {
        unset($this->typeAnnotation[$index]);
    }

    /**
     * Gets as typeAnnotation.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType[]
     */
    public function getTypeAnnotation()
    {
        return $this->typeAnnotation;
    }

    /**
     * Sets a new typeAnnotation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType[] $typeAnnotation
     * @return self
     */
    public function setTypeAnnotation(array $typeAnnotation)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $typeAnnotation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType',
            $msg
        )) {
            throw new \InvalidArgumentException($msg);
        }
        $this->typeAnnotation = $typeAnnotation;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isValidArrayOK(
            $this->documentation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TDocumentationType',
            $msg,
            0,
            1
        )) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->valueAnnotation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType',
            $msg
        )) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->typeAnnotation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType',
            $msg
        )) {
            return false;
        }
        if (!$this->isTEntitySetAttributesOK($msg)) {
            return false;
        }
        return true;
    }
}