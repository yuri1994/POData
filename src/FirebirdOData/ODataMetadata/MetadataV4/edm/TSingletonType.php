<?php

namespace FirebirdOData\ODataMetadata\MetadataV4\edm;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TSingletonType.
 *
 * XSD Type: TSingleton
 */
class TSingletonType extends IsOK
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
     * @property \FirebirdOData\ODataMetadata\MetadataV4\edm\TNavigationPropertyBindingType[]
     * $navigationPropertyBinding
     */
    private $navigationPropertyBinding = array();

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
     * Adds as navigationPropertyBinding.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV4\edm\TNavigationPropertyBindingType $navigationPropertyBinding
     * @return self
     */
    public function addToNavigationPropertyBinding(TNavigationPropertyBindingType $navigationPropertyBinding)
    {
        $this->navigationPropertyBinding[] = $navigationPropertyBinding;
        return $this;
    }

    /**
     * isset navigationPropertyBinding.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetNavigationPropertyBinding($index)
    {
        return isset($this->navigationPropertyBinding[$index]);
    }

    /**
     * unset navigationPropertyBinding.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetNavigationPropertyBinding($index)
    {
        unset($this->navigationPropertyBinding[$index]);
    }

    /**
     * Gets as navigationPropertyBinding.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV4\edm\TNavigationPropertyBindingType[]
     */
    public function getNavigationPropertyBinding()
    {
        return $this->navigationPropertyBinding;
    }

    /**
     * Sets a new navigationPropertyBinding.
     *
     * @param  \FirebirdOData\OData\ODataMetadata\MetadataV4\edm\TNavigationPropertyBindingType[]
     * $navigationPropertyBinding
     * @return self
     */
    public function setNavigationPropertyBinding(array $navigationPropertyBinding)
    {
        $this->navigationPropertyBinding = $navigationPropertyBinding;
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
