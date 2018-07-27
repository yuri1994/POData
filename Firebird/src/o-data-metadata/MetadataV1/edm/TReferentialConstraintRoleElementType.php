<?php

namespace AlgoWeb\ODataMetadata\MetadataV1\edm;

use AlgoWeb\ODataMetadata\IsOK;

/**
 * Class representing TReferentialConstraintRoleElementType.
 *
 * XSD Type: TReferentialConstraintRoleElement
 */
class TReferentialConstraintRoleElementType extends IsOK
{

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV1\edm\TPropertyRefType[] $propertyRef
     */
    private $propertyRef = array();

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
     * Adds as propertyRef.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV1\edm\TPropertyRefType $propertyRef
     * @return self
     */
    public function addToPropertyRef(TPropertyRefType $propertyRef)
    {
        $this->propertyRef[] = $propertyRef;
        return $this;
    }

    /**
     * isset propertyRef.
     *
     * @param  int  $index
     * @return bool
     */
    public function issetPropertyRef($index)
    {
        return isset($this->propertyRef[$index]);
    }

    /**
     * unset propertyRef.
     *
     * @param  int  $index
     * @return void
     */
    public function unsetPropertyRef($index)
    {
        unset($this->propertyRef[$index]);
    }

    /**
     * Gets as propertyRef.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV1\edm\TPropertyRefType[]
     */
    public function getPropertyRef()
    {
        return $this->propertyRef;
    }

    /**
     * Sets a new propertyRef.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV1\edm\TPropertyRefType[] $propertyRef
     * @return self
     */
    public function setPropertyRef(array $propertyRef)
    {
        $this->propertyRef = $propertyRef;
        return $this;
    }
}
