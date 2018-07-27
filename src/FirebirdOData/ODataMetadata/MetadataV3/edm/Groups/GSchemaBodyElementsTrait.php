<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\Groups;

use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\EntityContainer;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TAnnotationsType;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TAssociationType;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TComplexTypeType;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TEntityTypeType;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TEnumTypeType;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionType;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TUsingType;
use FirebirdOData\ODataMetadata\MetadataV3\edm\TValueTermType;

trait GSchemaBodyElementsTrait
{
    use IsOKToolboxTrait;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TUsingType[] $using
     */
    private $using = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TAssociationType[] $association
     */
    private $association = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TComplexTypeType[] $complexType
     */
    private $complexType = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TEntityTypeType[] $entityType
     */
    private $entityType = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TEnumTypeType[] $enumType
     */
    private $enumType = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TValueTermType[] $valueTerm
     */
    private $valueTerm = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionType[] $function
     */
    private $function = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\TAnnotationsType[] $annotations
     */
    private $annotations = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\EntityContainer[] $entityContainer
     */
    private $entityContainer = [];

    /**
     * Adds as using.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TUsingType $using
     * @return self
     */
    public function addToUsing(TUsingType $using)
    {
        $msg = null;
        if (!$using->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->using[] = $using;
        return $this;
    }

    /**
     * isset using.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetUsing($index)
    {
        return isset($this->using[$index]);
    }

    /**
     * unset using.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetUsing($index)
    {
        unset($this->using[$index]);
    }

    /**
     * Gets as using.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TUsingType[]
     */
    public function getUsing()
    {
        return $this->using;
    }

    /**
     * Sets a new using.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TUsingType[] $using
     * @return self
     */
    public function setUsing(array $using)
    {
        $msg = null;
        if (!$this->isValidArrayOK($using, '\FirebirdOData\ODataMetadata\MetadataV3\edm\TUsingType', $msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->using = $using;
        return $this;
    }

    /**
     * Adds as association.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TAssociationType $association
     * @return self
     */
    public function addToAssociation(TAssociationType $association)
    {
        $msg = null;
        if (!$association->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->association[] = $association;
        return $this;
    }

    /**
     * isset association.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetAssociation($index)
    {
        return isset($this->association[$index]);
    }

    /**
     * unset association.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetAssociation($index)
    {
        unset($this->association[$index]);
    }

    /**
     * Gets as association.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TAssociationType[]
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Sets a new association.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TAssociationType[] $association
     * @return self
     */
    public function setAssociation(array $association)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $association,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TAssociationType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->association = $association;
        return $this;
    }

    /**
     * Adds as complexType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TComplexTypeType $complexType
     * @return self
     */
    public function addToComplexType(TComplexTypeType $complexType)
    {
        $msg = null;
        if (!$complexType->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->complexType[] = $complexType;
        return $this;
    }

    /**
     * isset complexType.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetComplexType($index)
    {
        return isset($this->complexType[$index]);
    }

    /**
     * unset complexType.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetComplexType($index)
    {
        unset($this->complexType[$index]);
    }

    /**
     * Gets as complexType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TComplexTypeType[]
     */
    public function getComplexType()
    {
        return $this->complexType;
    }

    /**
     * Sets a new complexType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TComplexTypeType[] $complexType
     * @return self
     */
    public function setComplexType(array $complexType)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $complexType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TComplexTypeType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->complexType = $complexType;
        return $this;
    }

    /**
     * Adds as entityType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TEntityTypeType $entityType
     * @return self
     */
    public function addToEntityType(TEntityTypeType $entityType)
    {
        $msg = null;
        if (!$entityType->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->entityType[] = $entityType;
        return $this;
    }

    /**
     * isset entityType.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEntityType($index)
    {
        return isset($this->entityType[$index]);
    }

    /**
     * unset entityType.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEntityType($index)
    {
        unset($this->entityType[$index]);
    }

    /**
     * Gets as entityType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TEntityTypeType[]
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TEntityTypeType[] $entityType
     * @return self
     */
    public function setEntityType(array $entityType)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $entityType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TEntityTypeType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * Adds as enumType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TEnumTypeType $enumType
     * @return self
     */
    public function addToEnumType(TEnumTypeType $enumType)
    {
        $msg = null;
        if (!$enumType->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->enumType[] = $enumType;
        return $this;
    }

    /**
     * isset enumType.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEnumType($index)
    {
        return isset($this->enumType[$index]);
    }

    /**
     * unset enumType.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEnumType($index)
    {
        unset($this->enumType[$index]);
    }

    /**
     * Gets as enumType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TEnumTypeType[]
     */
    public function getEnumType()
    {
        return $this->enumType;
    }

    /**
     * Sets a new enumType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TEnumTypeType[] $enumType
     * @return self
     */
    public function setEnumType(array $enumType)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $enumType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TEnumTypeType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->enumType = $enumType;
        return $this;
    }

    /**
     * Adds as valueTerm.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TValueTermType $valueTerm
     * @return self
     */
    public function addToValueTerm(TValueTermType $valueTerm)
    {
        $msg = null;
        if (!$valueTerm->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->valueTerm[] = $valueTerm;
        return $this;
    }

    /**
     * isset valueTerm.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetValueTerm($index)
    {
        return isset($this->valueTerm[$index]);
    }

    /**
     * unset valueTerm.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetValueTerm($index)
    {
        unset($this->valueTerm[$index]);
    }

    /**
     * Gets as valueTerm.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TValueTermType[]
     */
    public function getValueTerm()
    {
        return $this->valueTerm;
    }

    /**
     * Sets a new valueTerm.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TValueTermType[] $valueTerm
     * @return self
     */
    public function setValueTerm(array $valueTerm)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $valueTerm,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TValueTermType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->valueTerm = $valueTerm;
        return $this;
    }

    /**
     * Adds as function.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionType $function
     * @return self
     */
    public function addToFunction(TFunctionType $function)
    {
        $msg = null;
        if (!$function->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->function[] = $function;
        return $this;
    }

    /**
     * isset function.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetFunction($index)
    {
        return isset($this->function[$index]);
    }

    /**
     * unset function.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetFunction($index)
    {
        unset($this->function[$index]);
    }

    /**
     * Gets as function.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionType[]
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionType[] $function
     * @return self
     */
    public function setFunction(array $function)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $function,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->function = $function;
        return $this;
    }

    /**
     * Adds as annotations.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TAnnotationsType $annotations
     * @return self
     */
    public function addToAnnotations(TAnnotationsType $annotations)
    {
        $msg = null;
        if (!$annotations->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->annotations[] = $annotations;
        return $this;
    }

    /**
     * isset annotations.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetAnnotations($index)
    {
        return isset($this->annotations[$index]);
    }

    /**
     * unset annotations.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetAnnotations($index)
    {
        unset($this->annotations[$index]);
    }

    /**
     * Gets as annotations.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\TAnnotationsType[]
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Sets a new annotations.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\TAnnotationsType[] $annotations
     * @return self
     */
    public function setAnnotations(array $annotations)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $annotations,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TAnnotationsType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->annotations = $annotations;
        return $this;
    }

    /**
     * Adds as entityContainer.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\EntityContainer $entityContainer
     * @return self
     */
    public function addToEntityContainer(EntityContainer $entityContainer)
    {
        $msg = null;
        if (!$entityContainer->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->entityContainer[] = $entityContainer;
        return $this;
    }

    /**
     * isset entityContainer.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEntityContainer($index)
    {
        return isset($this->entityContainer[$index]);
    }

    /**
     * unset entityContainer.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEntityContainer($index)
    {
        unset($this->entityContainer[$index]);
    }

    /**
     * Gets as entityContainer.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\EntityContainer[]
     */
    public function getEntityContainer()
    {
        return $this->entityContainer;
    }

    /**
     * Sets a new entityContainer.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\EntityContainer[] $entityContainer
     * @return self
     */
    public function setEntityContainer(array $entityContainer)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $entityContainer,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\EntityContainer',
            $msg,
            1,
            1
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->entityContainer = $entityContainer;
        return $this;
    }


    public function isGSchemaBodyElementsValid(&$msg = null)
    {
        if (!$this->isValidArrayOK($this->using, '\FirebirdOData\ODataMetadata\MetadataV3\edm\TUsingType', $msg)) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->association,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TAssociationType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->complexType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TComplexTypeType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->entityType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TEntityTypeType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->enumType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TEnumTypeType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->valueTerm,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TValueTermType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->function,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TFunctionType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->annotations,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\TAnnotationsType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->entityContainer,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\EntityContainer',
            $msg,
            1,
            1
        )
        ) {
            return false;
        }

        return true;
    }
}
