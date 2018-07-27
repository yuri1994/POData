<?php

namespace Firebird\ODataMetadata\MetadataV3\edm;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits\TPathTrait;
use Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits\TQualifiedNameTrait;
use Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits\TSimpleIdentifierTrait;

/**
 * Class representing TAnnotationsType.
 *
 * XSD Type: TAnnotations
 */
class TAnnotationsType extends IsOK
{
    use IsOKToolboxTrait, TPathTrait, TSimpleIdentifierTrait {
        TSimpleIdentifierTrait::isNCName insteadof TPathTrait;
        TSimpleIdentifierTrait::matchesRegexPattern insteadof TPathTrait;
        TSimpleIdentifierTrait::isName insteadof TPathTrait;
    }
    /**
     * @property string $target
     */
    private $target = null;

    /**
     * @property string $qualifier
     */
    private $qualifier = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType[] $valueAnnotation
     */
    private $valueAnnotation = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType[] $typeAnnotation
     */
    private $typeAnnotation = [];

    /**
     * Gets as target.
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target.
     *
     * @param  string $target
     * @return self
     */
    public function setTarget($target)
    {
        if (!$this->isTPathValid($target)) {
            $msg = 'Target must be a valid TPath';
            throw new \InvalidArgumentException($msg);
        }
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as qualifier.
     *
     * @return string
     */
    public function getQualifier()
    {
        return $this->qualifier;
    }

    /**
     * Sets a new qualifier.
     *
     * @param  string $qualifier
     * @return self
     */
    public function setQualifier($qualifier)
    {
        if (null != $qualifier && !$this->isTSimpleIdentifierValid($qualifier)) {
            $msg = 'Qualifier must be a valid TSimpleIdentifier';
            throw new \InvalidArgumentException($msg);
        }
        $this->qualifier = $qualifier;
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
     * @param  scalar $index
     * @return bool
     */
    public function issetValueAnnotation($index)
    {
        return isset($this->valueAnnotation[$index]);
    }

    /**
     * unset valueAnnotation.
     *
     * @param  scalar $index
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
     * @param  scalar $index
     * @return bool
     */
    public function issetTypeAnnotation($index)
    {
        return isset($this->typeAnnotation[$index]);
    }

    /**
     * unset typeAnnotation.
     *
     * @param  scalar $index
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
        if (!$this->isValidArrayOK(
            $typeAnnotation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->typeAnnotation = $typeAnnotation;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isTPathValid($this->target)) {
            $msg = 'Target must be a valid TPath';
            return false;
        }
        if (null != $this->qualifier && !$this->isTSimpleIdentifierValid($this->qualifier)) {
            $msg = 'Qualifier must be a valid TSimpleIdentifier';
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->valueAnnotation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TValueAnnotationType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->typeAnnotation,
            '\Firebird\ODataMetadata\MetadataV3\edm\TTypeAnnotationType',
            $msg
        )
        ) {
            return false;
        }

        return true;
    }
}
