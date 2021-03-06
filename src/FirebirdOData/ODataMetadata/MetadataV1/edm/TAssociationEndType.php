<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\edm;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TAssociationEndType.
 *
 * XSD Type: TAssociationEnd
 */
class TAssociationEndType extends IsOK
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * @property string $multiplicity
     */
    private $multiplicity = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\TOnActionType[] $onDelete
     */
    private $onDelete = array();

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
     * Gets as role.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role.
     *
     * @param  string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as multiplicity.
     *
     * @return string
     */
    public function getMultiplicity()
    {
        return $this->multiplicity;
    }

    /**
     * Sets a new multiplicity.
     *
     * @param  string $multiplicity
     * @return self
     */
    public function setMultiplicity($multiplicity)
    {
        $this->multiplicity = $multiplicity;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as onDelete.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\TOnActionType $onDelete
     * @return self
     */
    public function addToOnDelete(TOnActionType $onDelete)
    {
        $this->onDelete[] = $onDelete;
        return $this;
    }

    /**
     * isset onDelete.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetOnDelete($index)
    {
        return isset($this->onDelete[$index]);
    }

    /**
     * unset onDelete.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetOnDelete($index)
    {
        unset($this->onDelete[$index]);
    }

    /**
     * Gets as onDelete.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\TOnActionType[]
     */
    public function getOnDelete()
    {
        return $this->onDelete;
    }

    /**
     * Sets a new onDelete.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\TOnActionType[] $onDelete
     * @return self
     */
    public function setOnDelete(array $onDelete)
    {
        $this->onDelete = $onDelete;
        return $this;
    }
}
