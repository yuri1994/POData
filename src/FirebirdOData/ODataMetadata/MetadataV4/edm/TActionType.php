<?php

namespace Firebird\ODataMetadata\MetadataV4\edm;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TActionType.
 *
 * XSD Type: TAction
 */
class TActionType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $entitySetPath
     */
    private $entitySetPath = null;

    /**
     * @property bool $isBound
     */
    private $isBound = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV4\edm\TActionFunctionParameterType[] $parameter
     */
    private $parameter = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV4\edm\Annotation[] $annotation
     */
    private $annotation = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV4\edm\TActionFunctionReturnTypeType $returnType
     */
    private $returnType = null;

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
     * Gets as entitySetPath.
     *
     * @return string
     */
    public function getEntitySetPath()
    {
        return $this->entitySetPath;
    }

    /**
     * Sets a new entitySetPath.
     *
     * @param  string $entitySetPath
     * @return self
     */
    public function setEntitySetPath($entitySetPath)
    {
        $this->entitySetPath = $entitySetPath;
        return $this;
    }

    /**
     * Gets as isBound.
     *
     * @return bool
     */
    public function getIsBound()
    {
        return $this->isBound;
    }

    /**
     * Sets a new isBound.
     *
     * @param  bool $isBound
     * @return self
     */
    public function setIsBound($isBound)
    {
        $this->isBound = $isBound;
        return $this;
    }

    /**
     * Adds as parameter.
     *
     * @param  \Firebird\ODataMetadata\MetadataV4\edm\TActionFunctionParameterType $parameter
     * @return self
     */
    public function addToParameter(TActionFunctionParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter.
     *
     * @return \Firebird\ODataMetadata\MetadataV4\edm\TActionFunctionParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter.
     *
     * @param  \Firebird\ODataMetadata\MetadataV4\edm\TActionFunctionParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Adds as annotation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV4\edm\Annotation $annotation
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
     * @return \Firebird\ODataMetadata\MetadataV4\edm\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV4\edm\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }

    /**
     * Gets as returnType.
     *
     * @return \Firebird\ODataMetadata\MetadataV4\edm\TActionFunctionReturnTypeType
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * Sets a new returnType.
     *
     * @param  \Firebird\ODataMetadata\MetadataV4\edm\TActionFunctionReturnTypeType $returnType
     * @return self
     */
    public function setReturnType(TActionFunctionReturnTypeType $returnType)
    {
        $this->returnType = $returnType;
        return $this;
    }
}