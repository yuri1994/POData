<?php
namespace FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl;

use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;

trait GSchemaBodyElementsTrait
{
    use IsOKToolboxTrait;
    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TAssociationType[] $association
     */
    private $association = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TEntityTypeType[] $entityType
     */
    private $entityType = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\EntityContainer[] $entityContainer
     */
    private $entityContainer = [];

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TFunctionType[] $function
     */
    private $function = [];

    /**
     * Adds as association.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TAssociationType $association
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
     * @param  int  $index
     * @return bool
     */
    public function issetAssociation($index)
    {
        return isset($this->association[$index]);
    }

    /**
     * unset association.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetAssociation($index)
    {
        unset($this->association[$index]);
    }

    /**
     * Gets as association.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TAssociationType[]
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Sets a new association.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TAssociationType[] $association
     * @return self
     */
    public function setAssociation(array $association)
    {
        if (!$this->isValidArrayOK(
            $association,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TAssociationType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->association = $association;
        return $this;
    }

    /**
     * Adds as entityType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TEntityTypeType $entityType
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
     * @param  int  $index
     * @return bool
     */
    public function issetEntityType($index)
    {
        return isset($this->entityType[$index]);
    }

    /**
     * unset entityType.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetEntityType($index)
    {
        unset($this->entityType[$index]);
    }

    /**
     * Gets as entityType.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TEntityTypeType[]
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TEntityTypeType[] $entityType
     * @return self
     */
    public function setEntityType(array $entityType)
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * Adds as entityContainer.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\EntityContainer $entityContainer
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
     * @param  int  $index
     * @return bool
     */
    public function issetEntityContainer($index)
    {
        return isset($this->entityContainer[$index]);
    }

    /**
     * unset entityContainer.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetEntityContainer($index)
    {
        unset($this->entityContainer[$index]);
    }

    /**
     * Gets as entityContainer.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\EntityContainer[]
     */
    public function getEntityContainer()
    {
        return $this->entityContainer;
    }

    /**
     * Sets a new entityContainer.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\EntityContainer[] $entityContainer
     * @return self
     */
    public function setEntityContainer(array $entityContainer)
    {
        if (!$this->isValidArrayOK(
            $entityContainer,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\EntityContainer',
            $msg,
            1
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->entityContainer = $entityContainer;
        return $this;
    }

    /**
     * Adds as function.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TFunctionType $function
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
     * @param  int  $index
     * @return bool
     */
    public function issetFunction($index)
    {
        return isset($this->function[$index]);
    }

    /**
     * unset function.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetFunction($index)
    {
        unset($this->function[$index]);
    }

    /**
     * Gets as function.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TFunctionType[]
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TFunctionType[] $function
     * @return self
     */
    public function setFunction(array $function)
    {
        if (!$this->isValidArrayOK(
            $function,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TFunctionType',
            $msg
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->function = $function;
        return $this;
    }

    public function isBodyElementsOK(&$msg = null)
    {
        if (!$this->isValidArrayOK(
            $this->association,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TAssociationType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->entityType,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TEntityTypeType',
            $msg
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->entityContainer,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\EntityContainer',
            $msg,
            1
        )
        ) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->function,
            '\FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TFunctionType',
            $msg
        )
        ) {
            return false;
        }
        return true;
    }
}
